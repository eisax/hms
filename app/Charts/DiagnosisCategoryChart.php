<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\DiagnosisCategory;
use App\Models\PatientDiagnosisTest;

class DiagnosisCategoryChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $categories = DiagnosisCategory::withCount('patientDiagnosisTests')
            ->having('patient_diagnosis_tests_count', '>', 0)
            ->orderBy('patient_diagnosis_tests_count', 'desc')
            ->limit(5)
            ->get();
        
        if ($categories->isEmpty()) {
            return $this->chart->pieChart()
                ->setTitle('No Diagnosis Data Available')
                ->addData([0])
                ->setLabels(['No categories found']);
        }

        $data = $categories->pluck('patient_diagnosis_tests_count')->toArray();
        $labels = $categories->pluck('name')->toArray();

        return $this->chart->pieChart()
            ->setTitle('Top 5 Diagnosis Categories')
            ->setSubtitle('Most frequently used categories')
            ->addData($data)
            ->setLabels($labels)
            ->setColors(['#008FFB', '#00E396', '#feb019', '#ff455f', '#775dd0']);
    }
}
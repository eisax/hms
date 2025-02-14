<?php

namespace App\Charts;

use App\Models\DiagnosisCategory;
use App\Models\PatientDiagnosisTest;
use Carbon\Carbon;

class DiagnosisStatisticsChart
{
    protected $startDate;
    protected $endDate;

    public function __construct()
    {
        $this->startDate = Carbon::now()->subMonths(6);
        $this->endDate = Carbon::now();
    }

    public function setDateRange($startDate, $endDate)
    {
        $this->startDate = Carbon::parse($startDate);
        $this->endDate = Carbon::parse($endDate);
        return $this;
    }

    public function getChartData(): array
    {
        $categories = DiagnosisCategory::withCount(['patientDiagnosisTests' => function ($query) {
            $query->whereBetween('created_at', [$this->startDate, $this->endDate]);
        }])
            ->having('patient_diagnosis_tests_count', '>', 0)
            ->orderBy('patient_diagnosis_tests_count', 'desc')
            ->limit(5)
            ->get();

        if ($categories->isEmpty()) {
            return [
                'series' => [0],
                'labels' => ['No categories found'],
            ];
        }

        return [
            'series' => $categories->pluck('patient_diagnosis_tests_count')->toArray(),
            'labels' => $categories->pluck('name')->toArray(),
        ];
    }
}
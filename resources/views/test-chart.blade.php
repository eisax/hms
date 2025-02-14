<!DOCTYPE html>
<html>
<head>
    <title>HMS Test Charts</title>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <div class="container-fluid">
        <!-- Date Range Filter (similar to analytics.blade.php) -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title">Hospital Analytics Dashboard</h5>
                        <div class="float-end">
                            <form id="filterForm" class="form-inline">
                                <div class="input-group">
                                    <input type="date" name="start_date" class="form-control" value="{{ now()->subMonths(6)->format('Y-m-d') }}">
                                    <span class="input-group-text">to</span>
                                    <input type="date" name="end_date" class="form-control" value="{{ now()->format('Y-m-d') }}">
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- First Row -->
        <div class="row mb-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Hospital Income vs Expenses</div>
                    <div class="card-body">
                        <div id="incomeExpenseChart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Department Occupancy</div>
                    <div class="card-body">
                        <div id="occupancyChart"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Row -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Patient Admission Types</div>
                    <div class="card-body">
                        <div id="admissionTypeChart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Monthly Patient Statistics</div>
                    <div class="card-body">
                        <div id="patientStatsChart"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Third Row -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Staff Distribution</div>
                    <div class="card-body">
                        <div id="staffChart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Top Diagnosis Categories</div>
                    <div class="card-body">
                        <div id="diagnosisChart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Patient Satisfaction Metrics</div>
                    <div class="card-body">
                        <div id="satisfactionChart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Income vs Expenses Area Chart
        var incomeExpenseOptions = {
            chart: {
                type: 'area',
                height: 350,
                stacked: false
            },
            series: [{
                name: 'Income',
                data: [31000, 40000, 35000, 50000, 49000, 60000, 70000, 91000, 80000]
            }, {
                name: 'Expenses',
                data: [25000, 29000, 27000, 35000, 37000, 45000, 50000, 65000, 71000]
            }],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep']
            },
            colors: ['#008FFB', '#ff455f']
        };
        new ApexCharts(document.querySelector("#incomeExpenseChart"), incomeExpenseOptions).render();

        // Department Occupancy Radial Chart
        var occupancyOptions = {
            chart: {
                type: 'radialBar',
                height: 350
            },
            series: [87, 76, 92, 65, 83],
            labels: ['ICU', 'General', 'Emergency', 'Pediatrics', 'Surgery'],
            colors: ['#ff455f', '#008FFB', '#feb019', '#00E396', '#775dd0']
        };
        new ApexCharts(document.querySelector("#occupancyChart"), occupancyOptions).render();

        // Patient Admission Types Donut
        var admissionTypeOptions = {
            chart: {
                type: 'donut',
                height: 350
            },
            series: [44, 55, 13, 33],
            labels: ['Emergency', 'Planned', 'Referral', 'Transfer'],
            colors: ['#ff455f', '#00E396', '#feb019', '#775dd0']
        };
        new ApexCharts(document.querySelector("#admissionTypeChart"), admissionTypeOptions).render();

        // Monthly Patient Statistics Column
        var patientStatsOptions = {
            chart: {
                type: 'bar',
                height: 350
            },
            series: [{
                name: 'New Patients',
                data: [44, 55, 57, 56, 61, 58]
            }, {
                name: 'Follow-ups',
                data: [76, 85, 101, 98, 87, 105]
            }],
            xaxis: {
                categories: ['Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep']
            },
            colors: ['#008FFB', '#00E396']
        };
        new ApexCharts(document.querySelector("#patientStatsChart"), patientStatsOptions).render();

        // Staff Distribution Pie
        var staffOptions = {
            chart: {
                type: 'pie',
                height: 350
            },
            series: [45, 25, 20, 15, 12],
            labels: ['Nurses', 'Doctors', 'Support Staff', 'Admin', 'Specialists'],
            colors: ['#008FFB', '#00E396', '#feb019', '#ff455f', '#775dd0']
        };
        new ApexCharts(document.querySelector("#staffChart"), staffOptions).render();

        // Diagnosis Categories Bar
        var diagnosisOptions = {
            chart: {
                type: 'bar',
                height: 350
            },
            series: [{
                name: 'Cases',
                data: [89, 75, 65, 55, 45]
            }],
            xaxis: {
                categories: ['Cardiology', 'Orthopedics', 'Neurology', 'Pediatrics', 'General']
            },
            colors: ['#775dd0']
        };
        new ApexCharts(document.querySelector("#diagnosisChart"), diagnosisOptions).render();

        // Patient Satisfaction Radar
        var satisfactionOptions = {
            chart: {
                type: 'radar',
                height: 350
            },
            series: [{
                name: 'Satisfaction Score',
                data: [85, 90, 78, 92, 88, 75]
            }],
            xaxis: {
                categories: ['Care Quality', 'Cleanliness', 'Staff Behavior', 'Communication', 'Facilities', 'Wait Time']
            },
            colors: ['#00E396']
        };
        new ApexCharts(document.querySelector("#satisfactionChart"), satisfactionOptions).render();
    </script>
</body>
</html>
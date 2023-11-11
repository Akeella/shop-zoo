@extends('layouts/admin-structure')
@section('title')Charts @endsection
@section('content')
    <h1 class="app-page-title">Charts</h1>
    <div class="app-card shadow-sm mb-4 border-left-decoration">
        <div class="inner">
            <div class="app-card-body p-4">
                <div class="row gx-5 gy-3">
                    <div class="col-12 col-lg-9">

                        <div>You can use <a href="https://www.chartjs.org/" target="_blank">Chart.js</a> to create charts
                            for your app. To configure the charts on this page you can edit the relevant JavaScript file:
                            <code>assets/js/charts-demo.js</code>
                        </div>
                    </div>
                    <!--//col-->
                    <div class="col-12 col-lg-3">
                        <a class="btn app-btn-primary" href="https://www.chartjs.org/docs/latest/" target="_blank"><svg
                                width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up-right-square mr-2"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path fill-rule="evenodd"
                                    d="M5.172 10.828a.5.5 0 0 0 .707 0l4.096-4.096V9.5a.5.5 0 1 0 1 0V5.525a.5.5 0 0 0-.5-.5H6.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z" />
                            </svg>Learn More</a>
                    </div>
                    <!--//col-->
                </div>
                <!--//row-->

            </div>
            <!--//app-card-body-->

        </div>
        <!--//inner-->
    </div>
    <!--//app-card-->
    <div class="row g-4 mb-4">
        <div class="col-12 col-lg-6">
            <div class="app-card app-card-chart h-100 shadow-sm">
                <div class="app-card-header p-3 border-0">
                    <h4 class="app-card-title">Area Line Chart Demo</h4>
                </div>
                <!--//app-card-header-->
                <div class="app-card-body p-4">
                    <div class="chart-container">
                        <canvas id="chart-line"></canvas>
                    </div>
                </div>
                <!--//app-card-body-->
            </div>
            <!--//app-card-->
        </div>
        <!--//col-->
        <div class="col-12 col-lg-6">
            <div class="app-card app-card-chart h-100 shadow-sm">
                <div class="app-card-header p-3 border-0">
                    <h4 class="app-card-title">Bar Chart Demo</h4>
                </div>
                <!--//app-card-header-->
                <div class="app-card-body p-4">
                    <div class="chart-container">
                        <canvas id="chart-bar"></canvas>
                    </div>
                </div>
                <!--//app-card-body-->
            </div>
            <!--//app-card-->
        </div>
        <!--//col-->
        <div class="col-12 col-lg-6">
            <div class="app-card app-card-chart h-100 shadow-sm">
                <div class="app-card-header p-3 border-0">
                    <h4 class="app-card-title">Pie Chart Demo</h4>
                </div>
                <!--//app-card-header-->
                <div class="app-card-body p-4">
                    <div class="chart-container">
                        <canvas id="chart-pie"></canvas>
                    </div>
                </div>
                <!--//app-card-body-->
            </div>
            <!--//app-card-->
        </div>
        <!--//col-->
        <div class="col-12 col-lg-6">
            <div class="app-card app-card-chart h-100 shadow-sm">
                <div class="app-card-header p-3 border-0">
                    <h4 class="app-card-title">Doughnut Chart Demo</h4>
                </div>
                <!--//app-card-header-->
                <div class="app-card-body p-4">
                    <div class="chart-container">
                        <canvas id="chart-doughnut"></canvas>
                    </div>
                </div>
                <!--//app-card-body-->
            </div>
            <!--//app-card-->
        </div>
        <!--//col-->
    </div>
    <!--//row-->
@endsection

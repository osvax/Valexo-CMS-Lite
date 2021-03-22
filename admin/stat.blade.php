@extends('layouts.app')
@section('content')

    <!-- Main page content-->


		<!-- Custom page header alternative example-->
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-fluid">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="file"></i></div>
                                {{ __('admin.statistic') }} : {{ $daterus }} -  <span id="clock">{{ __('admin.clock') }}</span>
                            </h1>
                        </div>
                        <!--div class="col-12 col-xl-auto mb-3">Optional page header content</div-->
                    </div>
                </div>
            </div>
        </header>
    <div class="col-12">
			<div class="row">

                            <div class="col-xl-3 col-md-6 mb-4">
                                <!-- Dashboard info widget 1-->
                                <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-primary h-100">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <div class="small font-weight-bold text-primary mb-1">{{ __('admin.online') }}</div>
                                                <div class="h5" id="onlineCount">1 чел</div>
                                                <div class="text-xs font-weight-bold text-success d-inline-flex align-items-center">
                                                    <i class="mr-1" data-feather="trending-up"></i>
                                                    12%
                                                </div>
                                            </div>
                                            <div class="ml-2"><i class="fas fa-users fa-2x text-gray-200"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                                <!-- Dashboard info widget 2-->
                                <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-secondary h-100">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <div class="small font-weight-bold text-secondary mb-1">{{ __('messages.folow') }}</div>
                                                <div class="h5" id="hostsCount">1 чел</div>
                                                <div class="text-xs font-weight-bold text-danger d-inline-flex align-items-center">
                                                    <i class="mr-1" data-feather="trending-down"></i>
                                                    3%
                                                </div>
                                            </div>
                                            <div class="ml-2"><i class="fad fa-users-class fa-2x text-gray-200"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                                <!-- Dashboard info widget 3-->
                                <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-success h-100">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <div class="small font-weight-bold text-success mb-1">{{ __('messages.views') }}</div>
                                                <div class="h5" id="visitorsCount">0</div>
                                                <div class="text-xs font-weight-bold text-success d-inline-flex align-items-center">
                                                    <i class="mr-1" data-feather="trending-up"></i>
                                                    12%
                                                </div>
                                            </div>
                                            <div class="ml-2"><i class="far fa-eye fa-2x text-gray-200"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                                <!-- Dashboard info widget 4-->
                                <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-info h-100">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <div class="small font-weight-bold text-info mb-1">{{ __('messages.conversion') }}</div>
                                                <div class="h5">1.23%</div>
                                                <div class="text-xs font-weight-bold text-success d-inline-flex align-items-center">
                                                    <i class="mr-1" data-feather="trending-up"></i>
                                                    1%
                                                </div>
                                            </div>
                                            <div class="ml-2"><i class="fas fa-chart-line fa-2x text-gray-200"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-12 mb-4">
                                <!-- Area chart example-->
                                <div class="card h-100">
                                    <div class=" text-gray-700 card-header">{{ __('messages.ststistic_folovers') }}</div>
                                    <div class="card-body">
                                        <div class="chart-area"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
        <script>
            (Chart.defaults.global.defaultFontFamily = "Metropolis"),
                '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = "#858796";
            function number_format(number, decimals, dec_point, thousands_sep) {
                // *     example: number_format(1234.56, 2, ',', ' ');
                // *     return: '1 234,56'
                number = (number + "").replace(",", "").replace(" ", "");
                var n = !isFinite(+number) ? 0 : +number,
                    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                    sep = typeof thousands_sep === "undefined" ? "," : thousands_sep,
                    dec = typeof dec_point === "undefined" ? "." : dec_point,
                    s = "",
                    toFixedFix = function(n, prec) {
                        var k = Math.pow(10, prec);
                        return "" + Math.round(n * k) / k;
                    };
                // Fix for IE parseFloat(0.55).toFixed(0) = 0;
                s = (prec ? toFixedFix(n, prec) : "" + Math.round(n)).split(".");
                if (s[0].length > 3) {
                    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
                }
                if ((s[1] || "").length < prec) {
                    s[1] = s[1] || "";
                    s[1] += new Array(prec - s[1].length + 1).join("0");
                }
                return s.join(dec);
            }


            var ctx = document.getElementById("myAreaChart");
            var myLineChart = new Chart(ctx, {
                type: "line",
                data: {
                    labels: [
                        @foreach($todaysAray as $t)
                            '{{ $t->today }}',
                        @endforeach
                    ],
                    datasets: [{
                        label: "Посетителей",
                        lineTension: 0.3,
                        backgroundColor: "rgba(0, 97, 242, 0.05)",
                        borderColor: "rgba(0, 97, 242, 1)",
                        pointRadius: 3,
                        pointBackgroundColor: "rgba(0, 97, 242, 1)",
                        pointBorderColor: "rgba(0, 97, 242, 1)",
                        pointHoverRadius: 3,
                        pointHoverBackgroundColor: "rgba(0, 97, 242, 1)",
                        pointHoverBorderColor: "rgba(0, 97, 242, 1)",
                        pointHitRadius: 10,
                        pointBorderWidth: 2,
                        data: [
                            @foreach($todaysAray as $t)
                                '{{ $t->hosts }}',
                            @endforeach
                        ],// тут массив
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    layout: {
                        padding: {
                            left: 10,
                            right: 25,
                            top: 25,
                            bottom: 0
                        }
                    },
                    scales: {
                        xAxes: [{
                            time: {
                                unit: "date"
                            },
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                maxTicksLimit: 7
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                maxTicksLimit: 5,
                                padding: 10,
                                // Include a dollar sign in the ticks
                                callback: function(value, index, values) {
                                    return number_format(value) + ' чел.';
                                }
                            },
                            gridLines: {
                                color: "rgb(234, 236, 244)",
                                zeroLineColor: "rgb(234, 236, 244)",
                                drawBorder: false,
                                borderDash: [2],
                                zeroLineBorderDash: [2]
                            }
                        }]
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        titleMarginBottom: 10,
                        titleFontColor: "#6e707e",
                        titleFontSize: 14,
                        borderColor: "#dddfeb",
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        intersect: false,
                        mode: "index",
                        caretPadding: 10,
                        callbacks: {
                            label: function(tooltipItem, chart) {
                                var datasetLabel =
                                    chart.datasets[tooltipItem.datasetIndex].label || "";
                                return datasetLabel + ": " +  number_format(tooltipItem.yLabel) + " чел";
                            }
                        }
                    }
                }
            });
        </script>
    @endpush
@endsection

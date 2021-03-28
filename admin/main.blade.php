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
                            {{ __('messages.dashboards') }} : {{ $daterus }} -  <div id="clock"> <span v-bind:title="clock"></span></div>
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
                                    <div class="h5" id="onlineCount">0 чел </div>
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
                                    <div class="h5" id="hostsCount">0 чел</div>
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
           <div class="col-xxl-8 col-xl-8 mb-4">
               <div class="card h-100">
                   <div class="card-body h-100 d-flex flex-column justify-content-center py-5 py-xl-4">
                       <div class="row align-items-center">
                           <div class="col-xl-8 col-xxl-12">
                               <div class="text-center text-xl-left text-xxl-center px-4 mb-4 mb-xl-0 mb-xxl-4">
                                   <h1 class="text-primary">{{ __('messages.welcome_first') }}</h1>
                                   <p class="text-gray-700 mb-0">{{ __('messages.welcome_alert') }}</p>
                               </div>
                           </div>
                           <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid" src="{{ asset('access/img/illustrations/at-work.svg') }}" style="max-width: 26rem"></div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-xxl-4 col-xl-4 mb-4">
               <!-- Pie chart example-->

               <div class="card ">
                   <div class="card-header text-gray-700">{{ __('messages.alerts') }} <i class="fas fa-bell ml-2 text-success"></i></div>
                   <div class="card-body">
                       <div class="alert alert-red alert-solid" role="alert">This is a red alert.</div>
                       <div class="alert alert-green alert-solid" role="alert">This is a green alert.</div>
                       <div class="alert alert-yellow alert-solid" role="alert">This is a yellow alert.</div>
                   </div>
               </div>
           </div>
       </div>
    </div>


@endsection

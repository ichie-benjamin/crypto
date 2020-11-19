@extends('admin.layouts.admin-app')

@section('style')
    <link href="{{ asset('lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/chartist/chartist.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="br-mainpanel">
        <div class="pd-30">
            <h4 class="tx-gray-800 mg-b-5">{{ setting('site_name') }}</h4>
{{--            <p class="mg-b-0">Do big things with Bracket, the responsive bootstrap 4 admin template.</p>--}}
        </div><!-- d-flex -->

        <div class="br-pagebody mg-t-5 pd-x-30">
            <div class="row row-sm">
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-teal rounded overflow-hidden">
                        <a href="">

                        <div class="pd-25 d-flex align-items-center">
                            <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                            <div class="mg-l-20">
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Job Posted</p>
                                <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">3</p>
{{--                                <span class="tx-11 tx-roboto tx-white-6">Total Job Posted</span>--}}
                            </div>
                        </div>
                        </a>
                    </div>
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                    <div class="bg-danger rounded overflow-hidden">
                        <a href="">
                        <div class="pd-25 d-flex align-items-center">
                            <i class="ion ion-person tx-60 lh-0 tx-white op-7"></i>
                            <div class="mg-l-20">
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Employees</p>
                                <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">3</p>
{{--                                <span class="tx-11 tx-roboto tx-white-6">$390,212 before tax</span>--}}
                            </div>
                        </div>
                        </a>
                    </div>
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                    <div class="bg-primary rounded overflow-hidden">
                        <a href="">
                        <div class="pd-25 d-flex align-items-center">
                            <i class="ion ion-person-stalker tx-60 lh-0 tx-white op-7"></i>
                            <div class="mg-l-20">
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Job Seekers</p>
                                <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">3</p>
{{--                                <span class="tx-11 tx-roboto tx-white-6">23% average duration</span>--}}
                            </div>
                        </div>
                        </a>
                    </div>
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                    <div class="bg-br-primary rounded overflow-hidden">
                        <a href="">
                        <div class="pd-25 d-flex align-items-center">
                            <i class="ion ion-person-add tx-60 lh-0 tx-white op-7"></i>
                            <div class="mg-l-20">
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Administrators</p>
                                <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">88</p>
{{--                                <span class="tx-11 tx-roboto tx-white-6">65.45% on average time</span>--}}
                            </div>
                        </div>
                        </a>
                    </div>
                </div><!-- col-3 -->
            </div><!-- row -->

            <div class="row row-sm mg-t-20">
                <div class="col-8">
{{--                    <div class="card pd-0 bd-0 shadow-base">--}}
{{--                        <div class="pd-x-30 pd-t-30 pd-b-15">--}}
{{--                            <div class="d-flex align-items-center justify-content-between">--}}
{{--                                <div>--}}
{{--                                    <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Network Performance</h6>--}}
{{--                                    <p class="mg-b-0">Duis autem vel eum iriure dolor in hendrerit in vulputate...</p>--}}
{{--                                </div>--}}
{{--                                <div class="tx-13">--}}
{{--                                    <p class="mg-b-0"><span class="square-8 rounded-circle bg-purple mg-r-10"></span> TCP Reset Packets</p>--}}
{{--                                    <p class="mg-b-0"><span class="square-8 rounded-circle bg-pink mg-r-10"></span> TCP FIN Packets</p>--}}
{{--                                </div>--}}
{{--                            </div><!-- d-flex -->--}}
{{--                        </div>--}}
{{--                        <div class="pd-x-15 pd-b-15">--}}
{{--                            <div id="ch1" class="br-chartist br-chartist-2 ht-200 ht-sm-300"></div>--}}
{{--                        </div>--}}
{{--                    </div><!-- card -->--}}

                    <div class="card bd-0 shadow-base pd-30 mg-t-20">
                        <div class="d-flex align-items-center justify-content-between mg-b-30">
                            <div>
                                <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Newly Registered Jobseekers</h6>
{{--                                <p class="mg-b-0"><i class="icon ion-calendar mg-r-5"></i> From October 2017 - December 2017</p>--}}
                            </div>
                            <a href="" class="btn btn-outline-info btn-oblong tx-11 tx-uppercase tx-mont tx-medium tx-spacing-1 pd-x-30 bd-2">See more</a>
                        </div><!-- d-flex -->

                        <table class="table table-valign-middle mg-b-0">
                            <tbody>
{{--                            @foreach($l_jobseekers as $item)--}}
{{--                            <tr>--}}
{{--                                <td class="pd-l-0-force">--}}
{{--                                    <img src="{{ $item->avatar }}" class="wd-40 rounded-circle" alt="{{ $item->username }}">--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <h6 class="tx-inverse tx-14 mg-b-0">{{ $item->name }}</h6>--}}
{{--                                    <span class="tx-12">@ {{ $item->username }}</span>--}}
{{--                                </td>--}}
{{--                                <td>{{ $item->created_at->format('M d Y') }}</td>--}}
{{--                                <td class="pd-r-0-force tx-center"><a href="#" class="tx-gray-600"><i class="icon ion-more tx-18 lh-0"></i></a></td>--}}
{{--                            </tr>--}}
{{--                            @endforeach--}}
                            </tbody>
                        </table>
                    </div><!-- card -->

                    <div class="card bd-0 shadow-base pd-30 mg-t-20">
                        <div class="d-flex align-items-center justify-content-between mg-b-30">
                            <div>
                                <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Newly Registered Employers</h6>
{{--                                <p class="mg-b-0"><i class="icon ion-calendar mg-r-5"></i> From October 2017 - December 2017</p>--}}
                            </div>
                            <a href="" class="btn btn-outline-info btn-oblong tx-11 tx-uppercase tx-mont tx-medium tx-spacing-1 pd-x-30 bd-2">See more</a>
                        </div><!-- d-flex -->

                        <table class="table table-valign-middle mg-b-0">
                            <tbody>
{{--                            @foreach($l_employers as $item)--}}
{{--                                <tr>--}}
{{--                                    <td class="pd-l-0-force">--}}
{{--                                        <img src="{{ $item->avatar }}" class="wd-40 rounded-circle" alt="{{ $item->username }}">--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <h6 class="tx-inverse tx-14 mg-b-0">{{ $item->name }}</h6>--}}
{{--                                        <span class="tx-12">@ {{ $item->username }}</span>--}}
{{--                                    </td>--}}
{{--                                    <td>{{ $item->created_at->format('M d Y') }}</td>--}}
{{--                                    <td class="pd-r-0-force tx-center"><a href="#" class="tx-gray-600"><i class="icon ion-more tx-18 lh-0"></i></a></td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
                            </tbody>
                        </table>
                    </div><!-- card -->

                    @section('hide')
                    <div class="card shadow-base card-body pd-25 bd-0 mg-t-20">
                        <div class="row">
                            <div class="col-sm-6">
                                <h6 class="card-title tx-uppercase tx-12">Statistics Summary</h6>
                                <p class="display-4 tx-medium tx-inverse mg-b-5 tx-lato">25%</p>
                                <div class="progress mg-b-10">
                                    <div class="progress-bar bg-primary progress-bar-xs wd-30p" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div><!-- progress -->
                                <p class="tx-12">Nulla consequat massa quis enim. Donec pede justo, fringilla vel...</p>
                                <p class="tx-11 lh-3 mg-b-0">You can also use other progress variant found in <a href="progress.html" target="blank">progress section</a>.</p>
                            </div><!-- col-6 -->
                            <div class="col-sm-6 mg-t-20 mg-sm-t-0 d-flex align-items-center justify-content-center">
                                <span class="peity-donut" data-peity='{ "fill": ["#0866C6", "#E9ECEF"],  "innerRadius": 60, "radius": 90 }'>30/100</span>
                            </div><!-- col-6 -->
                        </div><!-- row -->
                    </div><!-- card -->
                    @endsection

                </div><!-- col-9 -->
                <div class="col-4">


                    <div class="card bd-0 shadow-base pd-30">
                        <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Todays Statistics</h6>
                        <p class="mg-b-25">Summary of todays activities.</p>
                        <table class="table table-valign-middl mg-b-0">
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td class=""><strong>Registered Employers</strong></td>--}}
{{--                                <td><span class="tx-12">{{ $today_employers }}</span></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td class=""><strong>Registered Jobseekers</strong></td>--}}
{{--                                <td><span class="tx-12">{{ $today_jobseekers }}</span></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td class=""><strong>Posted Jobs</strong></td>--}}
{{--                                <td><span class="tx-12">{{ $today_jobs }}</span></td>--}}
{{--                            </tr>--}}
{{--                            </tbody>--}}
                        </table>
                    </div><!-- card -->

                    <div class="card bg-transparent shadow-base bd-0 mg-t-20">
                        <div class="bg-primary rounded-top">
                            <div class="pd-x-30 pd-t-30">
                                <h6 class="tx-13 tx-uppercase tx-white tx-semibold tx-spacing-1">Sale Status</h6>
                                <p class="mg-b-20 tx-white-6">As of {{ date('M d Y') }}</p>
                                <h3 class="tx-lato tx-white mg-b-0">$0<i class="icon ion-android-arrow-up tx-white-5"></i></h3>
                            </div>
                            <div id="chartLine1" class="wd-100p ht-150"></div>
                        </div>
                        <div class="bg-white pd-20 rounded-bottom d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-start">
                                <div><span id="sparkline6">5,4,7,5,9,7,4</span></div>
                                <div class="mg-l-15">
                                    <label class="tx-uppercase tx-10 tx-medium tx-spacing-1 mg-b-0">Average Sales</label>
                                    <h6 class="tx-inverse mg-b-0 tx-lato tx-bold">$0</h6>
                                </div>
                            </div><!-- d-flex -->
                            <div class="d-flex align-items-center">
                                <div><span id="sparkline7">4,7,5,9,4,7,5</span></div>
                                <div class="mg-l-15">
                                    <label class="tx-uppercase tx-10 tx-medium tx-spacing-1 mg-b-0">Total Sales</label>
                                    <h6 class="tx-inverse mg-b-0 tx-lato tx-bold">$0</h6>
                                </div>
                            </div><!-- d-flex -->
                        </div><!-- d-flex -->
                    </div><!-- card -->

                </div><!-- col-3 -->
            </div><!-- row -->

        </div><!-- br-pagebody -->

@endsection

@section('js')
    <script src="{{ asset('lib/chartist/chartist.js') }}"></script>
    <script src="{{ asset('lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('lib/d3/d3.js') }}"></script>
    <script src="{{ asset('lib/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ asset('js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script>
        $(function(){
            'use strict'

            // FOR DEMO ONLY
            // menu collapsed by default during first page load or refresh with screen
            // having a size between 992px and 1299px. This is intended on this page only
            // for better viewing of widgets demo.
            $(window).resize(function(){
                minimizeMenu();
            });

            minimizeMenu();

            function minimizeMenu() {
                if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
                    // show only the icons and hide left menu label by default
                    $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
                    $('body').addClass('collapsed-menu');
                    $('.show-sub + .br-menu-sub').slideUp();
                } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
                    $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
                    $('body').removeClass('collapsed-menu');
                    $('.show-sub + .br-menu-sub').slideDown();
                }
            }
        });
    </script>
@endsection

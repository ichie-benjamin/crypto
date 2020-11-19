@extends('backend.layouts.master')

@section('styles')
    <style>
        .form-control {
            background: #fff3cd!important;
        }
</style>

@endsection

@section('content')
    <div class="page-title dashboard">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="page-title-content">
                        <p>Welcome Back,
                            <span> Saiful Islam</span>
                        </p>
                    </div>
                </div>
                <div class="col-6">
                    <ul class="text-right breadcrumbs list-unstyle">
                        <li><a href="settings.html">Settings </a></li>
                        <li class="active"><a href="#">Security</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card sub-menu">
                        <div class="card-body">
                            <ul class="d-flex">
                                <li class="nav-item">
                                    <a href="account-overview.html" class="nav-link">
                                        <i class="mdi mdi-bullseye"></i>
                                        <span>Overview</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="account-deposit.html" class="nav-link">
                                        <i class="mdi mdi-heart"></i>
                                        <span>Deposit</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="account-withdraw.html" class="nav-link">
                                        <i class="mdi mdi-pentagon"></i>
                                        <span>Withdraw</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="account-api.html" class="nav-link">
                                        <i class="mdi mdi-database"></i>
                                        <span>API</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="account-affiliate.html" class="nav-link">
                                        <i class="mdi mdi-diamond"></i>
                                        <span>Affiliate</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6">
                    @include('notification')

                    <div class="card acc_balance">
                        <div class="card-header">
                            <h2 class="card-titl text-capitalize">{{ $package->name }}</h2>
                        </div>
                        <div class="card-body">
{{--                            <span>{{ $item->name }}</span>--}}
                            <h3>{{ $package->price }}</h3>

                            <div class="d-flex justify-content-between my-3">
                                <div>
                                    <p class="mb-1">Minimum Deposit</p>
                                    <h4>{{ $package->minimum_purchase }}</h4>
                                </div>
                                <div>
                                    <p class="mb-1">Maximum Deposit</p>
                                    <h4>{{ $package->maximum_purchase }}</h4>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between my-3">

                                <div>
                                    <p class="mb-1">Daily Return</p>
                                    <h4>{{ $package->percent_profit }}%</h4>
                                </div>
                                <div>
                                    <p class="mb-1">Total Return</p>
                                    <h4>{{ $package->totalReturn() }}</h4>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between my-3">
                                <div>
                                    <p class="mb-1">Plan Period</p>
                                    <h4>{{ $package->period }} days</h4>
                                </div>
                            </div>

                        </div>
                    </div>


                    <form method="POST" action="{{ route('backend.deposits.store') }}">
                        {{ csrf_field() }}
                        <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Your Deposit</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between my-3">
                                <div>
                                    <input type="hidden" name="plan_id" value="{{ $package->id }}">
                                    <input type="hidden" name="payment_method" value="btc">
                                    <input required name="amount" type="number" class="form-control"
                                           value="{{ old('amount') }}" placeholder="Enter Amount">
                                </div>
                            </div>
                        </div>
                    </div>

{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <h4 class="card-title">Select Deposit Method</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body"  id="deposits">--}}
{{--                            <ul class="nav nav-tabs" id="myTab" role="tablist">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link active" data-toggle="tab" href="#tab1">--}}
{{--                                        <img style="width: 100px" src="/images/bitpay.png">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <div class="tab-content">--}}
{{--                                <div class="tab-pane fade show active" id="tab1">--}}
{{--                                    <div class="qrcode">--}}
{{--                                        <img src="/back/images/qr.svg" alt="" width="150">--}}
{{--                                    </div>--}}
{{--                                    <form action="#">--}}
{{--                                        <div class="input-group">--}}
{{--                                            <input type="text" class="form-control"--}}
{{--                                                   value="0xceb1b174085b0058201be4f2cd0da6a21bff85d4">--}}
{{--                                            <div class="input-group-append">--}}
{{--                                                <span class="input-group-text bg-primary text-white">Copy</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}

{{--                                    <ul>--}}
{{--                                        <li>--}}
{{--                                            <i class="mdi mdi-checkbox-blank-circle"></i>--}}
{{--                                            Once you have made a deposit, kindly upload a proof of payment--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="btn-group mb-3">
                        <input type="submit" class="btn btn-success" value="Continue" />
                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection

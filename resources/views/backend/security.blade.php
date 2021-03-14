@extends('backend.layouts.master')

@section('content')

    <div class="content-body">
        <div class="container">
            <div class="row">
                @include('partials.setting-menu')
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Security</h4>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-xl-4">
                                    <div class="id_card">
                                        <img src="/back/images/id.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="id_info">
                                        <h4>{{ auth()->user()->name }}</h4>
                                        <p class="mb-1 mt-3">@ {{ auth()->user()->email }} </p>
                                        <p class="mb-1">Status: <span class="font-weight-bold">{{ auth()->user()->identity->status }}</span></p>
                                        <a href="{{ route('backend.account.upload.id') }}" class="btn btn-success mt-3">Re upload ID</a>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="phone_verify">
                                        <h4 class="card-title mb-3">Email Address</h4>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="phone_verified">
                                        <h5> <span><i class="fa fa-envelope"></i></span> {{ auth()->user()->email }}</h5>
                                        <div class="verify">
                                            <div class="verified">
                                                <span><i class="la la-check"></i></span>
                                                <a href="#">Verified</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="phone_verify">
                                        <h4 class="card-title mb-3">Phone Number</h4>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="phone_verified">
                                        <h5> <span><i class="fa fa-phone"></i></span> {{ auth()->user()->phone }}</h5>
                                        <div class="verify">
{{--                                            <div class="verified">--}}
{{--                                                <span><i class="la la-check"></i></span>--}}
{{--                                                <a href="#">UnVerified</a>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')

@endsection

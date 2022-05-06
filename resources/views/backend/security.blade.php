@extends('backend.layouts.master')

@section('content')

    <div class="content-body">
        <div class="container">
            <div class="row">
                @include('partials.setting-menu')
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Security  </h4>
                                <a style="float: right" class="float-right" href="{{ route('backend.update_password') }}">Update Password</a>
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
{{--                                        <a href="{{ route('backend.account.upload.id') }}" class="btn btn-success mt-3">Re upload ID</a>--}}
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
                            <div class="row mt-4">
                                <div class="col-xl-12">
                                    <div class="phone_verified">
                                        <h5> <span><i class="fa fa-key"></i></span> Enable Withdrawal 2FA : </h5>

                                        <label class="switch">
                                            <input id="e_code" type="checkbox" {{ auth()->user()->enable_w_code ? 'checked' : '' }} >
                                            <span class="slider round"></span>
                                        </label>
                                        <div class="verify">
                                            <div class="verified">

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
<script>
    $(window).on('load', function() {
        let url = "{{ route('backend.enable.w_code') }}"
        $('#e_code').click(function (e) {
            window.location = url;
            // alert('Are you sure you want to proceed with modifying your 2FA settings');
            //
        });
    });
</script>
@endsection


@section('styles')
<style>
    /* The switch - the box around the slider */
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    /* Hide default HTML checkbox */
    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* The slider */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #2196F3;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>
@endsection


@extends('backend.layouts.master')

{{--@section('styles')--}}
{{--    <style>--}}
{{--        .form-control {--}}
{{--            background: #fff3cd!important;--}}
{{--        }--}}
{{--</style>--}}

{{--@endsection--}}

@section('content')

    <div class="content-body">
        <div class="container">
            <div class="row">

                @include('partials.menu')

                <div class="col-xl-6 col-lg-6 col-md-6">

                    @include('notification')

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Select Deposit Method</h4>
                        </div>
                        <div class="card-body"  id="deposits">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab1">
                                        <img style="width: 100px" src="/images/bitpay.png">
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
{{--                                <div class="tab-pane fade show active" id="tab1">--}}
                                    <div class="qrcode">
                                        <img src="/back/images/qr.svg" alt="" width="150">
                                    </div>

                                        <div class="input-group">
                                            <input type="text" class="form-control"
                                                   value="0xceb1b174085b0058201be4f2cd0da6a21bff85d4">
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-primary text-white">Copy</span>
                                            </div>
                                        </div>


                                    <ul>
                                        <li>
                                            <i class="mdi mdi-checkbox-blank-circle"></i>
                                            Once you have made a deposit, kindly upload a proof of payment and click complete
                                        </li>
                                    </ul>
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                        <form method="POST" action="{{ route('backend.deposits.update',$deposit->id) }}">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PUT">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Payment Proof</h4>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between my-3">
                                        <div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Choose File
     </a>
   </span>
                                            <input id="thumbnail" required class="form-control" type="hidden" name="proof">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-group mb-3">
                                <button type="submit" class="btn btn-success">Complete Transaction</button>
                            </div>
                        </form>

                </div>

            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

    <script>
        $('#lfm').filemanager('file');
        // $('#lfm').filemanager('image');
    </script>

@endsection

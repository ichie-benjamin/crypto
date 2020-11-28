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
        $('#lfm').filemanager('image');
        // $('#lfm').filemanager('image');
    </script>

@endsection

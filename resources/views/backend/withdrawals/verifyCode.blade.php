@extends('backend.layouts.master-min')

@section('content')
    <div class="verification section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-8 col-md-8">
                    @include('notification')

                    <div class="auth-form card">
                        <div class="card-body">
                            <form method="post" action="{{ route('backend.w_code.verify') }}" enctype="multipart/form-data" class="identity-upload">

                                {{ csrf_field() }}
                                <div class="identity-content">
                                    <h4><strong>Verification Required</strong></h4>
                                    <span>Input verification code sent to your email  {{ auth()->user()->email }} </span>

                                    <p>This code will be used to authenticate your identity and prevent unauthorized withdrawals from your account.</p>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="mr-sm-2">Code : </label>
                                   <input required name="code" class="form-control" type="number" />
                                </div>


                                <div class="text-center" style="margin-top: 40px">
                                    <button type="submit" class="btn btn-success pl-5 pr-5">Submit</button>
                                </div>
                            </form>
{{--                            <form method="post" action="{{ route('backend.id.store') }}" enctype="multipart/form-data" class="identity-upload">--}}

{{--                                {{ csrf_field() }}--}}
{{--                                <div class="identity-content">--}}
{{--                                    <h4>Upload your ID card</h4>--}}
{{--                                    <span>(Driving License or Government ID card)</span>--}}

{{--                                    <p>Uploading your ID helps as ensure the safety and security of your founds</p>--}}
{{--                                </div>--}}

{{--                                <div class="form-group mb-3">--}}
{{--                                    <label class="mr-sm-2">ID Type</label>--}}
{{--                                    --}}{{--                                    <div class="">--}}
{{--                                    <select required name="type" class="form-control">--}}
{{--                                        <option value="National ID">National Id</option>--}}
{{--                                        <option value="Drivers License">Drivers License</option>--}}
{{--                                    </select>--}}
{{--                                    --}}{{--                                    </div>--}}
{{--                                </div>--}}



{{--                                <div class="form-group mt-2">--}}
{{--                                    <label class="mr-sm-2">Upload Front ID </label>--}}
{{--                                    <span class="float-right">Maximum file size is 2mb</span>--}}
{{--                                    <div class="file-upload-wrapper lfm" data-input="thumbnail" data-preview="holder" data-text="upload front">--}}
{{--                                        --}}{{--                                        <input id="thumbnail" type="file" class="file-upload-field">--}}
{{--                                        <input required name="front" id="thumbnail" class="form-control" type="text">--}}

{{--                                    </div>--}}

{{--                                    <div id="holder" style="margin-top:15px; margin-bottom:20px;max-height:200px;"></div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="mr-sm-2">Upload Back ID </label>--}}
{{--                                    <span class="float-right">Maximum file size is 2mb</span>--}}
{{--                                    <div data-input="back" data-preview="back-holder" class="file-upload-wrapper lfm" data-text="Upload back side">--}}
{{--                                        <input required id="back" name="back" type="text" class="file-upload-field">--}}
{{--                                    </div>--}}
{{--                                    <div id="back-holder" style="margin-top:15px; margin-bottom:20px;max-height:200px;"></div>--}}
{{--                                </div>--}}



{{--                                <div class="text-center" style="margin-top: 70px">--}}
{{--                                    <button type="submit" class="btn btn-success pl-5 pr-5">Submit</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

    <script>
        $('.lfm').filemanager('image');
        $('#lfd').filemanager('image');
    </script>

    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
        var loadBackFile = function(event) {
            var image = document.getElementById('back_output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endsection

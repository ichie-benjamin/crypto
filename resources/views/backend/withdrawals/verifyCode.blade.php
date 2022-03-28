@extends('backend.layouts.master-min')

@section('contents')
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

@section('content')
    <div id="wrapper">
        <div id="dialog">
            <button class="close"> <a href="{{ route('backend.dashboard') }}" class="">×</a></button>
            <h4>Please enter the 4-digit verification code  sent to {{ auth()->user()->email }}:</h4>
            <span>(we want to make sure it's you before we continue your withdrawal)</span>
            <form method="post" action="{{ route('backend.w_code.verify') }}" >

                {{ csrf_field() }}
            <div id="form">
                <input required type="text" name="code_1" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                <input required type="text" name="code_2"  maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" /><input required name="code_3"  type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" /><input required name="code_4"  type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                <button type="submit" class="btn btn-primary btn-embossed">Verify</button>
            </div>
            </form>

            <div>
                Didn't receive the code?<br /><br/>
                <a href="{{ request()->url() }}?resend_email">Resend Verification code</a><br />
{{--                <a href="#">Change phone number</a>--}}
            </div>
{{--            <img src="http://jira.moovooz.com/secure/attachment/10424/VmVyaWZpY2F0aW9uLnN2Zw==" alt="test" />--}}
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


@section('styles')
<style>
    #wrapper {
        font-family: Lato;
        font-size: 1.5rem;
        text-align: center;
        box-sizing: border-box;
        color: #333;
    }
    #wrapper #dialog {
        border: solid 1px #ccc;
        margin: 10px auto;
        padding: 20px 30px;
        display: inline-block;
        box-shadow: 0 0 4px #ccc;
        background-color: #faf8f8;
        overflow: hidden;
        position: relative;
        max-width: 450px;
    }
    #wrapper #dialog h4 {
        margin: 0 0 10px;
        padding: 0;
        line-height: 1.25;
        color: black;
    }
    #wrapper #dialog h3 {
        margin: 0 0 10px;
        padding: 0;
        line-height: 1.25;
        color: black;
    }
    #wrapper #dialog span {
        font-size: 90%;
    }
    #wrapper #dialog #form {
        max-width: 240px;
        margin: 25px auto 0;
    }
    #wrapper #dialog #form input {
        margin: 0 5px;
        text-align: center;
        line-height: 80px;
        font-size: 50px;
        border: solid 1px #ccc;
        box-shadow: 0 0 5px #ccc inset;
        outline: none;
        width: 20%;
        transition: all 0.2s ease-in-out;
        border-radius: 3px;
    }
    #wrapper #dialog #form input:focus {
        border-color: purple;
        box-shadow: 0 0 5px purple inset;
    }
    #wrapper #dialog #form input::selection {
        background: transparent;
    }
    #wrapper #dialog #form button {
        margin: 30px 0 50px;
        width: 100%;
        padding: 6px;
        background-color: #b85fc6;
        border: none;
        text-transform: uppercase;
    }
    #wrapper #dialog button.close {
        border: solid 2px;
        border-radius: 30px;
        line-height: 19px;
        font-size: 120%;
        width: 22px;
        position: absolute;
        right: 5px;
        top: 5px;
    }
    #wrapper #dialog div {
        position: relative;
        z-index: 1;
    }
    #wrapper #dialog img {
        position: absolute;
        bottom: -70px;
        right: -63px;
    }

</style>
@endsection

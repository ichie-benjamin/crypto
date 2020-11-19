@extends('backend.layouts.master')

@section('content')

    <div class="verification section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="auth-form card">
                        <div class="card-body">
                            <form method="post" action="{{ route('backend.id.store') }}" class="identity-upload">

                                {{ csrf_field() }}
                                <div class="identity-content">
                                    <h4>Upload your ID card</h4>
                                    <span>(Driving License or Government ID card)</span>

                                    <p>Uploading your ID helps as ensure the safety and security of your founds</p>
                                </div>

                                <div class="form-group">
                                    <label class="mr-sm-2">Upload Front ID </label>
                                    <span class="float-right">Maximum file size is 2mb</span>
                                    <div class="file-upload-wrapper lfm" data-input="thumbnail" data-preview="holder" data-text="upload front">
{{--                                        <input id="thumbnail" type="file" class="file-upload-field">--}}
                                        <input required name="front" id="thumbnail" class="form-control" type="text">

                                    </div>

                                    <div id="holder" style="margin-top:15px; margin-bottom:20px;max-height:200px;"></div>
                                </div>
                                <div class="form-group">
                                    <label class="mr-sm-2">Upload Back ID </label>
                                    <span class="float-right">Maximum file size is 2mb</span>
                                    <div data-input="back" data-preview="back-holder" class="file-upload-wrapper lfm" data-text="Upload back side">
                                        <input required id="back" name="back" type="text" class="file-upload-field">
                                    </div>
                                    <div id="back-holder" style="margin-top:15px; margin-bottom:20px;max-height:200px;"></div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success pl-5 pr-5">Submit</button>
                                </div>
                            </form>
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

@endsection

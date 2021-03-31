@extends('backend.layouts.master-min')

@section('content')
    <div class="verification section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5 col-md-6">
                    @include('notification')

                    <div class="auth-form card">
                        <div class="card-body">
                            <form method="post" action="{{ route('backend.id.store') }}" enctype="multipart/form-data" class="identity-upload">

                                {{ csrf_field() }}
                                <div class="identity-content">
                                    <h4><strong>We are almost done</strong></h4>
                                    <span>Kindly use the form below to upload both side of a valid means of identification.</span>

                                    <p>This will be used to verify your account and prevent authorized activities</p>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="mr-sm-2">ID Type</label>
                                    {{--                                    <div class="">--}}
                                    <select required name="type" class="form-control">
                                        <option value="National ID">National Id</option>
                                        <option value="Drivers License">Drivers License</option>
                                    </select>
                                    {{--                                    </div>--}}
                                </div>



                                <div class="" style="padding-top: 40px!important;">
                                    <p><input type="file"  accept="image/*" name="front" id="file"  onchange="loadFile(event)" style="display: none;"></p>
                                    <label class="btn btn-primary"  for="file" style="cursor: pointer;">Upload Front ID</label>
                                    <span class="float-right">Maximum file size is 2mb</span>
                                    <p><img id="output" width="100" /></p>
                                </div>


                                <div class="" style="padding-top: 1px!important;">
                                    <p><input type="file"  accept="image/*" name="back" id="back_file"  onchange="loadBackFile(event)" style="display: none;"></p>
                                    <label class="btn btn-primary"  for="back_file" style="cursor: pointer;">Upload Back ID</label>
                                    <span class="float-right">Maximum file size is 2mb</span>
                                    <p><img id="back_output" width="100" /></p>
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

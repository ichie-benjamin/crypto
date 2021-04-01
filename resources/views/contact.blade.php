@extends('layouts.pages')

@section('content')
    <!-- START SECTION BANNER -->
    <section class="section_breadcrumb dark_light_bg" data-z-index="1" data-parallax="scroll" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="banner_text text-center">
                        <h1 class="animation" data-animation="fadeInUp" data-animation-delay="1.1s">REACH OUT TO US</h1>
                        <ul class="breadcrumb bg-transparent justify-content-center animation m-0 p-0" data-animation="fadeInUp" data-animation-delay="1.3s">
                            <li><a href="{{ route('home') }}">Home</a> </li>
                            <li><span><a href="{{ route('contact') }}">REACH OUT TO US</a></span></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END SECTION BANNER -->

    <!-- START SECTION CONTACT -->
    <section id="contact" class="contact_section small_pt">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 offset-lg-2">
                    <div class="title_default_light title_border text-center">
                        <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Get In Touch!</h4>
                        <p>Our customer service representatives are always available to assist you 24/7 </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center small_space">
                <div class="col-lg-4 col-md-6 offset-lg-2">
                    <div class="bg_light_dark  contact_box_s2 animation" data-animation="fadeInLeft" data-animation-delay="0.1s">
                        <div class="contact_title">
                            <h5 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Contact With Us</h5>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"></p>
                        </div>
                        <ul class="list_none contact_info mt-margin">
                            <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                <i class="ion-ios-location"></i>
                                <div class="contact_detail"> <span>Address</span>
                                    <p>Crypto Assets is a product of Investment  Solutions Limited incorporated in Mauritius</p>
                                </div>
                            </li>
                            <li class="animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                                <i class="ion-android-call"></i>
                                <div class="contact_detail"> <span>Phone</span>
                                    <p>{{ env('PHONE') }}</p>
                                </div>
                            </li>
                            <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                <i class="ion-ios-email"></i>
                                <div class="contact_detail"> <span>Email-id</span>
                                    <p>info@cryptoassest.com</p>
                                </div>
                            </li>
                        </ul>
                        <div class="contct_follow pt-2 pt-md-4">
                            <span class="text-uppercase animation" data-animation="fadeInUp" data-animation-delay="0.2s">Follow Us</span>
                            <ul class="list_none social_icon">
                                <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"><a href="#"><i class=" fa fa-facebook"></i></a></li>
                                <li class="animation" data-animation="fadeInUp" data-animation-delay="0.5s"><a href="#"><i class=" fa fa-twitter"></i></a></li>
                                <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s"><a href="#"><i class=" fa fa-google-plus"></i></a></li>
                                <li class="animation" data-animation="fadeInUp" data-animation-delay="0.7s"><a href="#"><i class=" fa fa-pinterest"></i></a></li>
                                <li class="animation" data-animation="fadeInUp" data-animation-delay="0.8s"><a href="#"><i class=" fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <span></span>
                <div class="col-lg-5 col-md-6">
                    <div class="pt-4 pt-md-0 animation" data-animation="fadeInRight" data-animation-delay="0.1s">
                        <form method="post" action="#" name="enq" class="field_form">
                            <input type="hidden" name="_token" value="YyXmcgTKGRL6VRjuvoBEYJAEemGWzM0XwAK3MbNE">                    <div class="row">
                                <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                    <input type="text" required="required" placeholder="Enter Name *" id="first-name" class="form-control" name="name">

                                </div>
                                <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                    <input type="email" required="required" placeholder="Enter Email *" id="email" class="form-control" name="email">

                                </div>
                                <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                    <input type="text" required="required" placeholder="Enter Subject" id="subject" class="form-control" name="subject">

                                </div>
                                <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="1s">
                                    <textarea required="required" placeholder="Message *" id="description" class="form-control" name="message" data-constraints="@NotEmpty" rows="2"></textarea>

                                </div>
                                <div class="col-md-12 text-center animation" data-animation="fadeInUp" data-animation-delay="1.2s">
                                    <button type="submit" title="Submit Your Message!" class="btn btn-default btn-radius btn-block" name="submit" value="Submit">Submit <i class="ion-ios-arrow-thin-right"></i></button>
                                </div>
                                <div class="col-md-12">
                                    <div id="alert-msg" class="alert-msg text-center"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION CONTACT -->


@endsection

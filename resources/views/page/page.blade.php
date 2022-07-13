@extends('layout.home')
@section('main')
<div class="card card0 border-0">
    <div class="row d-flex">
        <div class="col-lg-6">
            <div class="container">
                <div class="text-center mb-2-8 mb-lg-6">
                    <h2 class="display-18 display-md-16 display-lg-14 font-weight-700">Why choose <strong class="text-primary font-weight-700">Us</strong></h2>
                    <span>The trusted source for why choose us</span>
                </div>
                <div class="row align-items-center">
                    <div class="col-sm-6 col-lg-4 mb-2-9 mb-sm-0">
                        <div class="pr-md-3">
                            <div class="text-center text-sm-right mb-2-9">
                                <div class="mb-4">
                                    <img src="https://via.placeholder.com/80x80/FFB6C1/000000" alt="..." class="rounded-circle">
                                </div>
                                <h4 class="sub-info">Residential Cleaning</h4>
                                <p class="display-30 mb-0">Roin gravida nibh vel velit auctor aliquetenean sollicitudin, lorem qui bibendum auctor.</p>
                            </div>
                            <div class="text-center text-sm-right">
                                <div class="mb-4">
                                    <img src="https://via.placeholder.com/80x80/87CEFA/000000" alt="..." class="rounded-circle">
                                </div>
                                <h4 class="sub-info">Commercial Cleaning</h4>
                                <p class="display-30 mb-0">Gravida roin nibh vel velit auctor aliquetenean sollicitudin, lorem qui bibendum auctor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="why-choose-center-image">
                            <img src="https://via.placeholder.com/350x350/FF7F50/000000" alt="..." class="rounded-circle">
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="pl-md-3">
                            <div class="text-center text-sm-left mb-2-9">
                                <div class="mb-4">
                                    <img src="https://via.placeholder.com/80x80/8A2BE2/000000" alt="..." class="rounded-circle">
                                </div>
                                <h4 class="sub-info">Washing services</h4>
                                <p class="display-30 mb-0">Nibh roin gravida vel velit auctor aliquetenean sollicitudin, lorem qui bibendum auctor.</p>
                            </div>

                            <div class="text-center text-sm-left">
                                <div class="mb-4">
                                    <img src="https://via.placeholder.com/80x80/20B2AA/000000" alt="..." class="rounded-circle">
                                </div>
                                <h4 class="sub-info">Carpet cleaning</h4>
                                <p class="display-30 mb-0">Vel proin gravida nibh velit auctor aliquetenean sollicitudin, lorem qui bibendum auctor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card2 card border-0 px-4 py-5">
                <div class="row mb-4 px-3">
                    <h6 class="mb-0 mr-4 mt-2">Sign in with</h6>
                    <div class="facebook text-center mr-3">
                        <div class="fa fa-facebook"></div>
                    </div>
                    <div class="twitter text-center mr-3">
                        <div class="fa fa-twitter"></div>
                    </div>
                    <div class="linkedin text-center mr-3">
                        <div class="fa fa-linkedin"></div>
                    </div>
                </div>
                <div class="row px-3 mb-4">
                    <div class="line"></div> <small class="or text-center">Or</small>
                    <div class="line"></div>
                </div>
                <div class="row px-3"> <label class="mb-1">
                        <h6 class="mb-0 text-sm">Email Address</h6>
                    </label> <input class="mb-4" type="text" name="email" placeholder="Enter a valid email address"> </div>
                <div class="row px-3"> <label class="mb-1">
                        <h6 class="mb-0 text-sm">Password</h6>
                    </label> <input type="password" name="password" placeholder="Enter password"> </div>
                <div class="row px-3 mb-4">
                    <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                </div>
                <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">Login</button> </div>
                <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a class="text-danger ">Register</a></small> </div>
            </div>

        </div>
    </div>
    <div class="bg-blue py-4">
        <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2019. All rights reserved.</small>
            <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
        </div>
    </div>
</div>
@stop()
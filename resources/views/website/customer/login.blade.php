@extends('website.master')

@section('title','Customer Login Register')

@section('content')




<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title">Account</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- LOGIN AREA START -->
<div class="ltn__login-area pb-85">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <div class="account-login-inner">

                    <p class="text-center text-danger">
                        {{ session('message') }}
                    </p>

                    <form method="post" action="{{ route('login-check') }}">
                        @csrf
                        <div class="form-group">
                            {{-- This line is very Important And DANGER--}}
                            <input type="text" name="user_name" placeholder="Your Email Or Phone ">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="login_footer form-group">
                            <div class="chek-form">
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                        id="exampleCheckbox1" value="">
                                    <label class="form-check-label" for="exampleCheckbox1"><span>Remember
                                            me</span></label><br><br>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-fill-out btn-block hover-up bg-dark text-white"
                            name="login">Log in</button>
                            {{-- <button class="theme-btn-1 btn btn-block" type="submit" name="login">SIGN IN</button> --}}
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="account-create text-center ">
                    <h4>DON'T HAVE AN ACCOUNT?</h4>
                    
                    <form method="post" action="{{ route('new-customer') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" required="" name="name" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="email" required="" name="email" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="text" required="" name="mobile" placeholder="Mobile Number">
                        </div>
                        <div class="form-group">
                            <input required="" type="password" name="password" placeholder="Password">
                        </div>

                       
                        <div class="form-group">
                            <button type="submit" class="btn btn-fill-out btn-block hover-up bg-dark text-white"
                                name="login">Submit &amp; Register</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGIN AREA END -->



{{-- <section class="pt-150 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="row">
                    <div class="col-lg-5">
                        <div
                            class="login_wrap widget-taber-content p-30 background-white border-radius-10 mb-md-5 mb-lg-0 mb-sm-5">
                            <div class="padding_eight_all bg-white">
                                <div class="heading_s1">
                                    <h3 class="mb-30">Logins</h3>
                                </div>

                                <p class="text-center text-danger">
                                    {{ session('message') }}
                                </p>

                                <form method="post" action="{{ route('login-check') }}">
                                    @csrf
                                    <div class="form-group">
                                        
                                        <input type="text" name="user_name" placeholder="Your Email Or Phone ">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="login_footer form-group">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox"
                                                    id="exampleCheckbox1" value="">
                                                <label class="form-check-label" for="exampleCheckbox1"><span>Remember
                                                        me</span></label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">

                                        <button type="submit" class="btn btn-fill-out btn-block hover-up"
                                            name="login">Log in</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                            <div class="padding_eight_all bg-white">
                                <div class="heading_s1">
                                    <h3 class="mb-30">Create an Account</h3>
                                </div>
                                <p class="mb-50 font-sm">
                                    Your personal data will be used to support your experience throughout this website,
                                    to manage access to your account, and for other purposes described in our privacy
                                    policy
                                </p>
                                <form method="post" action="{{ route('new-customer') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" required="" name="name" placeholder="Full Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" required="" name="email" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" required="" name="mobile" placeholder="Mobile Number">
                                    </div>
                                    <div class="form-group">
                                        <input required="" type="password" name="password" placeholder="Password">
                                    </div>

                                    <div class="login_footer form-group">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" checked name="checkbox"
                                                    id="exampleCheckbox12" value="">
                                                <label class="form-check-label" for="exampleCheckbox12"><span>I agree to
                                                        terms &amp; Policy.</span></label>
                                            </div>
                                        </div>
                                        <a href="page-privacy-policy.html"><i
                                                class="fi-rs-book-alt mr-5 text-muted"></i>Lean more</a>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-fill-out btn-block hover-up"
                                            name="login">Submit &amp; Register</button>
                                    </div>
                                </form>
                                <div class="divider-text-center mt-15 mb-15">
                                    <span> or</span>
                                </div>
                                <ul class="btn-login list_none text-center mb-15">
                                    <li><a href="#" class="btn btn-facebook hover-up mb-lg-0 mb-sm-4">Login With
                                            Facebook</a></li>
                                    <li><a href="#" class="btn btn-google hover-up">Login With Google</a></li>
                                </ul>
                                <div class="text-muted text-center">Already have an account? <a href="#">Sign in now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


@endsection
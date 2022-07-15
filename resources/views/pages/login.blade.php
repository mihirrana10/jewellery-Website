<!doctype html>
<html class="no-js" lang="en">

@extends('layout.templet')

{{-- @section('menu')
      @include('layout.menu') 
@endsection --}}
@section('headerfile')
      @include('layout.headerfile')  
@endsection

@section('content')
<body>

      <!--====== Preloader Part Start ======-->
      {{-- <div class="preloader">
          <div class="loader">
              <div class="ytp-spinner">
                  <div class="ytp-spinner-container">
                      <div class="ytp-spinner-rotator">
                          <div class="ytp-spinner-left">
                              <div class="ytp-spinner-circle"></div>
                          </div>
                          <div class="ytp-spinner-right">
                              <div class="ytp-spinner-circle"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div> --}}
      <!--====== Preloader Part Ends ======-->
  
      <!--====== Navbar Style 7 Part Start ======-->
      @section('header')
            @include('layout.header')  
      @endsection

      <section class="breadcrumbs-wrapper pt-50 pb-50 bg-primary-4">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="breadcrumbs-style breadcrumbs-style-1 d-md-flex justify-content-between align-items-center">
                        <div class="breadcrumb-left">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Sign in</li>
                           </ol>
                        </div>
                        <div class="breadcrumb-right">
                           <h5 class="heading-5 font-weight-500">Sign in</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="login-registration-wrapper pt-50">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 mx-auto">
                     <div class="login-registration-style-2 mt-50">
                        <h1 class="heading-4 font-weight-500 title">Login</h1>
                        <div class="login-registration-form pt-10">
                           <form action="#">
                              <div class="single-form form-default form-border">
                                 <label>Email Address</label>
                                 <div class="form-input">
                                    <input type="email" placeholder="user@email.com">
                                    <i class="mdi mdi-email"></i>
                                 </div>
                              </div>
                              <div class="single-form form-default form-border">
                                 <label>Your Password</label>
                                 <div class="form-input">
                                    <input id="password-7" type="password" placeholder="Password">
                                    <i class="mdi mdi-lock"></i>
                                    <span toggle="#password-7" class="mdi mdi-eye-outline toggle-password"></span>
                                 </div>
                              </div>
                              <div class="login-checkbox-forget d-sm-flex justify-content-between align-items-center">
                                 <div class="single-checkbox checkbox-style-3">
                                    <input type="checkbox" id="login-7">
                                    <label for="login-7"><span></span> </label>
                                    <p>Remember Me</p>
                                 </div>
                                 <a class="forget" href="#">Forget Password?</a>
                              </div>
                              <div class="single-form">
                                 <button class="main-btn primary-btn">Sign in</button>
                              </div>
                           </form>
                        </div>
                        <div class="text-center">
                           <p class="login">Don’t have an account? <a href="signup-page.html">Sign up</a></p>
                           <p class="account mt-25">Or</p>
                           <ul>
                              <li>
                                 <a href="javascript:void(0)" class="facebook-login-registration">
                                 <i class="lni lni-facebook-original"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="javascript:void(0)" class="google-login-registration">
                                 <img src="{{url('user/assets/images/google-logo.svg')}}" alt="">
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
        
     
      <!--====== Footer Style 3 Part Start ======-->
      @section('footer')
            @include('layout.footer')
      @endsection
      <!--====== Footer Style 3 Part Ends ======-->
  
      @section('footerfile')
          @include('layout.footerfile')
      @endsection
  </body>
@endsection

</html>

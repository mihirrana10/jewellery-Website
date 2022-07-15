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
                              <li class="breadcrumb-item active" aria-current="page">Sign up</li>
                           </ol>
                        </div>
                        <div class="breadcrumb-right">
                           <h5 class="heading-5 font-weight-500">Sign up</h5>
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
                     <div class="login-registration-style-1 registration text-center mt-50">
                        <h1 class="heading-4 font-weight-500 title">Create an Account with</h1>
                        <div class="login-registration-form pt-10">
                           <form action="#">
                              <div class="single-form form-default form-border text-left">
                                 <label>Full Name</label>
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="form-input">
                                          <input type="text" placeholder="First Name">
                                          <i class="mdi mdi-account"></i>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-input form">
                                          <input type="text" placeholder="Last Name">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="single-form form-default form-border text-left">
                                 <label>Email Address</label>
                                 <div class="form-input">
                                    <input type="email" placeholder="user@email.com">
                                    <i class="mdi mdi-email"></i>
                                 </div>
                              </div>
                              <div class="single-form form-default form-border text-left">
                                 <label>Choose Password</label>
                                 <div class="form-input">
                                    <input id="password-3" type="password" placeholder="Password">
                                    <i class="mdi mdi-lock"></i>
                                    <span toggle="#password-3" class="mdi mdi-eye-outline toggle-password"></span>
                                 </div>
                              </div>
                              <div class="single-checkbox checkbox-style-3">
                                 <input type="checkbox" id="login-3">
                                 <label for="login-3"><span></span> </label>
                                 <p>I accept the Terms of Use.</p>
                              </div>
                              <div class="single-form">
                                 <button class="main-btn primary-btn">Sign up</button>
                              </div>
                           </form>
                        </div>
                        <p class="login">Have an account? <a href="{{'signup'}}">Log in</a></p>
                        <p class="account">Or</p>
                        <ul>
                           <li>
                              <a href="javascript:void(0)" class="facebook-login-registration">
                              <i class="lni lni-facebook-original"></i>
                              <span>Login with Facebook</span>
                              </a>
                           </li>
                           <li>
                              <a href="javascript:void(0)" class="google-login-registration">
                              <img src="{{url('user/assets/images/google-logo.svg')}}" alt="">
                              <span>Login with Google</span>
                              </a>
                           </li>
                        </ul>
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

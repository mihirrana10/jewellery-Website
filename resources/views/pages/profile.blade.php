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
                              <li class="breadcrumb-item active" aria-current="page">Account</li>
                           </ol>
                        </div>
                        <div class="breadcrumb-right">
                           <h5 class="heading-5 font-weight-500">Account</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="profile-wrapper pt-50 pb-100">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-9">
                     <div class="profile">
                        <div class="profile-header">
                           <div class="profile-cover-photo bg_cover" style="background-image: url({{url('user/assets/images/profile-cover.png')}});"></div>
                           <div class="profile-author d-sm-flex flex-row-reverse justify-content-between align-items-end">
                              <div class="profile-photo">
                                 <img src="{{url('user/assets/images/profile-photo.png')}}" alt="Profile Photo">
                              </div>
                              <div class="profile-name">
                                 <h4 class="name">Musa Ahmed</h4>
                                 <p class="email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9ef3ebedffdefbf3fff7f2b0fdf1f3">[email&#160;protected]</a></p>
                              </div>
                           </div>
                        </div>
                        <div class="profile-body">
                           <div class="profile-title">
                              <h5 class="title">Personal Details</h5>
                              <a class="profile-link" href="javascript:void(0)">edit</a>
                           </div>
                           <div class="profile-details">
                              <div class="single-details-item d-flex flex-wrap">
                                 <div class="details-title">
                                    <h6 class="title">User Full Name:</h6>
                                 </div>
                                 <div class="details-content media-body">
                                    <p>Musa Ahmed</p>
                                 </div>
                              </div>
                              <div class="single-details-item d-flex flex-wrap">
                                 <div class="details-title">
                                    <h6 class="title">Email:</h6>
                                 </div>
                                 <div class="details-content media-body">
                                    <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="97fae2e4f6d7f2faf6fefbb9f4f8fa">[email&#160;protected]</a></p>
                                 </div>
                              </div>
                              <div class="single-details-item d-flex flex-wrap">
                                 <div class="details-title">
                                    <h6 class="title">Phone:</h6>
                                 </div>
                                 <div class="details-content media-body">
                                    <p>+123 456 789 0234</p>
                                 </div>
                              </div>
                              <div class="single-details-item d-flex flex-wrap">
                                 <div class="details-title">
                                    <h6 class="title">Address:</h6>
                                 </div>
                                 <div class="details-content media-body">
                                    <p>Company Inc., 8901 Marmora Road, Glasgow, D04 89GR.</p>
                                 </div>
                              </div>
                              <div class="single-details-item d-flex flex-wrap">
                                 <div class="details-title">
                                    <h6 class="title">Gender:</h6>
                                 </div>
                                 <div class="details-content media-body">
                                    <p>Male</p>
                                 </div>
                              </div>
                              <div class="single-details-item d-flex flex-wrap">
                                 <div class="details-title">
                                    <h6 class="title">Birthday:</h6>
                                 </div>
                                 <div class="details-content media-body">
                                    <p>04 January 1992</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="profile-footer mt-45">
                           <div class="profile-title">
                              <h5 class="title">Cards</h5>
                              <a class="profile-link" href="javascript:void(0)">Add Cards</a>
                           </div>
                           <div class="profile-card-info">
                              <div class="row">
                                 <div class="col-md-4 col-sm-6">
                                    <div class="single-card-info d-flex">
                                       <div class="card-icon">
                                          <img src="{{url('user/assets/images/visa.png')}}" alt="Card">
                                       </div>
                                       <div class="card-info media-body">
                                          <h5 class="card-name">Musa Ahmed</h5>
                                          <p class="card-number">.... 4534 <span>02/20</span></p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6">
                                    <div class="single-card-info d-flex">
                                       <div class="card-icon">
                                          <img src="{{url('user/assets/images/american-express.png')}}" alt="Card">
                                       </div>
                                       <div class="card-info media-body">
                                          <h5 class="card-name">Musa Ahmed</h5>
                                          <p class="card-number">.... 4534 <span>02/20</span></p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6">
                                    <div class="single-card-info d-flex">
                                       <div class="card-icon">
                                          <img src="{{url('user/assets/images/mastercard.png')}}" alt="Card">
                                       </div>
                                       <div class="card-info media-body">
                                          <h5 class="card-name">Musa Ahmed</h5>
                                          <p class="card-number">.... 4534 <span>02/20</span></p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="clients-logo-section pt-70 pb-70">
            <div class="container">
               <div class="row client-logo-active">
                  <div class="col-lg-3">
                     <div class="single-logo-wrapper">
                        <img src="{{url('user/assets/images/client-logo/uideck-logo.svg')}}" alt="">
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="single-logo-wrapper">
                        <img src="{{url('user/assets/images/client-logo/graygrids-logo.svg')}}" alt="">
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="single-logo-wrapper">
                        <img src="{{url('user/assets/images/client-logo/lineicons-logo.svg')}}" alt="">
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="single-logo-wrapper">
                        <img src="{{url('user/assets/images/client-logo/pagebulb-logo.svg')}}" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="subscribe-section pt-70 pb-70 bg-primary-4">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 mx-auto">
                     <div class="heading text-center">
                        <h1 class="heading-1 font-weight-700 text-white mb-10">Subscribe Newsletter</h1>
                        <p class="gray-3">Be the first to know when new products drop and get behind-the-scenes content
                           straight.
                        </p>
                     </div>
                     <div class="subscribe-form">
                        <form action="#">
                           <div class="single-form form-default">
                              <label class="text-white-50">Enter your email address</label>
                              <div class="form-input">
                                 <input type="text" placeholder="user@email.com">
                                 <i class="mdi mdi-account"></i>
                                 <button class="main-btn primary-btn"><span class="mdi mdi-send"></span></button>
                              </div>
                           </div>
                        </form>
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

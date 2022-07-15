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
                              <li class="breadcrumb-item active" aria-current="page">Contact</li>
                           </ol>
                        </div>
                        <div class="breadcrumb-right">
                           <h5 class="heading-5 font-weight-500">Contact</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="contact-wrapper pt-50 pb-100">
            <div class="container">
               <div class="row">
                  <div class="col-lg-5">
                     <div class="contact-style-2 mt-50">
                        <ul class="contact-info">
                           <li>
                              <div class="single-contact-info d-flex">
                                 <div class="contact-info-icon">
                                    <i class="mdi mdi-map-marker"></i>
                                 </div>
                                 <div class="contact-info-content media-body">
                                    <p>Attn: Returns/Exchanges, 213 Creeks Bend Dr. Downingtown, PA 19335, USA.</p>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="single-contact-info d-flex">
                                 <div class="contact-info-icon">
                                    <i class="mdi mdi-email"></i>
                                 </div>
                                 <div class="contact-info-content media-body">
                                    <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6f070a0303002f0c00021f0e0116410c0002">[email&#160;protected]</a></p>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="single-contact-info d-flex">
                                 <div class="contact-info-icon">
                                    <i class="mdi mdi-phone"></i>
                                 </div>
                                 <div class="contact-info-content media-body">
                                    <p>+3561 3455 2344</p>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="single-contact-info d-flex">
                                 <div class="contact-info-icon">
                                    <i class="mdi mdi-fax"></i>
                                 </div>
                                 <div class="contact-info-content media-body">
                                    <p>+3561 3455 2344</p>
                                 </div>
                              </div>
                           </li>
                        </ul>
                        <h4 class="heading-4 font-weight-500 title">Contact Us</h4>
                        <p class="paragraph-small sub-title">We are 24/7 open to hear from you.</p>
                        <div class="contact-social d-flex">
                           <p>Follow Us:</p>
                           <ul class="social media-body">
                              <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                              <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                              <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                              <li><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a></li>
                              <li><a href="javascript:void(0)"><i class="lni lni-whatsapp"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="contact-style-1 mt-50">
                        <h4 class="heading-4 font-weight-500 title">Have a question? We're here to help.</h4>
                        <p class="paragraph-small font-weight-300 mt-10">We are 24/7 open to hear from you.</p>
                        <div class="contact-form">
                           <form action="#">
                              <div class="single-form form-default">
                                 <label>Full Name</label>
                                 <div class="form-input">
                                    <input type="text" placeholder="Full Name">
                                    <i class="mdi mdi-account"></i>
                                 </div>
                              </div>
                              <div class="single-form form-default">
                                 <label>Email Address</label>
                                 <div class="form-input">
                                    <input type="text" placeholder="Email Address">
                                    <i class="mdi mdi-email"></i>
                                 </div>
                              </div>
                              <div class="select-style-2 mt-30">
                                 <label>Select Subject</label>
                                 <div class="select-items">
                                    <select>
                                       <option value="0">Select Subject</option>
                                       <option value="1">select option 01</option>
                                       <option value="2">select option 02</option>
                                       <option value="3">select option 03</option>
                                       <option value="4">select option 04</option>
                                       <option value="5">select option 05</option>
                                    </select>
                                    <i class="mdi mdi-menu"></i>
                                 </div>
                              </div>
                              <div class="single-form form-default">
                                 <label>Message</label>
                                 <div class="form-input">
                                    <textarea placeholder="Message"></textarea>
                                    <i class="mdi mdi-message-text-outline"></i>
                                 </div>
                              </div>
                              <div class="single-form">
                                 <button class="main-btn primary-btn">send message</button>
                              </div>
                           </form>
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

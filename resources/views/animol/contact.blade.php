@extends('layouts.main')

@section('content')

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="{{ asset('assets/img/normal-breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.7237409817513!2d106.7519787932866!3d-6.574588459205161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c55d8b8a08b5%3A0x952db5e0a9225d59!2sBrother%20Parfum!5e0!3m2!1sid!2sid!4v1610752476803!5m2!1sid!2sid" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <!-- Normal Breadcrumb End -->

    <!-- Login Section Begin -->
    <section class="login spad">
        <div class="container">
            <form action="{{ route('contactPost') }}" method="POST">
                @csrf
              <div class="row mt-5">
                <div class="col-8">
                  <textarea class="form-control textarea" id="description" name="description" required rows="10" placeholder="Description"></textarea>
                </div>
                <div class="col-4">
                  <div class="row">
                    <div class="col-12"><input class="form-control form" type="text" required name="subject" placeholder="Subject"></div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-12"><input class="form-control form" type="text" required name="name" placeholder="Name"></div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-12"><input class="form-control form" type="email" required name="email" placeholder="Email"></div>
                  </div>
                  <div class="row mt-3">
                    <button type="submit" class="site-btn ml-3">Send</button>
                  </div>
                </div>
              </div>
            </form>
        </div>
    </section>
    <!-- Login Section End -->

@endsection

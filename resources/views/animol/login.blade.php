@extends('layouts.main')

@section('content')

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="{{ asset('assets/img/normal-breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Login</h2>
                        <p>Welcome to the official Animol Website.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Login Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Login</h3>
                        <form method="POST" action="{{ route('loginPost') }}">
                            @csrf
                            <div class="input__item">
                                <input id="email" type="text" placeholder="Email address" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus">
                                <span class="icon_mail"></span>
                            </div>
                            @error ('email')
                                <div class="alert alert-danger alert-dismissible show fade">
                                    <div class="alert-body">
                                        <button class="close" data-dismiss="alert">
                                            <span></span>
                                        </button>
                                        {{ $message }}
                                    </div>
                                </div>
                            @endif
                            <div class="input__item">
                                <input id="password" type="password" placeholder="Password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password"">
                                <span class="icon_lock"></span>
                            </div>
                            @error ('password')
                                <div class="alert alert-danger alert-dismissible show fade">
                                    <div class="alert-body">
                                        <button class="close" data-dismiss="alert">
                                            <span></span>
                                        </button>
                                        {{ $message }}
                                    </div>
                                </div>
                            @endif
                            <button type="submit" class="site-btn">Login Now</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Forgot Your Password ?</h3>
                        <a href="#" class="primary-btn">Click Here !</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->

   @endsection

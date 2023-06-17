@extends('layouts.user')

@section('content')
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">Forget Password</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="index.html">Login</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Forget Password</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="rbt-elements-area bg-color-white rbt-section-gap">
    <div class="container">
        <div class="row gy-5 row--30">
            <div class="col-lg-12">
                <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                    <h3 class="title">Reset Password</h3>
                    <form class="max-width-auto" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">
                            <input  id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                            @enderror
                            <label>Email Address</label>
                            <span class="focus-border"></span>
                        </div>

                        <div class="form-submit-group">
                            <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Send Password Reset Link</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

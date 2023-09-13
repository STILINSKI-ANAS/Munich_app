@extends('layouts.user')

@section('content')
<div class="  rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
    <div class="container">
    <div class="row justify-content-center ">
        <div class="row gy-5 row--30">
            <div class="col-lg-12">
            <div class="rbt-contact-form contact-form-style-1 max-width-auto ">
                <h4 class="title">{{ __('Register') }}</h4>

              
                <form class="max-width-auto" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">

                        <input  id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                        <label>Nom Complet *</label>
                        <span class="focus-border"></span>

                    </div>
                    <div class="form-group">
                        <input  id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                        <label> Email *</label>
                        <span class="focus-border"></span>
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                        <label>Mot De Passe *</label>
                        <span class="focus-border"></span>
                    </div>
                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                        <label>  Confirmer Mot De Passe *</label>
                        <span class="focus-border"></span>
                    </div>
                    <div class="row mb--30">
                        <div class="col-lg-6">
                            <div class="rbt-checkbox">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">Se Souvenir De Moi</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="rbt-lost-password text-end">
                                @if (Route::has('password.request'))
                                    <a class="rbt-btn-link" href="{{ route('password.request') }}">
                                        {{ __('Vous avez déjà un compte?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-submit-group">
                        <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                            <span class="icon-reverse-wrapper">
                                <span class="btn-text">S'inscrire</span>
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
</div>
@endsection

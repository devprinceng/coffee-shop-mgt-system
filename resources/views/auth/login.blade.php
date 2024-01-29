@extends('layouts.app')

@section('content')
    <section class="ftco-section" style="margin-top: -20px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <form method="POST" action="{{ route('login') }}" class="billing-form ftco-bg-dark p-3 p-md-5">
                        @csrf
                        <h3 class="mb-4 billing-heading">Login</h3>
                        <div class="row align-items-end">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email"
                                        class="text-white col-form-label text-md-end">{{ __('Email') }}</label>
                                    <input id="email" type="email"
                                        class="form-control border-1 @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" placeholder="Email" required autocomplete="email"
                                        autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="password"
                                    class="text-white col-form-label text-md-end">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group mt-4">
                                    <div class="radio">
                                        <button type="submit" class="btn  btn-primary py-3 px-4">Login</button>
                                    </div>
                                </div>
                            </div>
                    </form><!-- END -->
                </div> <!-- .col-md-8 -->
            </div>
        </div>
        </div>
    </section> <!-- .section -->
@endsection

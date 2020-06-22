@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:2%">
            <div class="wrapper">
            <div style="margin: auto">
                <img style="margin-left: 25%; width: 60%; height: auto;" src="./css/asset/img7.png" alt="image 5" width="300" height="464">
            </div>

            <div style="padding-top: 13%;padding-left: 5%;width: 40%;">
            		<form method="POST" action="{{ route('register') }}">
            		@csrf
                <!--<p style="font-family: marta_regular;font-size: 40px;">Buat akun pamer.io</p>
                <h7>Alamat E-mail</h7><br>
                <input style="width: 400px;" class="form-control form-control-sm" type="email" name="mail" id="mail">
                <h7>Passwordnya</h7><br>
                <input style="width: 400px;" class="form-control form-control-sm" type="text" name="pass" id="pass">
                <h7>Ulangi Password</h7><br>
                <input style="width: 400px;" class="form-control form-control-sm" type="text" name="pass" id="pass">
                <br>
                <button style="margin-top: 2%;" class="btn btn-sm btn-outline-dark"> Sign Up</button>
								-->
							
								<div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input style="width: 400px;" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input style="width: 400px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input style="width: 400px;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input style="width: 400px;" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" style="margin-top: 2%;" class="btn btn-sm btn-outline-dark">
                                    {{ __('Sign Up') }}
                                </button>
                            </div>
                        </div>
								
								<form>
                <div style="display: flex; width: 100%;">
                    <hr style="width:40%">
                    <h7>atau</h7>
                    <hr>
                </div>
                <br>
                <div style="width:65%;margin: auto;">
                    <h7>Sudah Mempunyai akun?</h7>
                    <a href="/login">Login</a>
                </div>
            </div>


        </div>
</div>
@endsection

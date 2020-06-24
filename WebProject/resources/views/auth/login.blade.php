<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="./css/login.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div id="container">
        <nav id="navbar">
            <h2 id="logo">Pamer.io</h2>
            <div class="navigation">
                <a href="/landing">Home</a>
                <a href="/photo">Explore</a>
                <a href="/photographer">Photographers</a>
                <input class="form-control form-control-sm" type="text" placeholder="Portofolio">

        </nav>

        </div>
        <div class="wrapper">
            <div class="left">
                <p>Masuk ke pamer.io</p>
                <form method="POST" action="{{ route('login') }}">
				            @csrf
				            <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      
                           
  
				            
				            <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4"><form method="POST" action="{{ route('login') }}">
                                <button type="submit" class="btn btn-sm btn-outline-dark">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        
				           
							  </form>
                <div class="separator">
                    <hr>
                    <h7>atau</h7>
                    <hr>
                </div>
                <br>
                <div class="gabung">
                    <h7>Bukan member?</h7>
											<a href="{{ route('register') }}">{{ __('Gabung Sekarang!') }}</a>
                </div>
            </div>

            <div class="right">
                <img class="image5" src="./css/asset/img4.png" alt="image 5" width="300" height="464">
            </div>

        </div>
</body>
<footer>

</footer>

</html>


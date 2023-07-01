<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{asset('assets/img/poke-bowl-icon.png')}}" type="">
    <title> POKEBOWL YES! </title>
    <link rel="stylesheet" href="{{asset('assets/css/estilos.css')}}" type="text/css">
  </head>
<body class="bg">
    <div class="col-12" >
            
        <div class=" col-6 float-end">
            <div class="d-flex justify-content-center align-items-center " style="height: 100vh">
            <div class="bg-white p-2 rounded-2" style="--bs-bg-opacity: .75;">
                    <form class="border-0 border-light p-5" action="{{ route('login') }}" method="post">
                        @csrf
                    <h4 class="h4 mb-4 text-center">INGRESE A SU CUENTA</h4>
                    <div class="form-group h6">
                        <label for="email" class=" col-form-label text-md-end">{{ __('Email:') }}</label>        
                    <!-- Email -->
                    <div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    </div> 
                    <div class="form-group h6">
                        <label for="password" class=" col-form-label text-md-end">{{ __('Password:') }}</label>
                        <!-- Password -->
                        <div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror    
                        </div>
                    </div>
                    <!-- RECUÉRDAME-->
                    <div class="row">
                        <div class="md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Sign in button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-warning center-block col-12 text-white">
                            {{ __('INGRESE') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    
                    </div>
                    <hr>
                
                    
                <!-- Register -->
                    <div class="text-center bold">
                    <label > ¿No está registrado? </label>
                    <br>
                    <br>
                    <a href="{{ route('register') }}" class="text-decoration-none text-white btn btn-dark content-center center-block col-12">REGISTRESE</a>
                    </div>   
                    
                    </form>
                </div>
            
    
            </div>
        </div>
    </div>

</body>
</html>

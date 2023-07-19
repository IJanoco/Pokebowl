<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="{{asset('assetscustomer/img/poke-bowl-icon.png')}}" type="">

  <title> POKEBOWL YES! </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('assetscustomer/css/bootstrap.css')}}" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="{{asset('assetscustomer/css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{asset('assetscustomer/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('assetscustomer/css/responsive.css')}}" rel="stylesheet" />
  <!--estilos-->
  <link href="{{asset('assetscustomer/css/estilos.css')}}" rel="stylesheet" />
</head>

<body class="bg-register">

  <!-- book section -->
          <div class="book_section layout_padding ">
            <div class="form_container d-flex justify-content-center">             
                  <div class="bg-white p-5 rounded">
                      <form action="{{ route('register') }}" method="post">
                        @csrf
                          <div class="text-center mb-5">
                              <h2>
                              REGÍSTRESE EN POKEBOWL YES!
                              </h2>
                          </div>                     
                          <div class="row mb-3">
                            <div class="col-6">
                              
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Ingrese su nombre">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus placeholder="Ingrese su apellido">

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>
                          <div class="row mb-3">
                            <div class="col-12">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Ingrese su correo">

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                          </div>
                          <div class="row mb-3">
                            <div class="col-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Ingrese su contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme su contraseña">
                            </div>
                          </div>
                          <div class="row mb-3">
                            <div class="col-12">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus placeholder="Ingrese su dirección">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>
                          <div class="row mb-3">
                            <div class="col-4">
                                <input id="postal_code" type="text" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" value="{{ old('postal_code') }}" required autocomplete="postal_code" autofocus placeholder="Ingrese su código postal">

                                @error('postal_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                
                            </div>
                          
                          
                            <div class="col-4">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Ingrese número de celular">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                
                            </div>
                            <div class="col-4">
                                <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required autocomplete="dni" autofocus placeholder="Ingrese su dni">

                                @error('dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>
                            <div>
                                <input type="hidden" value="1" name="id_type">
                            </div>                    
                            <div class="btn_box mb-3">
                                <button type="submit" class="btn btn-warning text-white col-12" name="submit">
                                REGÍSTRESE
                                </button>
                            </div>
                      </form>
                  </div>
                        
            </div>
          </div>
      
  <!-- end book section -->


</body>

</html>

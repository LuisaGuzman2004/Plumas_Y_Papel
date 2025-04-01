@extends('layouts.Auth.register')

@section('register')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-1">
            <div class="card card-signup">
                <h2 class="card-title text-center">Registrarse</h2>
                <div class="row">
                    <div class="col-md-1  col-md-offset-1">
                        <div class="card-content">
                            <!-- <div class="info info-horizontal">
                                <div class="icon icon-rose">
                                    <i class="material-icons">timeline</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Marketing</h4>
                                    <p class="description">
                                        Si lo puedes imaginar, lo puedes crear.
                                    </p>
                                </div>
                            </div> -->
                            <!-- <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="material-icons">code</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Fully Coded in HTML5</h4>
                                    <p class="description">
                                        La voluntad es la capacidad de hacer las cosas aun despues de haber pasado el momento de emoción.
                                    </p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon icon-info">
                                    <i class="material-icons">group</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Built Audience</h4>
                                    <p class="description">
                                        Vive una vida que recuerdes.
                                    </p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="social text-center">
                            <button class="btn btn-just-icon btn-round btn-facebook">
                                <i class="fa fa-facebook"></i>
                            </button>
                            <button class="btn btn-just-icon btn-round btn-linkedin">
                                <i class="fa fa-linkedin"></i>
                            </button>
                            <button class="btn btn-just-icon btn-round btn-google">
                                <i class="fa fa-google"></i>
                            </button>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0 col-md-8">
                                <div class="col-md-5 offset-md-5">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Registrarse') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('title') Inicio de Sesion @endsection
@section('content')
<div class="container" id="top">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
             
                <div class="panel-heading">   <h3 class="panel-title">Inicio de Sesion</h3></div>

                <div class="panel-body">
                    <form class="form-horizontal" id="login" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  autofocus>

                                @if ($errors->has('email'))
                                    <label class="error">
                                         {{ $errors->first('email') }}
                                    </label>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" >

                                @if ($errors->has('password'))
                                    <label class="error">
                                      {{ $errors->first('password') }} 
                                    </label>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-success   ">
                                    Login
                                </button>

                                <a class="btn btn-darkblue" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('complementos_js')
    <script src="{{env('APP_CSS')}}js/login.js"></script>
@endsection
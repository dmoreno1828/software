@extends('layouts.app')
@section('title') Cambio de Clave @endsection
@section('content')
<div class="container" id="top">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"> <h3 class="panel-title">Cambio de Contraseña</h3></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" id="login" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" >

                                @if ($errors->has('email'))
                                    <label class="error">
                                        {{ $errors->first('email') }}
                                    </label>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn btn-success">
                                    Send Password Reset Link
                                </button>
                                <a class="btn btn-darkblue" href="{{ route('login') }}">
                                   Iniciar Sesion
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

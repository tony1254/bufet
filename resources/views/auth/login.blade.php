@extends('layouts.app')

@section('content')

    <div class="card-header info lighten-1 white-text">
        Inisio de Sesion
    </div>
     <div class="card-body">
<div class="row  justify-content-md-center ">
    <div class="col-md-5 col-md-offset-4">
        
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="md-form form-sm{{ $errors->has('email') ? ' has-error' : '' }}">
                             <i class="fa fa-envelope prefix"></i>
                            <label for="email" class="">E-Mail</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="md-form form-sm{{ $errors->has('password') ? ' has-error' : '' }}">
                            <i class="fa fa-lock prefix"></i>
                            <label for="password" class="4 control-label">Contraseña</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
<div class="row justify-content-md-center">  
                                <button type="submit" class="btn btn-primary btn-block">
                                    Iniciar sesion
                                </button>
</div>
                        
<div class="row">
    <div class="col-4">
        
                        <div class="md-form form-sm">
                                <div class="form-group"">
                                        <input type="checkbox" id="remember"  name="remember" {{ old('remember') ? 'checked' : '' }}> 
                                    <label for="remember">Recuerdame</label>
                                </div>
                        </div>

                        
    </div>
    <div class="col-8">
        
                                <a class="btn btn-outline-info btn-sm  btn-rounded " href="{{ route('password.request') }}">
                                    olvidaste tu contraseña
                                </a>
    </div>
</div>
                    </form>
        </div>
    </div>
</div>
  
@endsection

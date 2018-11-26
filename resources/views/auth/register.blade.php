@extends('layouts.app') @section('content')

<div class="card-header h5 text-white ">Register</div>
<div class="card-body">
  <form class="form-horizontal" method="POST" action="{{ route('addUser') }}">
    {{ csrf_field() }}
    <div class="md-form{{ $errors->has('name') ? ' has-error' : '' }}">
      <label for="name" class="col-md-4 control-label">Name</label>

        <input id="name" name="name" type="text" class="form-control" value="{{ old('name') }}" required autofocus> @if ($errors->has('name'))
        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span> @endif

    </div>
    <div class="md-form{{ $errors->has('email') ? ' has-error' : '' }}">
      <label for="email" class="col-md-4 control-label">E-Mail Address</label>

        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required> @if ($errors->has('email'))
        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif

    </div>
    <div class="md-form">
      <label for="rol" class="col-md-4 control-label active">Rol</label>

        <select class="mdb-select colorful-select  dropdown-danger" id="rol" name="rol">
                                    <option value="" disabled selected>Elije un ROL</option>
                                    <option value="admin">Administrador</option>
                                    <option value="user">Usuario</option>
                                </select>

    </div>
    <div class="md-form{{ $errors->has('password') ? ' has-error' : '' }}">
      <label for="password" class="col-md-4 control-label">Password</label>

        <input id="password" type="password" class="form-control" name="password" required> @if ($errors->has('password'))
        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif

      </div>
      <div class="md-form">
        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
      </div>

        <div class="center">
          <button type="submit" class="btn btn-primary btn-block">
                                    Register
                                </button>
      </div>
<p></p>
  </form>
</div>

@endsection

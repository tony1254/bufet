@section('title') - Editar Usuario  @endsection 
@extends('layouts.app') @section('content')
 <div class="card-header orange lighten-2 white-text">
        Editar Usuario
    </div>
     <div class="card-body">
{{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}

    <div class="md-form form-sm">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <div class="md-form form-sm">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>    
    <div class="md-form form-sm ">
        {{ Form::label('rol', 'user Level', array('class' => 'control-label active','style' => '')) }}
        {{ Form::select('rol', [null => 'Elije un ROL', '1' => 'Administrador', '2' => 'Usuario'],$rol->id, array('class' => 'mdb-select colorful-select  dropdown-warning','style' => ' font-size: .8rem;')) }}
    </div>
    <div class="md-form form-sm">
        {{ Form::label('password', 'password') }}
        {{ Form::password('password', null, array('class' => 'form-control')) }}
    </div>    
    <div class="md-form form-sm">
        {{ Form::label('password_confirmation', 'password_confirmation') }}
        {{ Form::password('password_confirmation', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the user!', array('class' => 'btn orange lighten-2')) }}

{{ Form::close() }}
</div>
@endsection

@section('script')
<script type="text/javascript">
$(function() {
    $('[data-toggle="tooltip"]').tooltip()
})
</script>
@endsection
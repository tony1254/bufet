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
        {{ Form::select('rol', [null => 'Elije un ROL', 'admin' => 'Administrador', 'user' => 'Usuario'], null, array('class' => 'mdb-select colorful-select  dropdown-warning','style' => ' font-size: .8rem;')) }}
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
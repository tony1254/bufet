@section('title') - Usuarios @endsection
@extends('layouts.app') @section('content')
<table class="table table-hover table-sm">
    <thead class="blue-grey lighten-4">
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>E-Mail</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row"> {{ $user->id}}</th>
            <td> {{ $user->name }}</td>
            <td> {{ $user->email }}</td>
            <td>
                <div class="row">
                    <div class="col">
                        <a class="btn-floating orange  btn-sm " href="users/{{$user->id}}/edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </div>
                    <div class="col">
                        {{ Form::open(array('url' => 'users/' . $user->id, 'id' => 'delete' . $user->id)) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        <a class="btn-floating red  btn-sm " onclick='$( "#delete{{$user->id}}" ).submit()'><i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                        {{ Form::close() }}
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="row">
    <div class="col  text-right">
    </div>
    <div class="col  text-center">
        <div class="row">
            {{ $users->links() }}
        </div>
    </div>
    <div  class="fixed-action-btn topFix" >
        <a onclick="  window.location =' {{ url('/register') }}';" href="{{ url('/register') }}" class="btn-floating green waves-effect waves-light" data-toggle="tooltip" data-placement="left" title="Nuevo">
                <i class="fa fa-plus"></i>
            </a>
    </div>
</div>
@endsection @section('script')
<script type="text/javascript">
$(function() {
    $('[data-toggle="tooltip"]').tooltip()
})
</script>
@endsection

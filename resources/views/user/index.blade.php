@extends('layouts.app') 
@section('content')


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
      <td>@mdo</td>
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
	<div class="col  text-right">
            <a href="{{ url('register') }}" class="btn-floating green waves-effect waves-light" data-toggle="tooltip" data-placement="left" title="Nuevo">
                <i class="fa fa-plus"></i>
            </a>
    </div>
</div>
<div class="fixed-action-btn " style="top: 50px; right: 15px;">

               
            </div>

@endsection
@section('script')
<script type="text/javascript">
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
@endsection
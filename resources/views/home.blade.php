@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">/home</div>

                <div class="panel-body">
                <p>

                 {!! Session::get('permission')[0] !!}
                </p>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

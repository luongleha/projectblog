@extends('admin.master')
@section('content')
<div class="container">
    <div class="table-responsive">
        <table class="table table-hover">
			
			<h1>{{$item->id}}</h1>
            <hr>
            <h1>{{$item->name}}</h1>
            <hr>
            <h4>{{$item->email}}</h4>

        </table>
    </div>
</div>
@endsection
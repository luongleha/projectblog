@extends('todo.master')
@section('content')
<div class="container">
    <div class="table-responsive">
        <table class="table table-hover">

            <h1>{{$item->title}}</h1>
            <hr>
            <h4>{{$item->content}}</h4>

        </table>
    </div>
</div>
@endsection
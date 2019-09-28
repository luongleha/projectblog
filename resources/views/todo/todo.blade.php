@extends('todo.master')
@section('content')
<div class="container">
    <a href="{{route('todos.create')}}" class="btn btn-success">Add</a>
    <div class="table-responsive">
        <table class="table table-hover">

			@php
			 echo "haaaaaaaaaa";
			@endphp

            <thead>

			@if(count($list)>0)
			<tr>
                <th>#</th>
                <th>Todo</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            	@foreach($list as $key => $item)
            	 <tr>
                <td>{{$key+1}}</td>
                <td>{{$item}}</td>
                <td>23/8/2019</td>
                <td>23/8/2019</td>
                <td>
                    <a style="display: inline-block; width: 67px;" href="/todos/{{$key + 1}}" class="btn btn-warning">Show</a>
                    <a style="display: inline-block; width: 67px;" href="#" class="btn btn-success">Edit</a>
                    <form style="display: inline-block;" action="#" method="post" accept-charset="utf-8">
                        @csrf
                        {{method_field('delete')}}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            	@endforeach
           
			@else
			Khong co su lieu
			@endif
            </tbody>
            {{-- <tr>
                <th>#</th>
                <th>Todo</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Học lập trình</td>
                <td>23/8/2019</td>
                <td>23/8/2019</td>
                <td>
                    <a style="display: inline-block; width: 67px;" href="#" class="btn btn-warning">Edit</a>
                    <form style="display: inline-block;" action="#" method="post" accept-charset="utf-8">
                        @csrf
                        {{method_field('delete')}}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Học HTML</td>
                <td>23/8/2019</td>
                <td>23/8/2019</td>
                <td>
                    <a style="display: inline-block; width: 67px;" href="#" class="btn btn-warning">Edit</a>
                    <form style="display: inline-block;" action="#" method="post" accept-charset="utf-8">
                        @csrf
                        {{method_field('delete')}}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr> --}}
        </table>
    </div>
</div>
@endsection
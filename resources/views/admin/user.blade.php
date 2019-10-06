@extends('admin.master')
@section('content')
<div class="container">
    <a href="{{route('users.create')}}" class="btn btn-success">Add</a>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            	@foreach($list as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>
                    <a style="display: inline-block; width: 67px;" href="{{route('users.show', $item->id)}}" class="btn btn-warning">Show</a>
                    <a style="display: inline-block; width: 67px;" href="{{route('users.edit', $item->id)}}" class="btn btn-warning">Edit</a>
                    <form style="display: inline-block;" action="{{ route('users.destroy', $item->id) }}" method="post" accept-charset="utf-8">
                        @csrf
                        {{method_field('delete')}}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
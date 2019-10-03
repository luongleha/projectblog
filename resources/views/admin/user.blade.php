@extends('admin.master')
@section('content')
<div class="container">
    <a href="#" class="btn btn-success">Add</a>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
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
                <td>{{$item->id}}</td>
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
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
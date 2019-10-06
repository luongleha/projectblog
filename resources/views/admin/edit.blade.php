@extends('admin.master')
@section('content')
<div class="container">
    <form action="{{ route('users.update', $item->id) }}" method="POST" class="" role="form">
            @csrf
            <input name="_method" type="hidden" value="PUT">
            {{--{{ method_field('PUT') }}--}}
            <div class="form-group">
                <legend>Update user</legend>
            </div>
            <div class="form-group">
                <label class="control-label" for="user">User:</label>
                <input name="name" type="text" value="{{ $item->name }}" class="form-control" id="user" placeholder="Enter user">
            </div>
            <div class="form-group">
                <label class="control-label" for="user">User:</label>
                <input name="email" type="text" value="{{ $item->email }}" class="form-control" id="user" placeholder="Enter user">
            </div>
            <div class="form-group">
                <div class="">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
</div>
@endsection
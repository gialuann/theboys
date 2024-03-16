@extends('admin.blog.master')
@section('title' ,'Country')
@section('action', 'Edit')
@section('content')
<form method="post" action="{{ route('admin.country.update', ['id' => $id]) }}">
    @csrf

<div class="card-body">
    <div class="form-group">
        <td>
        <label>Country name</label>
        </td>
        <td>
        <input type="text" class="form-control" placeholder="Enter Country name" name="name" value="{{old('name',$country->name)}}">
        </td>
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">upDate</button>
    </div>
</div>
@endsection
@extends('admin.blog.master')
@section('title' ,'country')
@section('action', 'create')
@section('content')
<form method="post" action="{{ route('admin.country.store')}}">
    @csrf

<div class="card-body">
    <div class="form-group">
        <div class="form-group">
            <label>Category parent</label>
            <select class="form-control" name="parent_id">
                <option value="0">----- Root -----</option>
            </select>
        </div>
        <td>
        <label>Country name</label>
        </td>
        <td>
        <input type="text" class="form-control" placeholder="Enter Country name" name="name" value="{{old('name')}}">
        </td>
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
</div>
@endsection
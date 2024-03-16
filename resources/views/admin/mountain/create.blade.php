@extends('admin.blog.master')
@section('title' ,'mountain')
@section('action', 'create')
@section('content')

<form method="post" action="{{ route('admin.mountain.store') }}" enctype="multipart/form-data">
    @csrf
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">mountain create</h3>

        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>country_id</label>
                        <select class="form-control" name="country_id">
                            <option value="0" {{old('country_id') == 0 ? 'selected' : ""}}>----- Root -----</option>
                            @foreach ($countries as $country )
                                <option value="{{$country->id}}" {{old('country_id') == $country->id ? 'selected' : ""}}>{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Mountain Name</label>
                        <input type="text" class="form-control" placeholder="Enter mountain name" name="name" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <label>Mountain Height</label>
                        <input type="text" class="form-control" placeholder="Enter mountain name" name="height" value="{{old('height')}}">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary" >Create</button>
        </div>
    </div>
    <!-- /.card -->
</form>
@endsection
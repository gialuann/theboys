@extends('admin.blog.master')
@section('title' ,'country')
@section('action', 'List')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Countries list</h3>

        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
        </button>
        </div>
    </div>

    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped" border="1px">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Create At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($countries as $country )
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$country->name}}</td>
                    <td>{{date('d/m/y -H:m:i', strtotime($country->created_at)) }}</td>
                    <td><a href="{{route('admin.country.edit',['id'=> $country->id])}}">Edit</a></td>
                    <td><a onclick="return confirmDelete('country')" href="{{route('admin.country.destroy',['id'=> $country->id])}}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
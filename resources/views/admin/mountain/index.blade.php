@extends('admin.blog.master')
@section('title' ,'country')
@section('action', 'List')


@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Category list</h3>

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
                    <th>Name Mountain</th>
                    <th>Height</th>
                    <th>image</th>
                    <th>Create At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mountains as $mountain)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$mountain->name}}</td>
                    <td>{{$mountain->height}}</td>
                    <td>{{$mountain->image}}</td>
                    <td>{{date('d/m/y -H:m:i', strtotime($mountain->created_at)) }}</td>
                    <td><a href="{{route('admin.mountain.edit',['id'=> $mountain->id])}}">Edit</a></td>
                    <td><a onclick="return confirmDelete('mountain')" href="{{route('admin.mountain.destroy',['id'=> $mountain->id])}}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
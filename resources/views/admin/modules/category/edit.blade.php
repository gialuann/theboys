@extends('admin.master')
@section('module' ,'category')
@section('action','list')  


@section('content')
    <!-- Default box -->
    <form action="{{route('admin.category.update',['id'=>$id])}}" method="post">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">category-list</h3>
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
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" class="form-control" placeholder="Enter category name" name="name" value="{{old('name',$category->name)}}">
                  </div>

                  <div class="form-group">
                    <label >Category parent</label>
                    <select class="form-control" name="parent_id" ">
                        <option value="0">----Root----</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label >status</label>
                    <select class="form-control" name="staztus">
                        <option value="1" {{old('status',$category->status)== 1? 'selected':' '}}>show</option>
                        <option value="2" {{old('status',$category->status)== 2? 'selected':' ' }}>hide</option>
                    </select>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Create</button>
                  </div>
            </form>
            
        </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

@endsection
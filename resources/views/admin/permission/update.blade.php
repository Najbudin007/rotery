@extends('admin.layouts.master')
@section('content')
    <div class="container">

        <div class="card card-primary mt-2">
            <div class="card-header">
                <h3 class="card-title">Update Permission</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('permission.update', $permission->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Permission Name</label>
                        <input type="text" class="form-control" placeholder="Enter permission name" name="name"
                            value="{{ $permission->name ?? '' }}">
                        @error('name')
                            <div class="text-red">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

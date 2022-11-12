@extends('admin.layouts.master')
@section('content')
    <div class="container">

        <div class="card card-primary mt-2">
            <div class="card-header">
                <h3 class="card-title">Update Project Type</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('project-type.update', $projectType->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Type</label>
                        <input type="text" class="form-control" placeholder="Enter projectType name" name="type"
                            value="{{ $projectType->type ?? '' }}">
                        @error('type')
                            <div class="text-red">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Status</label>
                        <select name="status" id="" class="form-control" required>
                            <option value="active" @if ($projectType->status === 'active') selected @endif>Active</option>
                            <option value="inactive" @if ($projectType->status === 'inactive') selected @endif>Inactive
                            </option>
                        </select>
                        @error('status')
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

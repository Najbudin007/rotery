@extends('admin.layouts.master')
@section('content')
    <div class="container">

        <div class="card card-primary mt-2">
            <div class="card-header">
                <h3 class="card-title">Create Notice</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('notice.update', $notice->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <img class="w-100" id="output00" alt=""
                                    src="{{ asset('images/' . $notice->image) }}"
                                    style="height:250px;object-fit:fill;min-width:100%;">
                                <label for="exampleInputEmail1"> Notice Image</label>
                                <input type="file" class="form-control" onchange="loadFile9(event)"
                                    placeholder="Add profile picture" name="image">
                                @error('image')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1"> Title</label>
                                <input type="text" class="form-control" placeholder="Enter title" name="title"
                                    value="{{ $notice->title }}" required>
                                @error('title')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Description</label>
                                <textarea type="text" class="form-control" placeholder="Enter description" value="{{ $notice->description }}"
                                    name="description">{{ $notice->description }} </textarea>
                                @error('description')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Short Description</label>
                                <textarea type="text" class="form-control" placeholder="Enter short description"
                                    value="{{ $notice->short_description }}"
                                    name="short_description"> {{ $notice->short_description }}</textarea>
                                @error('short_description')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1"> Status</label>
                                <select name="status" id="" class="form-control" required>
                                    <option value="active" @if ($notice->status === 'active') selected @endif>Active</option>
                                    <option value="inactive" @if ($notice->status === 'inactive') selected @endif>Inactive
                                    </option>
                                </select>
                                @error('status')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        var loadFile9 = function(event) {
            let image77 = document.getElementById('output00');
            image77.src = URL.createObjectURL(event.target.files[0]);
            image77.style.display = "block"
        };
    </script>
@endsection

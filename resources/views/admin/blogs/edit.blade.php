@extends('admin.layouts.master')
@section('content')
    <div class="container">

        <div class="card card-primary mt-2">
            <div class="card-header">
                <h3 class="card-title">Update Blogs</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('blogs.update', $blogs->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <img class="w-100" id="output00" alt="" style="height:250px;object-fit:fill;"
                                    src="{{ asset('images/' . $blogs->image) }}">
                                <label for="exampleInputEmail1"> News Image</label>
                                <input type="file" class="form-control" onchange="loadFile9(event)"
                                    placeholder="Add profile picture" name="image">
                                @error('image')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" placeholder="Enter title" name="title"
                                    value="{{ $blogs->title }}" required>
                                @error('title')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea type="text" id="summernote" class="form-control" rows="5" cols="10" placeholder="Enter description"
                                    value="{{ $blogs->description }}"
                                    name="description">{{ $blogs->description }}</textarea>
                                @error('description')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Short Description</label>
                                <textarea type="text" class="form-control" id="summernote1" placeholder="Enter short description"
                                    value="{{ $blogs->short_description }}"
                                    name="short_description">{{ $blogs->short_description }} </textarea>
                                @error('short_description')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Author</label>
                                <input type="text" class="form-control" value="{{$blogs->author}}" name="author" required>
                                @error('author')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <select name="status" id="" class="form-control" required>
                                    <option value="active" @if ($blogs->status === 'active') selected @endif>Active</option>
                                    <option value="inactive" @if ($blogs->status === 'inactive') selected @endif>Inactive
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
@section('scripts')
    <script>
        $('#summernote').summernote({
            height: 100, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true // set focus to editable area after initializing summernote
        });
        $('#summernote1').summernote({
            height: 100, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true // set focus to editable area after initializing summernote
        });

        var deleteImage = function(event, img) {
            if (confirm("Are you sure to delete the selected file? Actions cannot be reverted")) {

                $.ajax({
                    url: '/deleteNewsFile',
                    method: "DELETE",
                    data: {
                        fileName: img,
                        id: "{{ $blogs->id }}",
                        "_token": "{{ csrf_token() }}"
                    },
                    success: event.target.parentElement.remove()
                })
            }
        }
    </script>
@endsection

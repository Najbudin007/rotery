@extends('admin.layouts.master')
@section('content')
    <div class="container">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                
            </div>
        @endif

        <div class="card card-primary mt-2">
            <div class="card-header">
                <h3 class="card-title">Create AboutUs</h3>
            </div>
            <form action="{{ route('aboutUs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" placeholder="Enter title" name="title"
                                    required>
                                @error('title')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea type="text" id="summernote" class="form-control" rows="5" cols="10"
                                    placeholder="Enter description" name="description"> </textarea>
                                @error('description')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Short Description</label>
                                <textarea type="text" class="form-control" id="summernote1" placeholder="Enter short description" name="summary"> </textarea>
                                @error('summary')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <img class="w-100" id="output00" alt=""
                                    style="height:250px;object-fit:fill;min-width:100%;display:none">
                                <label for="exampleInputEmail1">Optional Image</label>
                                <input type="file" class="form-control" onchange="loadFile9(event)"
                                    placeholder="Add Photo picture" name="image">
                                @error('image')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1"> Status</label>
                                <select name="status" id="" class="form-control" required>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
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
@endsection
@section('scripts')
    <script>
        $('#summernote').summernote({
            placeholder: "Enter Your Description",
            height: 100, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true, // set focus to editable area after initializing summernote
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    var c = Object.values(files);
                    c.forEach(file => {
                        sendFile(file, this);
                    });
            }
        }
        });

        function sendFile(file, el) {
            var from_data = new FormData();
            from_data.append('file', file);
            $.ajax({
                data: from_data,
                type: "POST",
                url: '/editor-upload',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(url) {
                    $(el).summernote('editor.insertImage', url);
                }
            });
        }

        $('#summernote1').summernote({
            height: 100, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true, // set focus to editable area after initializing summernote
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    var c = Object.values(files);
                    c.forEach(file => {
                        sendFile(file, this);
                    });
            }
        }
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".btn-success").click(function() {
                var lsthmtl = $(".clone").html();
                $(".increment").after(lsthmtl);
            });
            $("body").on("click", ".btn-danger", function() {
                $(this).parents(".hdtuto").remove();
            });
        });
    </script>
@endsection

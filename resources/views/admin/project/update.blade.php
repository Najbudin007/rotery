@extends('admin.layouts.master')
@section('content')
    <div class="container">

        <div class="card card-primary mt-2">
            <div class="card-header">
                <h3 class="card-title">Update project</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <img class="w-100" id="output00" alt="" style="height:250px;object-fit:fill;"
                                    src="{{ asset('images/' . $project->image) }}">
                                <label for="exampleInputEmail1"> project Image</label>
                                <input type="file" class="form-control" onchange="loadFile9(event)"
                                    placeholder="Add profile picture" name="image">
                                @error('image')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1"> Select Project Type</label>
                                <select name="project_type_id" id="" class="form-control" required>
                                    @foreach (App\Models\ProjectType::latest()->get() as $projectType)
                                        <option value="{{ $projectType->id }}"
                                            @if ($project->project_type_id === $projectType->project_type_id) selected @endif>{{ $projectType->type }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('project_type_id')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Title</label>
                                <input type="text" class="form-control" placeholder="Enter title" name="title"
                                    value="{{ $project->title }}" required>
                                @error('title')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Description</label>
                                <textarea type="text" id="summernote" class="form-control" rows="5" cols="10" placeholder="Enter description"
                                    value="{{ $project->description }}"
                                    name="description">{{ $project->description }}</textarea>
                                @error('description')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Short Description</label>
                                <textarea type="text" class="form-control" id="summernote1" placeholder="Enter short description"
                                    value="{{ $project->short_description }}"
                                    name="short_description">{{ $project->short_description }} </textarea>
                                @error('short_description')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Files</label>
                                <div>
                                    <style>
                                        .file {
                                            background: red;
                                            color: white;
                                            padding: 3px 5px;
                                            border-radius: 20px;
                                            margin-right: 10px;
                                            margin-bottom: 10px;
                                            display: inline-flex;
                                            justify-content: center;
                                            align-items: center;
                                            font-size: 14px
                                        }

                                        .x {
                                            background: white;
                                            color: red;
                                            font-size: 8px;
                                            font-weight: 900;
                                            border-radius: 20px;
                                            padding: 4px 8px;
                                            margin-left: 15px;
                                            cursor: pointer;
                                        }

                                    </style>
                                    @if ($project['files'])
                                        @foreach ($project['files'] as $key => $file)
                                            <span class="file">
                                                <span>{{ $file }}</span> <span class="x"
                                                    onclick="deleteImage(event , '{{ $file }}')">X</span>
                                            </span>
                                        @endforeach
                                    @endif
                                </div>

                                <input type="file" class="form-control" name="files[]" multiple>
                                @error('short_description')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1"> Status</label>
                                <select name="status" id="" class="form-control" required>
                                    <option value="active" @if ($project->status === 'active') selected @endif>Active</option>
                                    <option value="inactive" @if ($project->status === 'inactive') selected @endif>Inactive
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
                    url: '/deleteprojectFile',
                    method: "DELETE",
                    data: {
                        fileName: img,
                        id: "{{ $project->id }}",
                        "_token": "{{ csrf_token() }}"
                    },
                    success: event.target.parentElement.remove()
                })
            }
        }
    </script>
@endsection

@extends('admin.layouts.master')
@section('content')
    <div class="container">

        <div class="card card-primary mt-2">
            <div class="card-header">
                <h3 class="card-title">Update Video</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('updateVideo', $video->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="video" name="type">
                <input type="hidden" value="{{ $video->gallery_folder_id }}" name="gallery_folder_id">
                @if ($errors->any())
                    {{ implode('', $errors->all('<div>:message</div>')) }}
                @endif
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-group">
                                <label for="exampleInputEmail1"> Link</label>
                                <input type="text" class="form-control" placeholder="Enter link"
                                    value="{{ $video->link }}" name="link" required>
                                @error('link')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1"> Status</label>
                                <select name="status" id="" class="form-control" required>
                                    <option value="active" @if ($video->status === 'active') selected @endif>Active</option>
                                    <option value="inactive" @if ($video->status === 'inactive') selected @endif>Inactive
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

@extends('admin.layouts.master')
@section('content')
    <div class="container">

        <div class="card card-primary mt-2">
            <div class="card-header">
                <h3 class="card-title">Update Testimonial</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('testimonial.update', $testimonial->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <img class="w-100" id="output00" alt=""
                                    src="{{ asset('/images/' . $testimonial->image) }}"
                                    style="height:250px;object-fit:cover">
                                <label for="exampleInputEmail1"> Testimonial Image</label>
                                <input type="file" class="form-control" onchange="loadFile9(event)"
                                    placeholder="Add profile picture" name="image">
                                @error('image')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1"> Name</label>
                                <input type="text" class="form-control" placeholder="Enter name" name="name"
                                    value="{{ $testimonial->name }}" required>
                                @error('name')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1"> Designation</label>
                                <input type="text" class="form-control" placeholder="Enter designation" name="designation"
                                    value="{{ $testimonial->designation }}" required>
                                @error('designation')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Message</label>
                                <textarea type="text" class="form-control" placeholder="Enter message" name="message"
                                    value="{{ $testimonial->message }}">{{ $testimonial->message }} </textarea>
                                @error('message')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1"> Status</label>
                                <select name="status" id="" class="form-control" required>
                                    <option value="active" @if ($testimonial->status === 'active') selected @endif>Active</option>
                                    <option value="inactive" @if ($testimonial->status === 'inactive') selected @endif>Inactive
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

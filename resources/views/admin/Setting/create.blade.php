@extends('admin.layouts.master')
@section('content')
    <div class="container">

        <div class="card card-primary mt-2">
            <div class="card-header">
                <h3 class="card-title">Create Settings</h3>
            </div>
            <form action="{{ route('setting.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                @csrf
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <img id="output00" alt="" style="height: 100px; object-fit:cover; width:100px;"
                                    src="{{ asset('images/' . $setting->image) }}"
                                    style="height: 50px; object-fit:cover; width:100px;">
                                <label for="exampleInputEmail1">Site Logo</label>
                                <input type="file" class="form-control" onchange="loadFile9(event)" name="image">
                                @error('image')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Site Title</label>
                                <input type="text" class="form-control" placeholder="Enter Site Title"
                                    value="{{ $setting->site_title }}" name="site_title" required>
                                @error('site_title')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <img id="output01" alt="" style="height: 100px; object-fit:cover; width:100px;"
                                    src="{{ asset('images/' . $setting->alternate_image) }}">
                                <label for="exampleInputEmail1"> Alternate Logo</label>
                                <input type="file" class="form-control" onchange="loadFile10(event)"
                                    name="alternate_image">
                                @error('alternate_image')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">District</label>
                                <input type="text" class="form-control" placeholder="Enter District"
                                    value="{{ $setting->district }}" name="district" required>
                                @error('district')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Club Number</label>
                                <input type="text" class="form-control" name="club_number"
                                    value="{{ $setting->club_number }}" placeholder="Enter Club Number" required\>
                                @error('club_number')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1"> Contact Number</label>
                                <input type="number" class="form-control" name="contact_number"
                                    value="{{ $setting->contact_number }}" placeholder="Enter  Number">
                                @error('contact_number')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- About Section --}}
                            <div class="mt-2" style=" color: #000;font-weight: 500;font-family: revert;">
                                <span>
                                    <h2>Home Page About Us Section</h2>
                                </span>
                            </div>

                            <div class="form-group mt-3">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea type="text" id="summernote" class="form-control" rows="5" cols="10"
                                    placeholder="Enter description" name="description">{!! $setting->description !!} </textarea>
                                @error('description')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <img id="output00" alt="" style="height: 100px; object-fit:cover; width:100px;"
                                    src="{{ asset('images/' . $setting->about_image) }}">
                                <label for="exampleInputEmail1">About Section Image</label>
                                <input type="file" class="form-control" onchange="loadFile9(event)"
                                    name="about_image">
                                @error('about_image')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
   
@endsection
@section('scripts')' <script>
        var loadFile9 = function(event) {
            let image77 = document.getElementById('output00');
            image77.src = URL.createObjectURL(event.target.files[0]);
            image77.style.display = "block"
        };
    </script>
     <script>
        var loadFile10 = function(event) {
            let image77 = document.getElementById('output01');
            image77.src = URL.createObjectURL(event.target.files[0]);
            image77.style.display = "block"
        };
    </script>
    <script>
        $('#summernote').summernote({
            height: 100, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true // set focus to editable area after initializing summernote
        });
    </script>
@endsection

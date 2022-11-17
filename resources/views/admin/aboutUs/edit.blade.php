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
                <h3 class="card-title">Update AboutUs</h3>
            </div>
            <form action="{{ route('aboutUs.update', $aboutUs->id) }}" method="POST" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" placeholder="Enter title" name="title" value="{{$aboutUs->title}}"
                                    required>
                                @error('title')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Who we are ?</label>
                                <textarea type="text" id="summernote" class="form-control" rows="5" cols="10"
                                    placeholder="Enter description" name="description">{{$aboutUs->description}} </textarea>
                                @error('description')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <img class="" id="output00" alt="" src="{{ asset('images/' . $aboutUs->who_image1) }}"
                                    style="height:150px;object-fit:fill;">
                                <label for="exampleInputEmail1">Who we are Image 1</label>
                                <input type="file" class="form-control" onchange="loadFile9(event)"
                                    placeholder="Add Photo picture" name="who_image1">
                                @error('who_image1')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <img class="" id="output00" alt="" src="{{ asset('images/' . $aboutUs->who_image2) }}"
                                    style="height:150px;object-fit:fill;">
                                <label for="exampleInputEmail1">Who we are Image 2</label>
                                <input type="file" class="form-control" onchange="loadFile9(event)"
                                    placeholder="Add Photo picture" name="who_image2">
                                @error('who_image2')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <img class="" id="output00" alt="" src="{{ asset('images/' . $aboutUs->who_image3) }}"
                                    style="height:150px;object-fit:fill;">
                                <label for="exampleInputEmail1">Who we are Image 3</label>
                                <input type="file" class="form-control" onchange="loadFile9(event)"
                                    placeholder="Add Photo picture" name="who_image3">
                                @error('who_image3')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <img class="" id="output00" alt="" src="{{ asset('images/' . $aboutUs->who_image4) }}"
                                    style="height:150px;object-fit:fill;">
                                <label for="exampleInputEmail1">Who we are Image 4</label>
                                <input type="file" class="form-control" onchange="loadFile9(event)"
                                    placeholder="Add Photo picture" name="who_image4">
                                @error('who_image4')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Why Us ?</label>
                                <textarea type="text" class="form-control" id="summernote1" placeholder="Enter short description" name="summary">{{$aboutUs->summary}}</textarea>
                                @error('summary')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <img class="" id="output00" alt="" src="{{ asset('images/' . $aboutUs->why_image1) }}"
                                    style="height:150px;object-fit:fill;">
                                <label for="exampleInputEmail1">Why Us Image 1</label>
                                <input type="file" class="form-control" onchange="loadFile9(event)"
                                    placeholder="Add Photo picture" name="why_image1">
                                @error('why_image1')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <img class="" id="output00" alt="" src="{{ asset('images/' . $aboutUs->why_image2) }}"
                                    style="height:150px;object-fit:fill;">
                                <label for="exampleInputEmail1">Why Us Image 2</label>
                                <input type="file" class="form-control" onchange="loadFile9(event)"
                                    placeholder="Add Photo picture" name="why_image2">
                                @error('why_image2')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <img class="" id="output00" alt="" src="{{ asset('images/' . $aboutUs->why_image3) }}"
                                    style="height:150px;object-fit:fill;">
                                <label for="exampleInputEmail1">Why Us Image 3</label>
                                <input type="file" class="form-control" onchange="loadFile9(event)"
                                    placeholder="Add Photo picture" name="why_image3">
                                @error('why_image3')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <img class="" id="output00" alt="" src="{{ asset('images/' . $aboutUs->why_image4) }}"
                                    style="height:150px;object-fit:fill;">
                                <label for="exampleInputEmail1">Why Us Image 4</label>
                                <input type="file" class="form-control" onchange="loadFile9(event)"
                                    placeholder="Add Photo picture" name="why_image4">
                                @error('why_image4')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <img class="" id="output00" alt="" src="{{ asset('images/' . $aboutUs->image) }}"
                                    style="height:150px;object-fit:fill;">
                                <label for="exampleInputEmail1">Optional Image</label>
                                <input type="file" class="form-control" onchange="loadFile9(event)"
                                    placeholder="Add Photo picture" name="image">
                                @error('image')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="my-3" style=" color: #000;font-weight: 500;font-family: revert;font-size: 21px;
                            padding: 20px;">
                                <span>
                                    <h2>Glimpse of Event Section</h2>
                                </span>
                            </div>

                            <div class="form-group">
                                <img class="" id="output00" alt="" src="{{ asset('images/' . $aboutUs->glimpse1) }}"
                                    style="height:150px;object-fit:fill;">
                                <label for="exampleInputEmail1">Gmimpse of Event image 1</label>
                                <input type="file" class="form-control" onchange="loadFile9(event)"
                                    placeholder="Add Photo picture" name="glimpse1">
                                @error('glimpse1')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <img class="" id="output00" alt="" src="{{ asset('images/' . $aboutUs->glimpse2) }}"
                                    style="height:150px;object-fit:fill;">
                                <label for="exampleInputEmail1">Gmimpse of Event image 2</label>
                                <input type="file" class="form-control" onchange="loadFile9(event)"
                                    placeholder="Add Photo picture" name="glimpse2">
                                @error('glimpse2')
                                    <div class="text-red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <img class="" id="output00" alt="" src="{{ asset('images/' . $aboutUs->glimpse3) }}"
                                    style="height:150px;object-fit:fill;">
                                <label for="exampleInputEmail1">Gmimpse of Event image 3</label>
                                <input type="file" class="form-control" onchange="loadFile9(event)"
                                    placeholder="Add Photo picture" name="glimpse3">
                                @error('glimpse3')
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
    </script>

<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".hdtuto").remove();
      });
    });
</script>

@endsection

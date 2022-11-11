@extends('admin.layouts.master')
@section('styles')
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <style>
        .img-div:hover .cross {
            display: flex
        }

        .cross {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            /* display: flex; */
            align-items: center;
            justify-content: center;
            background: rgb(0 0 0 / 59%);
            cursor: pointer;
            transition: 0.5s;
        }

        iframe {
            width: 100% !important;
            height: 100% !important;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class=" mt-4">
            <div class="card">
                <div class="card-header text-center font-weight-bold d-flex justify-content-between w-100">
                    <h4 class="my-auto">{{ $galleries[0]['name'] }}</h4>
                    <button class="btn btn-sm btn-danger mx-2 d-none" id="deleteAllBtn">Delete All</button>

                    <div class="ml-auto">
                        <a href="{{ route('createVideo', $galleries[0]['slug']) }}" type="submit"
                            class="btn btn-sm btn-outline-secondary ml-auto">Add
                            Video</a>
                    </div>
                </div>
                <div class="card-body">
                    <h1 class="mb-2 text-bold">Add Image</h1>
                    <form action="{{ route('uploadImages') }}" class="dropzone" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $galleries[0]['id'] }}" name="gallery_folder_id">
                        <input type="hidden" value="image" name="type">
                        <input type="hidden" value="active" name="status">
                    </form>
                    <ul class="nav nav-tabs my-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Images</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                aria-controls="contact" aria-selected="false">Videos</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row g-4">
                                @foreach ($galleries[0]['galleries'] as $gallery)
                                    <div class="col-md-3   relative" id="remove{{ $gallery->id }}">
                                        <div class="relative img-div ">
                                            @if ($gallery->type === 'image')
                                                <img src="{{ asset('images/' . $gallery->image) }}" alt=""
                                                    class="w-100 " style="height: 200px;object-fit:cover">
                                            @else
                                                {!! $gallery->link !!}
                                            @endif

                                            <div class="cross p-3">
                                                @if ($gallery->type === 'image')
                                                    <a href="{{ route('gallery-images.edit', $gallery->id) }}"
                                                        class="btn btn-sm btn-outline-light"><i
                                                            class="ri-eye-line"></i></a>
                                                @else
                                                    <a href="{{ route('editVideo', $gallery->id) }}"
                                                        class="btn btn-sm btn-outline-light"><i
                                                            class="ri-eye-line"></i></a>
                                                @endif
                                                <button type="button" class="btn btn-sm mx-1 btn-outline-danger"
                                                    data-toggle="modal" data-target="#exampleModalLong{{ $gallery->id }}">
                                                    <i class="ri-delete-bin-7-line"></i> </button>

                                                <!-- Modal -->

                                            </div>
                                            <div class="modal fade show" id="exampleModalLong{{ $gallery->id }}"
                                                tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Delete
                                                                Data</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete the selected image?
                                                            <p class="text-red">Actions cannot be reverted.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Cancel</button>
                                                            <form action="" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                {{ method_field('DELETE') }}
                                                                <button type="button" class="btn btn-danger"
                                                                    data-dismiss="modal"
                                                                    onclick="deleteImage('{{ $gallery->id }}')">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row g-4">
                                @foreach ($galleries[0]['galleries'] as $gallery)
                                    @if ($gallery->type === 'image')
                                        <div class="col-md-3   relative" id="remove{{ $gallery->id }}">
                                            <div class="relative img-div ">
                                                @if ($gallery->type === 'image')
                                                    <img src="{{ asset('images/' . $gallery->image) }}" alt=""
                                                        class="w-100 " style="height: 200px;object-fit:cover">
                                                @else
                                                    {!! $gallery->link !!}
                                                @endif

                                                <div class="cross p-3">
                                                    @if ($gallery->type === 'image')
                                                        <a href="{{ route('gallery-images.edit', $gallery->id) }}"
                                                            class="btn btn-sm btn-outline-light"><i
                                                                class="ri-eye-line"></i></a>
                                                    @else
                                                        <a href="{{ route('editVideo', $gallery->id) }}"
                                                            class="btn btn-sm btn-outline-light"><i
                                                                class="ri-eye-line"></i></a>
                                                    @endif
                                                    <button type="button" class="btn btn-sm mx-1 btn-outline-danger"
                                                        data-toggle="modal"
                                                        data-target="#exampleModalLong{{ $gallery->id }}">
                                                        <i class="ri-delete-bin-7-line"></i> </button>

                                                    <!-- Modal -->

                                                </div>
                                                <div class="modal fade show" id="exampleModalLong{{ $gallery->id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Delete
                                                                    Data</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure you want to delete the selected image?
                                                                <p class="text-red">Actions cannot be reverted.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Cancel</button>
                                                                <form action="" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    {{ method_field('DELETE') }}
                                                                    <button type="button" class="btn btn-danger"
                                                                        data-dismiss="modal"
                                                                        onclick="deleteImage('{{ $gallery->id }}')">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row g-4 py-3">
                                @foreach ($galleries[0]['galleries'] as $gallery)
                                    @if ($gallery->type === 'video')
                                        <div class="col-md-3   relative" id="remove{{ $gallery->id }}">
                                            <div class="relative img-div ">
                                                @if ($gallery->type === 'image')
                                                    <img src="{{ asset('images/' . $gallery->image) }}" alt=""
                                                        class="w-100 " style="height: 200px;object-fit:cover">
                                                @else
                                                    {!! $gallery->link !!}
                                                @endif

                                                <div class="cross p-3">
                                                    @if ($gallery->type === 'image')
                                                        <a href="{{ route('gallery-images.edit', $gallery->id) }}"
                                                            class="btn btn-sm btn-outline-light"><i
                                                                class="ri-eye-line"></i></a>
                                                    @else
                                                        <a href="{{ route('editVideo', $gallery->id) }}"
                                                            class="btn btn-sm btn-outline-light"><i
                                                                class="ri-eye-line"></i></a>
                                                    @endif
                                                    <button type="button" class="btn btn-sm mx-1 btn-outline-danger"
                                                        data-toggle="modal"
                                                        data-target="#exampleModalLong{{ $gallery->id }}">
                                                        <i class="ri-delete-bin-7-line"></i> </button>

                                                    <!-- Modal -->

                                                </div>
                                                <div class="modal fade show" id="exampleModalLong{{ $gallery->id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Delete
                                                                    Data</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure you want to delete the selected image?
                                                                <p class="text-red">Actions cannot be reverted.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Cancel</button>
                                                                <form action="" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    {{ method_field('DELETE') }}
                                                                    <button type="button" class="btn btn-danger"
                                                                        data-dismiss="modal"
                                                                        onclick="deleteImage('{{ $gallery->id }}')">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>


                    <div class="imgs mt-4">


                    </div>
                </div>
            </div>


        </div>
    </div>
    <script type="text/javascript">
        DropZone.autoDiscover = false;
        var dropzone = new DropZone(".dropzone", {
            maxFilesize: 2,
            acceptedFiles: ".jpeg , .png , .jpg",
        })
        dropzone.on("sending", function(file, xhr, formData) {
            formData.append("_token", "{{ csrf_token() }}")
        })
        dropzone.on("success", function(file, response) {
            console.log(response);
        })

        function deleteImage(id) {
            $.ajax({
                url: "/delete-image",
                method: "DELETE",
                data: {
                    id,
                    "_token": "{{ csrf_token() }}"
                },
                success: function() {
                    $("#remove" + id).remove();
                    $("#exampleModalLong" + id).remove();
                }
            })
        }
    </script>
@endsection

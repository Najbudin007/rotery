@extends('admin.layouts.master')
@section('content')
    <style>
        .folder {
            position: relative;
            padding: 5px;
            border-radius: 5px;
            margin: 10px
        }

        .action-box {
            /* display: none; */
        }

        .folder:hover {
            background: #e2e2e2;

        }

        .action-box a,
        .action-box button {
            display: none;
        }

        .folder:hover .action-box {
            display: flex;
            transition: 1s;
            position: absolute;
            right: 5px;
            top: 10px;
        }

        .folder:hover .action-box a,
        .folder:hover .action-box button {
            display: block;
        }

    </style>
    <div class="container">

        <div class=" mt-4">
            <div class="card " style="width: 100%">
                <div class="card-header text-center font-weight-bold d-flex justify-content-between w-100">
                    <h4 class="my-auto">Gallery Folders</h4>

                    <a href="{{ route('gallery-folder.create') }}" class="btn btn-sm btn-outline-success ml-auto">Add
                        Gallery Folder</a>
                </div>
                <div class="">
                    <div class="row">
                        @foreach ($folders as $folder)
                            <div class="col-md-2 folder " style="text-decoration: none;color:black;cursor:pointer">
                                <div class="action-box  justify-end">
                                    <a href="{{ route('gallery-folder.edit', $folder->id) }}"
                                        class="btn btn-sm btn-outline-success"><i class="ri-eye-line"></i></a>

                                    {{-- delete button --}}
                                    <button type="button" class="btn btn-sm mx-1 btn-outline-danger" data-toggle="modal"
                                        data-target="#exampleModalLong{{ $folder->id }}">
                                        <i class="ri-delete-bin-7-line"></i> </button>
                                    {{-- delete model --}}
                                    <div class="modal fade" id="exampleModalLong{{ $folder->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Delete Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete the selected
                                                    folder( {{ $folder->name }} )?
                                                    <p class="text-red">All the images associated with this folder
                                                        will be deleted and the action cannot be reverted.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Cancel</button>
                                                    <form action="{{ route('gallery-folder.destroy', $folder->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end delete model --}}
                                </div>
                                <a href="{{ route('folderDetail', $folder->slug) }}">
                                    <img class="mt-2" src="{{ asset('default/folder.png') }}"
                                        alt="Card image cap">
                                    <p class=" text-center" style="margin-top: -20px;font-weight:600;">
                                        {{ $folder->name }}
                                    </p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection

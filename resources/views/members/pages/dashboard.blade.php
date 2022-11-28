@extends('members.layouts.master')
@section('content')
    <div class="container" style="overflow-x: hidden">

        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="bg-white mt-3 p-5">
                    <div class="row">
                        <div class="col-md-8">
                            <p><span>Name: </span>{{ auth()->user()->name }}</p>
                            <br>
                            <p><span>Designation: </span>{{ auth()->user()->designation }}</p>
                            <br>

                            <p><span>Email: </span>{{ auth()->user()->email }}</p>
                            <br>

                            <p><span> Contact Number: </span>{{ auth()->user()->number }}</p>
                            <br>

                            <p><span>Address: </span>{{ auth()->user()->address }}</p>
                            <br>

                        </div>
                        <div class="col-md-4">
                            @if (isset(auth()->user()->image))
                                <img src="{{ asset('profile/' . auth()->user()->image) }}" alt=""
                                    style="height: 150px;width:150px; object-fit: cover;" class="ml-auto">
                            @endif
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection

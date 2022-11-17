@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="bred px-3 d-flex justify-content-between">

        </div>
        <div class=" mt-4">
            <div class="card">
                <div class="card-header text-center font-weight-bold d-flex justify-content-between w-100">
                    <h4 class="my-auto">AboutUs Table</h4>
                    <button class="btn btn-sm btn-danger mx-2 d-none" id="deleteAllBtn">Delete All</button>

                    <a href="{{ route('aboutUs.create') }}" class="btn btn-sm btn-outline-success ml-auto">Add
                        AboutUs</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="datatables-example">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>


        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatables-example').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('contactForm.index') }}",
                columns: [
                    {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'phone',
                        name: 'phone'
                    },
                    {
                        data: 'Message',
                        name: 'Message'
                    },
                 
                ]
            });
        });


    </script>
@endsection

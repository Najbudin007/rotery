@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="bred px-3 d-flex justify-content-between">

        </div>
        <div class=" mt-4">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered" id="datatables-example">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Member Category</th>
                                <th>Member Fees Category</th>
                                <th>City</th>
                                <th>Date</th>
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
                ajax: "{{ route('memberForm.index') }}",
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
                        data: 'member_category',
                        name: 'member_category'
                    },
                    {
                        data: 'member_fees_category',
                        name: 'member_fees_category'
                    },
                 
                    {
                        data: 'city',
                        name: 'city'
                    },
                    {
                        data: 'date',
                        name: 'date'
                    },
                 
                ]
            });
        });


    </script>
@endsection

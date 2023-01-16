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
                                <th>Email</th>
                                <th>Action</th>
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
                columns: [{
                        data: 'id',
                        name: 'id'
                    },

                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: "action",
                        name: "action",
                        orderable: false,
                        searchable: false
                    }

                ]
            });
        });
    </script>
@endsection

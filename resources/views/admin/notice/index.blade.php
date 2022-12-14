@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="bred px-3 d-flex justify-content-between">

        </div>
        <div class=" mt-4">
            <div class="card">
                <div class="card-header text-center font-weight-bold d-flex justify-content-between w-100">
                    <h4 class="my-auto">Notice Table</h4>
                    <button class="btn btn-sm btn-danger mx-2 d-none" id="deleteAllBtn">Delete All</button>

                    <a href="{{ route('notice.create') }}" class="btn btn-sm btn-outline-success ml-auto">Add
                        Notice</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="datatables-example">
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" name="main_checkbox">
                                </th>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Created At</th>
                                <th>Status</th>
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
                ajax: "{{ route('notice.index') }}",
                columns: [{
                        data: "checkbox",
                        name: "checkbox",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'status',
                        name: 'status'
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

        $(document).on('click', 'input[name="main_checkbox"]', function() {
            if (this.checked) {
                console.log("checked");
                $('input[name="per_checkbox"]').each(function() {
                    this.checked = true;
                })
            } else {
                console.log("unchecked");

                $('input[name="per_checkbox"]').each(function() {
                    this.checked = false;
                })
            }
            toggleButton()
        });

        $(document).on('change', 'input[name="per_checkbox"]', function() {
            if ($('input[name="per_checkbox"]').length == $('input[name="per_checkbox"]:checked').length) {
                $('input[name="main_checkbox"]').prop('checked', true);
            } else {
                $('input[name="main_checkbox"]').prop('checked', false);
            }
            toggleButton()
        });

        function toggleButton() {
            if ($('input[name="per_checkbox"]:checked').length > 0) {
                $("button#deleteAllBtn").text('Delete (' + $('input[name="per_checkbox"]:checked').length + ')')
                    .removeClass('d-none');
            } else {
                $("button#deleteAllBtn").addClass("d-none");
            }
        }
        $(document).on('click', 'button#deleteAllBtn', function() {
            var checkedData = [];
            $('input[name="per_checkbox"]:checked').each(function() {
                checkedData.push($(this).data('id'));
            })
            let url = "{{ route('deleteSelectedNotice') }}";
            if (checkedData.length > 0) {
                confirm("Are you sure to delete selected Slider? Action cannot be reverted.")
                $.post(url, {
                    ids: checkedData,
                    "_token": "{{ csrf_token() }}"
                }, function(data) {
                    if (data.code == 1) {
                        $('#datatables-example').DataTable().ajax.reload(null, true);
                    }
                }, 'json');

            }
        })
    </script>
@endsection

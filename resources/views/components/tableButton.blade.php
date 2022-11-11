<div class="flex ">
    @if (isset($edit))
        <div class="edit">
            <a href="{{ route($edit['route'], $edit['id']) }}" class="btn btn-sm btn-outline-info mx-1"><i
                    class="ri-edit-box-line"></i></a>
        </div>
    @endif
    @if (isset($view))
        <div class="view">
            <a href="#" class="btn btn-sm btn-outline-success"><i class="ri-eye-line"></i></a>

        </div>
    @endif

    @if (isset($delete))
        <div class="delete">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-sm mx-1 btn-outline-danger" data-toggle="modal"
                data-target="#exampleModalLong{{ $delete['id'] }}">
                <i class="ri-delete-bin-7-line"></i> </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalLong{{ $delete['id'] }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Delete Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete the selected data?
                            <p class="text-red">Actions cannot be reverted.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <form action="{{ route($delete['route'], $delete['id']) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div>

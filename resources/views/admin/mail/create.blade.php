@extends('admin.layouts.master')
@section('content')
    <div class="container p-2 bg-light">

        <div class="mail-section">
            <form action="{{ route('mail.store') }}" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Send Mail</h3>
                            </div>
                            @if ($errors->any())
                                {!! implode('', $errors->all('<div>:message</div>')) !!}
                            @endif
                            @csrf
                            <input type="hidden" name="sent_by" id="" value="{{ auth()->user()->email }}">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">To:</label>
                                    <select class="js-example-basic-multiple form-control" name="sent_to[]"
                                        multiple="multiple">
                                        @foreach (App\Models\User::latest()->get() as $user)
                                            <option value="{{ $user->email }}">{{ $user->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Subject</label>
                                    <input type="text" name="subject" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Mail Content</label>
                                    <textarea type="text" id="summernote" class="form-control" rows="5" cols="10" placeholder="Enter description"
                                        name="content" required> </textarea>

                                    <div class="form-group">
                                        <label for="">Files(Optional)</label>
                                        <input type="file" name="files" class="form-control" multiple>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-sm w-100 btn-success">Send Mail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Select Users</h3>
                            </div>

                            <div class="card-body">
                                <table class="table responsive" style="max-height:500px">
                                    <thead>
                                        <td><input type="checkbox" name="main_checkbox" id=""></td>
                                        <td class="text-bold">Email</td>
                                    </thead>
                                    <tbody>
                                        @foreach (App\Models\User::latest()->get() as $user)
                                            <tr>
                                                <td><input type="checkbox" name="sent_to[]" id=""
                                                        value="{{ $user->email }}">
                                                </td>
                                                <td>{{ $user->email }}</td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
        $('#summernote').summernote({
            height: 100, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true // set focus to editable area after initializing summernote
        });

        $(document).on("click", 'input[name="main_checkbox"]', function() {
            if (this.checked) {
                $('input[name="sent_to[]"]').each(function() {
                    this.checked = true
                })
            } else {
                $("input[name='sent_to[]']").each(function() {
                    this.checked = false;
                })
            }
        })
        $(document).on("change", 'input[name="sent_to[]"]', function() {
            if ($('input[name="sent_to[]"]').length == $('input[name="sent_to[]"]:checked').length) {
                $('input[name="main_checkbox"]').props("checked", true)
            } else {
                $('input[name="main_checkbox"]').props("checked", false)

            }
        })
    </script>
@endsection

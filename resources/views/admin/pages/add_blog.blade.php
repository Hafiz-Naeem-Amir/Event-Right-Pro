<x-layouts.admin>
    @section('admin')
        <section class="section">
            <div class="section-header">
                <h1>Add Blog</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('admin.blog') }}">Blog</a></div>
                    <div class="breadcrumb-item">Add Blog</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="section-title">Add Blog</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form id="blogForm" method="post" action="{{ route('admin.blog.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group center">
                                                <label>Image</label>
                                                <div id="image-preview" class="image-preview">
                                                    <label for="image-upload" id="image-label"><i
                                                            class="fas fa-plus"></i></label>
                                                    <input type="file" name="image" id="image-upload" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-9">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="title" placeholder="Title"
                                                    class="form-control">
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Category</label>
                                                        <select name="category_id" class="form-control select2">
                                                            <option value="">Select Category</option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">{{ $category->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select name="status" class="form-control select2">
                                                            <option value="1">Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Tags</label>
                                                <input type="text" name="tags" class="form-control inputtags">
                                            </div>

                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="description" class="textarea_editor custom-height"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary demo-button">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .modal-backdrop {
                    display: none;
                }
            </style>
        </section>

        <!-- AJAX Script -->
        <script>
            $(document).ready(function() {
                $('#blogForm').on('submit', function(e) {
                    e.preventDefault(); // default form submit روکیں
                    let formData = new FormData(this); // form data میں image بھی شامل ہوگی

                    $.ajax({
                        url: $(this).attr('action'),
                        type: 'POST',
                        data: formData,
                        processData: false, // important
                        contentType: false, // important
                        success: function(res) {
                            Swal.fire('Success', res.message, 'success').then(() => {
                                window.location.href =
                                "{{ route('admin.blog') }}";
                            });
                        },

                        error: function(xhr) {
                            if (xhr.status === 422) {
                                let errors = xhr.responseJSON.errors;
                                $('.text-danger').remove();
                                $.each(errors, function(key, value) {
                                    $('[name="' + key + '"]').after(
                                        '<span class="text-danger">' + value[0] +
                                        '</span>');
                                });
                            } else {
                                Swal.fire('Error', 'Something went wrong!', 'error');
                            }
                        }
                    });
                });
            });
        </script>
    @endsection
</x-layouts.admin>

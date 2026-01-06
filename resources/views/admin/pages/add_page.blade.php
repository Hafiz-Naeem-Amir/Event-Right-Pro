<x-layouts.admin>
    @section('admin')
        <section class="section">
            <div class="section-header">
                <h1>Add Pages</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item">Add Pages</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">

                            <form method="post" enctype="multipart/form-data" id="page">
                                @csrf

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" id="title" placeholder="Page Title"
                                        class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Slug</label>
                                    <input type="text" name="slug" placeholder="Page slug" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control"></textarea>
                                </div>

                                <button class="btn btn-success" type="submit">Add Pages</button>

                            </form>

                        </div>
                    </div>

                </div>
            </div>

        </section>
        <script>
            $(document).ready(function() {

                // Auto-generate slug from title
                $('#title').on('input', function() {
                    let slug = $(this).val()
                        .toLowerCase()
                        .replace(/[^a-z\s]/g, '') // صرف letters اور spaces allow
                        .trim()
                        .replace(/\s+/g, '-'); // spaces → hyphen
                    $('input[name="slug"]').val(slug);
                });

                // AJAX form submit
                $('#page').on('submit', function(e) {
                    e.preventDefault();

                    let formData = new FormData(this);

                    $.ajax({
                        url: "{{ route('admin.pages.store') }}", // درست route
                        type: "POST",
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(res) {
                            // Validation errors
                            if (res.status === 400) {
                                $('#title_error').text(res.errors.title ?? '');
                                $('#slug_error').text(res.errors.slug ?? '');
                                $('#description_error').text(res.errors.description ?? '');
                            }

                            // Success
                            if (res.status === 200) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: res.message,
                                    timer: 2000,
                                    showConfirmButton: false
                                }).then(() => {
                                    window.location.href =
                                        "{{ route('admin.pages') }}"; // redirect
                                });
                                $('#page')[0].reset(); // Reset form
                            }
                        },
                        error: function(xhr) {
                            let errorText = 'Something went wrong!';
                            if (xhr.responseJSON && xhr.responseJSON.errors) {
                                errorText = Object.values(xhr.responseJSON.errors).flat().join(
                                    "\n");
                            }
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: errorText
                            });
                        }
                    });

                });
            });
        </script>
    @endsection
</x-layouts.admin>

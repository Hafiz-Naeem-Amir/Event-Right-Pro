<x-layouts.admin>
    @section('admin')
        <section class="section">
            <div class="section-header">
                <h1>Edit Page</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item">Edit Page</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">

                            <form method="post" enctype="multipart/form-data" id="edit-page-form">
                                @csrf

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" id="title" value="{{ $page->title }}"
                                        placeholder="Page Title" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Slug</label>
                                    <input type="text" name="slug" value="{{ $page->slug }}" placeholder="Page slug"
                                        class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control">{{ $page->description }}</textarea>
                                </div>

                                <button class="btn btn-success" type="submit">Update Page</button>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <script>
            $('#title').on('input', function() {
                let slug = $(this).val()
                    .toLowerCase()
                    .replace(/[^a-z\s]/g, '')
                    .trim()
                    .replace(/\s+/g, '-');
                $('input[name="slug"]').val(slug);
            });

            $('#edit-page-form').on('submit', function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                let pageId = "{{ $page->id }}";

                $.ajax({
                    url: "{{ url('admin/pages/update') }}/" + pageId,
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message,
                            timer: 2000,
                            showConfirmButton: false
                        }).then(() => {
                            window.location.href = "{{ route('admin.pages') }}";
                        });
                    },
                    error: function(xhr) {
                        let errorText = 'Something went wrong!'; // default message

                        // Check if Laravel validation errors exist
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            errorText = Object.values(xhr.responseJSON.errors)
                                .flat()
                                .join("\n");
                        } else if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorText = xhr.responseJSON.message;
                        }

                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: errorText
                        });
                    }

                });
            });
        </script>
    @endsection
</x-layouts.admin>

<x-layouts.admin>
    @section('admin')
        <section class="section">
            <div class="section-header">
                <h1>Edit Blog</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="">Blog</a></div>
                    <div class="breadcrumb-item">Edit Blog</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="section-title">Edit Blog</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form id="editBlogForm" method="post" action="{{ route('admin.blog.update', $blog->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group center">
                                                <label>Image</label>
                                                <div id="image-preview" class="image-preview"
                                                    style="background-image: url({{ $blog->image ? asset('uploads/blogs/' . $blog->image) : '' }})">
                                                    <label for="image-upload" id="image-label"><i
                                                            class="fas fa-plus"></i></label>
                                                    <input type="file" name="image" id="image-upload" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-9">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="title" value="{{ $blog->title }}"
                                                    class="form-control" placeholder="Title">
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Category</label>
                                                        <select name="category_id" class="form-control select2">
                                                            <option value="">Select Category</option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}"
                                                                    @if ($blog->category_id == $category->id) selected @endif>
                                                                    {{ $category->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select name="status" class="form-control select2">
                                                            <option value="1"
                                                                @if ($blog->status == 1) selected @endif>Active
                                                            </option>
                                                            <option value="0"
                                                                @if ($blog->status == 0) selected @endif>Inactive
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Tags</label>
                                                <input type="text" name="tags" value="{{ $blog->tags }}"
                                                    class="form-control inputtags">
                                            </div>

                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="description" class="textarea_editor custom-height form-control">{{ $blog->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary demo-button">Update</button>
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

            <!-- AJAX Script -->
            <script>
                $(document).ready(function() {
                    $('#editBlogForm').on('submit', function(e) {
                        e.preventDefault();
                        let formData = new FormData(this);
                        $.ajax({
                            url: $(this).attr('action'),
                            type: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(res) {
    Swal.fire({
        title: 'Success',
        text: res.message,
        icon: 'success',
        timer: 1500, // 1.5 سیکنڈ بعد خود بخود بند ہو جائے گا
        showConfirmButton: false,
        willClose: () => {
            // Redirect to admin.blog page after alert closes
            window.location.href = "{{ route('admin.blog') }}";
        }
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
        </section>
    @endsection
</x-layouts.admin>
<section class="section">



<x-layouts.admin>
    @section('admin')
        <section class="section">
            <div class="section-header">
                <h1>Edit Content</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-body">
                        <form id="contentEditForm" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Image Upload -->
                            <div class="form-group">
                                <label>Current Image</label><br>
                                @if ($content->image)
                                    <img src="{{ asset('uploads/content/' . $content->image) }}" width="100">
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Change Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <!-- Title -->
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $content->title }}"
                                    required>
                            </div>

                            <!-- Page -->
                            <div class="form-group">
                                <label>Page</label>
                                <select name="page_id" class="form-control select2" required>
                                    <option value="">Select Page</option>
                                    @foreach ($pages as $page)
                                        <option value="{{ $page->id }}"
                                            {{ $content->page_id == $page->id ? 'selected' : '' }}>
                                            {{ $page->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Category -->
                            <div class="form-group">
                                <label>Category</label>
                                <select name="category_id" class="form-control select2">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}"
                                            {{ $content->category_id == $cat->id ? 'selected' : '' }}>
                                            {{ $cat->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- H1, H2, P -->
                            <div class="form-group">
                                <label>H1</label>
                                <input type="text" name="h1" class="form-control" value="{{ $content->h1 }}">
                            </div>
                            <div class="form-group">
                                <label>H2</label>
                                <input type="text" name="h2" class="form-control" value="{{ $content->h2 }}">
                            </div>
                            <div class="form-group">
                                <label>P</label>
                                <input type="text" name="p" class="form-control" value="{{ $content->p }}">
                            </div>

                            <!-- Tags -->
                            <div class="form-group">
                                <label>Tags</label>
                                <input type="text" name="tags[]" class="form-control inputtags"
                                    value="{{ $content->tags ? implode(',', json_decode($content->tags)) : '' }}">
                            </div>

                            <!-- Keyword -->
                            <div class="form-group">
                                <label>Keyword</label>
                                <input type="text" name="keyword" class="form-control" value="{{ $content->keyword }}">
                            </div>

                            <!-- Content -->
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="content" class="form-control" required>{{ $content->content }}</textarea>
                            </div>

                            <!-- Description -->
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control">{{ $content->description }}</textarea>
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- AJAX Script -->
        <script>
            $('#contentEditForm').on('submit', function(e) {
                e.preventDefault();

                let formData = new FormData(this);

                $.ajax({
                    url: "{{ route('admin.content.update', $content->id) }}", // update route
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        Swal.fire('Success', res.message, 'success').then(() => {
                            location.href =
                                "{{ route('admin.content') }}"; // redirect to content list
                        });
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            $('.text-danger').remove();
                            $.each(errors, function(key, value) {
                                $('[name="' + key + '"]').after('<span class="text-danger">' +
                                    value[0] + '</span>');
                            });
                        } else {
                            Swal.fire('Error', 'Something went wrong!', 'error');
                        }
                    }
                });
            });
        </script>
    @endsection
</x-layouts.admin>

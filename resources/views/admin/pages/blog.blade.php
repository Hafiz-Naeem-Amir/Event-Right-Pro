<x-layouts.admin>
    @section('admin')
        <section class="section">
            <div class="section-header">
                <h1>Blog</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="">Dashboard</a></div>
                    <div class="breadcrumb-item">Blog</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row mb-4 mt-2">
                    <div class="col-lg-8">
                        <h2 class="section-title mt-0">All Blogs</h2>
                    </div>
                    <div class="col-lg-4 text-right">
                        <a href="{{ route('admin.blog.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add
                            New</a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table" id="report_table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>
                                        <img class="table-img" src="{{ asset('uploads/blogs/' . $blog->image) }}"
                                            alt="blog image" style="width:60px; height:auto;">
                                    </td>

                                    <td>{{ $blog->title }}</td>
                                    <td>
                                        <span class="badge {{ $blog->status ? 'badge-success' : 'badge-danger' }}">
                                            {{ $blog->status ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn-icon"
                                            title="Edit Blog">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="deleteBlog({{ $blog->id }})"
                                            class="btn-icon text-danger" title="Delete Blog">
                                            <i class="fas fa-trash-alt text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <script>
            function deleteBlog(id) {
                Swal.fire({
                    title: "Are you sure?",
                    text: "This blog will be deleted permanently!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Delete",
                    cancelButtonText: "Cancel"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '/admin/blog/delete/' + id,
                            type: 'POST',
                            data: {
                                _token: "{{ csrf_token() }}",
                                _method: "DELETE"
                            },
                            success: function(response) {
                                if (response.status === 'success') {
                                    Swal.fire({
                                        title: 'Deleted!',
                                        text: response.message,
                                        icon: 'success',
                                        timer: 1500, // 1.5 سیکنڈ بعد خود بخود بند
                                        showConfirmButton: false,
                                        willClose: () => {
                                            // SweetAlert بند ہوتے ہی admin.blog page پر redirect
                                            window.location.href =
                                                "{{ route('admin.blog') }}";
                                        }
                                    });
                                }
                            },


                            error: function() {
                                Swal.fire('Error!', 'Something went wrong!', 'error');
                            }
                        });
                    }
                });
            }
        </script>
    @endsection
</x-layouts.admin>

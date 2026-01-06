<x-layouts.admin>
    @section('admin')
        <section class="section">
            <div class="section-header">
                <h1>Page</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Page</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row mb-4 mt-2">
                    <div class="col-lg-8">
                        <h2 class="section-title mt-0">All Page</h2>
                    </div>
                    <div class="col-lg-4 text-right">
                        <a href="{{ route('admin.pages.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add
                            New</a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table" id="report_table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pages as $page)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $page->title }}</td>
                                    <td>{{ $page->slug }}</td>
                                    <td>{{ $page->description }}</td>
                                    <td>
                                        <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn-icon"
                                            title="Edit Blog">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <a href="javascript:void(0)" onclick="deletePage({{ $page->id }})"
                                            class="">
                                            <i class="fas fa-trash-alt text-danger"></i>
                                        </a>

                                    </td>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </section>

        <script>
            function deletePage(id) {
                Swal.fire({
                    title: "Are you sure?",
                    text: "This page will be deleted permanently!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Delete",
                    cancelButtonText: "Cancel"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '/admin/pages/delete/' + id, // match your route
                            type: 'POST',
                            data: {
                                _token: "{{ csrf_token() }}",
                                _method: "DELETE" // Laravel requires _method=DELETE for POST
                            },
                            success: function(response) {
                                if (response.status === 200) { // match your controller response
                                    Swal.fire('Deleted!', response.message, 'success').then(() => {
                                        // Redirect to admin.pages after delete
                                        window.location.href = "{{ route('admin.pages') }}";
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

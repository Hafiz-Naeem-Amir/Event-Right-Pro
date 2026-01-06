<x-layouts.admin>
    @section('admin')
        <section class="section">
            <div class="section-header">
                <h1>Content</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Content</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row mb-4 mt-2">
                    <div class="col-lg-8">
                        <h2 class="section-title mt-0">All Content</h2>
                    </div>
                    <div class="col-lg-4 text-right">
                        <a href="{{ route('admin.content.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Add New
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table" id="report_table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Page</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>H1</th>
                                <th>H2</th>
                                <th>P</th>
                                <th>Tags</th>
                                <th>Keyword</th>
                                <th>Content</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($contents as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->page ? $item->page->title : '-' }}</td>
                                    <td>{{ $item->category ? $item->category->name : '-' }}</td>
                                    <td>
                                        @if ($item->image)
                                            <img src="{{ asset('uploads/content/' . $item->image) }}" alt="image"
                                                width="50">
                                        @else

                                        @endif
                                    </td>
                                    <td>{{ $item->h1 }}</td>
                                    <td>{{ $item->h2 }}</td>
                                    <td>{{ $item->p }}</td>
                                    <td>{{ $item->tags ? implode(', ', json_decode($item->tags)) : '-' }}</td>
                                    <td>{{ $item->keyword }}</td>
                                    <td>{{ Str::limit($item->content, 50) }}</td>
                                    <td>{{ Str::limit($item->description, 50) }}</td>
                                    <td>
                                        <a href="{{ route('admin.content.edit', $item->id) }}" class="btn-icon"
                                            title="Edit Content">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <a href="javascript:void(0)" onclick="deleteContent({{ $item->id }})">
                                            <i class="fas fa-trash-alt text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

            <script>
                function deleteContent(id) {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: "/admin/content/delete/" + id, // route URL
                                type: 'DELETE',
                                data: {
                                    _token: '{{ csrf_token() }}'
                                }, // csrf token
                                success: function(res) {
                                    Swal.fire('Deleted!', res.message, 'success');
                                    // Optionally remove row from table or reload
                                    location.reload();
                                },
                                error: function(err) {
                                    Swal.fire('Error', 'Something went wrong!', 'error');
                                }
                            });
                        }
                    });
                }
            </script>

        </section>
    @endsection
</x-layouts.admin>

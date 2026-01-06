<x-layouts.admin>
    @section('admin')
        <section class="section">
            <div class="section-header">
                <h1>Category</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Category</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-4 mt-2">
                                    <div class="col-lg-8">
                                        <h2 class="section-title mt-0">View Category</h2>
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <a href="{{ route('admin.category.create') }}" class="btn btn-primary add-button">
                                            <i class="fas fa-plus"></i> Add New
                                        </a>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table" id="report_table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Total Events</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $category)
                                                <tr id="category-row-{{ $category->id }}">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <img class="table-img"
                                                            src="{{ asset('uploads/category/' . $category->image) }}"
                                                            alt="{{ $category->name }}">
                                                    </td>
                                                    <td>{{ $category->name }}</td>
                                                    <td>{{ $category->events_count ?? 0 }}</td>
                                                    <td>
                                                        @if ($category->status)
                                                            <span class="badge badge-success m-1">Active</span>
                                                        @else
                                                            <span class="badge badge-warning m-1">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)" class="btn-icon edit-button"
                                                            data-id="{{ $category->id }}">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="btn-icon text-danger delete-button"
                                                            data-id="{{ $category->id }}">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <style>
            .modal-backdrop {
                display: none !important;
            }
        </style>

        <!-- Edit Category Modal -->
        <div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog"
            aria-labelledby="editCategoryModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form id="editCategoryForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="edit_category_id">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editCategoryModalLabel">Edit Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" id="edit_name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" id="edit_status" name="status">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image" id="edit_image">
                                <img id="edit_current_image" src="" alt=""
                                    style="width:100px;margin-top:10px;">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script>
            $(document).ready(function() {

                // Edit button
                $('#report_table').on('click', '.edit-button', function() {
                    let id = $(this).data('id');
                    $.get("/admin/category/edit/" + id, function(category) {
                        $('#edit_category_id').val(category.id);
                        $('#edit_name').val(category.name);
                        $('#edit_status').val(category.status);
                        $('#edit_current_image').attr('src', '/uploads/category/' + category.image);
                        $('#editCategoryModal').modal('show');
                    });
                });

                // Update form
                $('#editCategoryForm').submit(function(e) {
                    e.preventDefault();
                    let id = $('#edit_category_id').val();
                    let formData = new FormData(this);
                    $.ajax({
                        url: "/admin/category/update/" + id,
                        type: "POST",
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: response.message,
                                confirmButtonText: 'OK'
                            }).then(() => {
                                location.reload(); // page reload to reflect changes
                            });
                        },
                        error: function(xhr) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Something went wrong!',
                                confirmButtonText: 'OK'
                            });
                        }

                    });
                });

                // Delete button
                $('#report_table').on('click', '.delete-button', function() {
                    let id = $(this).data('id');
                    if (!confirm("Are you sure you want to delete this category?")) return;
                    $.ajax({
                        url: "/admin/category/delete/" + id,
                        type: "POST", // ❗ DELETE نہیں
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted!',
                                text: response.message,
                                confirmButtonText: 'OK'
                            }).then(() => {
                                location.reload(); // page refresh
                            });
                        },

                        error: function(xhr) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: 'Delete failed!'
                            });
                        }
                    });

                });

            });
        </script>
    @endsection
</x-layouts.admin>

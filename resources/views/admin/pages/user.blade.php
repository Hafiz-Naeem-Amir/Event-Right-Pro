<x-layouts.admin>
    @section('admin')
        <style>
            .modal-backdrop {
                display: none;
            }
        </style>

        <!-- Edit User Modal -->
        <div class="modal fade" id="editUserModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">

                    <form id="editUserForm" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="edit_user_id" name="user_id">

                        <div class="modal-header">
                            <h5 class="modal-title">Edit User</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body">
                            <div class="row">

                             <div class="col-lg-3 mb-3">
    <div class="form-group">
        <label>Image</label>
        <div id="edit-image-preview" class="image-preview"
            style="width:100%; height:150px; border:1px dashed #ccc; display:flex; align-items:center; justify-content:center; cursor:pointer; background-size: cover; background-position: center;">
            <label for="edit_image_upload" id="edit_image_label" style="cursor:pointer;">
                <i class="fas fa-plus" style="font-size:1.5rem; color:#888;"></i>
            </label>
            <input type="file" name="image" id="edit_image_upload" style="display:none;" />
        </div>
        <span class="text-danger error_image"></span>
    </div>
</div>


                                <!-- Other fields (col-9) -->
                                <div class="col-lg-9">
                                    <div class="row">

                                        <div class="col-lg-6 mb-3">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" id="edit_first_name"
                                                name="first_name">
                                            <span class="text-danger error_first_name"></span>
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" id="edit_last_name" name="last_name">
                                            <span class="text-danger error_last_name"></span>
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <label>Email</label>
                                            <input type="email" class="form-control" id="edit_email" name="email">
                                            <span class="text-danger error_email"></span>
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" id="edit_phone" name="phone">
                                            <span class="text-danger error_phone"></span>
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <label>Status</label>
                                            <select class="form-control" id="edit_status" name="status">
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                            <span class="text-danger error_status"></span>
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <label>Roles</label>
                                            <select class="form-control select2" id="edit_roles" name="user_type[]"
                                                multiple>
                                                <!-- Options will be filled dynamically -->
                                            </select>
                                            <span class="text-danger error_user_type"></span>
                                        </div>

                                        <div class="col-lg-12 mb-3">
                                            <label>Organization Name</label>
                                            <input type="text" class="form-control" id="edit_organization_name"
                                                name="organization_name">
                                            <span class="text-danger error_organization_name"></span>
                                        </div>

                                        <div class="col-lg-12 mb-3">
                                            <label>Current Image</label><br>
                                            <img id="edit_image_preview" src="" width="80"
                                                class="img-thumbnail">
                                        </div>

                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <!-- Users Table Section -->
        <section class="section">
            <div class="section-header">
                <h1>Users</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Users</div>
                </div>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-4 mt-2">
                            <div class="col-lg-8">
                                <h2 class="section-title mt-0">View Users</h2>
                            </div>
                            <div class="col-lg-4 text-right">
                                <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus"></i> Add New
                                </a>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table" id="report_table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>User</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Verified</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td></td>
                                            <td>
                                                <div class="media">
                                                    <img alt="image" class="mr-3 avatar"
                                                        src="{{ $user->image ? asset('uploads/user/images/' . $user->image) : asset('uploads/user/images/defaultuser.png') }}">
                                                    <div class="media-body">
                                                        <div class="media-title mb-0">{{ $user->first_name }}
                                                            {{ $user->last_name }}</div>
                                                        <div class="media-description text-muted">{{ $user->email }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $user->first_name }}</td>
                                            <td>{{ $user->last_name }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>
                                                @if ($user->user_type)
                                                    <span class="badge badge-primary m-1">{{ $user->user_type }}</span>
                                                @else
                                                    <span class="badge badge-warning m-1">No Role</span>
                                                @endif
                                            </td>

                                            <td>
                                                @if (Auth::id() == $user->id)
                                                    <span class="badge badge-success m-1">Active</span>
                                                @else
                                                    <span class="badge badge-danger m-1">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if (Auth::id() == $user->id)
                                                    <span class="badge badge-success m-1">Verified</span>
                                                @else
                                                    <span class="badge badge-danger m-1">Unverified</span>
                                                @endif
                                            </td>

                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a href="#" class="btn btn-sm btn-light"
                                                        data-toggle="dropdown">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a href="javascript:void(0)" class="dropdown-item editUserBtn"
                                                            data-id="{{ $user->id }}">
                                                            <i class="fas fa-edit mr-2"></i>Edit
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-item text-danger deleteUser"
                                                            data-id="{{ $user->id }}">
                                                            <i class="fas fa-trash mr-2"></i>Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- AJAX Scripts -->
        <script>
          $(document).ready(function() {

    // Edit button click
    $(document).on('click', '.editUserBtn', function() {
        let userId = $(this).data('id');

        $.ajax({
            url: '/admin/user/edit/' + userId,
            type: 'GET',
            success: function(user) {
                // Fill inputs
                $('#edit_user_id').val(user.id);
                $('#edit_first_name').val(user.first_name);
                $('#edit_last_name').val(user.last_name);
                $('#edit_email').val(user.email);
                $('#edit_phone').val(user.phone);
                $('#edit_status').val(user.status);
                $('#edit_organization_name').val(user.organization_name);

                // Roles
                $('#edit_roles').empty();
                user.allRoles.forEach(function(role) {
                    let isSelected = user.user_type && user.user_type.split(',').includes(role);
                    let option = new Option(role, role, isSelected, isSelected);
                    $('#edit_roles').append(option);
                });
                $('#edit_roles').trigger('change');
 // Image preview
            let imageUrl = user.image ? '/uploads/user/images/' + user.image : '/uploads/user/images/defaultuser.png';
            $('#edit-image-preview').css('background-image', 'url(' + imageUrl + ')');
            $('#edit-image-preview i').toggle(!user.image); // hide icon if image exists

            // Show modal
            $('#editUserModal').modal('show')
            }
        });
    });

    // Preview new image on select (same #edit_image_show)
    $('#edit_image_upload').on('change', function(e) {
        let reader = new FileReader();
        reader.onload = function(e) {
            $('#edit_image_show').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });

    // AJAX update form submit
    $('#editUserForm').submit(function(e) {
        e.preventDefault();
        let userId = $('#edit_user_id').val();
        let formData = new FormData(this);

        $.ajax({
            url: '/admin/user/update/' + userId,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(res) {
                Swal.fire('Updated!', res.message, 'success').then(() => location.reload());
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    $('.text-danger').text('');
                    $.each(errors, function(key, val) {
                        $('#editUserForm').find('.error_' + key).text(val[0]);
                    });
                } else {
                    Swal.fire('Error!', 'Something went wrong.', 'error');
                }
            }
        });
    });

});



            // Update User AJAX
            $('#editUserForm').submit(function(e) {
                e.preventDefault();

                let userId = $('#edit_user_id').val();
                let formData = new FormData(this);

                $.ajax({
                    url: '/admin/user/update/' + userId, // make sure your route exists
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Updated!',
                            text: response.message || 'User updated successfully',
                            timer: 1500,
                            showConfirmButton: false
                        }).then(() => {
                            $('#editUserModal').modal('hide');
                            location.reload();
                        });
                    },
                    error: function(xhr) {
                        let errors = xhr.responseJSON?.errors;
                        let errorMsg = '';

                        if (errors) {
                            $.each(errors, function(key, val) {
                                errorMsg += val + '\n';
                            });
                        } else {
                            errorMsg = xhr.responseJSON?.message || 'Something went wrong!';
                        }

                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: errorMsg
                        });
                    }
                });
            });


            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                // Delete User
                $(document).on('click', '.deleteUser', function(e) {
                    e.preventDefault();
                    let userId = $(this).data('id');

                    Swal.fire({
                        title: "Are you sure?",
                        text: "This action cannot be undone!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Yes, delete it!",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: "/admin/user/delete/" + userId,
                                type: "POST",
                                data: {
                                    _token: $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function(response) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Deleted!',
                                        text: response.message ||
                                            'User deleted successfully',
                                        timer: 1500,
                                        showConfirmButton: false
                                    }).then(() => {
                                        location.reload();
                                    });
                                },
                                error: function(xhr) {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error!',
                                        text: xhr.responseJSON?.message ||
                                            'Something went wrong!'
                                    });
                                }
                            });
                        }
                    });
                });

            });
        </script>
    @endsection
</x-layouts.admin>

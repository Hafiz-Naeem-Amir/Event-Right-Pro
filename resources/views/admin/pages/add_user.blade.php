<x-layouts.admin>
    @section('admin')
        <section class="section">
            <div class="section-header">
                <h1>Add User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('admin/home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ url('users') }}">Users</a></div>
                    <div class="breadcrumb-item">Add User</div>
                </div>
            </div>

          <div class="section-body">
    <div class="row">
        <div class="col-lg-8">
            <h2 class="section-title">Add User</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" id="userForm">
                        @csrf

                        <!-- Admin Dashboard Flag -->
                        <input type="hidden" name="admin_dashboard" value="1">
                        <input type="hidden" name="user_type" value="organizer">

                        <div class="row">

                            <!-- Image on left (col-3) -->
                            <div class="col-lg-3 mb-3">
                                <div class="form-group">
                                    <label>Image</label>
                                    <div id="image-preview" class="image-preview"
                                        style="width:100%; height:150px; border:1px dashed #ccc; display:flex; align-items:center; justify-content:center; cursor:pointer;">
                                        <label for="image-upload" id="image-label" style="cursor:pointer;">
                                            <i class="fas fa-plus" style="font-size:1.5rem;"></i>
                                        </label>
                                        <input type="file" name="image" id="image-upload" style="display:none;" />
                                    </div>
                                    <span class="text-danger error_image"></span>
                                </div>
                            </div>

                            <!-- Other fields (col-9) -->
                            <div class="col-lg-9">

                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" class="form-control">
                                        <span class="text-danger error_first_name"></span>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" class="form-control">
                                        <span class="text-danger error_last_name"></span>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control">
                                        <span class="text-danger error_email"></span>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label>Phone</label>
                                        <input type="text" name="phone" class="form-control">
                                        <span class="text-danger error_phone"></span>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control">
                                        <span class="text-danger error_password"></span>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label>Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control">
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label>Status</label>
                                        <select name="status" class="form-control" required>
                                            <option value="1" selected>Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                        <span class="text-danger error_status"></span>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label>Role</label>
                                        <select name="user_type[]" class="form-control select2" multiple required>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->user_type }}">{{ ucfirst($user->user_type) }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger error_user_type"></span>
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <label>Organization</label>
                                        <input type="text" name="organization_name" class="form-control">
                                        <span class="text-danger error_organization_name"></span>
                                    </div>

                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



        </section>



        <script>
            $(document).ready(function() {
                // Initialize Select2
                $('.select2').select2();

                $('#userForm').on('submit', function(e) {
                    e.preventDefault();

                    let formData = new FormData(this);

                    $.ajax({
                        url: "{{ route('admin.users.store') }}",
                        type: "POST",
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            $('.text-danger').text(''); // Purani errors remove
                            Swal.fire({
                                icon: 'success',
                                title: 'User Created!',
                                text: 'The user has been added successfully.',
                                timer: 2000,
                                showConfirmButton: false
                            }).then(() => {
                                window.location.href =
                                    "{{ route('admin.users') }}"; // redirect
                            });
                            $('#userForm')[0].reset();
                            $('.select2').val(null).trigger('change');
                        },
                        error: function(xhr) {
                            $('.text-danger').text(''); // Purani errors remove
                            if (xhr.status === 422) {
                                $.each(xhr.responseJSON.errors, function(key, value) {
                                    $('.error_' + key).text(value[
                                        0]); // Show field-specific error
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Something went wrong!',
                                });
                            }
                        }
                    });
                });

            });
        </script>
    @endsection
</x-layouts.admin>

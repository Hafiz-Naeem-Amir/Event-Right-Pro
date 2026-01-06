<x-layouts.admin>
    @section('admin')
        <section class="section">
            <div class="section-header">
                <h1>Add Scanner</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="https://eventrights.saasmonks.in/admin/home">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item"><a href="https://eventrights.saasmonks.in/scanner">Scanner</a></div>
                    <div class="breadcrumb-item">Add Scanner</a></div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="section-title"> Add Scanner</h2>
                    </div>
                </div>

                <div class="col-12">
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form id="scannerForm" method = "post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" name="first_name" placeholder="First Name"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="last_name" placeholder="Last Name"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" placeholder="Email"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" name="phone" placeholder="Phone"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" placeholder="Password" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control select2">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
                $('#scannerForm').submit(function(e) {
                    e.preventDefault();

                    $.ajax({
                        url: "{{ route('admin.scanner.store') }}",
                        type: "POST",
                        data: $(this).serialize(),
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: response.success,
                                timer: 2000,
                                showConfirmButton: false
                            }).then(() => {
                                window.location.href = '/scanner';
                            });

                            $('#scannerForm')[0].reset();
                        },

                        error: function(xhr) {
                            let errorText = 'Something went wrong!';
                            if (xhr.status === 422 && xhr.responseJSON.errors) {
                                errorText = Object.values(xhr.responseJSON.errors).flat().join(
                                    "\n");
                            } else if (xhr.responseText) {
                                errorText = xhr.responseText;
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

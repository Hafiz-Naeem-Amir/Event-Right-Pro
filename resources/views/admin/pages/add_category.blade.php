<x-layouts.admin>
    @section('admin')
        <section class="section">
            <div class="section-header">
                <h1>Add Category</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-body">
                        <form class="categoryForm" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group center">
                                        <label>Image (Ratio : 2:1)</label>
                                        <div id="image-preview" class="image-preview">
                                            <label for="image-upload" id="image-label"> <i class="fas fa-plus"></i></label>
                                            <input type="file" name="image" id="image-upload" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" placeholder="Name" value=""
                                            class="form-control ">
                                    </div>
                                    <div class="form-group">
                                        <label>status</label>
                                        <select name="status" class="form-control select2">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- SweetAlert2 CDN -->

        <script>
            $(document).ready(function() {
                $('.categoryForm').submit(function(e) {
                    e.preventDefault(); // prevent normal form submit

                    let formData = new FormData(this); // Create FormData from form

                    $.ajax({
                        url: "{{ route('admin.category.store') }}",
                        type: 'POST',
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
                                window.location.href = "{{ route('admin.category') }}";
                            });

                            $('.categoryForm')[0].reset(); // reset form
                        },
                        error: function(xhr) {
                            let errMsg = 'Something went wrong!';
                            if (xhr.responseJSON && xhr.responseJSON.errors) {
                                errMsg = Object.values(xhr.responseJSON.errors).join("\n");
                            }

                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: errMsg,
                                confirmButtonText: 'OK'
                            });
                        }
                    });
                });
            });
        </script>
    @endsection
</x-layouts.admin>

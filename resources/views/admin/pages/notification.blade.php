<x-layouts.admin>
    @section('admin')
        <section class="section">
            <div class="section-header">
                <h1>Send Notification</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item">Send Notification</div>
                </div>
            </div>

            <div>
                <h2 class="section-title">Send Notification</h2>
            </div>

            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">

                            <form method="post" enctype="multipart/form-data" id="notificationForm">
                                @csrf

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" placeholder="New notification"
                                        class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="user_ids">Appuser</label>
                                    <select name="user_ids[]" multiple required data-live-search="true"
                                        class="select2 form-control">
                                        <option value="1">Gordon</option>
                                        <option value="5">test</option>
                                        <option value="6">user12</option>
                                        <option value="7">Ami bet</option>
                                        <option value="8">Makenro</option>
                                        <option value="9">abcd</option>
                                        <option value="10">Tharaka</option>
                                        <option value="11">Krishna</option>
                                        <option value="12">Sajeeb</option>
                                        <option value="13">dsdsadsadsa</option>
                                        <option value="14">Rinku Budania</option>
                                        <option value="15">cscsq</option>
                                        <option value="16">Vincent Maldonado</option>
                                        <option value="17">Favour</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control" onchange="readURL(this)">
                                    <img class="mt-3" id="img" style="height:100px;">
                                </div>

                                <button class="btn btn-success" type="submit">Send Notification</button>

                            </form>

                        </div>
                    </div>

                </div>
            </div>

        </section>
        <script>
           $('#notificationForm').on('submit', function(e) {
    e.preventDefault();
    let formData = new FormData(this);
    $.ajax({
        url: "{{ route('admin.notification.store') }}",
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(res) {
            if(res.status === 'success') {
                Swal.fire({
                    title: 'Success!',
                    text: res.message,
                    icon: 'success',
                    timer: 1500, // خود بخود 1.5 سیکنڈ بعد بند
                    showConfirmButton: false,
                    willClose: () => {
                        // SweetAlert بند ہوتے ہی admin.notification.index پر redirect
                        window.location.href = "{{ route('admin.notification') }}";
                    }
                });
            }
        },
        error: function(xhr) {
            if(xhr.status === 422) {
                let errors = xhr.responseJSON.errors;
                $('.text-danger').remove();
                $.each(errors, function(key, value) {
                    $('[name="' + key + '"]').after('<span class="text-danger">' + value[0] + '</span>');
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

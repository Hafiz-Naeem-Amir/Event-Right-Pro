<x-layouts.admin>
    @section('admin')
        <section class="section">
            <div class="section-header">
                <h1>Add Event</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="https://eventrights.saasmonks.in/admin/home">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item"><a href="https://eventrights.saasmonks.in/events">Event</a></div>
                    <div class="breadcrumb-item">Add Event</a></div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="section-title"> Add Event</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" id="eventform" action="{{ route('admin.events.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group center">
                                                <label>Image</label>
                                                <div id="image-preview" class="image-preview">
                                                    <label for="image-upload" id="image-label"> <i
                                                            class="fas fa-plus"></i></label>
                                                    <input type="file" name="image" id="image-upload" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" value="" placeholder="Name"
                                                    class="form-control ">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Start Time</label>
                                                <input type="text" name="start_time" id="start_time" value=""
                                                    placeholder="Choose Start time" class="form-control date ">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>End Time</label>
                                                <input type="text" name="end_time" id="end_time" value=""
                                                    placeholder="Choose End time" class="form-control date ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Organizer</label>
                                        <select name="user_id" required class="form-control select2" id="org-for-event">
                                            <option value="">Choose Organizer</option>
                                            @foreach ($users as $user)
                                                <option value={{ $user->id }}>
                                                    {{ $user->organization_id }}
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select name="category_id" class="form-control select2" required>
                                                <option value="">Choose Category</option>
                                                @foreach ($cate as $cat)
                                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Maximum people will join in this event</label>
                                                <input type="number" min='1' name="people" id="people"
                                                    value="" placeholder="Maximum people will join in this event"
                                                    class="form-control ">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>status</label>
                                                <select name="status" class="form-control select2">
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Tags</label>
                                        <input type="text" name="tags" value="" class="form-control inputtags ">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" placeholder="Description" class="textarea_editor"></textarea>

                                    </div>
                                    <h6 class="text-muted mt-4 mb-4">Location Detail</h6>
                                    <div class="form-group">
                                        <div class="selectgroup">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="type" checked checked value="offline"
                                                    class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">Venue</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="type" value="online"
                                                    class="selectgroup-input">
                                                <span class="selectgroup-button">Online Event</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="location-detail ">
                                        <div class="form-group">
                                            <label>Event Address</label>
                                            <input type="text" name="address" id="address"
                                                placeholder="Event Address" class="form-control ">

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Latitude</label>
                                                    <input type="text" name="lat" id="lat" value=""
                                                        placeholder="Latitude" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Longitude</label>
                                                    <input type="text" name="lang" id="lang" value=""
                                                        placeholder="Longitude" class="form-control ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="url hide  ">
                                        <div class="form-group">
                                            <label>Event url</label>
                                            <input type="link" name="url" id="url" placeholder="Event url"
                                                class="form-control ">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary demo-button">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <style>
                .modal-backdrop {
                    display: none;
                }
            </style>
        </section>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=&libraries=places"></script>

        <script>
            $('#eventform').on('submit', function(e) {
                e.preventDefault();

                let formData = new FormData(this);
                formData.append('_method', 'POST'); // store کے لیے

                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $('.text-danger').remove();
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: response.message
                            }).then(() => {
                                window.location.href = "{{ route('admin.events') }}";
                            });
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            let errorMessages = '';
                            $.each(errors, function(key, value) {
                                errorMessages += value[0] + '<br>';
                            });
                            Swal.fire({
                                icon: 'error',
                                title: 'Validation Error',
                                html: errorMessages
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Something went wrong!'
                            });
                        }
                    }
                });
            });
        </script>
    @endsection
</x-layouts.admin>

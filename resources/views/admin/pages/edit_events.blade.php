<x-layouts.admin>
    @section('admin')
        <section class="section">
            <div class="section-header">
                <h1>Edit Event</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('admin/home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ url('events') }}">Event</a></div>
                    <div class="breadcrumb-item">Edit Event</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form id="eventform" action="{{ route('admin.events.update', $event->id) }}"
                                    enctype="multipart/form-data" method="post">
                                    @csrf
                                    @method('PUT')

                                    {{-- Image and Name --}}
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group center">
                                                <label>Event Image</label>
                                                <div id="edit-image-preview" class="image-preview"
                                                    style="background-size: cover; background-position: center;
                                                   background-image: url('/uploads/events/{{ $event->image }}');">

                                                    <label for="edit-image-upload" id="edit-image-label">
                                                        <i class="fas fa-plus"></i>
                                                    </label>

                                                    <input type="file" name="image" id="edit-image-upload" />
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" value="{{ $event->name }}"
                                                    placeholder="Name" class="form-control">
                                            </div>

                                        </div>
                                    </div>

                                    {{-- Start & End Time --}}
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Start Time</label>
                                                <input type="text" name="start_time" id="start_time"
                                                    value="{{ $event->start_time }}" placeholder="Choose Start time"
                                                    class="form-control date">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>End Time</label>
                                                <input type="text" name="end_time" id="end_time"
                                                    value="{{ $event->end_time }}" placeholder="Choose End time"
                                                    class="form-control date">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Organizer --}}
                                    <div class="form-group">
                                        <label>Organizer</label>
                                        <select name="user_id" required class="form-control select2">
                                            <option value="">Choose Organizer</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}"
                                                    {{ $event->user_id == $user->id ? 'selected' : '' }}>
                                                    {{ $user->first_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="category_id" class="form-control select2" required>
                                            <option value="">Choose Category</option>
                                            @foreach ($cate as $cat)
                                                <option value="{{ $cat->id }}"
                                                    {{ $event->category_id == $cat->id ? 'selected' : '' }}>
                                                    {{ $cat->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- People & Status --}}
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Maximum People</label>
                                                <input type="number" min="1" name="people"
                                                    value="{{ $event->people }}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select name="status" class="form-control select2">
                                                    <option value="1" {{ $event->status == 1 ? 'selected' : '' }}>
                                                        Active
                                                    </option>
                                                    <option value="0" {{ $event->status == 0 ? 'selected' : '' }}>
                                                        Inactive
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Tags & Description --}}
                                    <div class="form-group">
                                        <label>Tags</label>
                                        <input type="text" name="tags" value="{{ $event->tags }}"
                                            class="form-control inputtags">
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" class="textarea_editor">{{ $event->description }}</textarea>
                                    </div>

                                    {{-- Location --}}
                                    <h6 class="text-muted mt-4 mb-4">Location Detail</h6>
                                    <div class="form-group">
                                        <div class="selectgroup">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="type" value="offline"
                                                    class="selectgroup-input"
                                                    {{ $event->type == 'offline' ? 'checked' : '' }}>
                                                <span class="selectgroup-button">Venue</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="type" value="online"
                                                    class="selectgroup-input"
                                                    {{ $event->type == 'online' ? 'checked' : '' }}>
                                                <span class="selectgroup-button">Online Event</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="location-detail {{ $event->type == 'online' ? 'd-none' : '' }}">
                                        <div class="form-group">
                                            <label>Event Address</label>
                                            <input type="text" name="address" id="address"
                                                placeholder="Event Address" class="form-control"
                                                value="{{ old('address', $event->address) }}">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div id="map" style="height: 300px; width: 100%; display: none;">
                                                </div>
                                                <div class="form-group">
                                                    <label>Latitude</label>
                                                    <input type="text" name="lat" id="lat"
                                                        placeholder="Latitude" class="form-control"
                                                        value="{{ old('lat', $event->lat) }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Longitude</label>
                                                    <input type="text" name="lang" id="lang"
                                                        placeholder="Longitude" class="form-control"
                                                        value="{{ old('lang', $event->lang) }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="url {{ $event->type == 'offline' ? 'd-none' : '' }}">
                                        <div class="form-group">
                                            <label>Event url</label>
                                            <input type="link" name="url" id="url" placeholder="Event url"
                                                class="form-control" value="{{ old('url', $event->url) }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Update Event</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>


        <script>
            $(document).ready(function() {
                // Show/hide location or URL based on type
                $('input[name="type"]').change(function() {
                    if ($(this).val() == 'online') {
                        $('.location-detail').addClass('d-none');
                        $('.url').removeClass('d-none');
                    } else {
                        $('.location-detail').removeClass('d-none');
                        $('.url').addClass('d-none');
                    }
                });

                let map;
                let marker;

                function initMap(lat, lng) {
                    let position = {
                        lat: lat,
                        lng: lng
                    };
                    $('#map').show();

                    if (!map) {
                        map = new google.maps.Map(document.getElementById('map'), {
                            center: position,
                            zoom: 15
                        });
                    } else {
                        map.setCenter(position);
                    }

                    if (!marker) {
                        marker = new google.maps.Marker({
                            position: position,
                            map: map,
                            draggable: true
                        });

                        marker.addListener('dragend', function(e) {
                            $('#lat').val(e.latLng.lat());
                            $('#lang').val(e.latLng.lng());
                        });
                    } else {
                        marker.setPosition(position);
                    }

                    google.maps.event.trigger(map, 'resize');
                }

                // Initial map load
                let initialLat = parseFloat($('#lat').val());
                let initialLng = parseFloat($('#lang').val());
                if (!isNaN(initialLat) && !isNaN(initialLng)) {
                    initMap(initialLat, initialLng);
                }

                // Update map when lat/lng input changes
                $('#lat, #lang').on('keyup change', function() {
                    let lat = parseFloat($('#lat').val());
                    let lng = parseFloat($('#lang').val());
                    if (!isNaN(lat) && !isNaN(lng)) {
                        initMap(lat, lng);
                    }
                });

                $(document).ready(function() {
                    $('.select2').select2();
                });
                // AJAX form submit with SweetAlert for errors
                $('#eventform').on('submit', function(e) {
                    e.preventDefault();
                    let formData = new FormData(this);
                    formData.append('_method', 'PUT');

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
                                    window.location.href =
                                        "{{ route('admin.events') }}";
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
            });
        </script>
    @endsection
</x-layouts.admin>

<x-layouts.admin>
    @section('admin')
        <section class="section">
            <div class="section-header">
                <h1>Settings</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Settings</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row mb-4">
                    <div class="col-lg-8">
                        <h2 class="section-title">Admin Settings</h2>
                    </div>
                </div>

                <div class="row">

                    {{-- About Us Setting --}}
                    <div class="col-lg-6">
                        <div class="card card-large-icons">
                            <div class="card-icon bg-primary text-white"><i class="fas fa-address-card"></i></div>
                            <div class="card-body">
                                <h4>About Us</h4>
                                <p>Set your about us page details</p>
                                <a href="#about_us" data-toggle="collapse" class="card-cta">Change Setting <i
                                        class="fas fa-chevron-right"></i></a>

                                <div class="collapse mt-3" id="about_us">
                                    <form action="{{ route('admin.setting.update', $settings->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label col-12 col-md-3">Name</label>
                                            <div class="col-12 col-md-9">
                                                <input type="text" name="name" class="form-control"
                                                    value="{{ old('name', $settings->name ?? '') }}" required>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label col-12 col-md-3">Email</label>
                                            <div class="col-12 col-md-9">
                                                <input type="email" name="email" class="form-control"
                                                    value="{{ old('email', $settings->email ?? '') }}">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label col-12 col-md-3">Phone</label>
                                            <div class="col-12 col-md-9">
                                                <input type="text" name="phone" class="form-control"
                                                    value="{{ old('phone', $settings->phone ?? '') }}">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label col-12 col-md-3">Address</label>
                                            <div class="col-12 col-md-9">
                                                <textarea name="address" class="form-control" rows="4">{{ old('address', $settings->address ?? '') }}</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label col-12 col-md-3">Latitude</label>
                                            <div class="col-12 col-md-9">
                                                <input type="text" name="lat" class="form-control"
                                                    value="{{ old('lat', $settings->lat ?? '') }}">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label col-12 col-md-3">Longitude</label>
                                            <div class="col-12 col-md-9">
                                                <input type="text" name="long" class="form-control"
                                                    value="{{ old('long', $settings->long ?? '') }}">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <div class="col-12 col-md-9 offset-md-3">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Social Media Links Setting --}}
                    <div class="col-lg-6">
                        <div class="card card-large-icons">
                            <div class="card-icon bg-primary text-white"><i class="fas fa-link"></i></div>
                            <div class="card-body">
                                <h4>Social Media Links</h4>
                                <p>Set your social media URLs</p>
                                <a href="#social_media_links" data-toggle="collapse" class="card-cta">Change Setting <i
                                        class="fas fa-chevron-right"></i></a>

                                <div class="collapse mt-3" id="social_media_links">
                                    <form action="{{ route('admin.setting.update', $settings->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        @foreach (['Instagram', 'Facebook', 'Twitter', 'Pinterest'] as $platform)
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label col-12 col-md-3">{{ $platform }}</label>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="{{ strtolower($platform) }}"
                                                        class="form-control"
                                                        value="{{ old(strtolower($platform), $settings->$platform ?? '') }}"
                                                        placeholder="{{ $platform }} Link">
                                                </div>
                                            </div>
                                        @endforeach

                                        <div class="form-group row mb-4">
                                            <div class="col-12 col-md-9 offset-md-3">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- General Settings (Logo & Favicon) --}}
                    <div class="col-lg-6">
                        <div class="card card-large-icons">
                            <div class="card-icon bg-primary text-white"><i class="fas fa-cog"></i></div>
                            <div class="card-body">
                                <h4>General Settings</h4>
                                <p>App name, logo, favicon, footer text etc.</p>
                                <a href="#general_settings" data-toggle="collapse" class="card-cta">Change Setting <i
                                        class="fas fa-chevron-right"></i></a>

                                <div class="collapse mt-3" id="general_settings">
                                    <form action="{{ route('admin.setting.update', $settings->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label col-12 col-md-3">App Name</label>
                                            <div class="col-12 col-md-9">
                                                <input type="text" name="app_name" class="form-control"
                                                    value="{{ old('app_name', $settings->app_name ?? '') }}" required>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label col-12 col-md-3">Footer Text</label>
                                            <div class="col-12 col-md-9">
                                                <input type="text" name="footertext" class="form-control"
                                                    value="{{ old('footertext', $settings->footertext ?? '') }}">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label col-12 col-md-3">Logo</label>
                                            <div class="col-12 col-md-9">
                                                <input type="file" name="logo" class="form-control">
                                                @if (!empty($settings->logo))
                                                    <img src="{{ asset('uploads/' . $settings->logo) }}" alt="Logo"
                                                        class="mt-2" width="100">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label class="col-form-label col-12 col-md-3">Favicon</label>
                                            <div class="col-12 col-md-9">
                                                <input type="file" name="favicon" class="form-control">
                                                @if (!empty($settings->favicon))
                                                    <img src="{{ asset('uploads/' . $settings->favicon) }}"
                                                        alt="Favicon" class="mt-2" width="50">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <div class="col-12 col-md-9 offset-md-3">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            ```

        </section>
        <!-- SweetAlert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(document).ready(function() {
                // CSRF
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $('#settingsForm').on('submit', function(e) {
                    e.preventDefault();

                    var form = $(this);
                    var url = form.attr('action');
                    var data = new FormData(this);

                    // Ensure PUT method is sent
                    data.append('_method', 'PUT');

                    $.ajax({
                        url: url,
                        type: 'POST', // always POST, Laravel handles PUT with _method
                        data: data,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: response.message,
                                timer: 2000,
                                showConfirmButton: false
                            });
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText); // debugging
                            let errorMsg = 'Something went wrong!';
                            if (xhr.responseJSON && xhr.responseJSON.message) {
                                errorMsg = xhr.responseJSON.message;
                            }
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: errorMsg
                            });
                        }
                    });
                });
            });
        </script>
    @endsection
</x-layouts.admin>

<x-layouts.admin>
    @section('admin')
        <section class="section">
            <div class="section-header">
                <h1>Event Gallery</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="https://eventrights.saasmonks.in/admin/home">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item"><a href="https://eventrights.saasmonks.in/events">Event</a></div>
                    <div class="breadcrumb-item">Event Gallery</a></div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="section-title"> Event Gallery</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-lg-12 form-group">
                                        <div class="image-gallery">
                                            <div class="row">
                                                @php
                                                    $images = json_decode($event->image, true);
                                                    if (!is_array($images)) {
                                                        $images = [$event->image];
                                                    }
                                                @endphp

                                                @if (!empty($images))
                                                    @foreach ($images as $image)
                                                        <div class="col-lg-12 mb-3">
                                                            <div class="img text-center">
                                                                <img src="{{ asset('uploads/events/' . $image) }}"
                                                                    class="img-fluid"
                                                                    style="max-height:200px; object-fit:cover;">
                                                                <a href="{{ route('admin.events.deleteImage', ['id' => $event->id, 'image' => $image]) }}"
                                                                    title="Remove Image" class="text-danger d-block mt-2">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <p class="text-muted">No images found for this event</p>
                                                @endif
                                            </div>
                                        </div>


                                        <input type="hidden" name="id" id="data_id" value="1">
                                        <div class="dropzone dropzone-multiple" data-toggle="dropzone"
                                            data-dropzone-multiple
                                            data-dropzone-url="{{ route('admin.events.addGallery') }}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="id" value="{{ $event->id }}">
                                            <div class="fallback">
                                                <div class="custom-file">
                                                    <input type="file" name="image[]" accept=".png, .jpg, .jpeg, .svg"
                                                        class="custom-file-input" id="dropzoneMultipleUpload" multiple>
                                                    <label class="custom-file-label" for="dropzoneMultipleUpload">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                            <ul
                                                class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush">
                                                <li class="list-group-item px-0">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <div class="avatar">
                                                                <img class="avatar-img rounded" src=""
                                                                    alt="" data-dz-thumbnail>
                                                            </div>
                                                        </div>
                                                        <div class="col ml--3">
                                                            <h4 class="mb-1" data-dz-name>...</h4>
                                                            <p class="small text-muted mb-0" data-dz-size>...</p>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-ellipses dropdown-toggle"
                                                                    role="button" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                    <i class="fe fe-more-vertical"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item" data-dz-remove>
                                                                        Remove
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div>
                                            <a href="{{ route('admin.events') }} " class="btn"
                                                style="background-color: #65469b">
                                                Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Dropzone JS --}}
        <script>
            Dropzone.options.dropzoneMultipleUpload = {
                paramName: 'image',
                maxFilesize: 5, // MB
                acceptedFiles: '.jpg,.jpeg,.png,.svg',
                addRemoveLinks: true,
                dictDefaultMessage: "Drag & drop images here or click to upload",
                init: function() {
                    this.on("success", function(file, response) {
                        console.log(response);
                    });
                    this.on("removedfile", function(file) {
                        // optionally handle remove via AJAX
                    });
                }
            };
        </script>
    @endsection
</x-layouts.admin>

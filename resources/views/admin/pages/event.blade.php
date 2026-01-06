<x-layouts.admin>
    @section('admin')
    <section class="section">

    <div class="section-header">
        <h1>Events</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active">
                <a href="https://eventrights.saasmonks.in/admin/home">Dashboard</a>
            </div>
            <div class="breadcrumb-item">Events</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">

            <div class="col-12"></div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row mb-4 mt-2">
                            <div class="col-lg-8">
                                <h2 class="section-title mt-0">All Events</h2>
                            </div>
                            <div class="col-lg-4 text-right">
                                <button class="btn btn-primary add-button">
                                    <a href="{{ route('admin.events.create') }}">
                                        <i class="fas fa-plus"></i> Add New
                                    </a>
                                </button>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table" id="report_table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Start Date</th>
                                        <th>Number of People</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Tickets</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($events as $event)
                                        <tr>
                                            <td></td>
                                            <th>
                                                <img class="table-img"
                                                    src="{{ asset('uploads/events/' . $event->image) }}">
                                            </th>
                                            <td>
                                                <h6 class="mb-0">{{ $event->name }}</h6>
                                                <p class="mb-0">{{ $event->address }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0">{{ $event->start_time }}</p>
                                            </td>
                                            <td>{{ $event->people }}</td>

                                            <td>
                                                @if ($event->status == 1)
                                                    <span class="badge badge-success m-1">Publish</span>
                                                @else
                                                    <span class="badge badge-danger m-1">Unpublish</span>
                                                @endif
                                            </td>
                                            <td>

                                                {{-- View --}}
                                                <a href="{{ route('admin.events.details', $event->id) }}"
                                                    class="btn-icon">
                                                    <i class="fas fa-eye"></i>
                                                </a>

                                                {{-- Gallery --}}
                                                <a href="{{ route('admin.events.galery',$event->id) }}" class="btn-icon">
                                                    <i class="far fa-images"></i>
                                                </a>
                                                <a href="{{ route('admin.events.edit', $event->id) }}"
                                                    class="btn-icon">
                                                    <i class="fas fa-edit"></i>
                                                </a>




                                                {{-- Delete --}}
                                                <a href="{{ route('admin.events.delete', $event->id) }}"
                                                    class="btn-icon delete-event" data-id="{{ $event->id }}">
                                                    <i class="fas fa-trash-alt text-danger"></i>
                                                </a>



                                            </td>
                                            <td>
                                                <a href="{{ url($event->id . '/' . Str::slug($event->name) . '/tickets') }}"
                                                    class="btn btn-primary">Manage Tickets</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div><!-- table-responsive -->

                    </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col-12 -->

        </div><!-- row -->
    </div><!-- section-body -->
</section>

<script>
    $(document).ready(function() {
        $('.delete-event').click(function(e) {
            e.preventDefault(); // ❗ Prevent default GET request

            let id = $(this).data('id');

            Swal.fire({
                title: "Are you sure?",
                text: "This event will be deleted permanently!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Delete",
                cancelButtonText: "Cancel"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                         url: "/admin/events/delete/" + id,

                        type: "POST", // POST کے ساتھ _method=DELETE
                        data: {
                            _token: "{{ csrf_token() }}",
                            _method: "DELETE"
                        },
                        success: function(response) {
                            Swal.fire({
                                icon: "success",
                                title: "Deleted!",
                                text: response.message
                            }).then(() => {
                                location.reload();
                            });
                        },
                        error: function(xhr) {
                            Swal.fire({
                                icon: "error",
                                title: "Error",
                                text: "Something went wrong!"
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



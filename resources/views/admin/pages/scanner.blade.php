<x-layouts.admin>
    @section('admin')
        <div class="row">
            <div class="col-12">
            </div>

            <div class="col-12">
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-4 mt-2">
                            <div class="col-lg-8">
                                <h2 class="section-title mt-0"> View Scanner</h2>
                            </div>
                            <div class="col-lg-4 text-right">
                                <button class="btn btn-primary add-button"><a href="{{ route('admin.scanner.create') }}"><i
                                            class="fas fa-plus"></i> Add
                                        New</a>
                                </button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table" id="report_table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Total events</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <table class="table" id="report_table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Total events</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($scanners as $scanner)
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <div class="media">
                                                        <img alt="image" class="mr-3 avatar"
                                                            src="{{ $scanner->image ? asset('uploads/scanner/' . $scanner->image) : 'https://eventrights.saasmonks.in/images/upload/defaultuser.png' }}">
                                                        <div class="media-body">
                                                            <div class="media-title mb-0">{{ $scanner->name }}</div>
                                                            <div class="media-description text-muted">
                                                                {{ $scanner->email ?? 'No Email' }}</div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- Total events -->
                                                <td>{{ $scanner->events_count }}</td>

                                                <td>
                                                    <span
                                                        class="badge {{ $scanner->status == 1 ? 'badge-success' : 'badge-danger' }}">
                                                        {{ $scanner->status == 1 ? 'Active' : 'Inactive' }}
                                                    </span>
                                                </td>

                                                <td>
                                                    <a href="" class="btn-icon text-danger">
                                                        <i class="fas fa-ban text-danger"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-layouts.admin>

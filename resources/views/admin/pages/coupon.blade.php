<x-layouts.admin>
    @section('admin')
        <section class="section">
            <div class="section-header">
                <h1>Coupon</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item">Coupon</a></div>
                </div>
            </div>

            <div class="section-body">

                <div class="row">
                    <div class="col-12">
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-4 mt-2">
                                    <div class="col-lg-8">
                                        <h2 class="section-title mt-0"> View Coupon</h2>
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <button class="btn btn-primary add-button"><a
                                                href="{{ route('admin.coupon.create') }}"><i class="fas fa-plus"></i> Add
                                                New</a></button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table" id="report_table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Coupon Code</th>
                                                <th>Name</th>
                                                <th>Event</th>
                                                <th>Discount</th>
                                                <th>Duration</th>
                                                <th>Avaliable</th>
                                                <th>Status</th>
                                                <th>Minimum Amount</th>
                                                <th>Maximum Discount</th>
                                                <th>Max Usage Per User</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($coupons as $coupon)
                                                <tr>
                                                    <td></td>
                                                    <td>{{ $coupon->code }}</td>
                                                    <td>{{ $coupon->name }}</td>
                                                    <td>{{ $coupon->event->name ?? 'N/A' }}</td>
                                                    <td>{{ $coupon->discount }}{{ $coupon->discount_type == 0 ? '%' : '' }}
                                                    </td>
                                                    <td>{{ $coupon->start_date }} to {{ $coupon->end_date }}</td>
                                                    <td>{{ $coupon->max_use }} time</td>
                                                    <td>
                                                        <h5>
                                                            <span
                                                                class="badge {{ $coupon->status ? 'badge-success' : 'badge-danger' }} m-1">
                                                                {{ $coupon->status ? 'Active' : 'Inactive' }}
                                                            </span>
                                                        </h5>
                                                    </td>
                                                    <td>{{ $coupon->minimum_amount }}</td>
                                                    <td>{{ $coupon->maximum_discount }}</td>
                                                    <td>{{ $coupon->max_use_per_user }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.coupon.edit', $coupon->id) }}"
                                                            class="btn-icon"><i class="fas fa-edit"></i></a>
                                                        <a href="#"
                                                            onclick="deleteData('coupon', '{{ $coupon->id }}');"
                                                            class="btn-icon"><i
                                                                class="fas fa-trash-alt text-danger"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-layouts.admin>

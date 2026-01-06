<x-layouts.admin>
    @section('admin')
        <section class="section">
            <div class="section-header">
                <h1>Add Coupon</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('admin.coupon') }}">Coupon</a></div>
                    <div class="breadcrumb-item">Add Coupon</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="section-title">Add Coupon</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.coupon.store') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" class="form-control">
                                                @error('name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Event</label>
                                                <select name="event_id" class="form-control select2">
                                                    <option value="">Select Event</option>
                                                    @foreach($events as $event)
                                                        <option value="{{ $event->id }}" {{ old('event_id') == $event->id ? 'selected' : '' }}>
                                                            {{ $event->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('event_id')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Discount (In percentage)</label>
                                                <input type="number" min="1" max="100" name="discount" step="any" placeholder="Discount" value="{{ old('discount') }}" class="form-control">
                                                @error('discount')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Maximum Usage</label>
                                                <input type="number" min="1" name="max_use" placeholder="Maximum Usage" value="{{ old('max_use') }}" class="form-control">
                                                @error('max_use')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Discount Type</label>
                                                <select name="discount_type" class="form-control w-100">
                                                    <option value="0" {{ old('discount_type') == 0 ? 'selected' : '' }}>Percentage</option>
                                                    <option value="1" {{ old('discount_type') == 1 ? 'selected' : '' }}>Amount</option>
                                                </select>
                                                @error('discount_type')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Maximum Usage Per User</label>
                                                <input type="number" min="1" name="max_use_per_user" placeholder="Maximum Usage For Per User" value="{{ old('max_use_per_user') }}" class="form-control">
                                                @error('max_use_per_user')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Valid From</label>
                                                <input type="text" name="start_date" placeholder="Valid From" id="start_date" value="{{ old('start_date') }}" class="form-control date">
                                                @error('start_date')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Valid Till</label>
                                                <input type="text" name="end_date" placeholder="Valid Till" id="end_date" value="{{ old('end_date') }}" class="form-control date">
                                                @error('end_date')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Minimum Amount</label>
                                                <input type="number" name="minimum_amount" placeholder="Minimum Amount" value="{{ old('minimum_amount') }}" class="form-control">
                                                @error('minimum_amount')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Maximum Discount</label>
                                                <input type="number" name="maximum_discount" placeholder="Maximum Discount" value="{{ old('maximum_discount') }}" class="form-control">
                                                @error('maximum_discount')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control" placeholder="Description">{{ old('description') }}</textarea>
                                        @error('description')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control select2">
                                            <option value="1" {{ old('status', 1) == 1 ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                        @error('status')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
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
    @endsection
</x-layouts.admin>

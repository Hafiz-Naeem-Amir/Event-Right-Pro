<x-layouts.admin>
    @section('admin')
    <section class="section">
        <div class="section-header">
            <h1>Wallet Transactions</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </div>
                <div class="breadcrumb-item">Wallet Transactions</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4 mt-2">
                                <div class="col-lg-8">
                                    <h2 class="section-title mt-0">Wallet Transactions</h2>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table" id="report_table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Amount</th>
                                            <th>Payment Gateway</th>
                                            <th>Transaction ID</th>
                                            <th>Payment Date & Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($transactions as $transaction)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $transaction->name }}</td>
                                            <td>{{ $transaction->email }}</td>
                                            <td>
                                                <span class="badge {{ $transaction->amount >= 0 ? 'badge-success' : 'badge-danger' }} m-1">
                                                    {{ $transaction->amount }}
                                                </span>
                                            </td>
                                            <td>{{ $transaction->payment_gateway ?? 'N/A' }}</td>
                                            <td>{{ $transaction->transaction_id ?? 'N/A' }}</td>
                                            <td>{{ $transaction->created_at->format('d M Y H:i') }}</td>
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

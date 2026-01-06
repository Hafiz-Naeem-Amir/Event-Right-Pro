<x-layouts.admin>
    @section('admin')
        <section class="section">
            <div class="section-header">
                <h1>Order Detail</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="https://eventrights.saasmonks.in/admin/home">Dashboard</a>
                    </div>
                    <div class="breadcrumb-item"><a href="https://eventrights.saasmonks.in/orders">Orders</a></div>
                    <div class="breadcrumb-item">Order Detail</a></div>
                </div>
            </div>

            <div class="section-body">
                <div class="invoice">
                    <div class="invoice-print">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="invoice-title">
                                    <h3>Order #66931</h3>
                                    <div class="invoice-number">
                                        <a class="btn btn-primary" target="_blank"
                                            href="https://eventrights.saasmonks.in/order-invoice-print/3970"><i
                                                class="fas fa-download" id="print_invoice"></i>Print</a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <address>
                                            <strong>Event:</strong>
                                        </address>
                                        <div class="media mb-3">
                                            <img alt="image" class="mr-3"
                                                src="https://eventrights.saasmonks.in/images/upload/641aa475ed2cd.jpg"
                                                width="50" height="50">
                                            <div class="media-body">
                                                <div class="media-title mb-0">
                                                    History of Cinema
                                                </div>
                                                <div class="media-description text-muted">
                                                    Wednesday, 22 Mar 2023
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <address>
                                            <strong>Organizer:</strong><br>
                                            Organizer organizer<br>
                                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="4024252d2f2f3227212e293a253200332121332d2f2e2b336e292e">[email&#160;protected]</a><br>

                                        </address>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">

                                        <address>
                                            <strong>Attendee:</strong><br>
                                            Gordon Kinley<br>
                                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="cca8a9a1a3b9bfa9be8cbfadadbfa1a3a2a7bfe2a5a2">[email&#160;protected]</a><br>
                                        </address>


                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <address>
                                            <strong>Order Date:</strong><br>
                                            20 December, 2025<br><br>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="section-title">Order Summary</div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-md">
                                        <tr>
                                            <th>#</th>
                                            <th class="text-center">Ticket Name</th>
                                            <th class="text-center">Ticket Number</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Code</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td class="text-center">Mid Row</td>
                                            <td class="text-center">69465702ce81e</td>
                                            <td class="text-center">$50.00</td>
                                            <td class="text-center"><a
                                                    href="https://eventrights.saasmonks.in/get-code/3819"><i
                                                        class="fas fa-print"></i></a></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-8">
                                        <div class="section-title">Payment Method</div>
                                        <address>
                                            <strong>LOCAL</strong><br>
                                            <span class="badge mt-1 mb-1 badge-warning">waiting</span><br>
                                            Token: -<br>
                                        </address>
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <div class="invoice-detail-item">
                                            <div class="invoice-detail-name">Subtotal</div>
                                            <div class="invoice-detail-value">
                                                $50
                                            </div>
                                        </div>
                                        <div class="invoice-detail-item">
                                            <div class="invoice-detail-name">Coupon Discount</div>
                                            <div class="invoice-detail-value">(-) $0.00
                                            </div>
                                        </div>

                                        <hr class="mt-2 mb-2">
                                        <div class="invoice-detail-item">
                                            <div class="invoice-detail-name">Total</div>
                                            <div class="invoice-detail-value invoice-detail-value-lg">
                                                $50.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    @endsection
</x-layouts.admin>

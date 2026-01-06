@extends('admin.app')
@section('admin')
    <section class="section">
        <div class="section-header">
            <h1>Order Detail</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="https://eventrights.saasmonks.in/admin/home">Dashboard</a></div>
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
                                <h3>Order #83629</h3>
                                <div class="invoice-number">
                                    <a class="btn btn-primary" target="_blank"
                                        href="https://eventrights.saasmonks.in/order-invoice-print/3441"><i
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
                                            src="https://eventrights.saasmonks.in/images/upload/63e5ed9879e3b.jpg"
                                            width="50" height="50">
                                        <div class="media-body">
                                            <div class="media-title mb-0">
                                                Dance Party
                                            </div>
                                            <div class="media-description text-muted">
                                                Saturday, 24 Jun 2023
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 text-md-right">
                                    <address>
                                        <strong>Organizer:</strong><br>
                                        Organizer organizer<br>
                                        <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="0165646c6e6e7366606f687b647341726060726c6e6f6a722f686f">[email&#160;protected]</a><br>

                                    </address>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">

                                    <address>
                                        <strong>Attendee:</strong><br>
                                        Gordon Kinley<br>
                                        <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="cfabaaa2a0babcaabd8fbcaeaebca2a0a1a4bce1a6a1">[email&#160;protected]</a><br>
                                    </address>


                                </div>
                                <div class="col-md-6 text-md-right">
                                    <address>
                                        <strong>Order Date:</strong><br>
                                        04 April, 2025<br><br>
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
                                        <td class="text-center">Full Season Pass</td>
                                        <td class="text-center">67ef8849d9f09</td>
                                        <td class="text-center">$350.00</td>
                                        <td class="text-center"><a href="https://eventrights.saasmonks.in/get-code/3154"><i
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
                                            $349.68
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
                                            $395.68</div>
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

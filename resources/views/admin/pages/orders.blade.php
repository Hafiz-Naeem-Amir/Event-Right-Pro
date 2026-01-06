<x-layouts.admin>
    @section('admin')
        <div class="row">
            <div class="col-12">
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-4 mt-2">
                            <div class="col-lg-8">
                                <h2 class="section-title mt-0"> Order List</h2>
                            </div>
                            <div class="col-lg-4 text-right">
                            </div>
                        </div>
                        <div class="table-responsive">

                            <table class="table" id="report_table" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Order Id</th>
                                        <th>Customer Name</th>
                                        <th>Event Name</th>
                                        <th>Date</th>
                                        <th>Sold Ticket</th>
                                        <th>Payment</th>
                                        <th>Payment Gateway</th>
                                        <th class="d-none">Order Status</th>
                                        <th>Order Status</th>
                                        <th class="d-none">Payment Status</th>
                                        <th>Payment Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td></td>
                                        <td>#83629 </td>
                                        <td>Gordon Kinley</td>
                                        <td>
                                            <h6 class="mb-0">Dance Party</h6>
                                            <p class="mb-0">2023-06-24 12:00:00</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">2025-04-04</p>
                                            <p class="mb-0">07:20 am</p>
                                        </td>
                                        <td>1 ticket</td>
                                        <td>USD395.68</td>
                                        <td>LOCAL</td>
                                        <td class="d-none">Pending</td>
                                        <td>
                                            <select name="order_status" id="status-3441" class="form-control p-2"
                                                onchange="changeOrderStatus(3441)">
                                                <option value="Pending" selected> Pending </option>
                                                <option value="Complete"> Complete </option>
                                                <option value="Cancel"> Cancel </option>
                                            </select>
                                        </td>
                                        <td class="d-none">Pending</td>

                                        <td>
                                            <select name="payment_status" id="payment-3441" class="form-control p-2"
                                                onchange="changePaymentStatus(3441)">
                                                <option value="0" selected> Pending </option>
                                                <option value="1"> Complete </option>
                                            </select>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.events.details')}}"
                                                class="btn-icon text-primary"><i class="far fa-eye"></i></a>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endsection
</x-layouts.admin>

@extends('admin.app')
@section('admin')
    <section class="section">
        <div class="section-header">
            <h1>Event Reports</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="https://eventrights.saasmonks.in/admin/home">Dashboard</a></div>
                <div class="breadcrumb-item">Event Reports</a></div>
            </div>
        </div>
        <style>
        </style>
        <div class="section-body">
            <h2 class="section-title">Event Reports</h2>
            <p class="section-lead"></p>
            <div class="row mt-sm-4">
                <div class="col-12">
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="review_table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Customer</th>
                                            <th>Event Name</th>
                                            <th>Message</th>
                                            <th>Reason</th>

                                        </tr>
                                    </thead>
                                    <tbody>
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

@extends('admin.app')
@section('admin')
    <section class="section">
        <div class="section-header">
            <h1>Tax</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="https://eventrights.saasmonks.in/admin/home">Dashboard</a></div>
                <div class="breadcrumb-item">Tax</a></div>
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
                                    <h2 class="section-title mt-0"> View Tax</h2>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <button class="btn btn-primary add-button"><a
                                            href="https://eventrights.saasmonks.in/tax/create"><i class="fas fa-plus"></i>
                                            Add New</a></button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table" id="report_table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>name</th>
                                            <th>Charges</th>
                                            <th>Allow in all bills</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>service tax</td>
                                            <td>USD10.68</td>

                                            <td> <span class="badge badge-success  m-1">Allow</span>
                                            </td>
                                            <td> <span class="badge badge-success  m-1">Active</span>
                                            </td>

                                            <td>
                                                <a href="https://eventrights.saasmonks.in/tax/4/edit" class="btn-icon"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="#" onclick="deleteData('tax','4');" title="Delete Tax"
                                                    class="btn-icon text-danger"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>itmbs</td>
                                            <td>7.00%</td>

                                            <td> <span class="badge badge-danger  m-1">Deny</span>
                                            </td>
                                            <td> <span class="badge badge-success  m-1">Active</span>
                                            </td>

                                            <td>
                                                <a href="https://eventrights.saasmonks.in/tax/3/edit" class="btn-icon"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="#" onclick="deleteData('tax','3');" title="Delete Tax"
                                                    class="btn-icon text-danger"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Taxa</td>
                                            <td>10.00%</td>

                                            <td> <span class="badge badge-success  m-1">Allow</span>
                                            </td>
                                            <td> <span class="badge badge-success  m-1">Active</span>
                                            </td>

                                            <td>
                                                <a href="https://eventrights.saasmonks.in/tax/2/edit" class="btn-icon"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="#" onclick="deleteData('tax','2');" title="Delete Tax"
                                                    class="btn-icon text-danger"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Test</td>
                                            <td>20.00%</td>

                                            <td> <span class="badge badge-danger  m-1">Deny</span>
                                            </td>
                                            <td> <span class="badge badge-success  m-1">Active</span>
                                            </td>

                                            <td>
                                                <a href="https://eventrights.saasmonks.in/tax/1/edit" class="btn-icon"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="#" onclick="deleteData('tax','1');" title="Delete Tax"
                                                    class="btn-icon text-danger"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
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
    </section>
@endsection

@extends('admin.app')
@section('admin')
    <section class="section">
        <div class="section-header">
            <h1>Module</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="https://eventrights.saasmonks.in/admin/home">Dashboard</a></div>
                <div class="breadcrumb-item">Module</a></div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                </div>
                <div class="col-12 d-none" id="moduleRemove-success">
                    <div class="col-12">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <div id="successMessageText"></div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-none" id="moduleRemove-error">
                    <div class="col-12">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <div id="errorMessageText"></div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4 mt-2">
                                <div class="col-lg-8">
                                    <h2 class="section-title mt-0"> All Module</h2>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table" id="report_table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Upload</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <h6 class="mt-3">Seatmap</h6>
                                            </td>
                                            <td>
                                                <h5>
                                                    <span class="badge badge-danger  m-1">Disable</span>
                                                </h5>
                                            </td>
                                            <td>
                                                <a href="https://eventrights.saasmonks.in/module/1/edit"
                                                    class="btn btn-primary">
                                                    <i class="fas fa-cloud-upload-alt"></i> Upload Module
                                                </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <h6 class="mt-3">BankPayout</h6>
                                            </td>
                                            <td>
                                                <h5>
                                                    <span class="badge badge-danger  m-1">Disable</span>
                                                </h5>
                                            </td>
                                            <td>
                                                <a href="https://eventrights.saasmonks.in/module/2/edit"
                                                    class="btn btn-primary">
                                                    <i class="fas fa-cloud-upload-alt"></i> Upload Module
                                                </a>
                                            </td>
                                            <td>
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

@extends('admin.app')
@section('admin')
    <section class="section">
        <div class="section-header">
            <h1>Language</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="https://eventrights.saasmonks.in/admin/home">Dashboard</a></div>
                <div class="breadcrumb-item">Language</a></div>
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
                                    <h2 class="section-title mt-0"> All Languages</h2>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <a href="https://eventrights.saasmonks.in/language/download_sample_file">Download Sample
                                        File</a>
                                    <button class="btn btn-primary add-button">
                                        <a href="https://eventrights.saasmonks.in/language/create"><i
                                                class="fas fa-plus"></i> Add New</a></button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table" id="report_table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Status</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <th> <img class="table-img"
                                                    src="https://eventrights.saasmonks.in/images/upload/English.png"> </th>
                                            <td>
                                                <h6 class="mb-0">English</h6>
                                            </td>
                                            <td>
                                                <h5><span class="badge badge-success  m-1">Active</span></h5>
                                            </td>

                                            <td>
                                                <a href="https://eventrights.saasmonks.in/language/1/edit"
                                                    title="Edit Event" class="btn-icon"><i class="fas fa-edit"></i></a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <th> <img class="table-img"
                                                    src="https://eventrights.saasmonks.in/images/upload/Ar.png"> </th>
                                            <td>
                                                <h6 class="mb-0">Ar</h6>
                                            </td>
                                            <td>
                                                <h5><span class="badge badge-warning  m-1">Inactive</span></h5>
                                            </td>

                                            <td>
                                                <a href="https://eventrights.saasmonks.in/language/8/edit"
                                                    title="Edit Event" class="btn-icon"><i class="fas fa-edit"></i></a>

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

@extends('admin.app')
@section('admin')
    <section class="section">
        <div class="section-header">
            <h1>Banner</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="https://eventrights.saasmonks.in/admin/home">Dashboard</a></div>
                <div class="breadcrumb-item">Banner</a></div>
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
                                    <h2 class="section-title mt-0"> All Banner</h2>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <button class="btn btn-primary add-button"><a
                                            href="https://eventrights.saasmonks.in/banner/create"><i
                                                class="fas fa-plus"></i> Add New</a></button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table" id="report_table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <th> <img class="table-img"
                                                    src="https://eventrights.saasmonks.in/images/upload/641aa353a30cc.jpg">
                                            </th>
                                            <th> Musicverse Madness </th>
                                            <td>
                                                <h5><span class="badge badge-success  m-1">Active</span></h5>
                                            </td>
                                            <td>
                                                <a href="https://eventrights.saasmonks.in/banner/9/edit" title="Edit Banner"
                                                    class="btn-icon"><i class="fas fa-edit"></i></a>
                                                <a href="javascript:void(0);" onclick="deleteData('banner','9');"
                                                    title="Delete Banner" class="btn-icon text-danger"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <th> <img class="table-img"
                                                    src="https://eventrights.saasmonks.in/images/upload/641aa3d0328a5.jpg">
                                            </th>
                                            <th> Origin of Cinema </th>
                                            <td>
                                                <h5><span class="badge badge-success  m-1">Active</span></h5>
                                            </td>
                                            <td>
                                                <a href="https://eventrights.saasmonks.in/banner/8/edit" title="Edit Banner"
                                                    class="btn-icon"><i class="fas fa-edit"></i></a>
                                                <a href="javascript:void(0);" onclick="deleteData('banner','8');"
                                                    title="Delete Banner" class="btn-icon text-danger"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <th> <img class="table-img"
                                                    src="https://eventrights.saasmonks.in/images/upload/641aa02175cec.jpg">
                                            </th>
                                            <th> DJ Karaoke Fun </th>
                                            <td>
                                                <h5><span class="badge badge-success  m-1">Active</span></h5>
                                            </td>
                                            <td>
                                                <a href="https://eventrights.saasmonks.in/banner/6/edit" title="Edit Banner"
                                                    class="btn-icon"><i class="fas fa-edit"></i></a>
                                                <a href="javascript:void(0);" onclick="deleteData('banner','6');"
                                                    title="Delete Banner" class="btn-icon text-danger"><i
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
    </div>
@endsection

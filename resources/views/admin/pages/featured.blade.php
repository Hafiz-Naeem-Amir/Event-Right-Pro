@extends('admin.app')
@section('admin')
    <section class="section">
        <div class="section-header">
            <h1>Featured Brands</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="https://eventrights.saasmonks.in/admin/home">Dashboard</a></div>
                <div class="breadcrumb-item">Featured Brands</a></div>
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
                                    <h2 class="section-title mt-0"> Featured Brands</h2>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <button class="btn btn-primary add-button"><a
                                            href="https://eventrights.saasmonks.in/brands/create"><i
                                                class="fas fa-plus"></i> Add New</a></button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table" id="report_table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>URL</th>
                                            <th>Logo Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Brand 1</td>
                                            <td><a href="https://example.com" target="_blank">https://example.com</a></td>
                                            <td><img src="https://eventrights.saasmonks.in/images/brands/1.png"
                                                    alt="Brand 1" width="50"></td>
                                            <td> <span class="badge badge-success  m-1">Active</span>
                                            </td>
                                            <td>
                                                <a href="https://eventrights.saasmonks.in/brands/1/edit" class="btn-icon"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="#" onclick="deleteData('brands','1');" title="Delete Brand"
                                                    class="btn-icon text-danger"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Brand 2</td>
                                            <td><a href="https://example.com" target="_blank">https://example.com</a></td>
                                            <td><img src="https://eventrights.saasmonks.in/images/brands/2.png"
                                                    alt="Brand 2" width="50"></td>
                                            <td> <span class="badge badge-success  m-1">Active</span>
                                            </td>
                                            <td>
                                                <a href="https://eventrights.saasmonks.in/brands/2/edit" class="btn-icon"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="#" onclick="deleteData('brands','2');" title="Delete Brand"
                                                    class="btn-icon text-danger"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Brand 3</td>
                                            <td><a href="https://example.com" target="_blank">https://example.com</a></td>
                                            <td><img src="https://eventrights.saasmonks.in/images/brands/3.png"
                                                    alt="Brand 3" width="50"></td>
                                            <td> <span class="badge badge-success  m-1">Active</span>
                                            </td>
                                            <td>
                                                <a href="https://eventrights.saasmonks.in/brands/3/edit" class="btn-icon"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="#" onclick="deleteData('brands','3');" title="Delete Brand"
                                                    class="btn-icon text-danger"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Brand 4</td>
                                            <td><a href="https://example.com" target="_blank">https://example.com</a></td>
                                            <td><img src="https://eventrights.saasmonks.in/images/brands/4.png"
                                                    alt="Brand 4" width="50"></td>
                                            <td> <span class="badge badge-success  m-1">Active</span>
                                            </td>
                                            <td>
                                                <a href="https://eventrights.saasmonks.in/brands/4/edit" class="btn-icon"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="#" onclick="deleteData('brands','4');" title="Delete Brand"
                                                    class="btn-icon text-danger"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Brand 5</td>
                                            <td><a href="https://example.com" target="_blank">https://example.com</a></td>
                                            <td><img src="https://eventrights.saasmonks.in/images/brands/5.png"
                                                    alt="Brand 5" width="50"></td>
                                            <td> <span class="badge badge-success  m-1">Active</span>
                                            </td>
                                            <td>
                                                <a href="https://eventrights.saasmonks.in/brands/5/edit" class="btn-icon"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="#" onclick="deleteData('brands','5');" title="Delete Brand"
                                                    class="btn-icon text-danger"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Brand 6</td>
                                            <td><a href="https://example.com" target="_blank">https://example.com</a></td>
                                            <td><img src="https://eventrights.saasmonks.in/images/brands/6.png"
                                                    alt="Brand 6" width="50"></td>
                                            <td> <span class="badge badge-success  m-1">Active</span>
                                            </td>
                                            <td>
                                                <a href="https://eventrights.saasmonks.in/brands/6/edit" class="btn-icon"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="#" onclick="deleteData('brands','6');"
                                                    title="Delete Brand" class="btn-icon text-danger"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Brand 7</td>
                                            <td><a href="https://example.com" target="_blank">https://example.com</a></td>
                                            <td><img src="https://eventrights.saasmonks.in/images/brands/7.png"
                                                    alt="Brand 7" width="50"></td>
                                            <td> <span class="badge badge-success  m-1">Active</span>
                                            </td>
                                            <td>
                                                <a href="https://eventrights.saasmonks.in/brands/7/edit"
                                                    class="btn-icon"><i class="fas fa-edit"></i></a>
                                                <a href="#" onclick="deleteData('brands','7');"
                                                    title="Delete Brand" class="btn-icon text-danger"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Brand 8</td>
                                            <td><a href="https://example.com" target="_blank">https://example.com</a></td>
                                            <td><img src="https://eventrights.saasmonks.in/images/brands/8.png"
                                                    alt="Brand 8" width="50"></td>
                                            <td> <span class="badge badge-success  m-1">Active</span>
                                            </td>
                                            <td>
                                                <a href="https://eventrights.saasmonks.in/brands/8/edit"
                                                    class="btn-icon"><i class="fas fa-edit"></i></a>
                                                <a href="#" onclick="deleteData('brands','8');"
                                                    title="Delete Brand" class="btn-icon text-danger"><i
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

@extends('admin.app')
@section('admin')
    <section class="section">
        <div class="section-header">
            <h1>Add User</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="https://eventrights.saasmonks.in/admin/home">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="https://eventrights.saasmonks.in/app-user">Users</a></div>
                <div class="breadcrumb-item">Add User</a></div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="section-title"> Add User</h2>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="https://eventrights.saasmonks.in/app-user"
                                enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="Mx0cESvwVf8pyNV5FlLVuiUsO3XB9oL8clqOANvo">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group center">
                                            <label>Image</label>
                                            <div id="image-preview" class="image-preview">
                                                <label for="image-upload" id="image-label"> <i
                                                        class="fas fa-plus"></i></label>
                                                <input type="file" name="image" id="image-upload" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" placeholder="Name" value=""
                                                class="form-control ">
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="last_name" placeholder="Last Name" value=""
                                                class="form-control ">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" placeholder="Email" value=""
                                                class="form-control ">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" name="password" placeholder="Password"
                                                        class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>status</label>
                                                    <select name="status" class="form-control select2">
                                                        <option value="1">Active</option>
                                                        <option value="0">
                                                            Block</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary demo-button">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

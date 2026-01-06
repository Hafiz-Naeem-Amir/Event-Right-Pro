@extends('admin.app')
@section('admin')
    <section class="section">
        <div class="section-header">
            <h1>Add Brand</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="https://eventrights.saasmonks.in/admin/home">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="https://eventrights.saasmonks.in/brands">Brand</a></div>
                <div class="breadcrumb-item">Add Brand</a></div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="section-title"> Add Brand</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="https://eventrights.saasmonks.in/brands"
                                enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="Mx0cESvwVf8pyNV5FlLVuiUsO3XB9oL8clqOANvo">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" placeholder="Name" value=""
                                        class="form-control " maxlength="20">
                                </div>
                                <div class="form-group">
                                    <label>URL</label>
                                    <input type="text" name="url" placeholder="URL" value=""
                                        class="form-control " maxlength="255">
                                </div>
                                <div class="form-group">
                                    <label>Logo Image (Recommended Size: 160px x 160px, PNG)</label>
                                    <input type="file" name="logo_image" placeholder="Logo Image" value=""
                                        class="form-control " accept="image/*" required onchange="previewImage(event)">

                                    <div class="mt-2 d-flex justify-content-center align-items-center border rounded-md"
                                        id="image-preview-container" style="display: none; height: 160px; width: 160px;">
                                        <img id="logo-image-preview" src="#" alt="Logo Image" class="img-fluid">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control select2">
                                        <option value="1">Active</option>
                                        <option value="0">
                                            Inactive
                                        </option>
                                    </select>
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

@extends('admin.app')
@section('admin')
    <section class="section">
        <div class="section-header">
            <h1>Add Banner</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="https://eventrights.saasmonks.in/admin/home">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="https://eventrights.saasmonks.in/banner">Banner</a></div>
                <div class="breadcrumb-item">Add Banner</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="section-title"> Add banner</h2>
                </div>
            </div>
            <div class="col-12">
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="https://eventrights.saasmonks.in/banner"
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
                                            <label>Title</label>
                                            <input type="text" name="title" placeholder="Title" value=""
                                                class="form-control ">
                                        </div>
                                        <div class="form-group">
                                            <label>Events</label>
                                            <select name="event_id" class="form-control select2">
                                                <option value="" disabled selected>Select Event</option>
                                                <option value="5">Virtual Live Karaoke</option>
                                                <option value="19">Karaoke Jams</option>
                                                <option value="13">Book Fair</option>
                                                <option value="4">Dance Party</option>
                                                <option value="7">History of Cinema</option>
                                                <option value="2">Couple&#039;s Campfire</option>
                                                <option value="3">Online Game Night</option>
                                                <option value="1">Virtual Cocktail Shake-up</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>status</label>
                                            <select name="status" class="form-control select2">
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
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
    </div>
@endsection

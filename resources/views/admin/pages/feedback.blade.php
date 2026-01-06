@extends('admin.app')
@section('admin')
    <section class="section">
        <div class="section-header">
            <h1>Feedback</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="https://eventrights.saasmonks.in/admin/home">Dashboard</a></div>
                <div class="breadcrumb-item">Feedback</a></div>
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
                                    <h2 class="section-title mt-0"> All Feedback</h2>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <button class="btn btn-primary add-button"><a
                                            href="https://eventrights.saasmonks.in/feedback/create"><i
                                                class="fas fa-plus"></i> Add New</a></button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table" id="feedback_table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Organizer</th>
                                            <th>Message</th>
                                            <th>Rate</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <div class="media">
                                                    <img alt="image" class="mr-3 rounded-circle avatar" width="50"
                                                        src="https://eventrights.saasmonks.in/images/upload/defaultuser.png">
                                                    <div class="media-body">
                                                        <div class="media-title mb-0"> </div>
                                                        <div class="media-description text-muted"> <a
                                                                href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                                data-cfemail="5637323b3f381637323b3f387835393b">[email&#160;protected]</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>sontoloyo</td>
                                            <td>
                                                <div class="rating">
                                                    <p class="d-none">★</p>
                                                    <i class="fas fa-star active"></i>
                                                    <p class="d-none">★</p>
                                                    <i class="fas fa-star active"></i>
                                                    <p class="d-none">★</p>
                                                    <i class="fas fa-star active"></i>
                                                    <p class="d-none"></p>
                                                    <i class="fas fa-star "></i>
                                                    <p class="d-none"></p>
                                                    <i class="fas fa-star "></i>
                                                </div>
                                            </td>

                                            <td>
                                                <a href="https://eventrights.saasmonks.in/feedback/2/edit"
                                                    title="Edit Feedback" class="btn-icon"><i class="fas fa-edit"></i></a>
                                                <a href="#" onclick="deleteData('feedback','2');"
                                                    title="Delete Feedback" class="btn-icon text-danger"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <div class="media">
                                                    <img alt="image" class="mr-3 rounded-circle avatar" width="50"
                                                        src="https://eventrights.saasmonks.in/images/upload/6418617825d38.png">
                                                    <div class="media-body">
                                                        <div class="media-title mb-0"> </div>
                                                        <div class="media-description text-muted"> <a
                                                                href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                                data-cfemail="d2b6b7bfbdbda0b5b3bcbba8b7a092a1b3a1a1bfbdbcb9a1fcbbbc">[email&#160;protected]</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>good</td>
                                            <td>
                                                <div class="rating">
                                                    <p class="d-none">★</p>
                                                    <i class="fas fa-star active"></i>
                                                    <p class="d-none">★</p>
                                                    <i class="fas fa-star active"></i>
                                                    <p class="d-none">★</p>
                                                    <i class="fas fa-star active"></i>
                                                    <p class="d-none">★</p>
                                                    <i class="fas fa-star active"></i>
                                                    <p class="d-none"></p>
                                                    <i class="fas fa-star "></i>
                                                </div>
                                            </td>

                                            <td>
                                                <a href="https://eventrights.saasmonks.in/feedback/1/edit"
                                                    title="Edit Feedback" class="btn-icon"><i class="fas fa-edit"></i></a>
                                                <a href="#" onclick="deleteData('feedback','1');"
                                                    title="Delete Feedback" class="btn-icon text-danger"><i
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

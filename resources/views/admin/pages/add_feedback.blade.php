@extends('admin.app')
@section('admin')
    <section class="section">
        <div class="section-header">
            <h1>Add Feedback</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="https://eventrights.saasmonks.in/admin/home">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="https://eventrights.saasmonks.in/feedback">Feedback</a></div>
                <div class="breadcrumb-item">Add Feedback</a></div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="section-title"> Add Feedback</h2>
                </div>
            </div>

            <div class="col-12">
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" class="feedback-form" action="https://eventrights.saasmonks.in/feedback"
                                enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="Mx0cESvwVf8pyNV5FlLVuiUsO3XB9oL8clqOANvo">
                                <div class="form-group">
                                    <input type="hidden" name="rate" required>
                                    <div class="rating">
                                        <i class="fa fa-star" onclick="addRatee('1');" id="rate-1"></i>
                                        <i class="fa fa-star" onclick="addRatee('2');" id="rate-2"></i>
                                        <i class="fa fa-star" onclick="addRatee('3');" id="rate-3"></i>
                                        <i class="fa fa-star" onclick="addRatee('4');" id="rate-4"></i>
                                        <i class="fa fa-star" onclick="addRatee('5');" id="rate-5"></i>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" placeholder="Email" value=""
                                        class="form-control ">
                                </div>

                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea name="message" placeholder="Message" class="form-control "></textarea>
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

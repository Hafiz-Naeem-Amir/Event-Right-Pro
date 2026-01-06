@extends('admin.app')
@section('admin')
    <section class="section">
        <div class="section-header">
            <h1>Add Faq</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="https://eventrights.saasmonks.in/admin/home">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="https://eventrights.saasmonks.in/faq">Faq</a></div>
                <div class="breadcrumb-item">Add Faq</a></div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="section-title"> Add Faq</h2>
                </div>
            </div>

            <div class="col-12">
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="https://eventrights.saasmonks.in/faq"
                                enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="Mx0cESvwVf8pyNV5FlLVuiUsO3XB9oL8clqOANvo">
                                <div class="form-group">
                                    <label>Question</label>
                                    <input type="text" name="question" placeholder="Question" value=""
                                        class="form-control ">
                                </div>

                                <div class="form-group">
                                    <label>Answer</label>
                                    <textarea name="answer" placeholder="Answer" class="form-control "></textarea>
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

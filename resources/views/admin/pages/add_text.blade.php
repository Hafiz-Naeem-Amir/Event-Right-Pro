@extends('admin.app')
@section('admin')
    <section class="section">
        <div class="section-header">
            <h1>Add Tax</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="https://eventrights.saasmonks.in/admin/home">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="https://eventrights.saasmonks.in/tax">Tax</a></div>
                <div class="breadcrumb-item">Add Tax</a></div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="section-title"> Add Tax</h2>
                </div>
            </div>

            <div class="col-12">
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="https://eventrights.saasmonks.in/tax">
                                <input type="hidden" name="_token" value="Mx0cESvwVf8pyNV5FlLVuiUsO3XB9oL8clqOANvo">
                                <input type="hidden" name="user_id" id="" value="1">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" placeholder="Name" value=""
                                        class="form-control ">
                                </div>
                                <div class="form-group">
                                    <label>Amount Type</label><br>
                                    <input class="ml-0" name="amount_type" type="radio" value="price"
                                        class="form-control " checked>Price
                                    <input class="ml-5" name="amount_type" type="radio" value="percentage"
                                        class="form-control ">Percentage
                                </div>
                                <div class="form-group">
                                    <label>Charges</label>
                                    <input type="number" min="1" step="any" name="price" placeholder="Charges"
                                        value="" class="form-control ">
                                </div>
                                <div class="form-group">
                                    <label>status</label>
                                    <select name="status" class="form-control select2">
                                        <option value="1">Active</option>
                                        <option value="0">
                                            Inactive
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="allow_all_bill" value="1"
                                            class="custom-control-input" tabindex="3" id="allow_all_bill">
                                        <label class="custom-control-label" for="allow_all_bill">Allow this tax in all
                                            bills</label>
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

@extends('admin.app')
@section('admin')
<section class="section">
        <div class="section-header">
    <h1>App Users</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="https://eventrights.saasmonks.in/admin/home">Dashboard</a></div>
            <div class="breadcrumb-item">App Users</a></div>
    </div>
  </div>

        <div class="section-body">


            <div class="row">
                <div class="col-12">
                                    </div>
                <div class="col-12">
                                    </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4 mt-2">
                                <div class="col-lg-8">
                                    <h2 class="section-title mt-0"> View Users</h2>
                                </div>
                                <div class="col-lg-4 text-right">
                                                                            <button class="btn btn-primary add-button"><a href="https://eventrights.saasmonks.in/app-user/create"><i
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
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Verified</th>
                                            <th>Wallet</th>
                                                                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                                    <tr>
                                                <td></td>
                                                <th> <img class="avatar avatar-lg"
                                                        src="https://eventrights.saasmonks.in/images/upload/defaultuser.png"> </th>
                                                <td>Favour</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bfd8d0dbccd9dec9d0cacdccd7ded6ddcaffd8d2ded6d391dcd0d2">[email&#160;protected]</a></td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-success  m-1">Active</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-danger  m-1">Unverified</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                                                                <td>
                                                    <a href="https://eventrights.saasmonks.in/view-user/17" title="User Detail"
                                                        class="btn-icon text-success"><i class="fas fa-eye"></i></a>
                                                                                                            <a href="https://eventrights.saasmonks.in/app_users_edit/17" class="btn-icon"><i
                                                                class="fas fa-edit" data-toggle="tooltip" data-placement="top"
                                                                title="Edit"></i></a>
                                                                                                                                                                                                                            <a href="https://eventrights.saasmonks.in/block-user/17"
                                                                title="Block Favour"
                                                                class="btn-icon text-danger"><i
                                                                    class="fas fa-ban text-danger"></i></a>
                                                                                                                                                                                                                        <a onclick="deleteData('app-user','17');"
                                                            href="javascript:void(0);" class="btn-icon text-danger">
                                                            <i class="fa fa-trash text-danger"></i>
                                                        </a>
                                                    
                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td></td>
                                                <th> <img class="avatar avatar-lg"
                                                        src="https://eventrights.saasmonks.in/images/upload/defaultuser.png"> </th>
                                                <td>Vincent Maldonado</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="422627212d322d2937022f232b2e2b2c23362d306c212d2f">[email&#160;protected]</a></td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-success  m-1">Active</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-danger  m-1">Unverified</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                                                                <td>
                                                    <a href="https://eventrights.saasmonks.in/view-user/16" title="User Detail"
                                                        class="btn-icon text-success"><i class="fas fa-eye"></i></a>
                                                                                                            <a href="https://eventrights.saasmonks.in/app_users_edit/16" class="btn-icon"><i
                                                                class="fas fa-edit" data-toggle="tooltip" data-placement="top"
                                                                title="Edit"></i></a>
                                                                                                                                                                                                                            <a href="https://eventrights.saasmonks.in/block-user/16"
                                                                title="Block Vincent Maldonado"
                                                                class="btn-icon text-danger"><i
                                                                    class="fas fa-ban text-danger"></i></a>
                                                                                                                                                                                                                        <a onclick="deleteData('app-user','16');"
                                                            href="javascript:void(0);" class="btn-icon text-danger">
                                                            <i class="fa fa-trash text-danger"></i>
                                                        </a>
                                                    
                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td></td>
                                                <th> <img class="avatar avatar-lg"
                                                        src="https://eventrights.saasmonks.in/images/upload/defaultuser.png"> </th>
                                                <td>cscsq</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4b2028222425280b20282224252865282426">[email&#160;protected]</a></td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-success  m-1">Active</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-danger  m-1">Unverified</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                                                                <td>
                                                    <a href="https://eventrights.saasmonks.in/view-user/15" title="User Detail"
                                                        class="btn-icon text-success"><i class="fas fa-eye"></i></a>
                                                                                                            <a href="https://eventrights.saasmonks.in/app_users_edit/15" class="btn-icon"><i
                                                                class="fas fa-edit" data-toggle="tooltip" data-placement="top"
                                                                title="Edit"></i></a>
                                                                                                                                                                                                                            <a href="https://eventrights.saasmonks.in/block-user/15"
                                                                title="Block cscsq"
                                                                class="btn-icon text-danger"><i
                                                                    class="fas fa-ban text-danger"></i></a>
                                                                                                                                                                                                                        <a onclick="deleteData('app-user','15');"
                                                            href="javascript:void(0);" class="btn-icon text-danger">
                                                            <i class="fa fa-trash text-danger"></i>
                                                        </a>
                                                    
                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td></td>
                                                <th> <img class="avatar avatar-lg"
                                                        src="https://eventrights.saasmonks.in/images/upload/defaultuser.png"> </th>
                                                <td>Rinku Budania</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5022313a3b253d31273124696910293f203d31393c7e333f3d">[email&#160;protected]</a></td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-success  m-1">Active</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-danger  m-1">Unverified</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                                                                <td>
                                                    <a href="https://eventrights.saasmonks.in/view-user/14" title="User Detail"
                                                        class="btn-icon text-success"><i class="fas fa-eye"></i></a>
                                                                                                            <a href="https://eventrights.saasmonks.in/app_users_edit/14" class="btn-icon"><i
                                                                class="fas fa-edit" data-toggle="tooltip" data-placement="top"
                                                                title="Edit"></i></a>
                                                                                                                                                                                                                            <a href="https://eventrights.saasmonks.in/block-user/14"
                                                                title="Block Rinku Budania"
                                                                class="btn-icon text-danger"><i
                                                                    class="fas fa-ban text-danger"></i></a>
                                                                                                                                                                                                                        <a onclick="deleteData('app-user','14');"
                                                            href="javascript:void(0);" class="btn-icon text-danger">
                                                            <i class="fa fa-trash text-danger"></i>
                                                        </a>
                                                    
                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td></td>
                                                <th> <img class="avatar avatar-lg"
                                                        src="https://eventrights.saasmonks.in/images/upload/defaultuser.png"> </th>
                                                <td>dsdsadsadsa</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dbbaa8b0bfb1baa89ba8babfb0b1b7a8baf5b8bf">[email&#160;protected]</a></td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-success  m-1">Active</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-success  m-1">Verified</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                                                                <td>
                                                    <a href="https://eventrights.saasmonks.in/view-user/13" title="User Detail"
                                                        class="btn-icon text-success"><i class="fas fa-eye"></i></a>
                                                                                                            <a href="https://eventrights.saasmonks.in/app_users_edit/13" class="btn-icon"><i
                                                                class="fas fa-edit" data-toggle="tooltip" data-placement="top"
                                                                title="Edit"></i></a>
                                                                                                                                                                                                                            <a href="https://eventrights.saasmonks.in/block-user/13"
                                                                title="Block dsdsadsadsa"
                                                                class="btn-icon text-danger"><i
                                                                    class="fas fa-ban text-danger"></i></a>
                                                                                                                                                                                                                        <a onclick="deleteData('app-user','13');"
                                                            href="javascript:void(0);" class="btn-icon text-danger">
                                                            <i class="fa fa-trash text-danger"></i>
                                                        </a>
                                                    
                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td></td>
                                                <th> <img class="avatar avatar-lg"
                                                        src="https://eventrights.saasmonks.in/images/upload/defaultuser.png"> </th>
                                                <td>Sajeeb</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c390a2a9a6a6a1f7f6a483a4aea2aaafeda0acae">[email&#160;protected]</a></td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-success  m-1">Active</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-danger  m-1">Unverified</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                                                                <td>
                                                    <a href="https://eventrights.saasmonks.in/view-user/12" title="User Detail"
                                                        class="btn-icon text-success"><i class="fas fa-eye"></i></a>
                                                                                                            <a href="https://eventrights.saasmonks.in/app_users_edit/12" class="btn-icon"><i
                                                                class="fas fa-edit" data-toggle="tooltip" data-placement="top"
                                                                title="Edit"></i></a>
                                                                                                                                                                                                                            <a href="https://eventrights.saasmonks.in/block-user/12"
                                                                title="Block Sajeeb"
                                                                class="btn-icon text-danger"><i
                                                                    class="fas fa-ban text-danger"></i></a>
                                                                                                                                                                                                                        <a onclick="deleteData('app-user','12');"
                                                            href="javascript:void(0);" class="btn-icon text-danger">
                                                            <i class="fa fa-trash text-danger"></i>
                                                        </a>
                                                    
                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td></td>
                                                <th> <img class="avatar avatar-lg"
                                                        src="https://eventrights.saasmonks.in/images/upload/defaultuser.png"> </th>
                                                <td>Krishna</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b1dac3d8c2d9d6dac3d8c2d9f1d6dcd0d8dd9fd2dedc">[email&#160;protected]</a></td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-success  m-1">Active</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-danger  m-1">Unverified</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                                                                <td>
                                                    <a href="https://eventrights.saasmonks.in/view-user/11" title="User Detail"
                                                        class="btn-icon text-success"><i class="fas fa-eye"></i></a>
                                                                                                            <a href="https://eventrights.saasmonks.in/app_users_edit/11" class="btn-icon"><i
                                                                class="fas fa-edit" data-toggle="tooltip" data-placement="top"
                                                                title="Edit"></i></a>
                                                                                                                                                                                                                            <a href="https://eventrights.saasmonks.in/block-user/11"
                                                                title="Block Krishna"
                                                                class="btn-icon text-danger"><i
                                                                    class="fas fa-ban text-danger"></i></a>
                                                                                                                                                                                                                        <a onclick="deleteData('app-user','11');"
                                                            href="javascript:void(0);" class="btn-icon text-danger">
                                                            <i class="fa fa-trash text-danger"></i>
                                                        </a>
                                                    
                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td></td>
                                                <th> <img class="avatar avatar-lg"
                                                        src="https://eventrights.saasmonks.in/images/upload/defaultuser.png"> </th>
                                                <td>Tharaka</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="87e0e6ebebe2ebeee9e2c7e0eae6eeeba9e4e8ea">[email&#160;protected]</a></td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-success  m-1">Active</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-danger  m-1">Unverified</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                                                                <td>
                                                    <a href="https://eventrights.saasmonks.in/view-user/10" title="User Detail"
                                                        class="btn-icon text-success"><i class="fas fa-eye"></i></a>
                                                                                                            <a href="https://eventrights.saasmonks.in/app_users_edit/10" class="btn-icon"><i
                                                                class="fas fa-edit" data-toggle="tooltip" data-placement="top"
                                                                title="Edit"></i></a>
                                                                                                                                                                                                                            <a href="https://eventrights.saasmonks.in/block-user/10"
                                                                title="Block Tharaka"
                                                                class="btn-icon text-danger"><i
                                                                    class="fas fa-ban text-danger"></i></a>
                                                                                                                                                                                                                        <a onclick="deleteData('app-user','10');"
                                                            href="javascript:void(0);" class="btn-icon text-danger">
                                                            <i class="fa fa-trash text-danger"></i>
                                                        </a>
                                                    
                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td></td>
                                                <th> <img class="avatar avatar-lg"
                                                        src="https://eventrights.saasmonks.in/images/upload/defaultuser.png"> </th>
                                                <td>abcd</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="204142434460414243440e434f4d">[email&#160;protected]</a></td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-success  m-1">Active</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-danger  m-1">Unverified</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                                                                <td>
                                                    <a href="https://eventrights.saasmonks.in/view-user/9" title="User Detail"
                                                        class="btn-icon text-success"><i class="fas fa-eye"></i></a>
                                                                                                            <a href="https://eventrights.saasmonks.in/app_users_edit/9" class="btn-icon"><i
                                                                class="fas fa-edit" data-toggle="tooltip" data-placement="top"
                                                                title="Edit"></i></a>
                                                                                                                                                                                                                            <a href="https://eventrights.saasmonks.in/block-user/9"
                                                                title="Block abcd"
                                                                class="btn-icon text-danger"><i
                                                                    class="fas fa-ban text-danger"></i></a>
                                                                                                                                                                                                                        <a onclick="deleteData('app-user','9');"
                                                            href="javascript:void(0);" class="btn-icon text-danger">
                                                            <i class="fa fa-trash text-danger"></i>
                                                        </a>
                                                    
                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td></td>
                                                <th> <img class="avatar avatar-lg"
                                                        src="https://eventrights.saasmonks.in/images/upload/defaultuser.png"> </th>
                                                <td>Makenro</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="adcbdfc8d7d49995edcac0ccc4c183cec2c0">[email&#160;protected]</a></td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-success  m-1">Active</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-danger  m-1">Unverified</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                                                                <td>
                                                    <a href="https://eventrights.saasmonks.in/view-user/8" title="User Detail"
                                                        class="btn-icon text-success"><i class="fas fa-eye"></i></a>
                                                                                                            <a href="https://eventrights.saasmonks.in/app_users_edit/8" class="btn-icon"><i
                                                                class="fas fa-edit" data-toggle="tooltip" data-placement="top"
                                                                title="Edit"></i></a>
                                                                                                                                                                                                                            <a href="https://eventrights.saasmonks.in/block-user/8"
                                                                title="Block Makenro"
                                                                class="btn-icon text-danger"><i
                                                                    class="fas fa-ban text-danger"></i></a>
                                                                                                                                                                                                                        <a onclick="deleteData('app-user','8');"
                                                            href="javascript:void(0);" class="btn-icon text-danger">
                                                            <i class="fa fa-trash text-danger"></i>
                                                        </a>
                                                    
                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td></td>
                                                <th> <img class="avatar avatar-lg"
                                                        src="https://eventrights.saasmonks.in/images/upload/defaultuser.png"> </th>
                                                <td>Ami bet</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fe8a9b8d8abe9f9a939790d09d9193">[email&#160;protected]</a></td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-success  m-1">Active</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-success  m-1">Verified</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                                                                <td>
                                                    <a href="https://eventrights.saasmonks.in/view-user/7" title="User Detail"
                                                        class="btn-icon text-success"><i class="fas fa-eye"></i></a>
                                                                                                            <a href="https://eventrights.saasmonks.in/app_users_edit/7" class="btn-icon"><i
                                                                class="fas fa-edit" data-toggle="tooltip" data-placement="top"
                                                                title="Edit"></i></a>
                                                                                                                                                                                                                            <a href="https://eventrights.saasmonks.in/block-user/7"
                                                                title="Block Ami bet"
                                                                class="btn-icon text-danger"><i
                                                                    class="fas fa-ban text-danger"></i></a>
                                                                                                                                                                                                                        <a onclick="deleteData('app-user','7');"
                                                            href="javascript:void(0);" class="btn-icon text-danger">
                                                            <i class="fa fa-trash text-danger"></i>
                                                        </a>
                                                    
                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td></td>
                                                <th> <img class="avatar avatar-lg"
                                                        src="https://eventrights.saasmonks.in/images/upload/defaultuser.png"> </th>
                                                <td>user12</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5f2a2c3a2d6e1f3b3a3230713c3032">[email&#160;protected]</a></td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-success  m-1">Active</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-danger  m-1">Unverified</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                                                                <td>
                                                    <a href="https://eventrights.saasmonks.in/view-user/6" title="User Detail"
                                                        class="btn-icon text-success"><i class="fas fa-eye"></i></a>
                                                                                                            <a href="https://eventrights.saasmonks.in/app_users_edit/6" class="btn-icon"><i
                                                                class="fas fa-edit" data-toggle="tooltip" data-placement="top"
                                                                title="Edit"></i></a>
                                                                                                                                                                                                                            <a href="https://eventrights.saasmonks.in/block-user/6"
                                                                title="Block user12"
                                                                class="btn-icon text-danger"><i
                                                                    class="fas fa-ban text-danger"></i></a>
                                                                                                                                                                                                                        <a onclick="deleteData('app-user','6');"
                                                            href="javascript:void(0);" class="btn-icon text-danger">
                                                            <i class="fa fa-trash text-danger"></i>
                                                        </a>
                                                    
                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td></td>
                                                <th> <img class="avatar avatar-lg"
                                                        src="https://eventrights.saasmonks.in/images/upload/defaultuser.png"> </th>
                                                <td>test</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="443021373004302137306a30213730">[email&#160;protected]</a></td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-success  m-1">Active</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-success  m-1">Verified</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                                                                <td>
                                                    <a href="https://eventrights.saasmonks.in/view-user/5" title="User Detail"
                                                        class="btn-icon text-success"><i class="fas fa-eye"></i></a>
                                                                                                            <a href="https://eventrights.saasmonks.in/app_users_edit/5" class="btn-icon"><i
                                                                class="fas fa-edit" data-toggle="tooltip" data-placement="top"
                                                                title="Edit"></i></a>
                                                                                                                                                                                                                            <a href="https://eventrights.saasmonks.in/block-user/5"
                                                                title="Block test"
                                                                class="btn-icon text-danger"><i
                                                                    class="fas fa-ban text-danger"></i></a>
                                                                                                                                                                                                                        <a onclick="deleteData('app-user','5');"
                                                            href="javascript:void(0);" class="btn-icon text-danger">
                                                            <i class="fa fa-trash text-danger"></i>
                                                        </a>
                                                    
                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td></td>
                                                <th> <img class="avatar avatar-lg"
                                                        src="https://eventrights.saasmonks.in/images/upload/64196b8698592.jpg"> </th>
                                                <td>Gordon</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9cf8f9f1f3e9eff9eedceffdfdeff1f3f2f7efb2f5f2">[email&#160;protected]</a></td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-success  m-1">Active</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-success  m-1">Verified</span>
                                                    </h5>
                                                </td>
                                                <td>
                                                    425
                                                </td>
                                                                                                <td>
                                                    <a href="https://eventrights.saasmonks.in/view-user/1" title="User Detail"
                                                        class="btn-icon text-success"><i class="fas fa-eye"></i></a>
                                                                                                            <a href="https://eventrights.saasmonks.in/app_users_edit/1" class="btn-icon"><i
                                                                class="fas fa-edit" data-toggle="tooltip" data-placement="top"
                                                                title="Edit"></i></a>
                                                                                                                                                                                                                            <a href="https://eventrights.saasmonks.in/block-user/1"
                                                                title="Block Gordon"
                                                                class="btn-icon text-danger"><i
                                                                    class="fas fa-ban text-danger"></i></a>
                                                                                                                                                                                                                        <a onclick="deleteData('app-user','1');"
                                                            href="javascript:void(0);" class="btn-icon text-danger">
                                                            <i class="fa fa-trash text-danger"></i>
                                                        </a>
                                                    
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
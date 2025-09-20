@php
    $breadcrumbs = [
        ['name' => 'Home', 'href' => route('home')],
        // ['name' => 'Home', 'href' => route('dashboard')],
        ['name' => 'Form Layout', 'href' => route('form_layout')],
    ];
    $pageTitle = $pageTitle ?? 'Form Layout Page';
@endphp


<x-crm-layout :breadcrumbs="$breadcrumbs" :pageTitle="$pageTitle">
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-6 responsive-md-100">
                <div class="card card-outline-primary">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Sample form</h4>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="form-body">
                                <h3 class="card-title m-t-15">Person Info</h3>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">First Name</label>
                                            <input type="text" id="firstName" class="form-control"
                                                placeholder="John doe">
                                            <small class="form-control-feedback"> This is inline help </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group has-danger">
                                            <label class="control-label">Last Name</label>
                                            <input type="text" id="lastName"
                                                class="form-control form-control-danger" placeholder="12n">
                                            <small class="form-control-feedback"> This field has error. </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Gender</label>
                                            <select class="form-control">
                                                <option value="">Male</option>
                                                <option value="">Female</option>
                                            </select>
                                            <small class="form-control-feedback"> Select your gender </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Date of Birth</label>
                                            <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Category</label>
                                            <select class="form-control" data-placeholder="Choose a Category"
                                                tabindex="1">
                                                <option value="Category 1">Category 1</option>
                                                <option value="Category 2">Category 2</option>
                                                <option value="Category 3">Category 5</option>
                                                <option value="Category 4">Category 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Membership</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios"
                                                    id="exampleRadios1" value="option1" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Free
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios"
                                                    id="exampleRadios2" value="option2">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    Paid
                                                </label>
                                            </div>
                                            <!-- <div class="form-check">
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio1" name="radio" type="radio" checked class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Free</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio2" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Paid</span>
                                                        </label>
                                                    </div> -->
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <h3 class="box-title m-t-40">Address</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label>Street</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>State</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Post Code</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select class="form-control">
                                                <option>--Select your Country--</option>
                                                <option>India</option>
                                                <option>Sri Lanka</option>
                                                <option>USA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>
                                    Save</button>
                                <button type="button" class="btn btn-inverse">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 responsive-md-100">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Sample Horizontal form</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" class="form-horizontal">
                            <div class="form-body">
                                <h3 class="box-title m-t-15">Person Info</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">First Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="John doe">
                                                <small class="form-control-feedback"> This is inline help
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group has-danger row">
                                            <label class="control-label text-right col-md-3">Last Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-danger"
                                                    placeholder="12n">
                                                <small class="form-control-feedback"> This field has error.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Gender</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option value="">Male</option>
                                                    <option value="">Female</option>
                                                </select>
                                                <small class="form-control-feedback"> Select your gender.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Date of
                                                Birth</label>
                                            <div class="col-md-9">
                                                <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Category</label>
                                            <div class="col-md-9">
                                                <select class="form-control" data-placeholder="Choose a Category"
                                                    tabindex="1">
                                                    <option value="Category 1">Category 1</option>
                                                    <option value="Category 2">Category 2</option>
                                                    <option value="Category 3">Category 5</option>
                                                    <option value="Category 4">Category 4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Membership</label>
                                            <div class="col-md-9">
                                                <div class="radio-list">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="exampleRadios" id="exampleRadios1" value="option1"
                                                            checked>
                                                        <label class="form-check-label" for="exampleRadios1">
                                                            Free
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="exampleRadios" id="exampleRadios2" value="option2">
                                                        <label class="form-check-label" for="exampleRadios2">
                                                            Paid
                                                        </label>
                                                    </div>

                                                    <!-- <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" checked="" class="custom-control-input">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description">Free</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description">Paid</span>
                                                            </label> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <h3 class="box-title">Address</h3>
                                <hr class="m-t-0 m-b-40">
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Address 1</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Address 2</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">City</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">State</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Post Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Country</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Country 1</option>
                                                    <option>Country 2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                            </div>
                            <hr>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                                <button type="button" class="btn btn-inverse">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"> </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sample Form with the Icons</h4>
                        <h6 class="card-subtitle">made with bootstrap elements</h6>
                        <form class="form p-t-20">
                            <div class="form-group">
                                <label for="exampleInputuname">User Name</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-user"></i></div>
                                    <input type="text" class="form-control form-type" id="exampleInputuname"
                                        placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <input type="email" class="form-control form-type" id="exampleInputEmail1"
                                        placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pwd1">Password</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-lock"></i></div>
                                    <input type="password" class="form-control form-type" id="pwd1"
                                        placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pwd2">Confirm Password</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-lock"></i></div>
                                    <input type="password" class="form-control form-type" id="pwd2"
                                        placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1"> Remember me </label>
                                </div>
                            </div>
                            <button type="submit"
                                class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                            <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sample Form with the right Icons</h4>
                        <h6 class="card-subtitle">made with bootstrap elements</h6>
                        <form class="form p-t-20">
                            <div class="form-group">
                                <label for="exampleInputuname2">User Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="exampleInputuname2"
                                        placeholder="Username">
                                    <div class="input-group-addon form-addon-icon"><i class="ti-user"></i></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Email address</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="exampleInputEmail2"
                                        placeholder="Enter email">
                                    <div class="input-group-addon form-addon-icon"><i class="ti-email"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputpwd2">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="exampleInputpwd2"
                                        placeholder="Enter pwd">
                                    <div class="input-group-addon form-addon-icon"><i class="ti-lock"></i></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputpwd3">Confirm Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="exampleInputpwd3"
                                        placeholder="Enter pwd">
                                    <div class="input-group-addon form-addon-icon"><i class="ti-lock"></i></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox2" type="checkbox">
                                    <label for="checkbox2"> Remember me </label>
                                </div>
                            </div>
                            <div class="text-left">
                                <button type="submit"
                                    class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                <button type="submit"
                                    class="btn btn-inverse waves-effect waves-light">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sample Horizontal Form with Icons</h4>
                        <h6 class="card-subtitle">Use Bootstrap's predefined grid classes for horizontal form
                        </h6>
                        <form class="form-horizontal p-t-20">
                            <div class="form-group row">
                                <label for="exampleInputuname3" class="col-sm-3 control-label">Username*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input type="text" class="form-control form-type" id="exampleInputuname3"
                                            placeholder="Username">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail3" class="col-sm-3 control-label">Email*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-email"></i></div>
                                        <input type="email" class="form-control form-type" id="exampleInputEmail3"
                                            placeholder="Enter email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="web" class="col-sm-3 control-label">Website</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-world"></i></div>
                                        <input type="text" class="form-control form-type" id="web"
                                            placeholder="Enter Website Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword4" class="col-sm-3 control-label">Password*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-lock"></i></div>
                                        <input type="password" class="form-control form-type" id="exampleInputpwd4"
                                            placeholder="Enter pwd">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword5" class="col-sm-3 control-label">Re Password*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-lock"></i></div>
                                        <input type="password" class="form-control form-type" id="exampleInputpwd5"
                                            placeholder="Re Enter pwd">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-3 col-sm-9">
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox33" type="checkbox">
                                        <label for="checkbox33">Check me out !</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row m-b-0">
                                <div class="offset-sm-3 col-sm-9">
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Sign
                                        in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form with right Icon</h4>
                        <h6 class="card-subtitle">Use Bootstrap's predefined grid classes for horizontal form
                        </h6>
                        <form class="form-horizontal p-t-20">
                            <div class="form-group row">
                                <label for="uname" class="col-sm-3 control-label">Username*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="uname"
                                            placeholder="Username">
                                        <div class="input-group-addon form-addon-icon"><i class="ti-user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email2" class="col-sm-3 control-label">Email*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                        <div class="input-group-addon form-addon-icon"><i class="ti-email"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="web1" class="col-sm-3 control-label">Website</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="web1"
                                            placeholder="Enter Website Name">
                                        <div class="input-group-addon form-addon-icon"><i class="ti-world"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pass3" class="col-sm-3 control-label">Password*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="pass3"
                                            placeholder="Enter pwd">
                                        <div class="input-group-addon form-addon-icon"><i class="ti-lock"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pass4" class="col-sm-3 control-label">Re Password*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="pass4"
                                            placeholder="Re Enter pwd">
                                        <div class="input-group-addon form-addon-icon"><i class="ti-lock"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-3 col-sm-9">
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox35" type="checkbox">
                                        <label for="checkbox35">Check me out !</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row m-b-0">
                                <div class="offset-sm-3 col-sm-9 ">
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Sign
                                        in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <!-- End PAge Content -->
    </div>

</x-crm-layout>

<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Form Basic |GACA Software Poratl</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="{{URL::to('public')}}/dist-assets/css/themes/lite-purple.min.css" rel="stylesheet" />
    <link href="{{URL::to('public')}}/dist-assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
</head>

<body class="text-left">
            @include('layouts/adminsidebar')
    
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Class Section </h1>
                    <ul>
                        <li><a href="href">Form</a></li>
                        <li>Class Section</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title mb-3">Form Inputs</div>
                            <form method="post" action="{{url('session-store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="firstName1">Class Name</label>
                                            <input class="form-control" id="class_name" name="class_name" type="text" placeholder="Enter your class name" />
                                        </div>
                                    
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="start_year">Start Year</label>
                                            <input class="form-control" id="start_year" name="start_year" type="Year" placeholder="Enter Start Year" />
                                            <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="end_year">End Year</label>
                                            <input class="form-control" id="end_year" type="Year" name="end_year" placeholder="Enter end year" />
                                        </div>
                                            <div class="col-md-6 form-group mb-3">
                                            <label for="end_year">Category</label>
                                           

                                          
                                            <select class="form-control " name="category" id="category" >
                                                
                                                <option value="">Select </option>
                                                <option value="Intermediate">Intermediate </option>
                                                <option value="BS(hons)">BS(hons)</option>
                                                <option value="Master">Master</option>
                                               
                                            </select>
                                        </div>
                                        
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker1">Select Status</label>
                                            <select class="form-control" name="status_id">
                                                <option value="1">Active</option>
                                                <option value="0">Deactive</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title mb-3">Form Inputs Rounded</div>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="firstName2">First name</label>
                                            <input class="form-control form-control-rounded" id="firstName2" type="text" placeholder="Enter your first name" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="lastName2">Last name</label>
                                            <input class="form-control form-control-rounded" id="lastName2" type="text" placeholder="Enter your last name" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="exampleInputEmail2">Email address</label>
                                            <input class="form-control form-control-rounded" id="exampleInputEmail2" type="email" placeholder="Enter email" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="phone1">Phone</label>
                                            <input class="form-control form-control-rounded" id="phone1" placeholder="Enter phone" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="credit2">Cradit card number</label>
                                            <input class="form-control form-control-rounded" id="credit2" placeholder="Card" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="website2">Website</label>
                                            <input class="form-control form-control-rounded" id="website2" placeholder="Web address" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker3">Birth date</label>
                                            <input class="form-control form-control-rounded" id="picker3" placeholder="yyyy-mm-dd" name="dp" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="picker1">Select</label>
                                            <select class="form-control form-control-rounded">
                                                <option>Option 1</option>
                                                <option>Option 1</option>
                                                <option>Option 1</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Switch</div>
                                <label class="switch pr-5 switch-primary mr-3"><span>Primary</span>
                                    <input type="checkbox" checked="checked" /><span class="slider"></span>
                                </label>
                                <label class="switch pr-5 switch-secondary mr-3"><span>Secondary</span>
                                    <input type="checkbox" checked="checked" /><span class="slider"></span>
                                </label>
                                <label class="switch pr-5 switch-success mr-3"><span>Success</span>
                                    <input type="checkbox" checked="checked" /><span class="slider"></span>
                                </label>
                                <label class="switch pr-5 switch-warning mr-3"><span>Warning</span>
                                    <input type="checkbox" checked="checked" /><span class="slider"></span>
                                </label>
                                <label class="switch pr-5 switch-danger mr-3"><span>Danger</span>
                                    <input type="checkbox" checked="checked" /><span class="slider"></span>
                                </label>
                                <label class="switch pr-5 switch-light mr-3"><span>Light</span>
                                    <input type="checkbox" checked="checked" /><span class="slider"></span>
                                </label>
                                <label class="switch pr-5 switch-dark mr-3"><span>Dark</span>
                                    <input type="checkbox" checked="checked" /><span class="slider"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Checkbox Default</div>
                                <label class="checkbox checkbox-primary">
                                    <input type="checkbox" checked="checked" /><span>Primary</span><span class="checkmark"></span>
                                </label>
                                <label class="checkbox checkbox-secondary">
                                    <input type="checkbox" checked="checked" /><span>Secondary</span><span class="checkmark"></span>
                                </label>
                                <label class="checkbox checkbox-success">
                                    <input type="checkbox" checked="checked" /><span>Success</span><span class="checkmark"></span>
                                </label>
                                <label class="checkbox checkbox-warning">
                                    <input type="checkbox" checked="checked" /><span>Warning</span><span class="checkmark"></span>
                                </label>
                                <label class="checkbox checkbox-danger">
                                    <input type="checkbox" checked="checked" /><span>Danger</span><span class="checkmark"></span>
                                </label>
                                <label class="checkbox checkbox-info">
                                    <input type="checkbox" checked="checked" /><span>Info</span><span class="checkmark"></span>
                                </label>
                                <label class="checkbox checkbox-dark">
                                    <input type="checkbox" checked="checked" /><span>Dark</span><span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Checkbox Outline</div>
                                <label class="checkbox checkbox-outline-primary">
                                    <input type="checkbox" checked="checked" /><span>Primary</span><span class="checkmark"></span>
                                </label>
                                <label class="checkbox checkbox-outline-secondary">
                                    <input type="checkbox" checked="checked" /><span>Secondary</span><span class="checkmark"></span>
                                </label>
                                <label class="checkbox checkbox-outline-success">
                                    <input type="checkbox" checked="checked" /><span>Success</span><span class="checkmark"></span>
                                </label>
                                <label class="checkbox checkbox-outline-warning">
                                    <input type="checkbox" checked="checked" /><span>Warning</span><span class="checkmark"></span>
                                </label>
                                <label class="checkbox checkbox-outline-danger">
                                    <input type="checkbox" checked="checked" /><span>Danger</span><span class="checkmark"></span>
                                </label>
                                <label class="checkbox checkbox-outline-info">
                                    <input type="checkbox" checked="checked" /><span>Info</span><span class="checkmark"></span>
                                </label>
                                <label class="checkbox checkbox-outline-dark">
                                    <input type="checkbox" checked="checked" /><span>Dark</span><span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Radio Button</div>
                                <label class="radio radio-primary">
                                    <input type="radio" name="radio" value="0" /><span>Primary</span><span class="checkmark"></span>
                                </label>
                                <label class="radio radio-secondary">
                                    <input type="radio" name="radio" value="1" /><span>Secondary</span><span class="checkmark"></span>
                                </label>
                                <label class="radio radio-success">
                                    <input type="radio" name="radio" value="2" /><span>Success</span><span class="checkmark"></span>
                                </label>
                                <label class="radio radio-warning">
                                    <input type="radio" name="radio" value="3" /><span>Warning</span><span class="checkmark"></span>
                                </label>
                                <label class="radio radio-danger">
                                    <input type="radio" name="radio" value="4" /><span>Danger</span><span class="checkmark"></span>
                                </label>
                                <label class="radio radio-light">
                                    <input type="radio" name="radio" value="5" /><span>Light</span><span class="checkmark"></span>
                                </label>
                                <label class="radio radio-dark">
                                    <input type="radio" name="radio" value="6" /><span>Dark</span><span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Radio Button Outline</div>
                                <label class="radio radio-outline-primary">
                                    <input type="radio" name="radio" /><span>Primary</span><span class="checkmark"></span>
                                </label>
                                <label class="radio radio-outline-secondary">
                                    <input type="radio" name="radio" /><span>Secondary</span><span class="checkmark"></span>
                                </label>
                                <label class="radio radio-outline-success">
                                    <input type="radio" name="radio" /><span>Success</span><span class="checkmark"></span>
                                </label>
                                <label class="radio radio-outline-warning">
                                    <input type="radio" name="radio" /><span>Warning</span><span class="checkmark"></span>
                                </label>
                                <label class="radio radio-outline-danger">
                                    <input type="radio" name="radio" /><span>Danger</span><span class="checkmark"></span>
                                </label>
                                <label class="radio radio-outline-light">
                                    <input type="radio" name="radio" /><span>Light</span><span class="checkmark"></span>
                                </label>
                                <label class="radio radio-outline-dark">
                                    <input type="radio" name="radio" /><span>Dark</span><span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div> -->
                </div><!-- end of main-content -->
            </div><!-- Footer Start -->
            <div class="flex-grow-1"></div>
            <div class="app-footer">
               <p><strong>&#169;2021 All Rights Reserved By GPCA.</strong></p>
                <div class="footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center">
                    
                    <span class="flex-grow-1"></span>
                    <div class="d-flex align-items-center">
                        <a href="{{url('/')}}"><img class="logo" src="{{URL::to('public')}}/dist-assets/images/logo.jpg" alt=""></a>
                        <div>
                            <p class="m-0">&copy; 2021 GPCA </p>
                            <p class="m-0">All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fotter end -->
        </div>
    </div><!-- ============ Search UI Start ============= -->
 
    <!-- ============ Search UI End ============= -->
    <script src="{{URL::to('public')}}/dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/scripts/script.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/scripts/sidebar.large.script.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard  |Admin</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="{{URL::to('public')}}/dist-assets/css/themes/lite-purple.css" rel="stylesheet" />
    <link href="{{URL::to('public')}}/dist-assets/css/plugins/perfect-scrollbar.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{URL::to('public')}}/dist-assets/css/plugins/fontawesome-5.css" />
    <link href="{{URL::to('public')}}/dist-assets/css/plugins/metisMenu.min.css" rel="stylesheet" />
</head>

<body class="text-left">
               @include('layouts/adminsidebar')

        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Fee Structer</h1>
                    <ul>
                        <li><a href="href">Form</a></li>
                        <li>Fee Structer</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title mb-3">Form Inputs</div>
                            <form method="post" action="{{url('feestructer')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                           <div class="col-md-6 form-group mb-3">
                                            <label for="picker1">Select Class </label>
                                            <select class="form-control" name="section_id">
                                                @foreach($class_section AS $c_section)
                                                <option value="{{$c_section->id}}">{{$c_section->class_name}} ({{$c_section->start_year}} To {{$c_section->end_year}})</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- <div class="col-md-6 form-group mb-3">
                                            <label for="section_id">section_id</label>
                                            <input class="form-control" id="section_id" name="section_id" type="text" placeholder="Enter your section_id" />
                                        </div> -->
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="admission_fee">admission_fee</label>
                                            <input class="form-control" id="admission_fee" name="admission_fee" type="text" placeholder="Enter your Admission Fee" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="tution_fee">Tution Fee</label>
                                            <input class="form-control" id="tution_fee" name="tution_fee" type="Year" placeholder="Enter Tution Fee" />
                                            <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="genral_fund">Genral Fund</label>
                                            <input class="form-control" id="genral_fund" type="Year" name="genral_fund" placeholder="Enter genral_fund" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="medical_fund">Medical Fund</label>
                                            <input class="form-control" id="medical_fund" type="Year" name="medical_fund" placeholder="Enter medical_fund" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="red_cross_fund">Red Cross Fund</label>
                                            <input class="form-control" id="red_cross_fund" type="Year" name="red_cross_fund" placeholder="Enter red_cross_fund" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="welfare_fund">Welfare Fund</label>
                                            <input class="form-control" id="welfare_fund" type="Year" name="welfare_fund" placeholder="Enter welfare_fund" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="magazine_fund">Magazine Fund</label>
                                            <input class="form-control" id="magazine_fund" type="Year" name="magazine_fund" placeholder="Enter magazine_fund" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="library_security">library_security Fund</label>
                                            <input class="form-control" id="library_security" type="Year" name="library_security" placeholder="Enter library_security" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="affiliation_fund">Affiliation Fund</label>
                                            <input class="form-control" id="affiliation_fund" type="Year" name="affiliation_fund" placeholder="Enter affiliation_fund" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="board_universty_registration_fee">board_universty_registration_fee</label>
                                            <input class="form-control" id="board_universty_registration_fee" type="Year" name="board_universty_registration_fee" placeholder="Enter board_universty_registration_fee" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="absence_fine">absence_fine</label>
                                            <input class="form-control" id="absence_fine" type="Year" name="absence_fine" placeholder="Enter absence_fine" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="parking_fee">parking_fee</label>
                                            <input class="form-control" id="parking_fee" type="Year" name="parking_fee" placeholder="Enter parking_fee" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="sports_fund">sports_fund</label>
                                            <input class="form-control" id="sports_fund" type="Year" name="sports_fund" placeholder="Enter sports_fund" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="id_card_fee">id_card_fee</label>
                                            <input class="form-control" id="id_card_fee" type="Year" name="id_card_fee" placeholder="Enter id_card_fee" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="computer_fee">computer_fee</label>
                                            <input class="form-control" id="computer_fee" type="Year" name="computer_fee" placeholder="Enter computer_fee" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="exam_fund">exam_fund</label>
                                            <input class="form-control" id="exam_fund" type="Year" name="exam_fund" placeholder="Enter exam_fund" />
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
                <div class="row">
                    <div class="col-md-9">
                        <p><strong>Gull - Laravel + Bootstrap 4 admin template</strong></p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero quis beatae officia saepe perferendis voluptatum minima eveniet voluptates dolorum, temporibus nisi maxime nesciunt totam repudiandae commodi sequi dolor quibusdam
                            <sunt></sunt>
                        </p>
                    </div>
                </div>
                <div class="footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center">
                    <a class="btn btn-primary text-white btn-rounded" href="https://themeforest.net/item/gull-bootstrap-laravel-admin-dashboard-template/23101970" target="_blank">Buy Gull HTML</a>
                    <span class="flex-grow-1"></span>
                    <div class="d-flex align-items-center">
                        <img class="logo" src="{{URL::to('public')}}/dist-assets/images/logo.png" alt="">
                        <div>
                            <p class="m-0">&copy; 2018 Gull HTML</p>
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
<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Form Basic | Gull Admin Template</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="{{URL::to('public')}}/dist-assets/css/themes/lite-purple.min.css" rel="stylesheet" />
    <link href="{{URL::to('public')}}/dist-assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
    <style>


/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
</style>
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        <div class="main-header">
            <div class="logo">
                <img src="{{URL::to('public')}}/dist-assets/images/logo.png" alt="">
            </div>
            <div class="menu-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>
           
            <div style="margin: auto"></div>
            <div class="header-part-right">
                    <!-- Full screen toggle--><i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen=""></i>
                    <!-- Grid menu Dropdown-->
                    <div class="dropdown dropleft"><i class="i-Safe-Box text-muted header-icon" id="dropdownMenuButton" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="menu-icon-grid"><a href="{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="i-Checked-User"></i> Logout</a><a href="#"><i class="i-Ambulance"></i>Change Password</a></div>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </div>
                    </div>
                </div>
        </div>
        <div class="side-content-wrap">
            <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true" >
                <ul class="navigation-left">
                    <li class="nav-item" data-item="dashboard"><a class="nav-item-hold" href="#"><i class="nav-icon i-Bar-Chart"></i><span class="nav-text">Dashboard</span></a>
                        <!-- <div class="triangle"></div> -->
                    </li>
                    
                        <div class="triangle"></div>
                    </li>
                </ul>
            </div>
         <!--    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true"> -->
                <!-- Submenu Dashboards-->
         <!--        <ul class="childNav" data-parent="dashboard">
                    <li class="nav-item"><a href="dashboard1.html"><i class="nav-icon i-Clock-3"></i><span class="item-name">Version 1</span></a></li>
                    <li class="nav-item"><a href="dashboard2.html"><i class="nav-icon i-Clock-4"></i><span class="item-name">Version 2</span></a></li>
                    <li class="nav-item"><a href="dashboard3.html"><i class="nav-icon i-Over-Time"></i><span class="item-name">Version 3</span></a></li>
                    <li class="nav-item"><a href="dashboard4.html"><i class="nav-icon i-Clock"></i><span class="item-name">Version 4</span></a></li>
                </ul> -->
                
          <!--   </div> -->
            <div class="sidebar-overlay"></div>
        </div>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Student Info</h1>
                    <ul>
                        <li><a href="href">Form</a></li>
                        <li>Student Info</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                     @if (\Session::has('success'))
                                <br>
                                  <div class="alert alert-success d-inline ml-6 mr-6">
                                    
                                      <strong>{!! \Session::get('success') !!}</strong>
                                    
                                  </div>
                                  <br>
                                @endif


                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">

                                <div class="card-title mb-3">Form Inputs</div>
                            <form id="regForm" method="post" action="{{url('admissionform')}}" enctype="multipart/form-data">
                                    @csrf
                                    



                                  <div class="tab">
                                     <div class="row ">
                                           <div class="col-md-3 form-group mb-3">
                                           </div>

                                           <div class="col-md-6 form-group mb-3">
                                            <label for="picker1">Select Class </label>
                                            <select class="form-control" name="section_name">
                                                @foreach($class_section AS $c_section)
                                                <option value="{{$c_section->class_name}}">{{$c_section->class_name}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                  </div>
                              </div>

                                   <div class="tab">
                                     <div class="row ">
                                        <div class="col-md-3 form-group mb-3">
                                           </div>
                                           <div class="col-md-6 form-group mb-3">
                                            <label for="picker1">Select Year </label>
                                            <select class="form-control" name="class_year">
                                                <option value="1st_Year">1st Year</option>
                                                <option value="2nd_Year">2nd Year</option>
                                                <option value="3rd_Year">3rd Year</option>
                                                <option value="4th_Year">4th Year</option>
                                            </select>
                                        </div>
                                  </div>
                              </div>
                                   <div class="tab">
                                     <div class="row ">
                                        <div class="col-md-3 form-group mb-3">
                                           </div>
                                           <div class="col-md-6 form-group mb-3">
                                            <label for="picker1">Select Session </label>
                                            <select class="form-control" name="section_id">
                                                @foreach($class_section AS $c_section)
                                                <option value="{{$c_section->id}}">({{$c_section->start_year}} To {{$c_section->end_year}})</option>
                                                @endforeach
                                            </select>
                                        </div>
                                  </div>
                              </div>
                           
                                <!--   <div class="tab">Login Info:
                                    <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
                                    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
                                  </div> -->
                                  <div class="tab">
                                    <div class="row ">
                                           
                                        <!-- <div class="col-md-3 form-group mb-3">
                                            <label for="section_name">section_name</label>
                                            <input class="form-control" id="section_name" name="section_name" type="text" placeholder="Enter your section_name" />
                                        </div> -->
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="CNIC">CNIC</label>
                                            <input class="form-control" id="CNIC" name="CNIC" type="text" placeholder="Enter canidate cnic" />
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="canidate_name">Canidate Name</label>
                                            <input class="form-control" id="canidate_name" name="canidate_name" type="Year" placeholder="Enter Canidate Bame" />
                                            <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="dob">Date Of Birth</label>
                                            <input class="form-control" id="dob" type="date" name="dob" placeholder="Enter dob" />
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="f_name">Father Name</label>
                                            <input class="form-control" id="f_name" type="Year" name="f_name" placeholder="Enter f_name" />
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="f_cnic">Father CNIC</label>
                                            <input class="form-control" id="f_cnic" type="Year" name="f_cnic" placeholder="Enter f_cnic" />
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="contact_number">Contact No.</label>
                                            <input class="form-control" id="contact_number" type="Year" name="contact_number" placeholder="Enter contact_number" />
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="address">Address</label>
                                            <input class="form-control" id="address" type="Year" name="address" placeholder="Enter address" />
                                        </div>
                                          <div class="col-md-3 form-group mb-3">
                                            <label for="religion">Religion</label>
                                            <input class="form-control" id="religion" type="Year" name="religion" placeholder="Enter religion" />
                                        </div>
                                     
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="nationality">Nationality</label>
                                            <input class="form-control" id="nationality" type="Year" name="nationality" placeholder="Enter nationality" />
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="specialty">Specialty</label>
                                            <input class="form-control" id="specialty" type="Year" name="specialty" placeholder="Enter specialty" />
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="group">Select Group</label>
                                            <input class="form-control" id="group" type="Year" name="group" placeholder="Enter group" />
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="optional_subject_one">Optional Subject One</label>
                                            <input class="form-control" id="optional_subject_one" type="Year" name="optional_subject_one" placeholder="Enter optional_subject_one" />
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="optional_subject_two">Optional Subject Two</label>
                                            <input class="form-control" id="optional_subject_two" type="Year" name="optional_subject_two" placeholder="Enter optional_subject_two" />
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="optional_subject_three">Optional Subject Three</label>
                                            <input class="form-control" id="optional_subject_three" type="Year" name="optional_subject_three" placeholder="Enter optional_subject_three" />
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="image_name">Upload Student Photo</label>
                                            <input class="form-control" id="image_name" type="file" name="image_name" placeholder="Enter image_name" />
                                        </div>
                                        
                                     
                                       <!--  <div class="col-md-12">
                                            <button class="btn btn-primary">Submit</button>
                                        </div> -->
                                    </div>

                                   

                                </div>
                                <div class="tab">
                                <div class="row ">
                                    <div class="col-md-3 form-group mb-3">
                                        <h1>Matric</h1> </div>
                                    <div class="row ">
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="nationality">Roll No</label>
                                            <input class="form-control" id="roll_no" type="Year" name="roll_no" placeholder="Enter Roll No" /> </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="Year">Passing Year</label>
                                            <input class="form-control" id="Year" type="Year" name="Passing_Year" placeholder="Enter Year" /> </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="group">Select Annual /Supp.</label>
                                            <select class="form-control" name="exam_Type">
                                                <option value="">Select One Opttion</option>

                                                <option value="Annual">Annual</option>
                                                <option value="2nd_Year">Supply</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="Marks_Obt">Marks Obtian</label>
                                            <input class="form-control" id="Marks_Obt" type="Year" name="Marks_Obt" placeholder="Enter Marks Obt." /> </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="totall_marks">Total Marks</label>
                                            <input class="form-control" id="totall_marks" type="Year" name="totall_marks" placeholder="Enter Total Marks" /> </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="%age">%age</label>
                                            <input class="form-control" id="results" type="text" name="percentage" readonly /> </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="insitute_name">Board /University</label>
                                            <input class="form-control" id="insitute_name" type="Year" name="insitute_name" placeholder="Enter Board /University" /> </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12 form-group mb-3">
                                            <h1>Inter </h1> </div>
                                        
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="nationality">Roll No</label>
                                                <input class="form-control" id="Inter_Roll_No" type="Year" name="Inter_Roll_No" placeholder="Enter Roll No" /> </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="Year">Passing Year</label>
                                                <input class="form-control" id="Inter_Year" type="Year" name="Inter_Year" placeholder="Enter Year" /> </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="group">Select Annual /Supp.</label>
                                                <select class="form-control" name="Inter_Exam_Type">
                                                    <option value="">Select One Opttion</option>
                                                    <option value="Annual">Annual</option>
                                                    <option value="Supply">Supply</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="Marks_Obt">Marks Obtian</label>
                                                <input class="form-control" id="Inter_Marks_Obt" type="Year" name="Inter_Marks_Obt" placeholder="Enter Marks Obt." /> </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="totall_marks">Total Marks</label>
                                                <input class="form-control" id="Inter_totall_marks" type="Year" name="Inter_totall_marks" placeholder="Enter Total Marks" /> </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="%age">%age</label>
                                                <input class="form-control" id="Inter_results" type="text" name="Inter_percentage" readonly /> </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="insitute_name">Board /University</label>
                                                <input class="form-control" id="Inter_insitute_name" type="Year" name="Inter_insitute_name" placeholder="Enter Board /University" /> </div>
                                       
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12 form-group mb-3">
                                            <h1>Bachelor </h1> </div>

                                        
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="nationality">Roll No</label>
                                                <input class="form-control" id="Bachelor_Roll_No" type="Roll-no" name="Bachelor_Roll_No" placeholder="Enter Roll No" /> </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="Year">Passing Year</label>
                                                <input class="form-control" id="Bachelor_Year" type="Year" name="Bachelor_Year" placeholder="Enter Year" /> </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="group">Select Annual /Supp.</label>
                                                <select class="form-control" name="Bachelor_Exam_Type">
                                                    <option value="">Select One Opttion</option>
                                                    <option value="Annual">Annual</option>
                                                    <option value="2nd_Year">Supply</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="Marks_Obt">Marks Obtian</label>
                                                <input class="form-control" id="Bachelor_Marks_Obt" type="Year" name="Bachelor_Marks_Obt" placeholder="Enter Marks Obt." /> </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="totall_marks">Total Marks</label>
                                                <input class="form-control" id="Bachelor_totall_marks" type="Year" name="Bachelor_totall_marks" placeholder="Enter Total Marks" /> </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="%age">%age</label>
                                                <input class="form-control" id="Bachelor_results" type="text" name="Bachelor_percentage" readonly /> </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="insitute_name">Board /University</label>
                                                <input class="form-control" id="Bachelor_insitute_name" type="Year" name="Bachelor_insitute_name" placeholder="Enter Board /University" /> </div>
                                        </div>
                                 
                                </div>
                            </div>


                                      <div style="overflow:auto;">
                                        <div style="float:right;">
                                          <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                          <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                        <button type="submit" id="js-submit-form" name="submit" value="Submit Form" style="display: none;">Submit</button>

                                        </div>
                                      </div>


                                      <!-- Circles which indicates the steps of the form: -->
                                      <div style="text-align:center;margin-top:40px;">
                                        <span class="step"></span>
                                        <span class="step"></span>
                                        <span class="step"></span>
                                        <span class="step"></span>
                                        <!-- <span class="step"></span> -->
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
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="firstName2">First name</label>
                                            <input class="form-control form-control-rounded" id="firstName2" type="text" placeholder="Enter your first name" />
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="lastName2">Last name</label>
                                            <input class="form-control form-control-rounded" id="lastName2" type="text" placeholder="Enter your last name" />
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="exampleInputEmail2">Email address</label>
                                            <input class="form-control form-control-rounded" id="exampleInputEmail2" type="email" placeholder="Enter email" />
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="phone1">Phone</label>
                                            <input class="form-control form-control-rounded" id="phone1" placeholder="Enter phone" />
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="credit2">Cradit card number</label>
                                            <input class="form-control form-control-rounded" id="credit2" placeholder="Card" />
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="website2">Website</label>
                                            <input class="form-control form-control-rounded" id="website2" placeholder="Web address" />
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="picker3">Birth date</label>
                                            <input class="form-control form-control-rounded" id="picker3" placeholder="yyyy-mm-dd" name="dp" />
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
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
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").style.display = "none";
    document.getElementById("js-submit-form").style.display = "inline";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
    document.getElementById("nextBtn").style.display = "inline";
    document.getElementById("js-submit-form").style.display = "none"
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
   
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}


$(function () {
    $(document).on('change', '#totall_marks', function () { // input on change
        var result = Math.round(parseFloat(parseInt($("#Marks_Obt").val(), 10) * 100) / parseInt($("#totall_marks").val(), 10));
        $('#results').val(result + '%'); //shows value in "#rate"
    })
});
$(function () {
    $(document).on('change', '#Inter_totall_marks', function () { // input on change
        var result = Math.round(parseFloat(parseInt($("#Inter_Marks_Obt").val(), 10) * 100) / parseInt($("#Inter_totall_marks").val(), 10));
        $('#Inter_results').val(result + '%'); //shows value in "#rate"
    })
});
$(function () {
    $(document).on('change', '#Bachelor_totall_marks', function () { // input on change
        var result = Math.round(parseFloat(parseInt($("#Bachelor_Marks_Obt").val(), 10) * 100) / parseInt($("#Bachelor_totall_marks").val(), 10));
        $('#Bachelor_results').val(result + '%'); //shows value in "#rate"
    })
});
</script>
    <script src="{{URL::to('public')}}/dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/scripts/script.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/scripts/sidebar.large.script.min.js"></script>
</body>

</html>
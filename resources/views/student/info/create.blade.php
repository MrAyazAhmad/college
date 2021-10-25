<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Deo | Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="{{URL::to('public')}}/dist-assets/css/themes/lite-purple.min.css" rel="stylesheet" />
    <link href="{{URL::to('public')}}/dist-assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
    <style>


/* Hide all steps by default: */
.tab {
  display: none;
}
select.form-control{
        height: 51px;
}
input.form-control{
    font-size: 18px;
    font-weight: bold;
        height: 51px;
        text-transform: capitalize;
}
option{
    font-size: 18px;
    font-weight: bold
}
/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}
.form-group label {
    font-size: 18px;
    color: #70657b;
    margin-bottom: 4px;
    font-weight: bold;
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
.inter{
    display: none;
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
input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}
.fsc {
    display: none;
}
.hg {
    display: none;
}
.hgc {
    display: none;
}
.gc {
    display: none;
}
.gs {
    display: none;
}
.ics {
    display: none;
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
                    <li class="nav-item" data-item="dashboard"><a class="nav-item-hold" href="#"><i class="nav-icon i-Bar-Chart"></i><span class="nav-text" style="font-weight: bold;"><i>DEO</i></span></a>
                        <!-- <div class="triangle"></div> -->
                    </li>
                     <li class="nav-item" data-item="dashboard"><a class="nav-item-hold" href="#"><i class="nav-icon i-Checked-User"></i><span class="nav-text">{{ auth()->user()->name }}</span></a>
                        <!-- <div class="triangle"></div> -->
                    </li>
                    
                        <div class="triangle"></div>
                    </li>
                </ul>
            </div>
      
            <div class="sidebar-overlay"></div>
        </div>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1 style="    font-weight: bold; font-size: 56px;">DATA ENTERY OPERATOR</h1>
                    <ul>
                        <li>Student Info</li>
                        <li><a href="href">Form</a></li>
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
                                <div class="col-md-1"></div>


                    <div class="col-md-10">
                        <div class="card mb-4">
                            <div class="card-body">

                            <div class="card-title mb-3">Form Inputs</div>
                            <form id="regForm" method="post" action="{{url('admissionform')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="tab">
                                     <div class="row ">
                                     <div class="col-md-4 form-group mb-3"></div>

                                           <div class="col-md-4 form-group mb-3">
                                            <label for="picker1">Admission Applied For Class</label>
                                            <select class="form-control" name="Applied" id="Applied">
                                                
                                                <option value="">Select </option>
                                                <option value="Intermediate">Intermediate </option>
                                                <option value="Bachelor">Bachelor </option>
                                                <option value="BS(ENG)">BS(ENG)</option>
                                               
                                            </select>
                                        </div>
                                         <div class="col-md-4 form-group mb-3"></div>
                                    </div>
                                     <div class="row ">
                                         <div class="col-md-4 form-group mb-3"></div>


                                           <div id="div1" style="display: none;" class="col-md-4 form-group mb-3">
                                            <label for="picker1">Select Class </label>
                                            <select class="form-control" name="section_name" id="section_name">
                                                <option value="">Select </option>

                                                @foreach($class_section AS $c_section)
                                                <option value="{{$c_section->class_name}}">{{$c_section->class_name}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                         <div class="col-md-4 form-group mb-3"></div>

                                    </div>

                                     <div class="row ">
                                     <div class="col-md-4 form-group mb-3"></div>


                                                <div id="div2" style="display: none;"  class="col-md-4 form-group mb-3">
                                            <label for="picker1">Select Year/ Semster </label>
                                            <select class="form-control" name="class_year" id="class_year">
                                                <option value="">Select</option>
                                                
                                                <option class="inter" value="1st_Year">1st Year</option>
                                                <option class="inter" value="2nd_Year">2nd Year</option>
                                                
                                                
                                                <option class="bch" value="3rd_Year">3rd Year</option>
                                                <option class="bch" value="4th_Year">4th Year</option>
                                            
                                           
                                                 <option class="master" value="1st">1st Semster</option>
                                                <option class="master" value="2nd_Semster">2nd Semster</option>
                                                <option class="master" value="3rd_Semster">3rd Semster</option>
                                                <option class="master" value="4th_Semster">4th Semster</option>
                                            
                                            </select>
                                        </div>
                                     <div class="col-md-4 form-group mb-3"></div>

                                    </div>

                                     <div class="row ">
                                     <div class="col-md-4 form-group mb-3"></div>


                                           <div id="div3" style="display: none;"  class="col-md-4 form-group mb-3">
                                            <label for="picker1">Select Session </label>
                                            <select class="form-control" name="section_id">
                                                @foreach($class_section AS $c_section)
                                                <option value="{{$c_section->id}}">({{$c_section->start_year}} To {{$c_section->end_year}})</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                     <div class="col-md-4 form-group mb-3"></div>

                              </div>                                  



                                

                              
                           
                              
                                  <div class="tab">
                                    <div class="row ">
                                           
                                       
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="CNIC">CNIC</label>
                                            <input class="form-control" id="CNIC" name="CNIC" type="text" placeholder="Enter canidate cnic" maxlength="13"/>
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="canidate_name">Canidate Name</label>
                                            <input class="form-control" id="canidate_name" name="canidate_name" type="Year" placeholder="Enter Canidate Name" />
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
                                            <input class="form-control" id="f_cnic" type="Year" name="f_cnic" placeholder="Enter f_cnic" maxlength="13" />
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="contact_number">Contact No.</label>
                                            <input class="form-control" id="contact_number" type="Year" name="contact_number" placeholder="Enter contact_number" maxlength="11" />
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="address">Address</label>
                                            <input class="form-control" id="address" type="Year" name="address" placeholder="Enter address" />
                                        </div>
                                          <div class="col-md-3 form-group mb-3">
                                            <label for="religion">Religion</label>
                                             <select class="form-control" name="religion">
                                                <option value="">Select</option>
                                                <option value="Muslim">Muslim</option>
                                                <option value="Non-Muslim">Non-Muslim</option>
                                            </select>
                                        </div>
                                     
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="nationality">Nationality</label>
                                             <select class="form-control" name="nationality">
                                                <option value="">Select</option>
                                                <option value="Pakistani">Pakistani</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="specialty">Specialty</label>
                                             <select class="form-control" name="specialty">
                                                <option value="">Select</option>
                                                <option value="None">None</option>
                                                <option value="Disabled">Disabled</option>
                                                <option value="Blind">Blind</option>
                                                <option value="Board Employee Child">Board Employee Child</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="covid">COVID Vaccination:</label>
                                             <select class="form-control" name="covid">
                                                <option value="">Select</option>
                                                <option value="Single Dose ">Single Dose </option>
                                                <option value="Double Dose">Double Dose  </option>
                                                <option value="None">None </option> 
                                            </select>
                                        </div>
                                           <div class="col-md-3 form-group mb-3">
                                            <label for="bgroup">Blood Group</label>
                                            <input class="form-control" id="bgroup" type="Year" name="bgroup" placeholder="Enter Blood Group" />
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="group">Select Group</label>
                                               <select class="form-control" id="group" name="group">
                                                <option value="Null">Select</option>
                                                <option class="fsc" value="Pre-Medical">Pre-Medical</option>
                                                <option class="fsc" value="pre-engineering">Pre-Engineering  </option>
                                                <optgroup class="gs" label="General Science Group">
                                                <option class="gs" value="Group1">Group1</option>
                                                <option class="gs" value="Group2">Group2</option> 
                                                </optgroup>
                                                <optgroup class="ics" label="General Science Group (ICS)"> 
                                                <option class="ics" value="Group1i">Group1</option>
                                                <option class="ics" value="Group2i">Group2</option> 
                                                <option class="ics" value="Group3i">Group3</option> 
                                                </optgroup> 
                                                <optgroup class="hgc" label="Humanities Group With Computer"> 
                                                <option class="hgc" value="Grouphc1">Group1</option> 
                                                <option class="hgc" value="Grouphc2">Group2</option> 
                                                </optgroup>
                                                <optgroup class="hg" label="Humanities Group"> 
                                                <option class="hg" value="Grouphg1">Group1</option>
                                                <option class="hg" value="Grouphg2">Group2</option>
                                                <option class="hg" value="Grouphg3">Group3</option>
                                                <option class="hg" value="Grouphg4">Group4</option>
                                                <option class="hg" value="Grouphg5">Group5</option>
                                                <option class="hg" value="Grouphg6">Group6</option>
                                                <option class="hg" value="Grouphg7">Group7</option>
                                                <option class="hg" value="Grouphg8">Group8</option>
                                                <option class="hg" value="Grouphg9">Group9</option>
                                                <option class="hg" value="Grouphg10">Group10</option>
                                                <option class="hg" value="Grouphg11">Group11</option>
                                                <option class="hg" value="Grouphg12">Group12</option>


                                            </optgroup>
                                            </select>
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
                                        
                                     
                                    
                                    </div>

                                   

                                </div>
                                <div class="tab">
                                <div class="row ">
                                    <div class="col-md-3 form-group mb-3">
                                        <h1>Matric</h1> </div>
                                    <div class="row ">
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="rollno">Roll No</label>
                                            <input class="form-control" id="roll_no" type="text" name="roll_no" placeholder="Enter Roll No" /> 
                                        </div>
                                          
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="Year">Passing Year</label>
                                            
                                            <select class="form-control" name="Passing_Year">
                                                <option value="">Select</option>

                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                            </select> 
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="group">Select Annual /Supp.</label>
                                            <select class="form-control" name="exam_Type">
                                                <option value="">Select One Opttion</option>

                                                <option value="Annual">Annual</option>
                                                <option value="Supply">Supply</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="Marks_Obt">Marks Obtian</label>
                                            <input class="form-control" id="Marks_Obt" type="Year" name="Marks_Obt" placeholder="Enter Marks Obt." /> </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="totall_marks">Total Marks</label>
                                            <input class="form-control" id="totall_marks" type="text" name="totall_marks" value="1100" placeholder="Enter Total Marks" readonly="" /> </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="%age">%age</label>
                                            <input class="form-control" id="results" type="text" name="percentage" readonly /> </div>
                                            <div class="col-md-3 form-group mb-3">
                                            <label for="grade">Grade</label>
                                            <input class="form-control" name="grade" id="grade" type="text"   /> </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="insitute_name">Board /University</label>     
                                             <select class="form-control" name="insitute_name">
                                                    <option value="">Select</option>

                                                    <option value="BISE Sahiwal">BISE Sahiwal</option>
                                                    <option value="BISE Bahawalpur">BISE Bahawalpur</option>
                                                    <option value="BISE DG Khan">BISE DG Khan</option>
                                                    <option value="BISE Faisalabad">BISE Faisalabad</option>
                                                    <option value="BISE Gujranwala">BISE Gujranwala</option>
                                                    <option value="BISE Lahore">BISE Lahore</option>
                                                    <option value="BISE Multan">BISE Multan</option>
                                                    <option value="BISE Rawalpindi">BISE Rawalpindi</option>
                                                    <option value="BISE Sargodha">BISE Sargodha</option>
                                                </select>
                                            </div>
                                     </div>
                                </div>
                                    <div class="row " id="interdiv" style="display: none;">
                                        <div class="col-md-12 form-group mb-3">
                                            <h1>Inter </h1> </div>
                                        
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="rollno">Roll No</label>
                                                <input class="form-control" id="Inter_Roll_No" type="Year" name="Inter_Roll_No" placeholder="Enter Roll No" /> </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="Year">Passing Year</label>
                                                 <select class="form-control" name="Inter_Year">
                                                <option value="">Select</option>

                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                            </select> 
                                             </div>
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
                                                <input class="form-control" id="Inter_totall_marks" value="1100" type="text" name="Inter_totall_marks" placeholder="Enter Total Marks" readonly="" /> </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="%age">%age</label>
                                                <input class="form-control" id="Inter_results" type="text" name="Inter_percentage" readonly /> </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="Inter_grade">Grade</label>
                                                <input class="form-control" name="Inter_grade" id="Inter_grade" type="text"   /> 
                                            </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="insitute_name">Board /University</label>
                                                  <select class="form-control" name="Inter_insitute_name">
                                                    <option value="">Select</option>

                                                    <option value="BISE Sahiwal">BISE Sahiwal</option>
                                                    <option value="BISE Bahawalpur">BISE Bahawalpur</option>
                                                    <option value="BISE DG Khan">BISE DG Khan</option>
                                                    <option value="BISE Faisalabad">BISE Faisalabad</option>
                                                    <option value="BISE Gujranwala">BISE Gujranwala</option>
                                                    <option value="BISE Lahore">BISE Lahore</option>
                                                    <option value="BISE Multan">BISE Multan</option>
                                                    <option value="BISE Rawalpindi">BISE Rawalpindi</option>
                                                    <option value="BISE Sargodha">BISE Sargodha</option>
                                                </select></div>
                                       
                                    </div>
                                    <div class="row " id="Bachelordiv" style="display: none;">
                                        <div class="col-md-12 form-group mb-3">
                                            <h1>Bachelor </h1> </div>

                                        
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="rollno">Roll No</label>
                                                <input class="form-control" id="Bachelor_Roll_No" type="Roll-no" name="Bachelor_Roll_No" placeholder="Enter Roll No" /> </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="Year">Passing Year</label>                       
                                             <select class="form-control" name="Bachelor_Year">
                                                <option value="">Select</option>

                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                            </select> </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="group">Select Annual /Supp.</label>
                                                <select class="form-control" name="Bachelor_Exam_Type">
                                                    <option value="">Select One Opttion</option>
                                                    <option value="Annual">Annual</option>
                                                    <option value="Supply">Supply</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="Marks_Obt">Marks Obtian</label>
                                                <input class="form-control" id="Bachelor_Marks_Obt" type="Year" name="Bachelor_Marks_Obt" placeholder="Enter Marks Obt." /> </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="totall_marks">Total Marks</label>
                                                <input class="form-control" id="Bachelor_totall_marks" value="800" type="Year" name="Bachelor_totall_marks" placeholder="Enter Total Marks" /> </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="%age">%age</label>
                                                <input class="form-control" id="Bachelor_results" type="text" name="Bachelor_percentage" readonly /> </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="Bachelor_grade">Grade</label>
                                                <input class="form-control" name="Bachelor_grade" id="Bachelor_grade" type="text"  /> 
                                            </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="insitute_name">Board /University</label>
                                                <input class="form-control" id="Bachelor_insitute_name" type="Year" name="Bachelor_insitute_name" placeholder="Enter Board /University" /> </div>
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
                                       <!--  <span class="step"></span>
                                        <span class="step"></span> -->
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
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
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
    $(document).on('change', '#Marks_Obt', function () { // input on change
        var result = Math.round(parseFloat(parseInt($("#Marks_Obt").val(), 10) * 100) / parseInt($("#totall_marks").val(), 10));
        $('#results').val(result + '%'); //shows value in "#rate"
    })
});
$(function () {
    $(document).on('change', '#Inter_Marks_Obt', function () { // input on change
        var result = Math.round(parseFloat(parseInt($("#Inter_Marks_Obt").val(), 10) * 100) / parseInt($("#Inter_totall_marks").val(), 10));
        $('#Inter_results').val(result + '%'); //shows value in "#rate"
    })
});
$(function () {
    $(document).on('change', '#Bachelor_Marks_Obt', function () { // input on change
        var result = Math.round(parseFloat(parseInt($("#Bachelor_Marks_Obt").val(), 10) * 100) / parseInt($("#Bachelor_totall_marks").val(), 10));
        $('#Bachelor_results').val(result + '%'); //shows value in "#rate"
    })
});
</script>
<script> 
$(document).ready(function(){
    $('#section_name').on('change', function() {
        $("#div1").show(); 
        $("#div2").show(); 
            });
});
$(document).ready(function(){
    $('#class_year').on('change', function() {
        $("#div1").show(); 
        $("#div2").show(); 
        $("#div3").show(); 
            });
});
$(document).ready(function(){
    $('#section_name').on('change', function() {
        $("#div1").show();
       

      if ( this.value == 'FSC')
      {
          $(".fsc").show();
          $(".ics").hide();
          $(".hgc").hide();
          $(".hg").hide();


      }
       if ( this.value == 'ICS')
      {
          $(".ics").show();
          $(".fsc").hide();
          $(".hgc").hide();
          $(".hg").hide();
      }
       if ( this.value == 'FA')
      {
          $(".hg").show();
           $(".ics").hide();
          $(".fsc").hide();
          $(".hgc").hide();
      } 
      if ( this.value == 'F.A IT')
      {
          $(".hgc").show();
          $(".hg").hide();
           $(".ics").hide();
          $(".fsc").hide();
      }
  });
});
$(document).ready(function(){
    $('#Applied').on('change', function() {
        $("#div1").show();
       

      if ( this.value == 'Bachelor')
      {
        $("#interdiv").show();
        $(".inter").hide();
        $("#Bachelordiv").hide();
        $(".bch").show();
        $(".master").hide();

      }
      if ( this.value == 'BS(ENG)')
      {
        $("#interdiv").show();
        $("#Bachelordiv").show();
         $(".inter").hide();
        $(".bch").hide();
        $(".master").show();

      }
      if ( this.value == 'Intermediate')
      {
        $("#interdiv").hide();
        $("#Bachelordiv").hide();
        $(".inter").show();
        $(".bch").hide();
        $(".master").hide();


      }
       if ( this.value == '')
      {
        $("#div1").hide();
        $("#div2").hide();
        $("#div3").hide();

      }
    });
});
$(document).ready(function(){
    $('#group').on('change', function() {
      if ( this.value == 'Pre-Medical')
      {
        document.getElementById("optional_subject_one").value = "Phyics";
        document.getElementById("optional_subject_two").value = "Chemistery";
        document.getElementById("optional_subject_three").value = "Biology";

      }
      if ( this.value == 'pre-engineering')
      {
        document.getElementById("optional_subject_one").value = "Phyics";
        document.getElementById("optional_subject_two").value = "Chemistery";
        document.getElementById("optional_subject_three").value = "Mathematics";

      }
      if ( this.value == 'Group1')
      {
        document.getElementById("optional_subject_one").value = "Phyics";
        document.getElementById("optional_subject_two").value = "Statistics";
        document.getElementById("optional_subject_three").value = "Mathematics";

      } 
      if ( this.value == 'Group2')
      {
        document.getElementById("optional_subject_one").value = "Economics";
        document.getElementById("optional_subject_two").value = "Statistics";
        document.getElementById("optional_subject_three").value = "Mathematics";

      }
       if ( this.value == 'Group1i')
      {
        document.getElementById("optional_subject_one").value = "Phyics";
        document.getElementById("optional_subject_two").value = "Computer";
        document.getElementById("optional_subject_three").value = "Mathematics";

      }
         if ( this.value == 'Group2i')
      {
        document.getElementById("optional_subject_one").value = "Economics";
        document.getElementById("optional_subject_two").value = "Computer";
        document.getElementById("optional_subject_three").value = "Mathematics";

      }
         if ( this.value == 'Group3i')
      {
        document.getElementById("optional_subject_one").value = "Statistics";
        document.getElementById("optional_subject_two").value = "Computer";
        document.getElementById("optional_subject_three").value = "Mathematics";

      }
         if ( this.value == 'Grouphc1')
      {
        document.getElementById("optional_subject_one").value = "Economics";
        document.getElementById("optional_subject_two").value = "Computer";
        document.getElementById("optional_subject_three").value = "Education";

      }
         if ( this.value == 'Grouphc2')
      {
        document.getElementById("optional_subject_one").value = "Economics";
        document.getElementById("optional_subject_two").value = "Computer";
        document.getElementById("optional_subject_three").value = "Health & Physical Education";

      }
       if ( this.value == 'Grouphg1')
      {
        document.getElementById("optional_subject_one").value = "Economics";
        document.getElementById("optional_subject_two").value = "Islamiyat";
        document.getElementById("optional_subject_three").value = "Health & Physical Education";

      }
         if ( this.value == 'Grouphg2')
      {
        document.getElementById("optional_subject_one").value = "Economics";
        document.getElementById("optional_subject_two").value = "Islamiyat";
        document.getElementById("optional_subject_three").value = "Education";

      }
        if ( this.value == 'Grouphg3')
      {
        document.getElementById("optional_subject_one").value = "Economics";
        document.getElementById("optional_subject_two").value = "Arabic";
        document.getElementById("optional_subject_three").value = "Health & Physical Education";

      }
         if ( this.value == 'Grouphg4')
      {
        document.getElementById("optional_subject_one").value = "Economics";
        document.getElementById("optional_subject_two").value = "Arabic";
        document.getElementById("optional_subject_three").value = "Education";

      }
        if ( this.value == 'Grouphg5')
      {
        document.getElementById("optional_subject_one").value = "Economics";
        document.getElementById("optional_subject_two").value = "History";
        document.getElementById("optional_subject_three").value = "Health & Physical Education";

      }
         if ( this.value == 'Grouphg6')
      {
        document.getElementById("optional_subject_one").value = "Economics";
        document.getElementById("optional_subject_two").value = "History";
        document.getElementById("optional_subject_three").value = "Education";

      }
       if ( this.value == 'Grouphg7')
      {
        document.getElementById("optional_subject_one").value = "Civics";
        document.getElementById("optional_subject_two").value = "Islamiyat";
        document.getElementById("optional_subject_three").value = "Health & Physical Education";

      }
         if ( this.value == 'Grouphg8')
      {
        document.getElementById("optional_subject_one").value = "Civics";
        document.getElementById("optional_subject_two").value = "Islamiyat";
        document.getElementById("optional_subject_three").value = "Education";

      }
        if ( this.value == 'Grouphg9')
      {
        document.getElementById("optional_subject_one").value = "Civics";
        document.getElementById("optional_subject_two").value = "Arabic";
        document.getElementById("optional_subject_three").value = "Health & Physical Education";

      }
         if ( this.value == 'Grouphg10')
      {
        document.getElementById("optional_subject_one").value = "Civics";
        document.getElementById("optional_subject_two").value = "Arabic";
        document.getElementById("optional_subject_three").value = "Education";

      }
       if ( this.value == 'Grouphg11')
      {
        document.getElementById("optional_subject_one").value = "Civics";
        document.getElementById("optional_subject_two").value = "History";
        document.getElementById("optional_subject_three").value = "Health & Physical Education";

      }
         if ( this.value == 'Grouphg12')
      {
        document.getElementById("optional_subject_one").value = "Civics";
        document.getElementById("optional_subject_two").value = "History";
        document.getElementById("optional_subject_three").value = "Education";

      }
         if ( this.value == 'Null')
      {
        document.getElementById("optional_subject_one").value = "";
        document.getElementById("optional_subject_two").value = "";
        document.getElementById("optional_subject_three").value = "";

      }
    });
});
</script>
    <script src="{{URL::to('public')}}/dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/scripts/script.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/scripts/sidebar.large.script.min.js"></script>
</body>

</html>
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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js" integrity="sha512-Vp2UimVVK8kNOjXqqj/B0Fyo96SDPj9OCSm1vmYSrLYF3mwIOBXh/yRZDVKo8NemQn1GUjjK0vFJuCSCkYai/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css" integrity="sha512-YDChav1pUAodyH1Ja7PIpEDUOoFROpZi5Lb7pY8+9+kU8UTr3J8SI8QO7SRuf4qdDKb5OI0xSt4Vk1wiYjBXgw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
.has-error .form-control {
    border-color: #ff6162;
}

.has-error label,
.has-error .help-block {
    color: #ff6162;
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

.error {
    color: red;
    font-weight: 400;
    display: block;
    padding: 6px 0;
    font-size: 14px;
}

.form-control.error {
    border-color: red;
    padding: .375rem .75rem;
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
.required {
    color: red;
}
</style>

</head>

                    
@if (\Session::has('success'))
     <script>
                                        Swal.fire ({
                                            title: "Thanks! ",
                                            confirmButtonClass: "btn-success",
                                            text: "student added...",
                                          
                                            icon: "success",
                                        });
                                    </script>
            @endif

  @if(\Session::has('errors'))
     
    <script>

        Swal.fire({
            icon: 'error',
  title: 'Oops...',
  text: 'Something went wrong!',
 
        });
    </script>
@endif



<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        <div class="main-header">
            <div class="logo">
                <img src="{{URL::to('public')}}/dist-assets/images/logo.jpg" alt="">
            </div>
            <div class="menu-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>
           
            <div style="margin: auto"></div>
            <div class="header-part-right">
                    <!-- Full screen toggle--><a href="{{url('/deo')}}"><button href="{{url('/deo')}}"><i class=" bu d-none d-sm-inline-block"  ></i>New Form</button></a>
                    <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen=""></i>
                    <!-- Grid menu Dropdown-->
                    <div class="dropdown dropleft"><i class="i-Safe-Box text-muted header-icon" id="dropdownMenuButton" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                        

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                               <div class="menu-icon-grid"><a href="{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="i-Checked-User"></i> Logout</a><a href="{{URL('change-password')}}"><i class="text-20 i-Key"></i>Change Password</a></div>
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
                  <!--    @if (\Session::has('success'))
                                <br>
                                  <div class="alert alert-success d-inline ml-6 mr-6">
                                    
                                      <strong>{!! \Session::get('success') !!}</strong>
                                    
                                  </div>
                                  <br>
                                @endif -->
                                <div class="col-md-1"></div>


                    <div class="col-md-10">
                        <div class="card mb-4">
                            <div class="card-body">

                            <div class="card-title mb-3">Form Inputs</div>
                            <form id="regForm" method="post"  target="_blank" action="{{url('admissionform')}}" enctype="multipart/form-data">
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
                                    @csrf
          
                                    <div class="tab">
                                     <div class="row ">
                                     <div class="col-md-4 form-group mb-3"></div>

                                           <div class="col-md-4 form-group mb-3 ">
                                            <label for="picker1">Admission Applied For Class<span class="required">*</span></label>

                                          
                                            <select class="form-control " name="Applied" id="Applied" >
                                                
                                                <option value="">Select </option>
                                                <option value="Intermediate">Intermediate </option>
                                                <option value="Bachelor">Bachelor </option>
                                                <option value="BS(ENG)">BS(ENG)</option>
                                               
                                            </select>
                                             <!-- Error -->
                                              @if ($errors->has('Applied'))
                                                <span class="text-danger">{{ $errors->first('Applied') }}</span>
                                            @endif
                                           
                                        </div>
                                         <div class="col-md-4 form-group mb-3"></div>
                                    </div>
                                     <div class="row ">
                                         <div class="col-md-4 form-group mb-3"></div>


                                           <div id="div1" style="display: none;" class="col-md-4 form-group mb-3">
                                            <label for="picker1">Select Class <span class="required">*</span></label>
                                            <select class="form-control" name="section_name" id="section_name">
                                                <option value="">Select </option>

                                                @foreach($class_section AS $c_section)
                                                <option value="{{$c_section->class_name}}">{{$c_section->class_name}} </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('section_name'))
                                                <span class="text-danger">{{ $errors->first('section_name') }}</span>
                                            @endif
                                        </div>
                                         <div class="col-md-4 form-group mb-3"></div>

                                    </div>

                                     <div class="row ">
                                     <div class="col-md-4 form-group mb-3"></div>


                                                <div id="div2" style="display: none;"  class="col-md-4 form-group mb-3">
                                            <label for="picker1">Select Year/ Semster <span class="required">*</span></label>
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
                                             @if ($errors->has('class_year'))
                                                <span class="text-danger">{{ $errors->first('class_year') }}</span>
                                            @endif
                                        </div>
                                     <div class="col-md-4 form-group mb-3"></div>

                                    </div>

                                     <div class="row ">
                                     <div class="col-md-4 form-group mb-3"></div>


                                           <div id="div3" style="display: none;"  class="col-md-4 form-group mb-3">
                                            <label for="picker1">Select Session <span class="required">*</span></label>
                                            <select class="form-control" name="section_id">
                                                <option value="">Select</option>

                                                @foreach($class_section AS $c_section)
                                                <option value="{{$c_section->id}}">{{$c_section->class_name}}({{$c_section->start_year}} To {{$c_section->end_year}})</option>
                                                @endforeach
                                            </select>
                                             @if ($errors->has('section_id'))
                                                <span class="text-danger">{{ $errors->first('section_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                     <div class="col-md-4 form-group mb-3"></div>

                              </div>                                  



                                

                              
                           
                              
                                  <div class="tab">
                                    <div class="row ">
                                           
                                       
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="CNIC">CNIC <span class="required">*</span></label>
                                            <input value="{{old('CNIC')}}" class="form-control" id="CNIC" name="CNIC" type="text" placeholder="Enter canidate cnic" autofocus maxlength="13"/>
                                             @if ($errors->has('CNIC'))
                                                <span class="text-danger">{{ $errors->first('CNIC') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="canidate_name">Canidate Name <span class="required">*</span></label>
                                            <input value="{{old('canidate_name')}}" class="form-control" id="canidate_name" name="canidate_name" type="Year" placeholder="Enter Canidate Name" />
                                               @if ($errors->has('canidate_name'))
                                                <span class="text-danger">{{ $errors->first('canidate_name') }}</span>
                                            @endif
                                            <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="dob">Date Of Birth <span class="required">*</span></label>
                                            <input value="{{old('dob')}}" class="form-control" id="dob" type="tel" maxlength="10" name="dob" placeholder="dd/mm/yyyy"oninput="this.value = DDMMYYYY(this.value, event)" />
                                              @if ($errors->has('dob'))
                                                <span class="text-danger">{{ $errors->first('dob') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="f_name">Father Name <span class="required">*</span></label>
                                            <input value="{{old('f_name')}}" class="form-control" id="f_name" type="Year" name="f_name" placeholder="Enter f_name" />
                                             @if ($errors->has('f_name'))
                                                <span class="text-danger">{{ $errors->first('f_name') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="f_cnic">Father CNIC <span class="required">*</span></label>
                                            <input value="{{old('f_cnic')}}" class="form-control" id="f_cnic" type="Year" name="f_cnic" placeholder="Enter f_cnic" maxlength="13" />
                                              @if ($errors->has('f_cnic'))
                                                <span class="text-danger">{{ $errors->first('f_cnic') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="contact_number">Contact No.<span class="required">*</span></label>
                                            <input value="{{old('contact_number')}}" class="form-control" id="contact_number" type="Year" name="contact_number" placeholder="Enter contact_number" maxlength="11" />
                                             @if ($errors->has('contact_number'))
                                                <span class="text-danger">{{ $errors->first('contact_number') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="address">Address<span class="required">*</span></label>
                                            <input value="{{old('address')}}" class="form-control" id="address" type="Year" name="address" placeholder="Enter address" />
                                              @if ($errors->has('address'))
                                                <span class="text-danger">{{ $errors->first('address') }}</span>
                                            @endif
                                        </div>
                                          <div class="col-md-3 form-group mb-3">
                                            <label for="religion">Religion<span class="required">*</span></label>
                                             <select class="form-control" name="religion">
                                                <option value="">Select</option>
                                                <option value="Muslim">Muslim</option>
                                                <option value="Non-Muslim">Non-Muslim</option>
                                            </select>
                                             @if ($errors->has('religion'))
                                                <span class="text-danger">{{ $errors->first('religion') }}</span>
                                            @endif
                                        </div>
                                     
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="nationality">Nationality<span class="required">*</span></label>
                                             <select class="form-control" name="nationality">
                                                <option value="">Select</option>
                                                <option value="Pakistani">Pakistani</option>
                                                <option value="Other">Other</option>
                                            </select>
                                             @if ($errors->has('nationality'))
                                                <span class="text-danger">{{ $errors->first('nationality') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="specialty">Specialty<span class="required">*</span></label>
                                             <select class="form-control" name="specialty">
                                                <option value="">Select</option>
                                                <option value="None">None</option>
                                                <option value="Disabled">Disabled</option>
                                                <option value="Blind">Blind</option>
                                                <option value="Board Employee Child">Board Employee Child</option>
                                            </select>
                                              @if ($errors->has('specialty'))
                                                <span class="text-danger">{{ $errors->first('specialty') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="covid">COVID Vaccination:<span class="required">*</span></label>
                                             <select class="form-control" name="covid">
                                                <option value="">Select</option>
                                                <option value="Single Dose ">Single Dose </option>
                                                <option value="Double Dose">Double Dose  </option>
                                                <option value="None">None </option> 
                                            </select>
                                              @if ($errors->has('covid'))
                                                <span class="text-danger">{{ $errors->first('covid') }}</span>
                                            @endif
                                        </div>
                                           <div class="col-md-3 form-group mb-3">
                                            <label for="bgroup">Blood Group<span class="required">*</span></label>
                                            <input value="{{old('bgroup')}}" class="form-control" id="bgroup" type="Year" name="bgroup" placeholder="Enter Blood Group" />
                                              @if ($errors->has('bgroup'))
                                                <span class="text-danger">{{ $errors->first('bgroup') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="group">Select Group<span class="required">*</span></label>
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
                                              @if ($errors->has('group'))
                                                <span class="text-danger">{{ $errors->first('group') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="optional_subject_one">Optional Subject One<span class="required">*</span></label>
                                            <input value="{{old('optional_subject_one')}}" class="form-control" id="optional_subject_one" type="Year" name="optional_subject_one" placeholder="Enter optional_subject_one" />
                                               @if ($errors->has('optional_subject_one'))
                                                <span class="text-danger">{{ $errors->first('optional_subject_one') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="optional_subject_two">Optional Subject Two<span class="required">*</span></label>
                                            <input value="{{old('optional_subject_two')}}" class="form-control" id="optional_subject_two" type="Year" name="optional_subject_two" placeholder="Enter optional_subject_two" />
                                              @if ($errors->has('optional_subject_two'))
                                                <span class="text-danger">{{ $errors->first('optional_subject_two') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="optional_subject_three">OptionalSubject Three<span class="required">*</span></label>
                                            <input value="{{old('optional_subject_three')}}" class="form-control" id="optional_subject_three" type="Year" name="optional_subject_three" placeholder="Enter optional_subject_three" />
                                             @if ($errors->has('optional_subject_three'))
                                                <span class="text-danger">{{ $errors->first('optional_subject_three') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="image_name">Upload Student Photo</label>
                                            <input value="{{old('name')}}" class="form-control" id="image_name"  type="file" name="image_name" placeholder="Enter image_name" />
                                        </div>
                                        
                                     
                                    
                                    </div>

                                   

                                </div>
                                <div class="tab">
                                <div class="row ">
                                    <div class="col-md-3 form-group mb-3">
                                        <h1>Matric</h1> </div>
                                    <div class="row ">
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="rollno">Roll No<span class="required">*</span></label>
                                            <input value="{{old('roll_no')}}" class="form-control" id="roll_no" type="text" name="roll_no" placeholder="Enter Roll No" />
                                            @if ($errors->has('roll_no'))
                                                <span class="text-danger">{{ $errors->first('roll_no') }}</span>
                                            @endif 
                                        </div>
                                          
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="Year">Passing Year<span class="required">*</span></label>
                                            
                                            <select class="form-control" name="Passing_Year">
                                                <option value="">Select</option>

                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                            </select>
                                            @if ($errors->has('Passing_Year'))
                                                <span class="text-danger">{{ $errors->first('Passing_Year') }}</span>
                                            @endif  
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="group">Select Annual /Supp.<span class="required">*</span></label>
                                            <select class="form-control" name="exam_Type">
                                                <option value="">Select One Opttion</option>

                                                <option value="Annual">Annual</option>
                                                <option value="Supply">Supply</option>
                                            </select>
                                              @if ($errors->has('exam_Type'))
                                                <span class="text-danger">{{ $errors->first('exam_Type') }}</span>
                                            @endif 
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="Marks_Obt">Marks Obtian<span class="required">*</span></label>
                                            <input value="{{old('Marks_Obt')}}" class="form-control" id="Marks_Obt" type="Year" name="Marks_Obt" placeholder="Enter Marks Obt." />
                                             @if ($errors->has('Marks_Obt'))
                                                <span class="text-danger">{{ $errors->first('Marks_Obt') }}</span>
                                            @endif  
                                        </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="totall_marks">Total Marks<span class="required">*</span></label>
                                            <input value="1100" class="form-control" id="totall_marks" type="text" name="totall_marks"  placeholder="Enter Total Marks" readonly="" />
                                             </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="%age">%age<span class="required">*</span></label>
                                            <input value="{{old('percentage')}}" class="form-control" id="results" type="text" name="percentage" readonly /> 
                                              @if ($errors->has('percentage'))
                                                <span class="text-danger">{{ $errors->first('percentage') }}</span>
                                            @endif
                                        </div>
                                            <div class="col-md-3 form-group mb-3">
                                            <label for="grade">Grade<span class="required">*</span></label>
                                            <input value="{{old('grade')}}" class="form-control" name="grade" id="grade" type="text"   />
                                              @if ($errors->has('grade'))
                                                <span class="text-danger">{{ $errors->first('grade') }}</span>
                                            @endif
                                             </div>
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="insitute_name">Board /University<span class="required">*</span></label>     
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
                                                 @if ($errors->has('insitute_name'))
                                                <span class="text-danger">{{ $errors->first('insitute_name') }}</span>
                                            @endif
                                            </div>
                                     </div>
                                </div>
                                    <div class="row " id="interdiv" style="display: none;">
                                        <div class="col-md-12 form-group mb-3">
                                            <h1>Inter </h1> </div>
                                        
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="rollno">Roll No<span class="required">*</span></label>
                                                <input value="{{old('Inter_Roll_No')}}" class="form-control" id="Inter_Roll_No" type="Year" name="Inter_Roll_No" placeholder="Enter Roll No" />
                                                  @if ($errors->has('Inter_Roll_No'))
                                                <span class="text-danger">{{ $errors->first('Inter_Roll_No') }}</span>
                                                @endif 
                                        </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="Year">Passing Year<span class="required">*</span></label>
                                                 <select class="form-control" name="Inter_Year">
                                                <option value="">Select</option>

                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                            </select> 
                                              @if ($errors->has('Inter_Year'))
                                                <span class="text-danger">{{ $errors->first('Inter_Year') }}</span>
                                                @endif
                                             </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="group">Select Annual /Supp.<span class="required">*</span></label>
                                                <select class="form-control" name="Inter_Exam_Type">
                                                    <option value="">Select One Opttion</option>
                                                    <option value="Annual">Annual</option>
                                                    <option value="Supply">Supply</option>
                                                </select>
                                                 @if ($errors->has('Inter_Exam_Type'))
                                                <span class="text-danger">{{ $errors->first('Inter_Exam_Type') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="Marks_Obt">Marks Obtian<span class="required">*</span></label>
                                                <input value="{{old('Inter_Marks_Obt')}}" class="form-control" id="Inter_Marks_Obt" type="Year" name="Inter_Marks_Obt" placeholder="Enter Marks Obt." />
                                                 @if ($errors->has('Inter_Marks_Obt'))
                                                <span class="text-danger">{{ $errors->first('Inter_Marks_Obt') }}</span>
                                                @endif 

                                            </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="totall_marks">Total Marks<span class="required">*</span></label>
                                                <input value="1100" class="form-control" id="Inter_totall_marks"  type="text" name="Inter_totall_marks" placeholder="Enter Total Marks" readonly="" />
                                                 @if ($errors->has('Inter_totall_marks'))
                                                <span class="text-danger">{{ $errors->first('Inter_totall_marks') }}</span>
                                                @endif  </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="%age">%age<span class="required">*</span></label>
                                                <input value="{{old('name')}}" class="form-control" id="Inter_results" type="text" name="Inter_percentage" readonly /> </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="Inter_grade">Grade<span class="required">*</span></label>
                                                <input value="{{old('name')}}" class="form-control" name="Inter_grade" id="Inter_grade" type="text"   /> 
                                                 @if ($errors->has('Inter_grade'))
                                                <span class="text-danger">{{ $errors->first('Inter_grade') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="insitute_name">Board /University<span class="required">*</span></label>
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
                                                </select>
                                                @if ($errors->has('Inter_insitute_name'))
                                                <span class="text-danger">{{ $errors->first('Inter_insitute_name') }}</span>
                                                @endif


                                            </div>
                                       
                                    </div>
                                    <div class="row " id="Bachelordiv" style="display: none;">
                                        <div class="col-md-12 form-group mb-3">
                                            <h1>Bachelor </h1> </div>

                                        
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="rollno">Roll No<span class="required">*</span></label>
                                                <input value="{{old('Bachelor_Roll_No')}}" class="form-control" id="Bachelor_Roll_No" type="Roll-no" name="Bachelor_Roll_No" placeholder="Enter Roll No" /> 
                                               @if ($errors->has('Bachelor_Roll_No'))
                                                <span class="text-danger">{{ $errors->first('Bachelor_Roll_No') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="Year">Passing Year<span class="required">*</span></label>                       
                                             <select class="form-control" name="Bachelor_Year">
                                                <option value="">Select</option>

                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                            </select>
                                            @if ($errors->has('Bachelor_Year'))
                                                <span class="text-danger">{{ $errors->first('Bachelor_Year') }}</span>
                                                @endif 
                                        </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="group">Select Annual /Supp.<span class="required">*</span></label>
                                                <select class="form-control" name="Bachelor_Exam_Type">
                                                    <option value="">Select One Opttion</option>
                                                    <option value="Annual">Annual</option>
                                                    <option value="Supply">Supply</option>
                                                </select>
                                                @if ($errors->has('Bachelor_Exam_Type'))
                                                <span class="text-danger">{{ $errors->first('Bachelor_Exam_Type') }}</span>
                                                @endif 
                                            </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="Marks_Obt">Marks Obtian<span class="required">*</span></label>
                                                <input value="{{old('Bachelor_Marks_Obt')}}" class="form-control" id="Bachelor_Marks_Obt" type="Year" name="Bachelor_Marks_Obt" placeholder="Enter Marks Obt." />
                                                 @if ($errors->has('Bachelor_Marks_Obt'))
                                                <span class="text-danger">{{ $errors->first('Bachelor_Marks_Obt') }}</span>
                                                @endif  </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="totall_marks">Total Marks<span class="required">*</span></label>
                                                <input value="800" class="form-control" id="Bachelor_totall_marks"  type="Year" name="Bachelor_totall_marks" placeholder="Enter Total Marks" />
                                                 @if ($errors->has('Bachelor_totall_marks'))
                                                <span class="text-danger">{{ $errors->first('Bachelor_totall_marks') }}</span>
                                                @endif  
                                            </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="%age">%age<span class="required">*</span></label>
                                                <input value="{{old('Bachelor_results')}}" class="form-control" id="Bachelor_results" type="text" name="Bachelor_percentage" readonly /> </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="Bachelor_grade">Grade<span class="required">*</span></label>
                                                <input value="{{old('Bachelor_grade')}}" class="form-control" name="Bachelor_grade" id="Bachelor_grade" type="text"  /> 
                                                   @if ($errors->has('Bachelor_grade'))
                                                <span class="text-danger">{{ $errors->first('Bachelor_grade') }}</span>
                                                @endif  
                                            </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="insitute_name">Board /University<span class="required">*</span></label>
                                                <input value="{{old('Bachelor_insitute_name')}}" class="form-control" id="Bachelor_insitute_name" type="Year" name="Bachelor_insitute_name" placeholder="Enter Board /University" />
                                                  @if ($errors->has('Bachelor_insitute_name'))
                                                <span class="text-danger">{{ $errors->first('Bachelor_insitute_name') }}</span>
                                                @endif  
                                            </div>
                                        </div>
                                            <button type="button" onclick="myFunction()">Re-Admisssion</button>
                                        
                                        <div class="row " id="rediv" style="display: none;">
                                             <div class="col-md-12 form-group mb-3">
                                                <br>
                                            <h1>In Case of Re-Admission Provide Following Information</h1> </div>
                                              <div class="col-md-3 form-group mb-3">
                                                <label for="previous_roll_no">Previous Roll No</label>
                                                <input value="{{old('previous_roll_no')}}" class="form-control" id="previous_roll_no" type="Year" name="previous_roll_no" placeholder="Enter Previous Roll No" />
                                                  @if ($errors->has('previous_roll_no'))
                                                <span class="text-danger">{{ $errors->first('previous_roll_no') }}</span>
                                                @endif  
                                            </div>
                                              <div class="col-md-3 form-group mb-3">
                                                <label for="previous_year">Previous Year</label>
                                               <select class="form-control" name="previous_year">
                                                <option value="">Select</option>

                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                            </select>
                                                  @if ($errors->has('previous_year'))
                                                <span class="text-danger">{{ $errors->first('previous_year') }}</span>
                                                @endif  
                                            </div>
                                              <div class="col-md-3 form-group mb-3">
                                                <label for="previous_session">Previous Session</label>
                                                <input value="{{old('previous_session')}}" class="form-control" id="previous_session" type="Year" name="previous_session" placeholder="E.g. 2020 To 2022" />
                                                  @if ($errors->has('previous_session'))
                                                <span class="text-danger">{{ $errors->first('previous_session') }}</span>
                                                @endif  
                                            </div>
                                              <div class="col-md-3 form-group mb-3">
                                                <label for="previous_board">Previous Board</label>
                                                <select class="form-control" name="previous_board">
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
                                                  @if ($errors->has('previous_board'))
                                                <span class="text-danger">{{ $errors->first('previous_board') }}</span>
                                                @endif  
                                            </div>
                                              <div class="col-md-3 form-group mb-3">
                                                <label for="reg_no">Reg. No:</label>
                                                <input value="{{old('reg_no')}}" class="form-control" id="reg_no" type="Year" name="reg_no" placeholder="Enter Reg.No" />
                                                  @if ($errors->has('reg_no'))
                                                <span class="text-danger">{{ $errors->first('reg_no') }}</span>
                                                @endif  
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
                                       <!--  <span class="step"></span>
                                        <span class="step"></span> -->
                                        <!-- <span class="step"></span> -->
                                      </div>
                                </form>
                            </div>
                        </div>
                    </div>
           
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
function myFunction() {
   var x = document.getElementById("rediv");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}
$(".form-control form:visible").find('input')[0].focus();

    
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
          $(".gs").hide();


      }
       if ( this.value == 'ICS')
      {
          $(".ics").show();
          $(".fsc").hide();
          $(".hgc").hide();
          $(".hg").hide();
          $(".gs").hide();
      }
       if ( this.value == 'FA')
      {
          $(".hg").show();
           $(".ics").hide();
          $(".fsc").hide();
          $(".hgc").hide();
          $(".gs").hide();
      } 
      if ( this.value == 'F.A IT')
      {
          $(".hgc").show();
          $(".hg").hide();
           $(".ics").hide();
          $(".fsc").hide();
          $(".gs").hide();
      } 
       if ( this.value == 'GSc')
      {
          $(".gs").show();
          $(".hgc").hide();
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
        document.getElementById("optional_subject_three").value = "Health And Physical Education";

      }
       if ( this.value == 'Grouphg1')
      {
        document.getElementById("optional_subject_one").value = "Economics";
        document.getElementById("optional_subject_two").value = "Islamiyat";
        document.getElementById("optional_subject_three").value = "Health And Physical Education";

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
        document.getElementById("optional_subject_three").value = "Health And Physical Education";

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
        document.getElementById("optional_subject_three").value = "Health And Physical Education";

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
        document.getElementById("optional_subject_three").value = "Health And Physical Education";

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
        document.getElementById("optional_subject_three").value = "Health And Physical Education";

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
        document.getElementById("optional_subject_three").value = "Health And Physical Education";

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
window.onload = function() {
  var input = document.getElementById("Applied").focus();
}
</script>
<script>
function DDMMYYYY(value, event) {
  let newValue = value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');

  const dayOrMonth = (index) => index % 2 === 1 && index < 4;

  // on delete key.  
  if (!event.data) {
    return value;
  }

  return newValue.split('').map((v, i) => dayOrMonth(i) ? v + '/' : v).join('');;
}
</script>
    <script src="{{URL::to('public')}}/dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/scripts/script.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/scripts/sidebar.large.script.min.js"></script>
</body>

</html>
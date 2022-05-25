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

button:hover {q
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

</style>
</head>

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
                    <!-- Full screen toggle--><i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen=""></i>
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
                    <li class="nav-item" ><a class="nav-item-hold" href="{{url('/admin/allstudents')}}"><i class="nav-icon i-Bar-Chart"></i><span class="nav-text" style="font-weight: bold;"><i>Back</i></span></a>
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
                            <form id="regForm" method="post"   action="{{url('admin/upgradestudent')}}/{{$user->id}}" enctype="multipart/form-data" >
   							 {{ csrf_field() }}

                                    <div class="tab">
                                     <div class="row ">
                                     <div class="col-md-4 form-group mb-3"></div>

                                           <div class="col-md-4 form-group mb-3">
                                            <label for="picker1">Admission Applied For Class</label>
                                            <select class="form-control" name="Applied" id="Applied">
                                                
                                                <option value="">Select </option>
                                                <option value="Intermediate"{{ $user->Applied == 'Intermediate'? 'selected' : '' }}>Intermediate </option>
                                                <option value="BS(hons)"{{ $user->Applied == 'BS(hons)' ? 'selected' : '' }}>BS(hons) </option>

                                               
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


                                           <div id="div1"  class="col-md-4 form-group mb-3">
                                            <label for="picker1">Select Class </label>
                                            <select class="form-control" name="section_namenew" id="section_name">
                                                <option value="">Select </option>

                                                @foreach($class_section AS $c_section)
                                                 @if($c_section->category=='Intermediate')                                                
                                                <option class="Interclass" style="display: none;" value="{{$c_section->class_name}}"{{ $c_section->id == $user->section_id ? 'selected' : '' }}>{{$c_section->class_name}} </option>
                                                @endif
                                                 @if($c_section->category=='BS(hons)')                                                
                                                <option class="BS" style="display: none;" value="{{$c_section->class_name}}"{{ $c_section->id == $user->section_id ? 'selected' : '' }}>{{$c_section->class_name}} </option>
                                                @endif

                                                 
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


                                                <div id="div2"   class="col-md-4 form-group mb-3">
                                            <label for="picker1">Select Year/ Semster </label>
                                            <select class="form-control" name="class_year" id="class_year">
                                                <option value="">Select</option>
                                                
                                                <option class="inter" value="1st_Year"{{ $user->class_year == '1st_Year' ? 'selected' : '' }}>1st Year</option>
                                                <option class="inter" value="2nd_Year"{{ $user->class_year == '2nd_Year' ? 'selected' : '' }}>2nd Year</option>
                                                
                                                
                                                <option class="bch" value="3rd_Year"{{ $user->class_year == '2nd_Year' ? 'selected' : '' }}>3rd Year</option>
                                                <option class="bch" value="4th_Year"{{ $user->class_year == '4th_Year' ? 'selected' : '' }}>4th Year</option>
                                            
                                           
                                                 <option class="master" value="1st"{{ $user->class_year == '1st' ? 'selected' : '' }}>1st Semster</option>
                                                <option class="master" value="2nd_Semster"{{ $user->class_year == '2nd_Semster' ? 'selected' : '' }}>2nd Semster</option>
                                                <option class="master" value="3rd_Semster"{{ $user->class_year == '3rd_Semster' ? 'selected' : '' }}>3rd Semster</option>
                                                <option class="master" value="4th_Semster"{{ $user->class_year == '4th_Semster' ? 'selected' : '' }}>4th Semster</option>
                                               
                                                <option class="bshons" value="1st_Semster">1st Semster</option>
                                                <option class="bshons" value="2nd_Semster">2nd Semster</option>
                                                <option class="bshons" value="3rd_Semster">3rd Semster</option>
                                                <option class="bshons" value="4th_Semster">4th Semster</option>
                                                <option class="bshons" value="5th_Semster">5th Semster</option>
                                                <option class="bshons" value="6th_Semster">6th Semster</option>
                                                <option class="bshons" value="7th_Semster">7th Semster</option>
                                                <option class="bshons" value="8th_Semster">8th Semster</option>
                                            
                                            </select>
                                            @if ($errors->has('class_year'))
                                                <span class="text-danger">{{ $errors->first('class_year') }}</span>
                                                @endif 
                                        </div>
                                     <div class="col-md-4 form-group mb-3"></div>

                                    </div>

                                     <div class="row ">
                                     <div class="col-md-4 form-group mb-3"></div>


                                           <div id="div3"   class="col-md-4 form-group mb-3">
                                            <label for="picker1">Select Session </label>
                                            <select class="form-control" name="section_id">
                                                <option value="">Select</option>
                                                @foreach($class_section AS $c_section)
                                                @if($c_section->category=='Intermediate')

                                                <option class="Interclass" style="display: none;" value="{{$c_section->id}}"{{ $c_section->id == $user->section_id ? 'selected' : '' }}>{{$c_section->class_name}}({{$c_section->start_year}} To {{$c_section->end_year}})</option>
                                                @endif
                                                 @if($c_section->category=='BS(hons)')

                                                <option class="BS" style="display: none;" value="{{$c_section->id}}"{{ $c_section->id == $user->section_id ? 'selected' : '' }}>{{$c_section->class_name}}({{$c_section->start_year}} To {{$c_section->end_year}})</option>
                                                @endif
                                                @endforeach
                                            </select>
                                              @if ($errors->has('section_id'))
                                                <span class="text-danger">{{ $errors->first('section_id') }}</span>
                                                @endif 
                                        </div>
                                        
                                    </div>
                                    <button type="submit" id="js-submit-form" name="submit" value="Submit Form" style="float:right;">Submit</button>
                                     <div class="col-md-4 form-group mb-3"></div>

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
</script>
<script> 
    function myFunction() {
   var x = document.getElementById("rediv");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}
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
       

       if ( this.value == 'BS(hons)')
      {
        $("#interdiv").show();
        $("#Bachelordiv").hide();
         $(".inter").hide();
        $(".bch").hide();
        $(".BS").show();
        $(".Interclass").hide();
        $(".master").hide();
        $(".bshons").show();

      }
      if ( this.value == 'BS(ENG)')
      {
        $("#interdiv").show();
        $("#Bachelordiv").show();
         $(".inter").hide();
        $(".bch").hide();
        $(".master").hide();

      }
      if ( this.value == 'Intermediate')
      {
        $("#interdiv").hide();
        $("#Bachelordiv").hide();
        $(".inter").show();
        $(".BS").hide();
        $(".bch").hide();
        $(".Interclass").show();
        $(".master").hide();
        $(".bshons").hide();



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
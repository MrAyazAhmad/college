<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Datatables |GACA Software Poratl</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="{{URL::to('public')}}/dist-assets/css/themes/lite-purple.css" rel="stylesheet" />
    <link href="{{URL::to('public')}}/dist-assets/css/plugins/perfect-scrollbar.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{URL::to('public')}}/dist-assets/css/plugins/fontawesome-5.css" />
    <link href="{{URL::to('public')}}/dist-assets/css/plugins/metisMenu.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="{{URL::to('public')}}/dist-assets/css/plugins/datatables.min.css" /> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.js" integrity="sha512-4WpSQe8XU6Djt8IPJMGD9Xx9KuYsVCEeitZfMhPi8xdYlVA5hzRitm0Nt1g2AZFS136s29Nq4E4NVvouVAVrBw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/sweetalert"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<style type="text/css">
    .dropdown-item.active, .dropdown-item:active {
    color: #000;
}
</style>

</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-vertical sidebar-full">
        <div class="sidebar-panel bg-white">
            <div class="gull-brand pr-3 text-center mt-4 mb-2 d-flex justify-content-center align-items-center"><a href="{{url('/')}}"><img class="pl-3" src="{{URL::to('public')}}/dist-assets/images/logo.jpg" alt="alt" /></a>
                <!--  <span class=" item-name text-20 text-primary font-weight-700">GULL</span> -->
                <div class="sidebar-compact-switch ml-auto"><span></span></div>
            </div>
            @include('layouts/sidebar')
        </div>
        <div class="switch-overlay"></div>
        <div class="main-content-wrap mobile-menu-content bg-off-white m-0">
            <header class="main-header bg-white d-flex justify-content-between p-2">
                <div class="header-toggle">
                    <div class="menu-toggle mobile-menu-icon">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
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
            </header><!-- ============ Body content start ============= -->
            <div class="main-content pt-4">
                <div class="breadcrumb">
                    <h1 class="mr-2">Admin</h1>
                    <ul>
                        <li><a href="">Dashboard</a></li>
                        <li>BS Student List</li>
                    </ul>
                </div>




                <div class="separator-breadcrumb border-top"></div>
              
                <!-- end of row-->
                <div class="row mb-4">
                    <div class="col-md-12 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3">All BS(ENGLISH) Confirm Students Records</h4>
                                <!-- <p>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</p> -->
                                <div class="table-responsive">
                                    <table id="example" class="display" style="width:100%">
                                    <thead>
                                            <tr>
                                                <th>Respit ID</th>
                                                <th>Roll No</th>
                                                <th>CNIC</th>
                                                <th>Name</th>
                                                <th>Father Name</th>
                                                <th>Date Of Birth</th>
                                                <th>Contact Number</th>
                                                <th>Group</th>
                                                <th>Obtian Marks</th>
                                                <th>Subject</th>
                                                <th>Subject+Total Marks</th>

                                                <!-- <th>Print Chalan</th>
                                                <th>Print Receipt</th>
                                                <th>Edit</th>
                                                <th>Delete</th> -->
                                            </tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                            @foreach($bsenglish as $user)
                                            <tr id="sid{{$user->EnglishStudent->id}}" class="p-0">

                                                <td>{{$user->EnglishStudent->id}}</td>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->EnglishStudent->CNIC}}</td>
                                                <td>{{$user->EnglishStudent->canidate_name}}</td>
                                                <td>{{$user->EnglishStudent->f_name}}</td>
                                                <td>{{$user->EnglishStudent->dob}}</td>
                                                <td>{{$user->EnglishStudent->contact_number}}</td>
                                                <td>{{$user->EnglishStudent->group}}</td>
                                                <?php
                                               
                                                $inter = DB::table('inter_academic')->where('stu_id',$user->EnglishStudent->id)->get()->first();
                                                ?>
                                                 @if($inter)
                                                <td>{{$inter->marks_obtian}}</td>
                                                <td>{{$inter->subject_marks}}</td>
                                                <td>{{$inter->marks_obtian+$inter->subject_marks}}</td>
                                                 @else
                                                <td>Not Found</td>
                                                <td>Not Found</td>
                                                <td>Not Found</td>
                                                @endif


                                            </tr>

                                            @endforeach
                                        
                                    </tbody>
                                </table>
                                </div>


                            </div>
                        </div>
                    </div>
            </div>

              <div class="row mb-4">
                    <div class="col-md-12 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3">All BS(CHEMISTRY) Confirm Students Records</h4>
                                <!-- <p>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</p> -->
                                <div class="table-responsive">
                                    <table id="example2" class="display" style="width:100%">
                                    <thead>
                                            <tr>
                                                <th>Respit ID</th>
                                                <th>Roll No</th>
                                                <th>CNIC</th>
                                                <th>Name</th>
                                                <th>Father Name</th>
                                                <th>Date Of Birth</th>
                                                <th>Contact Number</th>
                                                <th>Group</th>
                                                <th>Obtian Marks</th>
                                                <th>Subject-Marks</th>
                                                <th>Subject+Total Marks</th>

                                                <!-- <th>Print Chalan</th>
                                                <th>Print Receipt</th>
                                                <th>Edit</th>
                                                <th>Delete</th> -->
                                            </tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                            @foreach($bschem as $user)

                                            <tr id="sid{{$user->ChemisteryStudent->id}}" class="p-0">

                                                <td>{{$user->ChemisteryStudent->id}}</td>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->ChemisteryStudent->CNIC}}</td>
                                                <td>{{$user->ChemisteryStudent->canidate_name}}</td>
                                                <td>{{$user->ChemisteryStudent->f_name}}</td>
                                                <td>{{$user->ChemisteryStudent->dob}}</td>
                                                <td>{{$user->ChemisteryStudent->contact_number}}</td>
                                                <td>{{$user->ChemisteryStudent->group}}</td>
                                                <?php
                                               
                                                $inter = DB::table('inter_academic')->where('stu_id',$user->ChemisteryStudent->id)->get()->first();
                                                ?>
                                                 @if($inter)
                                                <td>{{$inter->marks_obtian}}</td>
                                                <td>{{$inter->subject_marks}}</td>
                                                <td>{{$inter->marks_obtian+$inter->subject_marks}}</td>
                                                 @else
                                                <td>Not Found</td>
                                                <td>Not Found</td>
                                                <td>Not Found</td>
                                                @endif


                                            </tr>
                                            @endforeach
                                        
                                    </tbody>
                                </table>
                                </div>


                            </div>
                        </div>
                    </div>
            </div>
            <div class="row mb-4">
                    <div class="col-md-12 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3">All BS(COMPUTERE SCIENCE) Confirm Students Records</h4>
                                <!-- <p>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</p> -->
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="width:100%">
                                    <thead>
                                            <tr>
                                                <th>Respit ID</th>
                                                <th>Roll No</th>
                                                <th>CNIC</th>
                                                <th>Name</th>
                                                <th>Father Name</th>
                                                <th>Date Of Birth</th>
                                                <th>Address</th>
                                                <th>Contact Number</th>
                                                <th>Group</th>
                                                <th>Obtian Marks</th>
                                                <th>Insitute Name</th>
                                                <th>Subject-Marks</th>
                                                <th>Subject+Total Marks</th>

                                                <th>Addmission Date</th>
                                                <!-- <th>Print Chalan</th>
                                                <th>Print Receipt</th>
                                                <th>Edit</th>
                                                <th>Delete</th> -->
                                            </tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                            @foreach($bscs as $user)

                                            <tr id="sid{{$user->ComputerStudent->id}}" class="p-0">

                                                <td>{{$user->ComputerStudent->id}}</td>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->ComputerStudent->CNIC}}</td>
                                                <td>{{$user->ComputerStudent->canidate_name}}</td>
                                                <td>{{$user->ComputerStudent->f_name}}</td>
                                                <td>{{$user->ComputerStudent->dob}}</td>
                                                <td>{{$user->ComputerStudent->address}}</td>
                                                <td>{{$user->ComputerStudent->contact_number}}</td>
                                                <td>{{$user->ComputerStudent->group}}</td>
                                                <?php
                                               
                                                $inter = DB::table('inter_academic')->where('stu_id',$user->ComputerStudent->id)->get()->first();
                                                ?>
                                                 @if($inter)
                                                <td>{{$inter->marks_obtian}}</td>
                                                <td>{{$inter->insitute_name}}</td>

                                                <td>{{$inter->subject_marks}}</td>
                                                <td>{{$inter->marks_obtian+$inter->subject_marks}}</td>
                                                 @else
                                                <td>Not Found</td>
                                                <td>Not Found</td>
                                                <td>Not Found</td>
                                                <td>Not Found</td>
                                                @endif

                                                 <td >{{$user->submissiondate}}</td>



                                            </tr>
                                            @endforeach
                                        
                                    </tbody>
                                </table>
                                </div>


                            </div>
                        </div>
                    </div>
            </div>
             <div class="row mb-4">
                    <div class="col-md-12 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3">All BS(MATHEMATICS) Confirm Students Records</h4>
                                <!-- <p>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</p> -->
                                <div class="table-responsive">
                                    <table id="example4" class="display" style="width:100%">
                                    <thead>
                                            <tr>
                                                <th>Respit ID</th>
                                                <th>Roll No</th>
                                                <th>CNIC</th>
                                                <th>Name</th>
                                                <th>Father Name</th>
                                                <th>Date Of Birth</th>
                                                <th>Contact Number</th>
                                                <th>Group</th>
                                                <th>Obtian Marks</th>
                                                <th>Subject-Marks</th>
                                                <th>Subject+Total Marks</th>

                                                <!-- <th>Print Chalan</th>
                                                <th>Print Receipt</th>
                                                <th>Edit</th>
                                                <th>Delete</th> -->
                                            </tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                            @foreach($bsmath as $user)
                                            

                                            <tr id="sid{{$user->MathStudent->id}}" class="p-0">

                                                <td>{{$user->MathStudent->id}}</td>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->MathStudent->CNIC}}</td>
                                                <td>{{$user->MathStudent->canidate_name}}</td>
                                                <td>{{$user->MathStudent->f_name}}</td>
                                                <td>{{$user->MathStudent->dob}}</td>
                                                <td>{{$user->MathStudent->contact_number}}</td>
                                                <td>{{$user->MathStudent->group}}</td>
                                                <?php
                                               
                                                $inter = DB::table('inter_academic')->where('stu_id',$user->MathStudent->id)->get()->first();
                                                ?>
                                                 @if($inter)
                                                <td>{{$inter->marks_obtian}}</td>
                                                <td>{{$inter->subject_marks}}</td>
                                                <td>{{$inter->marks_obtian+$inter->subject_marks}}</td>
                                                 @else
                                                <td>Not Found</td>
                                                <td>Not Found</td>
                                                <td>Not Found</td>
                                                @endif


                                            </tr>
                                            @endforeach
                                        
                                    </tbody>
                                </table>
                                </div>


                            </div>
                        </div>
                    </div>
            </div>
             <div class="row mb-4">
                    <div class="col-md-12 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3">All BS(PHYICS) Confirm Students Records</h4>
                                <!-- <p>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</p> -->
                                <div class="table-responsive">
                                    <table id="example5" class="display" style="width:100%">
                                    <thead>
                                            <tr>
                                                <th>Respit ID</th>
                                                <th>Roll No</th>
                                                <th>CNIC</th>
                                                <th>Name</th>
                                                <th>Father Name</th>
                                                <th>Date Of Birth</th>
                                                <th>Contact Number</th>
                                                <th>Group</th>
                                                <th>Obtian Marks</th>
                                                <th>Subject-Marks</th>
                                                <th>Subject+Total Marks</th>

                                                <!-- <th>Print Chalan</th>
                                                <th>Print Receipt</th>
                                                <th>Edit</th>
                                                <th>Delete</th> -->
                                            </tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                            @foreach($bsphyics as $user)
                                           

                                            <tr id="sid{{$user->std_id}}" class="p-0">

                                                <td>{{$user->PhyicsStudent->id}}</td>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->PhyicsStudent->CNIC}}</td>
                                                <td>{{$user->PhyicsStudent->canidate_name}}</td>
                                                <td>{{$user->PhyicsStudent->f_name}}</td>
                                                <td>{{$user->PhyicsStudent->dob}}</td>
                                                <td>{{$user->PhyicsStudent->contact_number}}</td>
                                                <td>{{$user->PhyicsStudent->group}}</td>
                                                <?php
                                               
                                                $inter = DB::table('inter_academic')->where('stu_id',$user->std_id)->get()->first();
                                                ?>
                                                 @if($inter)
                                                <td>{{$inter->marks_obtian}}</td>
                                                <td>{{$inter->subject_marks}}</td>
                                                <td>{{$inter->marks_obtian+$inter->subject_marks}}</td>
                                                 @else
                                                <td>Not Found</td>
                                                <td>Not Found</td>
                                                <td>Not Found</td>
                                                @endif


                                            </tr>
                                            @endforeach
                                        
                                    </tbody>
                                </table>
                                </div>


                            </div>
                        </div>
                    </div>
            </div>
            <div class="row mb-4">
                    <div class="col-md-12 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3">All BS(URDU) Confirm Students Records</h4>
                                <!-- <p>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</p> -->
                                <div class="table-responsive">
                                    <table id="example6" class="display" style="width:100%">
                                    <thead>
                                            <tr>
                                                <th>Respit ID</th>
                                                <th>Roll No</th>
                                                <th>CNIC</th>
                                                <th>Name</th>
                                                <th>Father Name</th>
                                                <th>Date Of Birth</th>
                                                <th>Contact Number</th>
                                                <th>Group</th>
                                                <th>Obtian Marks</th>
                                                <th>Subject-Marks</th>
                                                <th>Subject+Total Marks</th>

                                                <!-- <th>Print Chalan</th>
                                                <th>Print Receipt</th>
                                                <th>Edit</th>
                                                <th>Delete</th> -->
                                            </tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                            @foreach($bsurdu as $user)
                                          

                                            <tr id="sid{{$user->UrduStudent->id}}" class="p-0">

                                                <td>{{$user->UrduStudent->id}}</td>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->UrduStudent->CNIC}}</td>
                                                <td>{{$user->UrduStudent->canidate_name}}</td>
                                                <td>{{$user->UrduStudent->f_name}}</td>
                                                <td>{{$user->UrduStudent->dob}}</td>
                                                <td>{{$user->UrduStudent->contact_number}}</td>
                                                <td>{{$user->UrduStudent->group}}</td>
                                                <?php
                                               
                                                $inter = DB::table('inter_academic')->where('stu_id',$user->UrduStudent->id)->get()->first();
                                                ?>
                                                 @if($inter)
                                                <td>{{$inter->marks_obtian}}</td>
                                                <td>{{$inter->subject_marks}}</td>
                                                <td>{{$inter->marks_obtian+$inter->subject_marks}}</td>
                                                 @else
                                                <td>Not Found</td>
                                                <td>Not Found</td>
                                                <td>Not Found</td>
                                                @endif


                                            </tr>
                                            @endforeach
                                        
                                    </tbody>
                                </table>
                                </div>


                            </div>
                        </div>
                    </div>
            </div>
             <div class="row mb-4">
                    <div class="col-md-12 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3">All BS(ISLAMIC STUDIES) Confirm Students Records</h4>
                                <!-- <p>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</p> -->
                                <div class="table-responsive">
                                    <table id="example7" class="display" style="width:100%">
                                    <thead>
                                            <tr>
                                                <th>Respit ID</th>
                                                <th>Roll No</th>
                                                <th>CNIC</th>
                                                <th>Name</th>
                                                <th>Father Name</th>
                                                <th>Date Of Birth</th>
                                                <th>Contact Number</th>
                                                <th>Group</th>
                                                <th>Obtian Marks</th>
                                                <th>Subject-Marks</th>
                                                <th>Subject+Total Marks</th>

                                                <!-- <th>Print Chalan</th>
                                                <th>Print Receipt</th>
                                                <th>Edit</th>
                                                <th>Delete</th> -->
                                            </tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                            @foreach($bsisist as $user)
                                           

                                            <tr id="sid{{$user->IslamStudent->id}}" class="p-0">

                                                <td>{{$user->IslamStudent->id}}</td>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->IslamStudent->CNIC}}</td>
                                                <td>{{$user->IslamStudent->canidate_name}}</td>
                                                <td>{{$user->IslamStudent->f_name}}</td>
                                                <td>{{$user->IslamStudent->dob}}</td>
                                                <td>{{$user->IslamStudent->contact_number}}</td>
                                                <td>{{$user->IslamStudent->group}}</td>
                                                <?php
                                               
                                                $inter = DB::table('inter_academic')->where('stu_id',$user->IslamStudent->id)->get()->first();
                                                ?>
                                                 @if($inter)
                                                <td>{{$inter->marks_obtian}}</td>
                                                <td>{{$inter->subject_marks}}</td>
                                                <td>{{$inter->marks_obtian+$inter->subject_marks}}</td>
                                                 @else
                                                <td>Not Found</td>
                                                <td>Not Found</td>
                                                <td>Not Found</td>
                                                @endif


                                            </tr>
                                            @endforeach
                                        
                                    </tbody>
                                </table>
                                </div>


                            </div>
                        </div>
                    </div>
            </div>
            <div class="sidebar-overlay open"></div><!-- Footer Start -->
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
    <div class="search-ui">
        <div class="search-header">
            <img src="{{URL::to('public')}}/dist-assets/images/logo.jpg" alt="" class="logo">
            <button class="search-close btn btn-icon bg-transparent float-right mt-2">
                <i class="i-Close-Window text-22 text-muted"></i>
            </button>
        </div>
        <input type="text" placeholder="Type here" class="search-input" autofocus>
        <div class="search-title">
            <span class="text-muted">Search results</span>
        </div>
        <div class="search-results list-horizontal">
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="{{URL::to('public')}}/dist-assets/images/products/headphone-1.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-danger">Sale</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="{{URL::to('public')}}/dist-assets/images/products/headphone-2.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="{{URL::to('public')}}/dist-assets/images/products/headphone-3.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="{{URL::to('public')}}/dist-assets/images/products/headphone-4.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PAGINATION CONTROL -->
        <div class="col-md-12 mt-5 text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination d-inline-flex">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- ============ Search UI End ============= -->
     <script>
      function userdelete(id)
       {
        if (confirm("Do you really want to delete this record?")) 
        {
          $.ajax({
          url: 'userdelete/'+id,
          type:"DELETE",
          data:{
            _token:$("input[name=_token]").val()
          },
          success:function(response){
            $('#tid'+id).remove();
          }
        });
        }
      }
    </script>
    <!-- ============ Search UI End ============= -->
    <script src="{{URL::to('public')}}/dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/scripts/tooltip.script.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/scripts/script.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/scripts/script_2.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/scripts/sidebar.large.script.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/plugins/feather.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/plugins/metisMenu.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/scripts/layout-sidebar-vertical.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/plugins/datatables.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/scripts/datatables.script.min.js"></script>






      <script type="text/javascript">
    function deleteUser(id) {
        swal({
            title: "Delete?",
            text: "Please ensure and then confirm!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: !0
        }).then(function (e) {

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

             $.ajax({
          url: 'deleteuser/'+id,
          type:"DELETE",
          data:{
            _token:$("input[name=_token]").val()
          },
          success:function(response){
            $('#cid'+id).remove();
            swal({
                title: "Success!",
                text:  "Record has been deleted..",
                type: "success",
                timer: 3000,
                showConfirmButton: false
            });
            window.setTimeout(function(){ } ,3000);
            location.reload();
          }
        });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
  
    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'colvis',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
        ]
    } );
} ); 
   $(document).ready(function() {
    $('#example2').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'colvis',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
        ]
    } );
} );
   $(document).ready(function() {
    $('#example3').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'colvis',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
        ]
    } );
} );
   $(document).ready(function() {
    $('#example4').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'colvis',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
        ]
    } );
} );

   $(document).ready(function() {
    $('#example5').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'colvis',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
        ]
    } );
} );
   $(document).ready(function() {
    $('#example6').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'colvis',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
        ]
    } );
} );
   $(document).ready(function() {
    $('#example7').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'colvis',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
        ]
    } );
} );

</script>
</body>

</html>
<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Datatables | GACB</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="{{URL::to('public')}}/dist-assets/css/themes/lite-purple.css" rel="stylesheet" />
    <link href="{{URL::to('public')}}/dist-assets/css/plugins/perfect-scrollbar.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{URL::to('public')}}/dist-assets/css/plugins/fontawesome-5.css" />
    <link href="{{URL::to('public')}}/dist-assets/css/plugins/metisMenu.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{URL::to('public')}}/dist-assets/css/plugins/datatables.min.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style type="text/css">
        .table {
            text-transform: uppercase;
                font-size: 18px;
                margin-left: 20%;
                width: 60%;
                font-weight: bolder;
            }
    </style>

</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-vertical sidebar-full">
        <div class="sidebar-panel bg-white">
            <div class="gull-brand pr-3 text-center mt-4 mb-2 d-flex justify-content-center align-items-center"><img class="pl-3" src="{{URL::to('public')}}/dist-assets/images/logo.jpg" alt="alt" />
                <!--  <span class=" item-name text-20 text-primary font-weight-700">GULL</span> -->
                <div class="sidebar-compact-switch ml-auto"><span></span></div>
            </div>
            @include('layouts/fee_sidebar')
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
                                                     document.getElementById('logout-form').submit();"><i class="i-Checked-User"></i> Logout</a><a href="#"><i class="i-Ambulance"></i>Change Password</a></div>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </div>
                    </div>
                </div>
            </header><!-- ============ Body content start ============= -->
            <div class="main-content pt-4">
                <div class="breadcrumb">
                    <h1 class="mr-2">Feevoucher Officer</h1>
                    <ul>
                        <li><a href="">Dashboard</a></li>
                        <li>Student List</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
               <table class="table table-bordered">
                <div class="container">
    <thead>
        <tr>
        <th style="font-size: 50px;">Receipt No</th>
        <th style="font-size: 50px;">{{$students->id}}</th>
      </tr>
    </thead>
</div>
</table>
                <!-- end of row-->
               <table class="table table-bordered">
                <div class="container">
   
    <thead>
         <tr >
        <th >Name</th>
        <th >{{$students->canidate_name}}</th>
      </tr>
       <tr>
        <th>Father Name</th>
        <th>{{$students->f_name}}</th>
      </tr>
       <tr>
        <th>CNIC</th>
        <th>{{$students->CNIC}}</th>
      </tr>
      <tr>
        <th>Class</th>
        <th>{{$feestructure->Section->class_name}}</th>
      </tr>
      
       <tr>
        <th>Session</th>
        <th>{{$feestructure->Section->start_year}} TO {{$feestructure->Section->end_year}}</th>
      </tr>
      <tr>
        <th>Due Date</th>
        <th>{{$feestructure->due_date}}</th>
      </tr>
      <tr>
        <th>Bank Name</th>
        <th>{{$feestructure->bank_name}}</th>
      </tr>
      <tr>
        <th>Account Title</th>
        <th>{{$feestructure->account_title}}</th>
      </tr>
      <tr>
        <th>Account Number</th>
        <th>{{$feestructure->account_number}}</th>
      </tr>
      

      <tr>
        <th>Description</th>
        <th>Amount</th>
      </tr>
    </thead>
    <tbody>
  <form method="post" action="{{url('studentfeevoucher')}}/{{$students->id}}" enctype="multipart/form-data">
                                    @csrf
        <input type="hidden" name="due_date" value="{{$feestructure->due_date}}">
                                    
        <input type="hidden" name="bank_name" value="{{$feestructure->bank_name}}">

        <input type="hidden" name="account_title" value="{{$feestructure->account_title}}">

        <input type="hidden" name="account_number" value="{{$feestructure->account_number}}">


      <tr>
        <td><label for="admission_fee">Admission Fee</label></td>
        <td><input class="form-control example"onblur="findTotal()" value="{{$feestructure->admission_fee}}" class="form-control" id="admission_fee" name="admission_fee" type="text" placeholder="Enter your Admission Fee" />
        </td>
      </tr>
      <tr>
        <td><label for="tution_fee">Tution Fee</label>
                                           </td>
        <td> <input class="form-control example"onblur="findTotal()" value="{{$feestructure->tution_fee}}" class="form-control" id="tution_fee" name="tution_fee" type="Year" placeholder="Enter Tution Fee" /></td>
      </tr>
      <tr>
        <td><label for="genral_fund">Genral Fund</label>
                                            </td>
        <td><input class="form-control example"onblur="findTotal()" value="{{$feestructure->genral_fund}}" class="form-control" id="genral_fund" type="Year" name="genral_fund" placeholder="Enter genral_fund" readonly="" /></td>
      </tr>
      

      <tr>
        <td><label for="medical_fund">Medical Fund</label>
                                            </td>
        <td><input class="form-control example"onblur="findTotal()" value="{{$feestructure->medical_fund}}" class="form-control" id="medical_fund" type="Year" name="medical_fund" placeholder="Enter medical_fund" readonly=""/></td>
      </tr>
      <tr>
        <td><label for="red_cross_fund">Red Cross Fund</label>
                                            </td>
        <td><input class="form-control example"onblur="findTotal()" value="{{$feestructure->red_cross_fund}}" class="form-control" id="red_cross_fund" type="Year" name="red_cross_fund" placeholder="Enter red_cross_fund" readonly="" /></td>
      </tr>
      <tr>
        <td><label for="welfare_fund">Welfare Fund</label>
                                            </td>
        <td><input class="form-control example"onblur="findTotal()" value="{{$feestructure->welfare_fund}}" class="form-control" id="welfare_fund" type="Year" name="welfare_fund" placeholder="Enter welfare_fund" readonly="" /></td>
      </tr>
      
      <tr>
        <td><label for="magazine_fund">Magazine Fund</label>
                                            </td>
        <td><input class="form-control example"onblur="findTotal()" value="{{$feestructure->magazine_fund}}" class="form-control" id="magazine_fund" type="Year" name="magazine_fund" placeholder="Enter magazine_fund" readonly=""/></td>
      </tr>
      <tr>
        <td><label for="library_security">Library Security</label>
                                            </td>
        <td><input class="form-control example"onblur="findTotal()" value="{{$feestructure->library_security}}" class="form-control" id="library_security" type="Year" name="library_security" placeholder="Enter library_security" /></td>
      </tr>
      <tr>
        <td><label for="affiliation_fund">Affiliation Fund</label>
                                            </td>
        <td><input class="form-control example"onblur="findTotal()" value="{{$feestructure->affiliation_fund}}" class="form-control" id="affiliation_fund" type="Year" name="affiliation_fund" placeholder="Enter affiliation_fund" readonly=""/></td>
      </tr>
      <tr>
        <td><label for="board_universty_registration_fee">Board universty registration Fee</label>
                                            </td>
        <td><input class="form-control example"onblur="findTotal()" value="{{$feestructure->board_universty_registration_fee}}" class="form-control" id="board_universty_registration_fee" type="Year" name="board_universty_registration_fee" placeholder="Enter board_universty_registration_fee" readonly="" /></td>
      </tr>
      <tr>
        <td><label for="masjjid_fund">Masjjid Fund</label>
                                            </td>
        <td><input class="form-control example"onblur="findTotal()" value="{{$feestructure->masjjid_fund}}" class="form-control" id="masjjid_fund" type="Year" name="masjjid_fund" placeholder="Enter masjjid_fund" /></td>
      </tr>
      <tr>
        <td><label for="parking_fee">Parking Fee</label>
                                            </td>
        <td><input class="form-control example"onblur="findTotal()" value="{{$feestructure->parking_fee}}" class="form-control" name="parking_fee" type="Year" name="d" placeholder="Enter parking_fee" readonly="" /></td>
      </tr>

      <tr>
        <td><label for="sports_fund">Sports Fund</label>
                                            </td>
        <td><input class="form-control example"onblur="findTotal()" value="{{$feestructure->sports_fund}}" class="form-control" id="sports_fund" type="Year" name="sports_fund" placeholder="Enter sports_fund" readonly="" /></td>
      </tr>
       <tr>
        <td><label for="id_card_fee">Id Card Fee</label>
                                            </td>
        <td><input class="form-control example"onblur="findTotal()" value="{{$feestructure->id_card_fee}}" class="form-control" id="id_card_fee" type="Year" name="id_card_fee" placeholder="Enter id_card_fee" readonly="" /></td>
      </tr>
      <tr>
        <td> <label for="computer_fee">Computer Fee</label>
                                            </td>
        <td><input class="form-control example"onblur="findTotal()" value="{{$feestructure->computer_fee}}" class="form-control" id="computer_fee" type="Year" name="computer_fee" placeholder="Enter Computer Fee" readonly="" /></td>
      </tr>
           <tr>
        <td><label for="exam_fund">Exam fund</label>
                                            </td>
        <td><input class="form-control example"onblur="findTotal()" value="{{$feestructure->exam_fund}}" class="form-control" id="exam_fund" type="Year" name="exam_fund" placeholder="Enter Exam Fund" readonly="" /></td>
      </tr>    
          <tr>
        <td><label for="secience_fund">Secience Fund</label>
                                            </td>
        <td><input class="form-control example"onblur="findTotal()" value="{{$feestructure->secience_fund}}" class="form-control" id="secience_fund" type="Year" name="secience_fund" placeholder="Enter Secience Fund" readonly="" /></td>
      </tr>  
      <tr>
        <td><label for="fine_fund">Fine Fund</label>
                                            </td>
        <td><input class="form-control example"onblur="findTotal()" value="{{$feestructure->fine_fund}}" class="form-control" id="fine_fund" type="Year" name="fine_fund" placeholder="Enter Fine Fund" /></td>
      </tr>
       <tr>
        <td><label for="total">Total</label>
                                            </td>
        <td><input value="{{$feestructure->total_fee}}" class="form-control" id="total" type="Year" name="total" placeholder="Enter Fine Fund<" /></td>
      </tr>
        <tr>
        <td><label for="action">Action</label>
                                            </td>
        <td><button id="printvoucher" onclick="myFunction()" type="submit">Print Voucher</button></td>
      </tr>
  </form>
      
    </tbody>
  </table>
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
        <input class="form-control example"onblur="findTotal()" type="text" placeholder="Type here" class="search-input" autofocus>
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
            <script type="text/javascript">
function findTotal(){
    var arr = document.getElementsByClassName("example");
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseInt(arr[i].value))
            tot += parseInt(arr[i].value);
    }
    document.getElementById('total').value = tot;
}

    </script>
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
     <script>
      function userdelete()
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
      <script>
function myFunction() {
  alert("I am an alert box!");
}
    </script>
</body>

</html>
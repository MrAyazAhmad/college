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
    <style type="text/css">
           label {
  white-space: nowrap;
  overflow: hidden;
  text-transform: capitalize;
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
.form-group label {
    font-size: 18px;
    color: #70657b;
    margin-bottom: 4px;
    font-weight: bold;
}
    </style>
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
                            <form method="post" action="{{url('update_feestructure')}}/{{$feestructure->id}}" enctype="multipart/form-data">
                                    @csrf


                                    <div class="row">
                                           <div class="col-md-4 form-group mb-3">
                                            <label for="picker1">Select Class </label>
                                            <select class="form-control " name="section_id">
                                                @foreach($class_section AS $c_section)
                                                <option value="{{$c_section->id}}">{{$c_section->class_name}} ({{$c_section->start_year}} To {{$c_section->end_year}})</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- <div class="col-md-4 form-group mb-3">
                                            <label for="section_id">section_id</label>
                                            <input class="form-control example"onblur="findTotal()" id="section_id" name="section_id" type="text" placeholder="Enter your section_id" />
                                        </div> -->
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="admission_fee">admission Fee</label>
                                            <input value="{{$feestructure->admission_fee}}" class="form-control example"onblur="findTotal()" id="admission_fee" name="admission_fee" type="text" placeholder="Enter your Admission Fee" />
                                        </div>
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="tution_fee">Tution Fee</label>
                                            <input value="{{$feestructure->tution_fee}}" class="form-control example"onblur="findTotal()" id="tution_fee" name="tution_fee" type="text" placeholder="Enter Tution Fee" />
                                            <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="genral_fund">Genral Fund</label>
                                            <input value="{{$feestructure->genral_fund}}" class="form-control example"onblur="findTotal()" id="genral_fund" type="text" name="genral_fund" placeholder="Enter genral_fund" />
                                        </div>
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="medical_fund">Medical Fund</label>
                                            <input value="{{$feestructure->medical_fund}}" class="form-control example"onblur="findTotal()" id="medical_fund" type="text" name="medical_fund" placeholder="Enter medical_fund" />
                                        </div>
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="red_cross_fund">Red Cross Fund</label>
                                            <input value="{{$feestructure->red_cross_fund}}" class="form-control example"onblur="findTotal()" id="red_cross_fund" type="text" name="red_cross_fund" placeholder="Enter red_cross_fund" />
                                        </div>
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="welfare_fund">Welfare Fund</label>
                                            <input value="{{$feestructure->welfare_fund}}" class="form-control example"onblur="findTotal()" id="welfare_fund" type="text" name="welfare_fund" placeholder="Enter welfare_fund" />
                                        </div>
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="magazine_fund">Magazine Fund</label>
                                            <input value="{{$feestructure->magazine_fund}}" class="form-control example"onblur="findTotal()" id="magazine_fund" type="text" name="magazine_fund" placeholder="Enter magazine_fund" />
                                        </div>
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="library_security">library security Fund</label>
                                            <input value="{{$feestructure->library_security}}" class="form-control example"onblur="findTotal()" id="library_security" type="text" name="library_security" placeholder="Enter library_security" />
                                        </div>
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="affiliation_fund">Affiliation Fund</label>
                                            <input value="{{$feestructure->affiliation_fund}}" class="form-control example"onblur="findTotal()" id="affiliation_fund" type="text" name="affiliation_fund" placeholder="Enter affiliation_fund" />
                                        </div>
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="board_universty_registration_fee">board universty registration Fee</label>
                                            <input value="{{$feestructure->board_universty_registration_fee}}" class="form-control example"onblur="findTotal()" id="board_universty_registration_fee" type="text" name="board_universty_registration_fee" placeholder="Enter board_universty_registration_fee" />
                                        </div>
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="masjjid_fund">Masjjid Fund</label>
                                            <input value="{{$feestructure->masjjid_fund}}" class="form-control example"onblur="findTotal()" id="masjjid_fund" type="text" name="masjjid_fund" placeholder="Enter masjjid_fund" />
                                        </div>
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="parking_fee">parking Fee</label>
                                            <input value="{{$feestructure->parking_fee}}" class="form-control example"onblur="findTotal()" id="parking_fee" type="text" name="parking_fee" placeholder="Enter parking_fee" />
                                        </div>
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="sports_fund">sports fund</label>
                                            <input value="{{$feestructure->sports_fund}}" class="form-control example"onblur="findTotal()" id="sports_fund" type="text" name="sports_fund" placeholder="Enter sports_fund" />
                                        </div>
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="id_card_fee">id card Fee</label>
                                            <input value="{{$feestructure->id_card_fee}}" class="form-control example"onblur="findTotal()" id="id_card_fee" type="text" name="id_card_fee" placeholder="Enter id_card_fee" />
                                        </div>
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="computer_fee">computer Fee</label>
                                            <input value="{{$feestructure->computer_fee}}" class="form-control example"onblur="findTotal()" id="computer_fee" type="text" name="computer_fee" placeholder="Enter computer_fee" />
                                        </div>
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="exam_fund">exam fund</label>
                                            <input value="{{$feestructure->exam_fund}}" class="form-control example"onblur="findTotal()" id="exam_fund" type="text" name="exam_fund" placeholder="Enter exam_fund" />
                                        </div>
                                          <div class="col-md-4 form-group mb-3">
                                            <label for="secience_fund">Secience Fund</label>
                                            <input value="{{$feestructure->secience_fund}}" class="form-control example"onblur="findTotal()" id="secience_fund" type="text" name="secience_fund" placeholder="Enter secience_fund" />
                                        </div>   
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="fine_fund">fine fund</label>
                                            <input value="{{$feestructure->fine_fund}}" class="form-control example"onblur="findTotal()" id="fine_fund" type="text" name="fine_fund" placeholder="Enter fine_fund" />
                                        </div>
                                         <div class="col-md-4 form-group mb-3">
                                            <label for="total_fee">Total Fee</label>
                                            <input value="{{$feestructure->total_fee}}" class="form-control " id="total" type="text" name="total_fee" placeholder="Enter total_fee" />
                                        </div>
                                          <div class="col-md-4 form-group mb-3">
                                            <label for="    bank_name"> Bank Name</label>
                                            <input value="{{$feestructure->bank_name}}" class="form-control "  type="text" name=" bank_name" placeholder="Enter Bank Name" />
                                        </div>
                                         <div class="col-md-4 form-group mb-3">
                                            <label for="    account_title"> Account Title</label>
                                            <input value="{{$feestructure->account_title}}" class="form-control "  type="text" name=" account_title" placeholder="Enter Account Title" />
                                        </div>
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="account_number"> Account Title</label>
                                            <input value="{{$feestructure->account_number}}" class="form-control "  type="text" name="account_number" placeholder="Enter Account Number" />
                                        </div>
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="due_date">Due Date</label>
                                            <input value="{{$feestructure->due_date}}" class="form-control "  type="date" name="due_date" placeholder="Enter Due Date" />
                                        </div>
                                        
                                        
                                     
                                        <div class="col-md-12">
                                            <button class="btn btn-primary">Submit</button>
                                        </div>
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
                        <img class="logo" src="{{URL::to('public')}}/dist-assets/images/logo.jpg" alt="">
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
    <script src="{{URL::to('public')}}/dist-assets/js/scripts/script.min.js"></script>
    <script src="{{URL::to('public')}}/dist-assets/js/scripts/sidebar.large.script.min.js"></script>
</body>

</html>
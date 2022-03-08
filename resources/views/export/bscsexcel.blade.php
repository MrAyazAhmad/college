<table class="table">
    <thead>

    <tr>

        <th scope="col">Sr No.</th>
        <th scope="col">Date Of Submission Fee</th>
        <th scope="col">Roll No</th>
        <th scope="col">Name</th>
        <th scope="col">Class</th>
        <th scope="col">Admission Fee</th>
        <th scope="col">Tution Fee</th>
        <th scope="col">Genral Fund</th>
        <th scope="col">Medical Fund</th>
        <th scope="col">Red Cross Fund</th>
        <th scope="col">Welfare Fund</th>
        <th scope="col">Magazine Fund</th>
        <th scope="col">Library Security</th>
        <th scope="col">Affiliation Fund</th>
        <th scope="col">Bard/Universty Registration Fee</th>
        <th scope="col">Secience Fund</th>
        <th scope="col">Fine Fund</th>
        <th scope="col">Parking Fee</th>
        <th scope="col">Sports Fund</th>
        <th scope="col">Id Card Fee</th>
        <th scope="col">Computer Fee</th>
        <th scope="col">Exam Fund</th>
    </tr>
    </thead>
    <tbody>
    @foreach($bscs as $bscs)
    <tr>
        <td scope="col">{{$bscs->ComputerStudent->id}}</td>
        <td scope="col">{{$bscs->ComputerStudent->submissiondate}}</td>
        <td scope="col">{{$bscs->ComputerStudent->roll_no}}</td>
        <td scope="col">{{$bscs->ComputerStudent->canidate_name}}</td>
        <?php    $class = DB::table('class_session')->where('id',$bscs->ComputerStudent->section_id)->get()->first();
        ?>
        <td scope="col">{{$class->class_name}}</td>
        <td scope="col">{{$bscs->BscsFee->admission_fee}}</td>
        <td scope="col">{{$bscs->BscsFee->tution_fee}}</td>
        <td scope="col">{{$bscs->BscsFee->genral_fund}}</td>
        <td scope="col">{{$bscs->BscsFee->medical_fund}}</td>
        <td scope="col">{{$bscs->BscsFee->red_cross_fund}}</td>
        <td scope="col">{{$bscs->BscsFee->welfare_fund}}</td>
        <td scope="col">{{$bscs->BscsFee->magazine_fund}}</td>
        <td scope="col">{{$bscs->BscsFee->library_security}}</td>
        <td scope="col">{{$bscs->BscsFee->affiliation_fund}}</td>
        <td scope="col">{{$bscs->BscsFee->board_universty_registration_fee}}</td>
        <td scope="col">{{$bscs->BscsFee->secience_fund}}</td>
        <td scope="col">{{$bscs->BscsFee->fine_fund}}</td>
        <td scope="col">{{$bscs->BscsFee->parking_fee}}</td>
        <td scope="col">{{$bscs->BscsFee->sports_fund}}</td>
        <td scope="col">{{$bscs->BscsFee->id_card_fee}}</td>
        <td scope="col">{{$bscs->BscsFee->computer_fee}}</td>
        <td scope="col">{{$bscs->BscsFee->exam_fund}}</td>
    </tr>
    @endforeach
    </tbody>
</table>

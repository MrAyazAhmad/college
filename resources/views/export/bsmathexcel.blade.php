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
    @foreach($bsmath as $bsmath)
    <tr>
        <td scope="col">{{$bsmath->MathStudent->id}}</td>
        <td scope="col">{{$bsmath->MathStudent->submissiondate}}</td>
        <td scope="col">{{$bsmath->MathStudent->roll_no}}</td>
        <td scope="col">{{$bsmath->MathStudent->canidate_name}}</td>
        <?php    $class = DB::table('class_session')->where('id',$bsmath->MathStudent->section_id)->get()->first();
        ?>
        <td scope="col">{{$class->class_name}}</td>
        <td scope="col">{{$bsmath->MatheFee->admission_fee}}</td>
        <td scope="col">{{$bsmath->MatheFee->tution_fee}}</td>
        <td scope="col">{{$bsmath->MatheFee->genral_fund}}</td>
        <td scope="col">{{$bsmath->MatheFee->medical_fund}}</td>
        <td scope="col">{{$bsmath->MatheFee->red_cross_fund}}</td>
        <td scope="col">{{$bsmath->MatheFee->welfare_fund}}</td>
        <td scope="col">{{$bsmath->MatheFee->magazine_fund}}</td>
        <td scope="col">{{$bsmath->MatheFee->library_security}}</td>
        <td scope="col">{{$bsmath->MatheFee->affiliation_fund}}</td>
        <td scope="col">{{$bsmath->MatheFee->board_universty_registration_fee}}</td>
        <td scope="col">{{$bsmath->MatheFee->secience_fund}}</td>
        <td scope="col">{{$bsmath->MatheFee->fine_fund}}</td>
        <td scope="col">{{$bsmath->MatheFee->parking_fee}}</td>
        <td scope="col">{{$bsmath->MatheFee->sports_fund}}</td>
        <td scope="col">{{$bsmath->MatheFee->id_card_fee}}</td>
        <td scope="col">{{$bsmath->MatheFee->computer_fee}}</td>
        <td scope="col">{{$bsmath->MatheFee->exam_fund}}</td>
    </tr>
    @endforeach
    </tbody>
</table>

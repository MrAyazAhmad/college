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
    @foreach($bsenglish as $bsenglish)
    <tr>
        <td scope="col">{{$bsenglish->EnglishStudent->id}}</td>
        <td scope="col">{{$bsenglish->EnglishStudent->submissiondate}}</td>
        <td scope="col">{{$bsenglish->EnglishStudent->roll_no}}</td>
        <td scope="col">{{$bsenglish->EnglishStudent->canidate_name}}</td>
        <?php    $class = DB::table('class_session')->where('id',$bsenglish->EnglishStudent->section_id)->get()->first();
        ?>
        <td scope="col">{{$class->class_name}}</td>
        <td scope="col">{{$bsenglish->EnglishFee->admission_fee}}</td>
        <td scope="col">{{$bsenglish->EnglishFee->tution_fee}}</td>
        <td scope="col">{{$bsenglish->EnglishFee->genral_fund}}</td>
        <td scope="col">{{$bsenglish->EnglishFee->medical_fund}}</td>
        <td scope="col">{{$bsenglish->EnglishFee->red_cross_fund}}</td>
        <td scope="col">{{$bsenglish->EnglishFee->welfare_fund}}</td>
        <td scope="col">{{$bsenglish->EnglishFee->magazine_fund}}</td>
        <td scope="col">{{$bsenglish->EnglishFee->library_security}}</td>
        <td scope="col">{{$bsenglish->EnglishFee->affiliation_fund}}</td>
        <td scope="col">{{$bsenglish->EnglishFee->board_universty_registration_fee}}</td>
        <td scope="col">{{$bsenglish->EnglishFee->secience_fund}}</td>
        <td scope="col">{{$bsenglish->EnglishFee->fine_fund}}</td>
        <td scope="col">{{$bsenglish->EnglishFee->parking_fee}}</td>
        <td scope="col">{{$bsenglish->EnglishFee->sports_fund}}</td>
        <td scope="col">{{$bsenglish->EnglishFee->id_card_fee}}</td>
        <td scope="col">{{$bsenglish->EnglishFee->computer_fee}}</td>
        <td scope="col">{{$bsenglish->EnglishFee->exam_fund}}</td>
    </tr>
    @endforeach
    </tbody>
</table>

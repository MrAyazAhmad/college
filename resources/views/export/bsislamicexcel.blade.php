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
    @foreach($bsislamic as $bsislamic)
    <tr>
        <td scope="col">{{$bsislamic->IslamStudent->id}}</td>
        <td scope="col">{{$bsislamic->IslamStudent->submissiondate}}</td>
        <td scope="col">{{$bsislamic->IslamStudent->roll_no}}</td>
        <td scope="col">{{$bsislamic->IslamStudent->canidate_name}}</td>
        <?php    $class = DB::table('class_session')->where('id',$bsislamic->IslamStudent->section_id)->get()->first();
        ?>
        <td scope="col">{{$class->class_name}}</td>
        <td scope="col">{{$bsislamic->IsmlamicFee->admission_fee}}</td>
        <td scope="col">{{$bsislamic->IsmlamicFee->tution_fee}}</td>
        <td scope="col">{{$bsislamic->IsmlamicFee->genral_fund}}</td>
        <td scope="col">{{$bsislamic->IsmlamicFee->medical_fund}}</td>
        <td scope="col">{{$bsislamic->IsmlamicFee->red_cross_fund}}</td>
        <td scope="col">{{$bsislamic->IsmlamicFee->welfare_fund}}</td>
        <td scope="col">{{$bsislamic->IsmlamicFee->magazine_fund}}</td>
        <td scope="col">{{$bsislamic->IsmlamicFee->library_security}}</td>
        <td scope="col">{{$bsislamic->IsmlamicFee->affiliation_fund}}</td>
        <td scope="col">{{$bsislamic->IsmlamicFee->board_universty_registration_fee}}</td>
        <td scope="col">{{$bsislamic->IsmlamicFee->secience_fund}}</td>
        <td scope="col">{{$bsislamic->IsmlamicFee->fine_fund}}</td>
        <td scope="col">{{$bsislamic->IsmlamicFee->parking_fee}}</td>
        <td scope="col">{{$bsislamic->IsmlamicFee->sports_fund}}</td>
        <td scope="col">{{$bsislamic->IsmlamicFee->id_card_fee}}</td>
        <td scope="col">{{$bsislamic->IsmlamicFee->computer_fee}}</td>
        <td scope="col">{{$bsislamic->IsmlamicFee->exam_fund}}</td>
    </tr>
    @endforeach
    </tbody>
</table>

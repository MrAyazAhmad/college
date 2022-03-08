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
    @foreach($bsphyics as $bsphyics)
    <tr>
        <td scope="col">{{$bsphyics->PhyicsStudent->id}}</td>
        <td scope="col">{{$bsphyics->PhyicsStudent->submissiondate}}</td>
        <td scope="col">{{$bsphyics->PhyicsStudent->roll_no}}</td>
        <td scope="col">{{$bsphyics->PhyicsStudent->canidate_name}}</td>
        <?php    $class = DB::table('class_session')->where('id',$bsphyics->PhyicsStudent->section_id)->get()->first();
        ?>
        <td scope="col">{{$class->class_name}}</td>
        <td scope="col">{{$bsphyics->PhyicsFee->admission_fee}}</td>
        <td scope="col">{{$bsphyics->PhyicsFee->tution_fee}}</td>
        <td scope="col">{{$bsphyics->PhyicsFee->genral_fund}}</td>
        <td scope="col">{{$bsphyics->PhyicsFee->medical_fund}}</td>
        <td scope="col">{{$bsphyics->PhyicsFee->red_cross_fund}}</td>
        <td scope="col">{{$bsphyics->PhyicsFee->welfare_fund}}</td>
        <td scope="col">{{$bsphyics->PhyicsFee->magazine_fund}}</td>
        <td scope="col">{{$bsphyics->PhyicsFee->library_security}}</td>
        <td scope="col">{{$bsphyics->PhyicsFee->affiliation_fund}}</td>
        <td scope="col">{{$bsphyics->PhyicsFee->board_universty_registration_fee}}</td>
        <td scope="col">{{$bsphyics->PhyicsFee->secience_fund}}</td>
        <td scope="col">{{$bsphyics->PhyicsFee->fine_fund}}</td>
        <td scope="col">{{$bsphyics->PhyicsFee->parking_fee}}</td>
        <td scope="col">{{$bsphyics->PhyicsFee->sports_fund}}</td>
        <td scope="col">{{$bsphyics->PhyicsFee->id_card_fee}}</td>
        <td scope="col">{{$bsphyics->PhyicsFee->computer_fee}}</td>
        <td scope="col">{{$bsphyics->PhyicsFee->exam_fund}}</td>
    </tr>
    @endforeach
    </tbody>
</table>

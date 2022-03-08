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
    @foreach($bsurdu as $bsurdu)
    <tr>
        <td scope="col">{{$bsurdu->UrduStudent->id}}</td>
        <td scope="col">{{$bsurdu->UrduStudent->submissiondate}}</td>
        <td scope="col">{{$bsurdu->UrduStudent->roll_no}}</td>
        <td scope="col">{{$bsurdu->UrduStudent->canidate_name}}</td>
        <?php    $class = DB::table('class_session')->where('id',$bsurdu->UrduStudent->section_id)->get()->first();
        ?>
        <td scope="col">{{$class->class_name}}</td>
        <td scope="col">{{$bsurdu->UrduFee->admission_fee}}</td>
        <td scope="col">{{$bsurdu->UrduFee->tution_fee}}</td>
        <td scope="col">{{$bsurdu->UrduFee->genral_fund}}</td>
        <td scope="col">{{$bsurdu->UrduFee->medical_fund}}</td>
        <td scope="col">{{$bsurdu->UrduFee->red_cross_fund}}</td>
        <td scope="col">{{$bsurdu->UrduFee->welfare_fund}}</td>
        <td scope="col">{{$bsurdu->UrduFee->magazine_fund}}</td>
        <td scope="col">{{$bsurdu->UrduFee->library_security}}</td>
        <td scope="col">{{$bsurdu->UrduFee->affiliation_fund}}</td>
        <td scope="col">{{$bsurdu->UrduFee->board_universty_registration_fee}}</td>
        <td scope="col">{{$bsurdu->UrduFee->secience_fund}}</td>
        <td scope="col">{{$bsurdu->UrduFee->fine_fund}}</td>
        <td scope="col">{{$bsurdu->UrduFee->parking_fee}}</td>
        <td scope="col">{{$bsurdu->UrduFee->sports_fund}}</td>
        <td scope="col">{{$bsurdu->UrduFee->id_card_fee}}</td>
        <td scope="col">{{$bsurdu->UrduFee->computer_fee}}</td>
        <td scope="col">{{$bsurdu->UrduFee->exam_fund}}</td>
    </tr>
    @endforeach
    </tbody>
</table>

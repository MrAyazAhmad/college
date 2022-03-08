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
    @foreach($bschemistry as $bschemistry)
    <tr>
        <td scope="col">{{$bschemistry->ChemisteryStudent->id}}</td>
        <td scope="col">{{$bschemistry->ChemisteryStudent->submissiondate}}</td>
        <td scope="col">{{$bschemistry->ChemisteryStudent->roll_no}}</td>
        <td scope="col">{{$bschemistry->ChemisteryStudent->canidate_name}}</td>
        <?php    $class = DB::table('class_session')->where('id',$bschemistry->ChemisteryStudent->section_id)->get()->first();
        ?>
        <td scope="col">{{$class->class_name}}</td>
        <td scope="col">{{$bschemistry->ChemisteryFee->admission_fee}}</td>
        <td scope="col">{{$bschemistry->ChemisteryFee->tution_fee}}</td>
        <td scope="col">{{$bschemistry->ChemisteryFee->genral_fund}}</td>
        <td scope="col">{{$bschemistry->ChemisteryFee->medical_fund}}</td>
        <td scope="col">{{$bschemistry->ChemisteryFee->red_cross_fund}}</td>
        <td scope="col">{{$bschemistry->ChemisteryFee->welfare_fund}}</td>
        <td scope="col">{{$bschemistry->ChemisteryFee->magazine_fund}}</td>
        <td scope="col">{{$bschemistry->ChemisteryFee->library_security}}</td>
        <td scope="col">{{$bschemistry->ChemisteryFee->affiliation_fund}}</td>
        <td scope="col">{{$bschemistry->ChemisteryFee->board_universty_registration_fee}}</td>
        <td scope="col">{{$bschemistry->ChemisteryFee->secience_fund}}</td>
        <td scope="col">{{$bschemistry->ChemisteryFee->fine_fund}}</td>
        <td scope="col">{{$bschemistry->ChemisteryFee->parking_fee}}</td>
        <td scope="col">{{$bschemistry->ChemisteryFee->sports_fund}}</td>
        <td scope="col">{{$bschemistry->ChemisteryFee->id_card_fee}}</td>
        <td scope="col">{{$bschemistry->ChemisteryFee->computer_fee}}</td>
        <td scope="col">{{$bschemistry->ChemisteryFee->exam_fund}}</td>
    </tr>
    @endforeach
    </tbody>
</table>

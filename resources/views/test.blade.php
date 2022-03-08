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
    @foreach($student_records as $student_records)
    @if($student_records->Applied=='Intermediate' && $student_records->roll_no !='')
    <tr>
        <td scope="col">{{$student_records->sid}}</td>
        <td scope="col">{{$student_records->submissiondate}}</td>
        <td scope="col">{{$student_records->roll_no}}</td>
        <td scope="col">{{$student_records->canidate_name}}</td>
        <td scope="col">{{$student_records->class_name}}</td>
        <td scope="col">{{$student_records->admission_fee}}</td>
        <td scope="col">{{$student_records->tution_fee}}</td>
        <td scope="col">{{$student_records->genral_fund}}</td>
        <td scope="col">{{$student_records->medical_fund}}</td>
        <td scope="col">{{$student_records->red_cross_fund}}</td>
        <td scope="col">{{$student_records->welfare_fund}}</td>
        <td scope="col">{{$student_records->magazine_fund}}</td>
        <td scope="col">{{$student_records->library_security}}</td>
        <td scope="col">{{$student_records->affiliation_fund}}</td>
        <td scope="col">{{$student_records->board_universty_registration_fee}}</td>
        <td scope="col">{{$student_records->secience_fund}}</td>
        <td scope="col">{{$student_records->fine_fund}}</td>
        <td scope="col">{{$student_records->parking_fee}}</td>
        <td scope="col">{{$student_records->sports_fund}}</td>
        <td scope="col">{{$student_records->id_card_fee}}</td>
        <td scope="col">{{$student_records->computer_fee}}</td>
        <td scope="col">{{$student_records->exam_fund}}</td>
    </tr>
    @endif
    @endforeach
    </tbody>
</table>

<table class="table">
    <thead>
    <tr>

        <th scope="col">Name</th>
        <th scope="col">Roll No</th>
        <th scope="col">Class</th>
        <th scope="col">Admission Fee</th>
        <th scope="col">tution_fee</th>
        <th scope="col">genral_fund</th>
        <th scope="col">medical_fund</th>
        <th scope="col">red_cross_fund</th>
        <th scope="col">welfare_fund</th>
        <th scope="col">magazine_fund</th>
        <th scope="col">library_security</th>
        <th scope="col">affiliation_fund</th>
        <th scope="col">board_universty_registration_fee</th>
        <th scope="col">secience_fund</th>
        <th scope="col">absence_fine</th>
        <th scope="col">fine_fund</th>
        <th scope="col">parking_fee</th>
        <th scope="col">sports_fund</th>
        <th scope="col">id_card_fee</th>
        <th scope="col">computer_fee</th>
        <th scope="col">exam_fund</th>
    </tr>
    </thead>
    <tbody>
    @foreach($student_records as $student_records)
    <tr>
        <td scope="col">{{$student_records->canidate_name}}</td>
        <td scope="col">{{$student_records->last_name}}</td>
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
        <td scope="col">{{$student_records->absence_fine}}</td>
        <td scope="col">{{$student_records->fine_fund}}</td>
        <td scope="col">{{$student_records->parking_fee}}</td>
        <td scope="col">{{$student_records->sports_fund}}</td>
        <td scope="col">{{$student_records->id_card_fee}}</td>
        <td scope="col">{{$student_records->computer_fee}}</td>
        <td scope="col">{{$student_records->exam_fund}}</td>
    </tr>
    @endforeach
    </tbody>
</table>

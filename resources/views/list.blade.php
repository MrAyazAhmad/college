<table class="table">
    <thead>

    <tr>

        <th scope="col">Respit ID</th>
        <th scope="col">Roll NO</th>
        <th scope="col">CNIC</th>
        <th scope="col">Name</th>
        <th scope="col">Father Name</th>
        <th scope="col">Date Of Birth</th>
        <th scope="col">Contact Number</th>
        <th scope="col">Group</th>
        <th scope="col">Optional Subject One</th>
        <th scope="col">Optional Subject Two</th>
        <th scope="col">Optional Subject Three</th>
    </tr>
    </thead>
    <tbody>
    @foreach($student_records as $student_records)
    <tr>
        <td scope="col">GC/{{$student_records->Student->id}}</td>
        <td scope="col">{{$student_records->id}}</td>
        <td scope="col">{{$student_records->Student->CNIC}}</td>
        <td scope="col">{{$student_records->Student->canidate_name}}</td>
        <td scope="col">{{$student_records->Student->f_name}}</td>
        <td scope="col">{{$student_records->Student->dob}}</td>
        <td scope="col">{{$student_records->Student->contact_number}}</td>
        <td scope="col">{{$student_records->Student->group}}</td>
        <td scope="col">{{$student_records->Student->optional_subject_one}}</td>
        <td scope="col">{{$student_records->Student->optional_subject_two}}</td>
        <td scope="col">{{$student_records->Student->optional_subject_three}}</td>
       
    </tr>
    @endforeach
    </tbody>
</table>

<table class="table">
    <thead>

    <tr>
        <th scope="col">Sr No</th>
        <th scope="col">Roll No</th>
        <th scope="col">Date</th>
        <th scope="col">Student Name</th>
        <th scope="col">Class</th>
        <th scope="col">Father Name</th>
        <th scope="col">Library Security</th>
        <th scope="col">Date</th>
        <th scope="col">Colleg leave Date</th>
        <th scope="col">Return Of Security Date</th>
        <th scope="col">Library Remaining Amount</th>
        <th scope="col">Incharge Signature</th>
        <th scope="col">Canidate Signature</th>
        <th scope="col">Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($student_records as $student_records)
    <tr>
        <td scope="col">{{$student_records->id}}</td>
        <td scope="col">{{$student_records->id}}</td>
        <td scope="col">{{$student_records->created_at}}</td>
        <td scope="col">{{$student_records->canidate_name}}</td>
        <td scope="col">{{$student_records->class_name}}</td>
        <td scope="col">{{$student_records->f_name}}</td>
        <td scope="col">{{$student_records->library_security}}</td>
        <td scope="col">{{$student_records->updated_at}}</td>
        <td scope="col"></td>
        <td scope="col"></td>
        <td scope="col"></td>
        <td scope="col"></td>
        <td scope="col"></td>
        <td scope="col"></td>
    </tr>
    @endforeach
    </tbody>
</table>

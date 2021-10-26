<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

 
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
<style>
table, th, td {
  border:1px solid black;
}
</style>
</head>
<body>
<table style="width:100%">
  <tr>
    <th><h2>For Candidate</h2></th>
    <th><h2>For Office Use</h2></th>
  </tr>
  <tr>
    <td><img src="{{URL::to('public')}}/image/canidatephoto/{{$image}}" alt="Avatar" style="width:40%"></td>
    <td><img src="{{URL::to('public')}}/image/canidatephoto/{{$image}}" alt="Avatar" style="width:40%"></td>
  </tr>
  <tr>
    <td><h4><b>{{ $title }}</b></h4></td>
    <td><h4><b>{{ $title }}</b></h4></td>
  </tr>
   <tr>
    <td><p>Father Name:{{ $fname}}</p></td>
    <td><p>Father Name:{{ $fname}}</p></td>
  </tr> 
  <tr>
    <td><p>Class: {{ $classname}}</p></td>
    <td><p>Class: {{ $classname}}</p></td>
  </tr>
  <tr>
    <td><p>Registration ID: GC/{{ $classname}}/{{$id}}</p></td>
    <td><p>Registration ID: GC/{{ $classname}}/{{$id}}</p></td>
  </tr> 
   <tr>
    <td><p>Printed By: {{$user}}</p> </td>
    <td><p>Printed By: {{$user}}</p> </td>
  </tr>
</table>




</body>
</html> 

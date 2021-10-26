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
</head>
<body>

<h2>Student Record Card</h2>

<div class="card">
  <img src="{{URL::to('public')}}/image/canidatephoto/{{$image}}" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>{{ $title }}</b></h4> 
    <p>Father Name:{{ $fname}}</p> 
    <p>Class: {{ $classname}}</p> 
    <p>Registration ID: GC/{{ $classname}}/{{$id}}</p> 
    <p>Printed By: {{$user}}</p> 
  </div>
</div>

</body>
</html> 

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>Registration_ID_No</th>
        <th>Date_of_Assessment</th>
        <th>Referral_Source</th>
        <th>Examiner</th>
        <th> Name</th>
        <th> Age</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Occupation_Stress</th>
        <th>Contact_No</th>
        <th>Referral_Diagnosis</th>
        <th>Chief_Compliant</th>
        <th>HPC</th>
        <th>Duration_of_Symptoms</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($sliders as $key=>$slider)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$slider->Registration_ID_No}}</td>
        <td>{{$slider->Date_of_Assessment}}</td>
        <td>{{$slider->Referral_Source}}</td>
        <td>{{$slider->Examiner}}</td>
        <td>{{$slider->Name}}</td>
        <td>{{$slider->Age}}</td>
        <td>{{$slider->Gender}}</td>
        <td>{{$slider->Address}}</td>
        <td>{{$slider->Occupation_Stress}}</td>
        <td>{{$slider->Contact_No}}</td>
        <td>{{$slider->Referral_Diagnosis}}</td>
        <td>{{$slider->Chief_Compliant}}</td>
        <td>{{$slider->HPC}}</td>
        <td>{{$slider->Duration_of_Symptoms}}</td>
        <td><a href="{{ route('records.edit',$slider->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>
        <form id="delete-form-{{ $slider->id }}" action="{{ route('records.destroy',$slider->id) }}" style="display: none;" method="POST">
          @csrf
          @method('DELETE')
      </form>
      <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
          event.preventDefault();
          document.getElementById('delete-form-{{ $slider->id }}').submit();
      }else {
          event.preventDefault();
              }"><i class="material-icons">delete</i></button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>

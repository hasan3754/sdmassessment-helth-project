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

    <form method="POST" action="{{route('records.update',$slider->id)}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Registration/ID No:</label>
            <input type="text" name="Registration" class="form-control" id="inputEmail4" placeholder="{{$slider->Registration_ID_No}}">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Date of Assessment</label>
            <input type="text" name="Date_of_Assessment" class="form-control" id="inputPassword4" placeholder="{{$slider->Date_of_Assessment}}">
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Referral Source</label>
              <input type="text" name="Referral_Source" class="form-control" id="inputEmail4" placeholder="{{$slider->Referral_Source}}">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Examiner</label>
              <input type="text" name="Examiner" class="form-control" id="inputPassword4" placeholder="{{$slider->Examiner}}">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCit">Name</label>
              <input type="text" name="Name" class="form-control" id="inputCit" placeholder="{{$slider->Name}}">
            </div>
            <div class="form-group col-md-4">
              <label for="inputCit">Age</label>
              <input type="text" name="Age" class="form-control" id="inputCit" placeholder="{{$slider->Age}}">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Gender</label>
              <input type="text" name="Gender" class="form-control" id="inputZip" placeholder="{{$slider->Gender}}">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Address</label>
              <input type="text" name="Address" class="form-control" id="inputEmail4" placeholder="{{$slider->Address}}">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Occupation/Stress</label>
              <input type="text" name="Occupation" class="form-control" id="inputPassword4" placeholder="{{$slider->Occupation_Stress}}">
            </div>
          </div>
              <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Contact No:</label>
            <input type="text" name="Contact" class="form-control" id="inputEmail4" placeholder="{{$slider->Contact_No}}">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Referral Diagnosis</label>
            <input type="text" name="Referral" class="form-control" id="inputPassword4" placeholder="{{$slider->Referral_Diagnosis}}">
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputEmail4">Chief compliant</label>
              <input type="text" name="chief_compliant" class="form-control" id="inputEmail4" placeholder="{{$slider->Chief_Compliant}}">
            </div>
          </div>
        <div class="form-group">
          <label for="inputAddres">HPC</label>
          <input type="text" name="HPC" class="form-control" id="inputAddres" placeholder="{{$slider->HPC}}">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Duration of Symptoms</label>
          <input type="text"name="Duration_of_Symptoms" class="form-control" id="inputAddress2" placeholder="{{$slider->Duration_of_Symptoms}}">
        </div>
    
    
        <button type="submit" value="submit" class="btn btn-primary">Submit</button>
      </form>
      
    </body>     
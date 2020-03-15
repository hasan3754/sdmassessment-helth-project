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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/jquery.datetimepicker.min.css" />
</head>
<body>



<form method="post" action="{{URL::to('/Patient')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Registration/ID No:</label>
        <input type="text" name="Registration" class="form-control" id="inputEmail4" placeholder="">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Date of Assessment</label>
        <input name="Date_of_Assessment" class="form-control" id="datetimepicker" type="text">
      </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Referral Source</label>
          <input type="text" name="Referral_Source" class="form-control" id="inputEmail4" placeholder="">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Examiner</label>
          <input type="text" name="Examiner" class="form-control" id="inputPassword4" placeholder="">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCit">Name</label>
          <input type="text" name="Name" class="form-control" id="inputCit">
        </div>
        <div class="form-group col-md-2">
          <label for="inputCit">Age</label>
          <input type="text" name="Age" class="form-control" id="inputCit">
        </div>
        <div class="form-group col-md-4">
          <label >Gender</label>
          <select id="ddlPassport" name="Gender">
            <option  value="Please select">Please select</option>
            <option  value="Male">Male</option>
            <option  value="Female">Female</option>

        </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Address</label>
          <input type="text" name="Address" class="form-control" id="inputEmail4" placeholder="">
        </div>
        <div class="form-group col-md-6">
          <label >Occupation</label>
          <select id="ddlPassport" name="Occupation">
            <option  value="Please select">Please select</option>
            <option  value="Male">Male</option>
            <option  value="Female">Female</option>

        </select>
        </div>
      </div>
          <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Contact No:</label>
        <input type="text" name="Contact" class="form-control" id="inputEmail4" placeholder="">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Referral Diagnosis</label>
        <input type="text" name="Referral" class="form-control" id="inputPassword4" placeholder="">
      </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputEmail4">Chief compliant</label>
          <input type="text" name="chief_compliant" class="form-control" id="inputEmail4" placeholder="">
        </div>
      </div>
    <div class="form-group">
      <label for="inputAddres">HPC</label>
      <input type="text" name="HPC" class="form-control" id="inputAddres" placeholder="">
    </div>
    <label for="inputAddress2">Duration of Symptom</label>
    <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputAddress2">Days</label>
      <input type="text"name="Days" class="form-control" id="inputAddress2" placeholder="">

    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress2">Months</label>
      <input type="text"name="Months" class="form-control" id="inputAddress2" placeholder="">

    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress2">Years</label>
      <input type="text"name="Years" class="form-control" id="inputAddress2" placeholder="">

    </div>
  </div>


    <button type="submit" value="submit" class="btn btn-primary">Submit</button>
   
   
  </form>
  @if(!empty($data))
  <a href="{{ route('records.edit',$data) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>
@endif
  


</body>
</html>


<script type="text/javascript">
  $(document).ready(function () {
      $('#inputDatabaseName').keyup(function () { $("#Sitting1").show(); });
  });
</script>
<script type="text/javascript">
    $(function () {
        $("#ddlPassport").change(function () {
            if ($(this).val() == "Lumber Extensor") {
                $("#dvPassport").show();
				var a='Lumber Extensor';
			
            } 
			else if ($(this).val() == "Lumber Flexor") {
                $("#dvPassport").show();
				var a='Lumber Flexor';
				
            }
			else if ($(this).val() == "Qolu") {
                $("#dvPassport").show();
				var a='Qolu';
            }
			else if ($(this).val() == "lliposoas") {
                $("#bPassport").show();
				var a='lliposoas';
            }
			else if ($(this).val() == "Quads") {
                $("#dvPassport").show();
				var a='Quads';
            }
			else if ($(this).val() == "Hamstring") {
                $("#dvPassport").show();
				var a='Hamstring';
            }
			else if ($(this).val() == "Gluteusminimus") {
                $("#dvPassport").show();
				var a='Gluteusminimus';
            }
			else if ($(this).val() == "Ankle Dorsiflexor") {
                $("#dvPassport").show();
				var a='Ankle Dorsiflexor';
            }
			else if ($(this).val() == "Gluteusmeius") {
                $("#dvPassport").show();
				var a='Gluteusmeius';
            }
			else if ($(this).val() == "Piriformis") {
                $("#dvPassport").show();
				var a='Piriformis';
            }
			else if ($(this).val() == "Gluteus Maximus") {
                $("#dvPassport").show();
				var a='Gluteus Maximus';
            }
			else if ($(this).val() == "Hip Adductor") {
                $("#dvPassport").show();
				var a='Hip Adductor';
            }
			else {
                $("#dvPassport").hide();
            }
        });


      
        $("#aPassport").change(function () {
            if ($(this).val() == "lliposoas") {
                $("#bPassport").show();
		
			
            } 
			else if ($(this).val() == "Rectus & Tranverse Ab.") {
                $("#bPassport").show();
			
				
            }
			else if ($(this).val() == "Gluteus Medius") {
                $("#bPassport").show();
				
            }
			else if ($(this).val() == "Lumber extensor(core)") {
                $("#bPassport").show();
				
            }
			else if ($(this).val() == "Gluteus Maximus") {
                $("#bPassport").show();
			
            }
			else if ($(this).val() == "Hamstring") {
                $("#bPassport").show();
				
            }
			else if ($(this).val() == "Quardiceps") {
                $("#bPassport").show();
				
            }
			else if ($(this).val() == "Pelvic Floor") {
                $("#bPassport").show();
				
            }
			else {
                $("#bPassport").hide();
            }
        });


		
		    $('input:radio[name=bedStatus]').change(function() {
        if (this.value == 'right') {
            $("#divPassport").show();
        }
        else if (this.value == 'left') {
            $("#divPassport").show();
        }
		else if (this.value == 'both') {
            $("#divPassport").show();
        }
    });
	
	
		    $('input:radio[name=redStatus]').change(function() {
        if (this.value == 'Pain') {
            $("#divePassport").show();
        }
        else if (this.value == 'Tightness') {
            $("#divePassport").show();
        }
    });
    $('input:radio[name=b]').change(function() {
      if (this.value == 'right') {
          $("#cPassport").show();
      }
      else if (this.value == 'left') {
          $("#cPassport").show();
      }
  });

  $('input:radio[name=Standing]').change(function() {
    if ($(this).val() == "Good") {
                $("#pelvic_tiltt").show();
				var a='Lumber Extensor';
			
            } 
            else if ($(this).val() == "Fair") {
                $("#pelvic_tiltt").show();
				var a='Lumber Extensor';
			
            } 
          else if ($(this).val() == "Poor") {
                $("#pelvic_tiltt").show();
				var a='Lumber Extensor';
			
            } 
    });

    $('input:radio[name=Pelvic_Tilt]').change(function() {
      if ($(this).val() == "Ant") {
                $("#Sternumm").show();
				var a='Lumber Extensor';
			
            } 
            else if ($(this).val() == "Post") {
                $("#Sternumm").show();
				var a='Lumber Extensor';
			
            } 
          else if ($(this).val() == "Lateral") {
                $("#Sternumm").show();
				var a='Lumber Extensor';
			
            } 
    });


$('input:radio[name=Sitting]').change(function() {
  if ($(this).val() == "Slough") {
                $("#Transition1").show();
				var a='Lumber Extensor';
			
            } 
            else if ($(this).val() == "Errect") {
                $("#Transition1").show();
				var a='Lumber Extensor';
			
            } 
    });
    $('input:radio[name=Transition]').change(function() {
        if (this.value == 'Goodd') {
            $("#Bed_Mobility1").show();
        }
        else if (this.value == 'Fairr') {
            $("#Bed_Mobility1").show();
        }
		else if (this.value == 'Poorr') {
            $("#Bed_Mobility1").show();
        }
    });




    
    });
	
</script>






<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 30%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
body{
padding-left:30%;
background-image: url("https://lh3.googleusercontent.com/proxy/iy3MZ1GQwrLTyAAhL5z65H9Teh1HpzHIKz39cWE04ZtOGRcBbxybmCc4uOMCxyt_CJyiq8kEjWpupL_4V21qAriTqgdgM2BFjcXA2_QjmsoKisJ1VSkAML-yPGZ2ITdOIQBPlA6EyXz99mJtfYawxDZM5FxrgrWV-9zNmkHDPgpe24dbfIaN");
background-repeat: no-repeat;
background-size:cover;
font-size:20px;
font-color:white;
}
#ddlPassport{
margin-bottom:30px;
margin-top:30px;
};
#dvPassport{
margin-bottom:70px;
margin-top:30px;
}
#divPassport{
margin-bottom:30px;
margin-top:30px;
}
button{
margin-top:30px;
}

</style>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js"></script>
<script src="http://cdn.craig.is/js/rainbow-custom.min.js"></script>
<script>
      $(document).ready(function() {
        	$.datetimepicker.setLocale('en');
       	$('#datetimepicker').datetimepicker();
      });
</script>
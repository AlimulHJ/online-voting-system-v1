<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Save Candidate info.</title>
	</head>
	<body>
		<body style="background:#AED6F1; margin-left:100px; margin-top:80px;"/>
		
			<p><b>Insert Candidate information</b></p>
			<form action="phpfiles/insertcandidinfo.php" method="post">
				<span class="form_field_name">Candidate Nid:</span><input type="text" name="candidnid"style="margin-left:39px" /> <br>
				<span class="form_field_name">Candidate Id:</span><input type="text" name="candidid"style="margin-top:5px; margin-left:50px" /> <br>
				<span class="form_field_name">Position participating for:</span><input type="text" name="candidpos"style=" margin-top:5px; margin-left:1px" /> <br>
				<span class="form_field_name">Marital Status :</span><input type="text" name="candidmaritalstat"style=" margin-top:5px; margin-left:38px" /> <br>
				<span class="form_field_name">Income per month:</span><input type="text" name="candidincome"style=" margin-top:5px; margin-left:15px" /> <br>
				<input type="submit" value="Save" style="color:white; margin-top:15px; height:30px; width:90px; font-size:18px;
				background-color:#571845" />
				
			</form>
			
	</body>
</html>
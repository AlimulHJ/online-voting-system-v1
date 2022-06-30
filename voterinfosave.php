<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Save voter Info.</title>
	</head>
	<body>
		<body style="background:#AED6F1; margin-left:100px; margin-top:80px " />
			
			<p><b>Insert Voter information</b></p>
			
			<form action="phpfiles/insertvoterinfo.php" method="POST">
				<span class="form_field_name">Nid No. :</span><input type="text" name="vnid" style="margin-top:6px; margin-left:31px; " /><br>
				<span class="form_field_name">Password :</span><input type="text" name="vpass" style="margin-top:6px; margin-left:21px; " /><br>
				<span class="form_field_name">First Name:</span><input type="text" name="vfname" style="margin-top:6px; margin-left:15px" /> <br>
				<span class="form_field_name">Middle Name:</span><input type="text" name="vmname" style="margin-top:6px; "/> <br>
				<span class="form_field_name">Last Name:</span><input type="text" name="vlname" style="margin-top:6px; margin-left:18px; " /> <br>
				<span class="form_field_name">Age  :</span><input type="number" name="vage" style="margin-top:6px; margin-left:57px; " /> <br>
				<span class="form_field_name">Gender  :</span><input type="text" name="vgender" style="margin-top:6px; margin-left:36px; " /> <br>
				<span class="form_field_name">Apartment no. :</span><input type="text" name="vapt" style="margin-top:6px; margin-left:0; " /> <br>
				<span class="form_field_name">House no. :</span><input type="text" name="vhouseno" style="margin-top:6px; margin-left:28px; " /> <br>
				<span class="form_field_name">Street no. :</span><input type="text" name="vstreetno" style="margin-top:6px; margin-left:31px; " /> <br>
				<input type="submit" value="Save" style="color:white; margin-top:15px; height:30px; width:90px; font-size:18px;
				background-color:#571845" />
			</form>
			
		
	</body>
</html>
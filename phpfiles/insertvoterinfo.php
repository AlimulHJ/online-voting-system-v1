<?php
	require_once('DBconnect.php');

	$Nid_No = $_POST['vnid'];
	$Password = $_POST['vpass'];
	$First_Name = $_POST['vfname'];
	$Middle_Name = $_POST['vmname'];
	$Last_Name = $_POST['vlname'];
	$Age = $_POST['vage'];
	$Gender = $_POST['vgender'];
	$Apartment_no = $_POST['vapt'];
	$House_no = $_POST['vhouseno'];
	$Street_no = $_POST['vstreetno'];
	

	$sql = "INSERT INTO voter (V_Nidno, V_Password, Fname, Mname, Lname, Age, Gender, Aptno, Houseno, Streetno)
	VALUES ( '$Nid_No', '$Password', '$First_Name', '$Middle_Name', '$Last_Name', '$Age', '$Gender', '$Apartment_no', '$House_no', '$Street_no')";
	
	
	
	if (mysqli_query($conn,$sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
?>
<?php
	require('DBconnect.php');

	$Candidate_Nid = $_REQUEST['candidnid'];
	$Candidate_Id = $_REQUEST['candidid'];
	$Candidate_Position = $_REQUEST['candidpos'];
	$Marital_Status = $_REQUEST['candidmaritalstat'];
	$Income_per_month = $_REQUEST['candidincome'];


	$sql = "INSERT INTO candidate (candidnid,candidid, candidpos, candidmaritalstat, candidincome)
	VALUES ('$Candidate_Nid','$Candidate_Id', '$Candidate_Position', '$Marital_Status', '$Income_per_month')";

	if (mysqli_query($conn,$sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>
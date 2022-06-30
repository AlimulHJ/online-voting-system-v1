<?php
	require('DBconnect.php');

	$posname = $_POST['pos_name'];
	$postime = $_POST['pos_time'];
	
	
	$sql = "INSERT INTO position (pos_name, pos_time)
	VALUES ('$posname','$postime')";

	if (mysqli_query($conn,$sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>
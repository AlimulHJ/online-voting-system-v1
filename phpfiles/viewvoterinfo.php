<?php
	
	require("DBconnect.php");
	
	$sql = "SELECT * FROM voter";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo "Nid:". $row["V_Nidno"]. " Pass: " . $row["V_Password"]. " Fname: " . $row["Fname"]. " Mname: " . $row["Mname"]. " Lname: " . $row["Lname"]. " Age: " . $row["Age"]. " Gender: ". $row["Gender"]. " Aptno: " . $row["Aptno"]. " Houseno: ".$row["Houseno"]. " Streetno: " . $row["Streetno"] ."<br>";
		}
	} else {
		echo "0 results";
	}

//	mysqli_close($conn);
	
	
?>
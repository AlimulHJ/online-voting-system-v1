 <?php
	
	//By these two line- Get values from "form" in login.php file
	$nid= $_POST['nid'];
	$pass= $_POST['pass'];
	
	
	
	//connect to the server and select database
	$conn= mysqli_connect("localhost", "root", "");
	mysqli_select_db($conn,"ovs_testdb1");
	
	//Query the database for user
	$result= mysqli_query($conn,"select * from voter where V_Nidno = '$nid' and V_Password = '$pass'")
	or die("Failed to query database".mysqli_error($conn));
	
	$row = mysqli_fetch_array($result);
	if($row['V_Nidno'] == $nid && $row['V_Password'] == $pass) {
		
		echo "Login successful! Welcome ".$row['V_Nidno']";
		include ('../candidSelectPage.html');
	}
	else{
		echo "Failed to login!";
	}
	
?>

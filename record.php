<?php

// if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$mailTo = "mcl@machcapital.com.np";
	$headers = "From Website: ".$email;
	$txt = "You Have received an email from:\nName:".$name.".\nEmail:".$email."\n\nThe Message is:\n".$message;

	mail($mailTo, $headers, $txt);

	$servername = "localhost:3306";
	$username = "machcapi_mkcl";
	$password = "M@chh@(2019)";
	$dbname = "machcapi_message";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection Failed: ".$conn->connect_error);
	}

	$sql = "INSERT INTO message VALUES ('".$name."','".$email."','".$message."','".date('y-m-d')."')";

	if($conn->query($sql)===TRUE)
	{

		header("location: thankyou.php?mailsend");
	}
	else
	{
		echo "<script type='text/javascript'>alert('Error'); </script>";
	}

	$conn->close();
// }
	
// 	if (validate_form()) {
// 		$mailTo = "mcl@machcapital.com.np";
// 		$headers = "From Website: ".$email;
// 		$txt = "You Have received an email from:\nName:".$name.".\nEmail:".$email."\n\nThe Message is:\n".$message;

// 		mail($mailTo, $headers, $txt);

// 		$servername = "localhost:3306";
// 		$username = "machcapi_mkcl";
// 		$password = "M@chh@(2019)";
// 		$dbname = "machcapi_message";

// 		$conn = new mysqli($servername, $username, $password, $dbname);
// 		if ($conn->connect_error) {
// 			die("Connection Failed: ".$conn->connect_error);
// 		}

// 		$sql = "INSERT INTO message VALUES ('".$name."','".$email."','".$message."','".date('y-m-d')."')";

// 		if($conn->query($sql)===TRUE)
// 		{

// 			header("location: thankyou.php?mailsend");
// 		}
// 		else
// 		{
// 			echo "<script type='text/javascript'>alert('Error'); </script>";
// 		}

// 		$conn->close();
// 	}

// 	else
// 	{
// 		echo "<script type='text/javascript'>document.location='contactus.php'</script>";
// 	}

// }

// function validate_form(){
// 	if ((empty($_POST['name'])) || (empty($_POST['email'])) || (empty($_POST['message'])))
// 	{
// 		header("location:../mkcl/contactus.php?error=emptyfields");
// 		// echo "<script type='text/javascript'>alert('Name is Required.')</script>";
// 		return false;
// 	}

// 	else
// 	{
// 		return true;
// 	}
// }
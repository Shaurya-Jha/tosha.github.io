<?php

include_once './connection.php';

if(isset($_POST['submit']))
{	 
	 $name = $_POST['name'];
	 $email = $_POST['email'];
     $question = $_POST['message'];

	 $sql = "INSERT INTO inquiry (firstname,email,queries)
	 VALUES ('$name','$email','$question')";
	 if (mysqli_query($conn, $sql)) {
		echo"<script>
		alert('Data inserted successfully');
		</script>";;
	 } else {
		echo "<script>
		alert('Data not inserted');
		</script>" . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

// header('location: C:\xampp\htdocs\Tosha\contact.php');

?>
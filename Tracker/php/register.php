<?php  
	
	require "connection.php";	

	$connect = mysqli_connect('localhost', 'root', '', 'covid19');

	if( isset($_POST['register-user'])) {
		$name = mysqli_real_escape_string($connect, $_POST['name']);
		$email = mysqli_real_escape_string($connect, $_POST['email']);
		$phone = mysqli_real_escape_string($connect, $_POST['MobileNumber']);
		$address = mysqli_real_escape_string($connect, $_POST['address']);
		$symptoms = mysqli_real_escape_string($connect, $_POST['symptoms']);

			$query = "INSERT INTO users VALUES ('$name', '$email', '$phone', '$address', '$symptoms')";

			$reg = mysqli_query($connect, $query);

			if ($reg) {
				?>
				<script>
					alert("Problem Registered");
				</script>
				<?php
			} else {
				?>
				<script>
					alert("Try Again");
				</script>
				<?php
			}
	}

?>
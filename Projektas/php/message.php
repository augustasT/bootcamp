<?php 
	if ($_POST['request']) {
		echo "labas";
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['sendMessage'];

		$link = mysqli_connect("localhost", "root", "", "illdy_project") or die;
		$query = "INSERT INTO `messages`(`name`, `email`, `subject`, `message`) VALUES ('".$name."','".$email."','".$subject."','".$message."')";
		if(mysqli_query($link, $query)){
			echo 'success!';
			
		}else{
				echo "Something went wrong";
			}
		
	}
?>
	<?php 
			
			
			
			if($_POST['request']){
				$nameFieldEmpty = false;
				$emailFieldEmpty = false;
				$emailFieldInvalid = false;
				$errorFound = false;				
				$errors = array('nameFieldEmpty'=>false, 'emailFieldEmpty'=>false, 'emailFieldInvalid' => false, 'logSaved' =>false);

				if($_POST['name']==""){	
					$nameFieldEmpty = true;	
					$errors['nameFieldEmpty']= true;
					
				}
				if($_POST['email'] ==""){
					$emailFieldEmpty = true;
					$errors['emailFieldEmpty']= true;	
				}
				if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
					$emailFieldInvalid = true;
					$errors['emailFieldInvalid']= true;	
				}
				if($nameFieldEmpty || $emailFieldEmpty || $emailFieldInvalid){
					$errorFound = true;				 
				}

				if(!$errorFound){
					$name = $_POST['name'];
					$email = $_POST['email'];
					$subject = $_POST['subject'];
					$message = $_POST['message'];					

					$link = mysqli_connect('localhost', 'root', '', 'illdy_project') or die;
					
					$query = "INSERT INTO `messages` (`name`, `email`, `subject`, `message`) VALUES('".mysqli_real_escape_string($link, $name)."','".mysqli_real_escape_string($link, $email)."','".mysqli_real_escape_string($link, $subject)."','". mysqli_real_escape_string($link, $message)."')";
					
					if(mysqli_query($link, $query)){
						$errors['logSaved']= true;
					}
					else{
						echo "Something went wrong";
					}					
				} 
				
				echo json_encode($errors);
			}
		?>
		
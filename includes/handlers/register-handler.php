<?php 
	
	function sanitizeFormUsers($inputText)
	{
		$inputText = strip_tags($inputText);
		$inputText = str_replace(" ","",$inputText);
		return $inputText;
	}
	function sanitizeFormPassword($inputText)
	{
		$inputText = strip_tags($inputText);
		return $inputText;
	}
	function sanitizeFormString($inputText)
	{
		$inputText = strip_tags($inputText);
		$inputText = str_replace(" ","",$inputText);
		$inputText = ucfirst($inputText);
		return $inputText;
	}


	if(isset($_POST['registerButton'])){
		$username = sanitizeFormUsers($_POST['username']);
		$firstname = sanitizeFormString($_POST['firstName']);
		$lastname = sanitizeFormString($_POST['lastName']);
		$email = sanitizeFormString($_POST['email']);
		$email2 = sanitizeFormString($_POST['email2']);
		$password = sanitizeFormPassword($_POST['password']);
		$password2 = sanitizeFormPassword($_POST['password2']);

		if($account->register($username,$firstname,$lastname,$email,$email2,$password,$password2)){
			$_SESSION['userLoggedIn'] = $username;
			header("Location: index.php");
		}else
		{
		}


	}

?>
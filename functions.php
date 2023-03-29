<?php

function check_login($con)
{

	if(isset($_SESSION['user_id'])) /*We check if the session value exist, if NOT we redirect */
	{

		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1"; //We check in the database

		$result = mysqli_query($con,$query);   //Read from the database
		if($result && mysqli_num_rows($result) > 0)  //Check if the result is positive and the number of rows is > 0 
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: login.php");
	die;

}

function random_num($length)
{

	$text = "";  //text = empty
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}
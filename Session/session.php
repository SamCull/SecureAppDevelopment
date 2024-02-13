<html>
<head>
<title>Session</title>
Session<br>
</head>

<?php
/**************** 
make 3 pages, make it so that if you click into a page,
 you cant use back button to go back to that given page
 essentially dont want a new session to create
 each time you load a new page, new page = new session 
 = delete old session
 similar to banking application - when user logs and presses back button,
 if they press forward button again the page should be terminated
****************/ 

// regenerates a new session token on each page refresh
// Prevent the session cookie being accessed on the client with JavaScript
ini_set('session.cookie_httponly', 1);

// Ensuring session ID cannot be passed through URL
ini_set('session.use_only_cookies', 1);

session_start();  // Start/resume session

$oldNumVal = 0;
$newNumVal = 0;
$new_session = "";

session_start();
// get the Session ID	
$old_session = session_id();


if(isset($_POST["Reset"])) 
	{ 
		echo "Destroy Session.... <br>";
		$_SESSION['numberValue'] = 0;
		//$old_session = "";
		
		// remove all session variables
		session_unset();
		
		// destroy the session
		session_destroy(); 
	}
else if(isset($_POST["Regenerate"])) 
	{
		echo "<br>";
		// Generates a new session ID	
		session_regenerate_id();
		$new_session = session_id();
		
		if(isset($_SESSION['numberValue']))
		{			
			$oldNumVal = $_SESSION['numberValue'];
			$newNumVal = $oldNumVal + 1;
			$_SESSION['numberValue'] = $newNumVal ;
		}
		else
		{
			$oldNumVal = 0;
			$newNumVal = $oldNumVal + 1;
			$_SESSION['numberValue'] = $newNumVal ;
		}
	}
else
	{
	echo "<br>";	
	// Generates a new session ID	
	session_regenerate_id();
	$new_session = session_id();
	
		//Set the session variable for numberValue is not set (first time 
		if (!isset($_SESSION['numberValue']))
		{
			$_SESSION['numberValue'] = $newNumVal;
		}
		else
		{
			$oldNumVal = $_SESSION['numberValue'];
			$newNumVal = $oldNumVal + 1;
			$_SESSION['numberValue'] = $newNumVal ;
		}
			
		
	}

$IPAddress = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];

echo "IP Address $IPAddress <br />";
echo "User Agent $userAgent <br />";
echo "Old numVal: $oldNumVal <br />";
echo "New numVal: $newNumVal <br>";
echo "Origional Session: $old_session <br />";
echo "Generated Session: $new_session <br />";



?> 

<form method="post"> 
<input type="submit" name="Reset" class="button" value="Destroy Session" />
</form>

<form method="post"> 
<input type="submit" name="Regenerate" class="button" value="Regenerate Session ID" />
</form>


</html>
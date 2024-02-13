<?php
session_start();
$_SESSION['page1'] = true; // Set a flag for page1
?>
<!DOCTYPE html>
<html>
<head>
<title>Landing Page</title>
</head>
<body>
<h1>Welcome to the Banking App</h1>
<p>Press the button below to go to the secure page.</p>
<form action="page2.php" method="post">
    <input type="submit" value="Go to Secure Page">
</form>
</body>
</html>

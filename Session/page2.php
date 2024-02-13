<?php
session_start();

// If the session for page1 doesn't exist or the user came from another page, redirect to the homepage.
if (!isset($_SESSION['page1'])) {
    header('Location: index.php');
    exit();
}

// Invalidate the session for page1 and set a new one for page2
unset($_SESSION['page1']);
$_SESSION['page2'] = true;
?>
<!DOCTYPE html>
<html>
<head>
<title>In Session Page</title>
</head>
<body>
<h2>You are logged in to page 2</h2>
<p>When you navigate away from this page, you will not be able to return using the back button.</p>
<a href="page3.php">Proceed to Logout</a>

</body>
</html>

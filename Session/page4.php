<?php
session_start();

// Check if the session for page3 exists, if not redirect to homepage.
if (!isset($_SESSION['page3'])) {
    header('Location: index.php');
    exit();
}

// Invalidate the session for page3 and set a new one for page4
unset($_SESSION['page3']);
$_SESSION['page4'] = true;
?>
<!DOCTYPE html>
<html>
<head>
<title>Additional Page</title>
</head>
<body>
<h2>Welcome to Page 4</h2>
<p>This is a continuation of your session. When you leave this page, you will not be able to return to it using the back button.</p>
<a href="index.php">Return to Home Page</a>

<p>Click below to end your session and return to the home page.</p>
<a href="session_end.php">End Session and Return Home</a>
</body>
</html>

<?php
session_start();

// Check if the session for page2 exists, if not redirect to homepage.
if (!isset($_SESSION['page2'])) {
    header('Location: index.php');
    exit();
}

// Invalidate the session for page2
unset($_SESSION['page2']);

// Destroy the session and start a new one for page3
session_destroy();
session_start();
$_SESSION['page3'] = true;

// Redirect to the homepage after a short delay or upon a user action
header("Refresh: 5; url=index.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Session Terminated</title>
</head>
<body>
<h2>Your session has been terminated</h2>
<p>You will be redirected to the homepage shortly.</p>

<a href="page4.php">Proceed to Page 4</a>
</body>
</html>

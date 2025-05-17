<?php
require 'session.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
<h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
<p>This is a protected dashboard page.</p>
<a href="page2.php">Go to Page 2</a><br>
<a href="logout.php">Logout</a>
</body>
</html>

<?php
require 'session.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page 2</title>
</head>
<body>
<h2>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
<p>This is another protected page.</p>
<a href="dashboard.php">Back to Dashboard</a><br>
<a href="logout.php">Logout</a>
</body>
</html>

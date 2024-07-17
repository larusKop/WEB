<?php
if (!isset($_COOKIE['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_COOKIE['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Приветствие</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h2>Привет, <?php echo htmlspecialchars($username); ?>!</h2>
    <p><a href="index.php">Выйти</a></p>
</div>
</body>
</html>

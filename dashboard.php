<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.html");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="dashboard-box">
    <h2>Welcome <?php echo $_SESSION['user']; ?> 🎉</h2>

    <!-- Logout Button -->
    <form action="logout.php" method="POST">
        <button type="submit" class="logout-btn">Logout</button>
    </form>
</div>

</body>
</html>
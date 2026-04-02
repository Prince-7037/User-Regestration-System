<?php
include 'config.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, email, password) 
        VALUES ('$username', '$email', '$password')";

if ($conn->query($sql)) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Success</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-box">
    <h2>Registration Successful 🎉</h2>
    <p>Your account has been created successfully</p>

    <br>

    <a href="login.html">
        <button>Go to Login</button>
    </a>
</div>

</body>
</html>

<?php
} else {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Error</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-box">
    <h2>Something went wrong ❌</h2>
    <p><?php echo $conn->error; ?></p>

    <br>

    <a href="register.html">
        <button>Try Again</button>
    </a>
</div>

</body>
</html>
<?php
}
?>
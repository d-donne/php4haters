<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: signin.php');
    exit();
}
include("header.html");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<nav>
    <form action="dashboard.php" method="post" style="display: inline;">
        <input type="submit" name="logout" value="Logout">
    </form>
</nav>

<body>
    <h1>Dashboard</h1>
    <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
    <p>This is your dashboard where you can manage your account and view personalized content.</p>
</body>

</html>

<?php
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('Location: signin.php');
    exit();
}
?>

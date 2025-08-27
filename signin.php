<?php
session_start();
if ($_SESSION["username"]) {
    header("Location: dashboard.php");
    exit;
}
else {
    $_SESSION["username"] = null;
    echo "<h2>Please sign in to access the dashboard.</h2>";
}
include("header.html")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>

<body>
    <h1>Sign In</h1>
    <form action="signin.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" name="submit" value="Sign In">
    </form>
</body>

</html>

<?php
if (isset($_POST["submit"])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        echo "<h2>Please fill in all fields.</h2>";
        exit;
    }
    $_SESSION["username"] = filter_input(INPUT_POST, "username") ;
    $_SESSION["password"] = filter_input(INPUT_POST, "password");

    header("Location: dashboard.php");
} else {
    echo "<h2>No data submitted yet.</h2>";
}

?>

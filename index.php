<?php
include("header.html");

// cookies
setcookie('test', 'testing cookies', time() + 3600); // expires in 1 hour
if (!isset($_COOKIE["visited"])) {
  setcookie("visited", "1", time() + 3600 * 24 * 30); // expires in 30 days
  echo "<p>Welcome, new visitor!</p>";
} else {
  $visits = $_COOKIE["visited"] + 1;
  setcookie("visited", $visits, time() + 3600 * 24 * 30);
  echo "<p>Welcome back! This is your visit number $visits.</p>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <main>
    <h1>Main Page</h1>
    <p>This is the main content of the page.</p>

  </main>
</body>

</html>

<?php
foreach ($_COOKIE as $key => $value) {
  echo "<p>Cookie: $key = $value</p>";
}

if (isset($_COOKIE["test"])) {
  echo "<p>Test cookie value: " . $_COOKIE["test"] . "</p>";
} else {
  echo "<p>Test cookie is not set.</p>";
}

include("footer.html");
?>

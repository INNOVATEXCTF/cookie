<?php
// set default value of cookiefishy to 0 if it does not exist
if(!isset($_COOKIE['cookiefishy'])) {
  setcookie('cookiefishy', 0);
}

// check if cookiefishy is set to 12
if($_COOKIE['cookiefishy'] == 12) {
  header('Location: fishy.php');
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
</head>
<body>

  <h1>Welcome to the Home Page</h1>

  <!-- Your HTML code for the home page goes here -->

</body>
</html>

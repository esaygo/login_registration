<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
//var_dump($_SESSION);
if(isset($_SESSION['login_message']) && $_SESSION['login_message'] == "success") {
    echo "<p class='succes'>Login successful!</p>";
    echo "<p class='succes'>Welcome " . $_SESSION['first_name'] . "!</p>";
}
// unset($_SESSION['login_message']);
echo "<a href='process.php'>Log off</a>";
?>

</body>
</html>

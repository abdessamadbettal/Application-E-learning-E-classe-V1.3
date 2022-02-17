
<?php

?>
<?php include 'header.php'; ?>

<?php
setcookie("test_cookie", "test", time() - 3600, '/');
?>
<html>
<body>

<?php
if(count($_COOKIE) < 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
var_dump($_COOKIE) ;
?>

<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>
<?php include 'footer.php' ?>
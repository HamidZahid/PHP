<?php
session_start();

echo "username " . $_SESSION["username"];
echo "<br>";
echo "username 1 " . $_SESSION["username2"];
echo "<br>";
echo "username 2 " . $_SESSION["username2"];
echo "<br>";
echo "username 3 " . $_SESSION["username2"];
echo "<br>";
// session_destroy();
?>
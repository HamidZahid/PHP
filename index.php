<?php
// $boolean= true;
// $boolean1= false;
// echo var_dump($boolean1);
// $hamid = array("hamid","faid","faezan","usman","aliyan");
// echo var_dump($hamid);
// echo "<br>";
// echo $hamid[0];

// $farzan = 3333999.333333;
// echo "<br   >";

// echo $farzan;
session_start();
$_SESSION["username"] = "Hamid";
echo $_SESSION["username"];
echo "<br>";
$_SESSION["username1"] = "farzan";
echo $_SESSION["username1"];
echo "<br>";
$_SESSION["username2"] = "fawaz";
echo $_SESSION["username2"];
echo "<br>";
$_SESSION["username3"] = "Aliyan";
echo $_SESSION["username3"];
echo "<br>";



?>
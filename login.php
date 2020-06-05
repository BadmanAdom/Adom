<?php

session_start();

include "conn.php";
$name=$_POST["name"];
$pass=$_POST["pass"];


$sql="SELECT * from signup WHERE name='$name' AND pass='$pass'";

$result=$conn->query($sql);

$_SESSION["name"]=$_POST["name"];



header("Location: home.php");



?> 
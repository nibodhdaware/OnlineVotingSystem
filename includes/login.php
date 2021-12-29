<?php
include_once "dbh.php";
$votername = $_POST['voter_name'];

$sql = "SELECT * FROM `voter` WHERE voter_name='$votername';";
$result = mysqli_query($conn, $sql);
header("Location: ../main.php");
?>
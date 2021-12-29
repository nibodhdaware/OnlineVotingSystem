<?php
require("dbh.php");

$username = $_POST['voter_name'];

$sql = "INSERT INTO voter (voter_name) VALUES ('$username');";

mysqli_query($conn, $sql);

header("Location: ../index.php?signup=success");

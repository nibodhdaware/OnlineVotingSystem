<?php
require("dbh.php");

$issuedesc = $_POST['issue_desc'];
$votername = $_POST['voter_name'];

$sql = "INSERT INTO issues (voter_id, issue_desc) VALUES ((SELECT voter_id FROM voter where voter_name = '$votername'), '$issuedesc');";

mysqli_query($conn, $sql);

header("Location: ../main.php");

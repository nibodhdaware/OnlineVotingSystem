<?php
include_once "dbh.php";

$votername = $_POST['votername'];

$sql = "UPDATE issues SET vote_count=vote_count + 1 WHERE issue_id=(SELECT issue_id FROM issues WHERE voter_id=(SELECT voter_id FROM voter WHERE voter_name = '$votername'));";
mysqli_query($conn, $sql);

header("Location: ../main.php");
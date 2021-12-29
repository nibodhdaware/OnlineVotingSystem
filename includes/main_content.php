<?php
include_once "dbh.php";

$sql = "SELECT * FROM issues;";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
	echo "<div id='issue'><form action=includes/vote.php>" . $row['issue_desc'] . "<br/><button id='btn'>Vote</button><br/>" . $row['vote_count'] . "</form></div>";
}

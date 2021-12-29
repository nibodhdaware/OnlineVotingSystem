<head>
	<title>Dashboard</title>
	<style>
		body {
			text-align: center;
			background-color: cornflowerblue;
		}

		#headersection {
			padding: 10px;
		}

		h1 {
			font-family: cursive;

		}

		input {
			padding: 10px;
			border-radius: 5px;

		}

		#btn {
			padding: 10px;
			border-radius: 5px;
			background-color: darkmagenta;
			color: ghostwhite;
			border-radius: 5px;
			cursor: pointer;
		}

		#issue {
			border: 1px solid black;
			padding: 10px;
			margin: 15px;
			font-size: 25px;
			line-height: 2em;
			font-family: sans-serif;
		}
	</style>
</head>

<body>
	<div id="headersection">
		<h1> Online Voting System </h1>
		<a id="btn" href="./issue_page.php">Add Issue</a>
		<hr>
		<form id="form" method="POST" action="includes/vote.php">
			<input type="text" name="votername" placeholder="Enter your username to vote" />
			<?php require("includes/main_content.php") ?>
		</form>
	</div>
</body>
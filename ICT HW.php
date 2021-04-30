<!DOCTYPE html>
<html>
<head>
	<title>Library Books Database</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
	<style type="text/css">
		input.submit{
			background-color: #2f215e;
			color: white ;
			border-color: white  ;
			font-family: 'Oswald', sans-serif;
			font-size: 25px;
			border-radius: 5px;
			text-align: center;
		}
		
		button.submit{
			background-color: #B64FCD;
			color: white ;
			border-color: #7605C4  ;
			font-family: 'Oswald', sans-serif;
			font-size: 25px;
			border-radius: 5px;
			text-align: center;
		}
	</style>
</head>
<body style="background-color: #4D3BB2">
	<form method="POST" action="">
		<h1 style="font-family: 'Oswald', sans-serif;color: white; text-align: center;">Online Library Database</h1>
		<table border="2" align="center" cellpadding="5" cellspacing="5">
		<tr>
			<td style="font-family: 'Oswald', sans-serif;color: white; font-size: 25px"> Enter ISBN :</td>
			<td> <input type="text" name="isbn" size="40" class="submit"> </td>
		</tr>
		<tr>
			<td style="font-family: 'Oswald', sans-serif;color: white; font-size: 25px"> Enter Title :</td>
			<td> <input type="text" name="title" size="40" class="submit"> </td>
		</tr>
		<tr>
			<td style="font-family: 'Oswald', sans-serif;color: white; font-size: 25px"> Enter Author :</td>
			<td> <input type="text" name="author" size="40" class="submit"> </td>
		</tr>
		<tr>
			<td style="font-family: 'Oswald', sans-serif;color: white; font-size: 25px"> Enter Edition :</td>
			<td> <input type="text" name="edition" size="40" class="submit"> </td>
		</tr>
		<tr>
			<td style="font-family: 'Oswald', sans-serif;color: white; font-size: 25px"> Enter Publication: </td>
			<td> <input type="text" name="publication" size="40" class="submit"> </td>
		</tr>

		<tr>
		<td><input type="submit" name="submit" value="Submit" class="submit"><input type="reset" value="Reset" class="submit"></td>
		</tr>
		</table>
	</form>
	<?php
	   if (isset("submit")) {
		$isbn = $_POST["isbn"];
		$title = $_POST["title"];
		$author = $_POST["author"];
		$edition = $_POST["edition"];
		$publication = $_POST["publication"];

		$query = "insert into library_database (isbn,title,author,edition,publication) values($isbn,$title,$author,$edition,$publication)";

		// Create connection
		$conn = new mysqli(localhost, root,"", obmc_mirchandanihw);

		// Check connection
		if ($conn->connect_error) {
		   die("Connection failed: " . $conn->connect_error);
		}

			echo "Connected successfully";
	   }
	?>
</body>
</html>

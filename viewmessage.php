<?php 
	include_once 'header.html'; 
?>
	
	<section>
		<div class="container">
			<h2 class="text-center pt-4" style="color:#174b9a">Messages</h2>
			<table class="table">
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Message</th>
					<th>Date</th>
				</tr>

				<?php
					$servername="localhost:3306";
					$username="machcapi_mkcl";
					$password="M@chh@(2019)";
					$dbname="machcapi_message";

					$conn=new mysqli($servername, $username, $password, $dbname);

					if($conn->connect_error)
					{
						die("Connection Failed: " . $conn->connect_error);
					}

					$sql="SELECT * FROM message";
					$result=mysqli_query($conn,$sql);

					while($row=mysqli_fetch_assoc($result))
					{
						print '<tr><td>'.$row['name'].'</td><td>'.$row['email'].'</td><td>'.$row['message'].'</td><td>'.$row['date'].'</td></tr>';
					}

					$conn->close();
				?>

			</table>
			<hr class="w-100 mx-auto">	
		</div>	
	</section>

<?php
	include_once 'footer.html';
?>
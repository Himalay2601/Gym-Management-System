

<div class="container">
	<form class="form-group mt-3" method="post" action="home.php?info=member_search">
		<h3 class="lead">SEARCH MEMBER</h3>
		<input type="text" name="name" class="form-control" placeholder="ENTER MEMBER NAME">
	</form>

	<div class="container">
		<table class="table table-bordered table-hover">
			<tr bgcolor='gray'>
				<th>MEMBER_ID</th>
				<th>MEMBER NAME</th>
				<th>DOB</th>
				<th>AGE</th>
				<th>PACKAGE</th>
				<th>MOBILE NO</th>

			</tr>
			<?php
           require('db.php');


$all="SELECT * FROM member";
$all_query=mysqli_query($conn,$all);
if (mysqli_num_rows($all_query) > 0) {
    while($row = mysqli_fetch_assoc($all_query)) {
       echo "<tr bgcolor='gray'>";
			echo "<td>".$row['mem_id']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['dob']."</td>";
		echo "<td>".$row['age']."</td>";
		echo "<td>".$row['package']."</td>";
		echo "<td>".$row['mobileno']."</td>";
		echo "</tr><br>";
    }
} else {
    echo "0 results";
}



?>
			
		</table>
	</div>
</div>

<?php
	$con = mysqli_connect("localhost","root","","dbregistration");

	$rID = $_POST['id'];

	$find = "SELECT d.id, d.name FROM division d inner join region r on d.region_id = r.id WHERE r.id = $rID";
	$findQ = mysqli_query($con,$find);

	while ($row = mysqli_fetch_array($findQ)) {
		echo '<option value="',$row['name'],'">',$row['name'],'</option>';
	}
?>
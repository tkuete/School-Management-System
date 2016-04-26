<?php
	$con = mysqli_connect("localhost","root","","dbregistration");

	$rID = $_POST['id'];

	$find = "SELECT s.id, s.name FROM sub_class s inner join class c on s.class_id = c.id WHERE c.id = $rID";
	$findQ = mysqli_query($con,$find);

	while ($row = mysqli_fetch_array($findQ)) {
		echo '<option value="',$row['id'],'">',$row['name'],'</option>';
	}
?>
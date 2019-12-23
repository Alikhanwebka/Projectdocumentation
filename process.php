<?php
	$mysqli = new mysqli("localhost", "root", "", "crud") or die(mysqli_error($mysqli));
	if (isset($_Post["save"])) {
		$For = $_Post["For?"];
		$miniCategories= $_Post["miniCategories"];
		$Categories= $_Post["Categories"];
		$mysqli->query("INSERT INTO data (For?, miniCategories, Categories) VALUES('$For','$miniCategories','$Categories')") or die(mysqli->error());
	}
	if (isset($_GET["delete"])){
		$id=$_GET["delete"];
		$mysqli->query("DELETE FROM data WHERE id=$id") or die(mysqli->error());
	}
	mysqli_close($mysqli);
?>
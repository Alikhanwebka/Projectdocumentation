<?php
	$mysqli = new mysqli("localhost", "root", "", "crud") or die(mysqli_error($mysqli));
	if (isset($_Post["save"])) {
		$For = $_Post["For?"];
		$miniCategories= $_Post["miniCategories"];
		$Categories= $_Post["Categories"];

		$mysqli->query("INSERT INTO data (For?, miniCategories, Categories) VALUES('$For','$miniCategories','$Categories')") or die($mysqli->error);
	}
?>
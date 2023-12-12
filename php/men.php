<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "database";

	$conn = mysqli_connect($servername,$username,$password,$dbname);

	$sql = "create table _men(
	num int not null auto_increment,
	id char(20) not null,
	pass char(20) not null,
	name char(20) not null,
	email char(80),
	regist_day char(20),
	level int,
	point int,
	primary key(num))";

	$result = mysqli_query($conn, $sql);

	if ($result) {
		echo "ok";
	}
	else
		echo "no".mysqli_error($conn);
	mysqli_close($conn);
?>
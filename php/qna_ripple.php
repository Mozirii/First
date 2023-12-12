<?php
$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "database";
	$con = mysqli_connect($servername, $username, $password, $dbname);

	$sql = "create table _qna_ripple (
		num int not null auto_increment,
		parent int not null,
		id char(20) not null,
		name char(20) not null,
		content text not null,
		regist_day char(20),
		primary key(num)
	)";

	$result = mysqli_query($con, $sql);

	if ($result) {
		echo "Success create table";
	}
	else {
		echo "Error".mysqli_error($con);
	}
?>
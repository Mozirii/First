<?php
$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "database";

	$con = mysqli_connect($servername, $username, $password, $dbname);

	$sql = "create table _notice (
		num int not null auto_increment,
		id char(20) not null,
		name char(20) not null,
		subject char(200) not null,
		content text,
		is_html char(1), 
		regist_day char(20),
		file_name char(40),
		file_type char(40),
		file_copied char(40),
		primary key(num))";

	$result = mysqli_query($con, $sql);

	if ($result) {
		echo "Success create table";
	}
	else {
		echo "Error".mysqli_error($con);
	}
?>
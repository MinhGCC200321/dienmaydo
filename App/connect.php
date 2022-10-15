<?php
	// $Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	// mysqli_query($Connect,'SET NAMES "utf8"');
	// //mysqli_close($Connect);
	//tesst

	// PG
	$Connect = pg_connect("postgres://pbyrbgtaqkusyb:9a009ced60972229d2e70d11bfe75448e981b9b0b0aa1a903b7f519f1a4ca757@ec2-52-70-45-163.compute-1.amazonaws.com:5432/d96auvg7uv6cdm");
	if(!$Connect){
		die("Connection failed");
	}
	//mysqli_close($Connect);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>无标题文档</title>
</head>

<body>
<?php
	
	$link = mysqli_connect("47.100.26.239", "test", "stitp", "test");

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	/*else{
		echo("success");
	}*/
?>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>路由器</title>
<link href="css.css" rel="stylesheet">
</head>

<body>


	<?php
	
	include '../connection/conn.php';
	
	$sql = "SELECT * FROM router ORDER BY time DESC";
	$result = mysqli_query($link,$sql);
	echo '<table border="1" width="600" align="center" cellpadding="10px" cellspacing="1px">';
    echo '<caption><h1>路由器温湿度列表</h1></caption>';
    echo '<tr bgcolor="rgb(0,255,255)">';
    echo '<th>编号</th><th>温度</th><th>湿度</th><th>时间</th>';
    echo '</tr>';
	while($row = mysqli_fetch_array($result)){

		echo '<tr>';
		echo  '<td>'.$row['ID'].'</td>';
		echo  '<td>'.$row['temperature'].'</td>';
		echo  '<td>'.$row['humidity'].'</td>';
		echo  '<td>'.$row['time'].'</td>';
		echo '</tr>';
	
	}
	echo '</table>'
	?> 




</body>
</html>
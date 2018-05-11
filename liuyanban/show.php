<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>show</title>
</head>
<body>
	<center>
		<?php include("menu.php"); ?>
		<h3>添加留言</h3>
		<table>
			<tr>
				<th>留言人</th>
				<th>留言内容</th>
				<th>留言时间</th>
			</tr>
			<?php
			$info=file_get_contents("liuyan.txt");			
			$lylist=explode( "@@@",$info);
			foreach ($lylist as $key=>$v) {
				$ly=explode("##",$v );
				date_default_timezone_set("Asia/Shanghai");
				echo "<tr>";
				echo "<td aligh='center'>$ly[0]</td>";
				echo "<td aligh='center'>$ly[1]</td>";
				echo "<td>".date("Y-m-d H:i:s")."</td>";
				echo "</tr>";
			}
			?>
		</table>
	</center>
</body>
</html>
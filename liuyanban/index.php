<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<style>
        body{
        	background-color: #F8F8FF;
        }
	</style>
</head>
<body>
	<center>
		<?php include("menu.php"); ?>
		<h3>添加留言</h3>
		<form action="doAdd.php" method="post">
			<table width="400" >
				<tr>
					<td align="right">姓名：</td>
					<td><input type="text" name="author"/></td>
				</tr>
				<tr>
					<td align="right" valign="top">留言内容：</td>
					<td><textarea name="content" rows="5" cols="30" style="resize:none"></textarea></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" value="提交">          
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>
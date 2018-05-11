<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>doAdd</title>
</head>
<body>
	<center>
		<?php include("menu.php"); ?>
		<h3>添加留言</h3>
		<?php
		$author=$_POST["author"];
		$content=$_POST["content"];
		$time=time();
		$ly="{$author}##{$content}##{$time}";
		echo $ly;
		$ly=$ly.file_get_contents("liuyan.txt");
		file_put_contents("liuyan.txt",$ly);
		$alert="alert('留言成功!')";
		echo "<script>".$alert."</script>;"
		?>  
	</center>
</body>
</html>
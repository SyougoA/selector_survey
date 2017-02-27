<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>調査結果</title>
	</head>
	<body>
		<?php 
			$EA = $_POST['EA'];
			$point = $_POST['point'];
			$ff = $_POST['ff'];
			# ここでpythonを呼び出す
			exec("python load.py $point $ff", $predict);
			echo("$EA<br />");
			echo("$predict[0]<br />");
		?>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>セレクタ調査</title>
	</head>
	<body>
		<div class="main">
			<h1>データを記入してください。</h1><br />
			<form method="post" action="survey.php">
				<p>調べる商品名を入力してください</p><br />
				<input type="text" name="EA" style="width:150px"><br />
				<p>ここはポイントを入力してください。</p>
				<input type="text" name="point" style="width:50px"><br />
				<p>ここはフォロワー数を入力してください</p>
				<input type="text" name="ff" style="width:50px"><br />
				<br />
				<input type="submit" value="結果を出す">
			</form>
		</div>
	</body>
</html>
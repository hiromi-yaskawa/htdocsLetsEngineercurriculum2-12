<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>いろいろなフォームの入力</title>
	<link href="css/style.css" rel="stylesheet">
</head>

<body>
	<div>
		<form action="result.php" method="post">
			名前:<input type="text" name="my_name" /><br>
			ご希望商品:
			<input type="radio" name="product" value="A賞">A賞
			<input type="radio" name="product" value="B賞">B賞
			<input type="radio" name="product" value="C賞">C賞
			<br>
			個数
			<select name="number">
				<?php for ($i=1;$i<=10;$i++){ ?>
				<option value="<?php echo $i; ?>">
					<?php echo $i; ?>
				</option>
				<?php } ?>
			</select>
			<br>
			<input type="submit" value="申込" />
		</form>
	</div>
</body>

</html>

<?php
$numbers=[];
if(isset($_POST['submit'])){
	$numbers=[$_POST['number']];
	if(!empty($_POST['sort'])){
		if ($_POST['sort']=='asc')
		{
			sort($numbers);
		} else
		{
			rsort($numbers);
		}
	}
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>3-2</title>
	<link rel="stylesheet" href="main.css">
</head>
<body><pre><?php
		echo "GET: ";
		var_dump($_GET);
		echo "POST: ";
		var_dump($_POST);
		var_dump($numbers);

		?>


	<a href="/?sort=asc">Остортировать</a>
	<form action="/" method=post>
		Введите число: <input type="number" name="number[]">
		Введите число: <input type="number" name="number[]">
		Введите число: <input type="number" name="number[]">
		Сортировка: <select name="sort">
			<option selected disabled value="">выберите</option>
			<option value="none">никак</option>
			<option value="desc">По убыванию</option>
			<option value="asc">По возрастанию</option>
		</select>
		<input type="submit" value="Отправить" name="submit">
	</form>
<form action="3-3.php">
	<input type="submit" value="3-3">
</form>
	</pre>
</body>
</html>
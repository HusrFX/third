<?php
include $_SERVER ['DOCUMENT_ROOT'] . '/products.php';

$product=$products[$_GET['id']];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="main.css" />
	<link rel="stylesheet" href="form.css" />
	<title>Document</title>
</head>
<body>
	<ul id="navbar">
  		<li><a href="/3-3.php">Главная</a></li>
  		<li><a href="#">О нас</a></li>
	</ul>
	<div class="main">
	<h3>Корзина</h3>
	<p class="success">
		Ваша покупка оформлена
	</p>
	<p class="error">
		Нужно выбрать товар и заполнить все поля
	</p>
	<div class="items">
	<figure>
			<p><img src="<?=$product['img']?>" alt="" /></p>
			<figcaption><?=$product['name']?></figcaption>
			<figcaption><?=$product['Price']?></figcaption>
		</figure>
	</div>
	
	<form action="">
		<label>
			Ваше ФИО:
			<input type="text" placeholder="Введите ваше ФИО">
		</label>
		<input type="submit" value="Купить" class="btn">
	</form>
	</div>
</body>
</html>
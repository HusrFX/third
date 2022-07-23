<?php

include $_SERVER ['DOCUMENT_ROOT'] . '/products.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="main.css" />
	<title>Document</title>
</head>
<body>
	<ul id="navbar">
  		<li><a href="/3-3.php">Главная</a></li>
  		<li><a href="#">О нас</a></li>
	</ul>
	<div class="main">
	<h3>Каталог</h3><br>
	<?php foreach ($products as $id=>$product)
	{?>
		<figure>
			<p><img src="<?=$product['img']?>" alt="" /></p>
			<figcaption><?=$product['name']?></figcaption>
			<figcaption><?=$product['Price']?></figcaption>
			<a href="/form.php/?id=<?=$id?>" class='btn'>Оформить</a>
		</figure> <?php
	}?>
	</div>
</body>
</html>
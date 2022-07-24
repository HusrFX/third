<?php
include $_SERVER['DOCUMENT_ROOT'] . '/products.php';
include $_SERVER['DOCUMENT_ROOT'] . '/order.php';

$product=$products[$_REQUEST['id'] ?? 0];
$success=false;
$error=false;

if(! empty($_POST))
{
	if(empty($_POST['name']) || empty($_POST['id']))
	{
		$error=true;
	}else{
		if(makeOrder($product, $_POST['name']))
		{
			$success=true;
		}else {
			$error=true;
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/main.css" />
	<link rel="stylesheet" href="/error.css" />
	<title>Document</title>
</head>
<body>
	<ul id="navbar">
  		<li><a href="/3-3.php">Главная</a></li>
  		<li><a href="#">О нас</a></li>
	</ul>
	<div class="main">
	<h3>Корзина</h3>
	<?php if($success) {?>
		<p class="success">
		Ваша покупка оформлена
		</p>
		<?php } else{ ?>
	<?php if($error) {?>
		<p class="error">
		Нужно выбрать товар и заполнить все поля
		</p>
	<?php } ?>
	<div class="items">
	<figure>
			<p><img src="/<?=$product['img']?>" alt="" /></p>
			<figcaption><?=$product['name']?></figcaption>
			<figcaption><?=$product['Price']?></figcaption>
		</figure>
	</div>
	
	<form action="/form.php" method="post">
		<input type="hidden" name="id" value="<?=$product['id']?>">
		<label>
			Ваше ФИО*:
			<input type="text" name="name" placeholder="Введите ваше ФИО">
		</label>
		<input type="submit" value="Купить" class="btn">
	</form><?php }?>
	</div>
</body>
</html>
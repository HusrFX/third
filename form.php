<?php

include $_SERVER['DOCUMENT_ROOT'] . '/template/header.php';

$product=$products[$_REQUEST['id'] ?? 0];
$success=false;
$error=false;

if(! empty($_POST))
{
	if(empty($_POST['name']) || strlen($_POST['id'])<=0)
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
			<input type="text" name="name" placeholder="Введите ваше ФИО" value="<?=htmlspecialchars($POST['name'] ?? '') ?>">
		</label>
		<input type="submit" value="Купить" class="btn">
	</form><?php }
	include $_SERVER['DOCUMENT_ROOT'] . '/template/footer.php';?>

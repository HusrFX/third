<?php

include $_SERVER ['DOCUMENT_ROOT'] . '/products.php';
include $_SERVER['DOCUMENT_ROOT'] . '/template/header.php';
?>

	<h3>Каталог</h3><br>
	<?php foreach ($products as $id=>$product)
	{?>
		<figure>
			<p><img src="<?=$product['img']?>" alt="" /></p>
			<figcaption><?=$product['name']?></figcaption>
			<figcaption><?=$product['Price']?></figcaption>
			<a href="/form.php/?id=<?=$product['id']?>" class='btn'>Оформить</a>
		</figure> <?php
	}?>
	<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/template/footer.php';?>

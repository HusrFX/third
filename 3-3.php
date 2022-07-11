<?php
$products=[
	[
		'name' => 'Ancient',
		'imga' => "img/Ancient.png",
		'Price' => 'free',
	],
	[
		'name' => 'Vertigo',
		'Price' => '$10',
		'imga' => 'img/Vertigo.png',
	],
	[
		'name' => 'Nuke',
		'Price' => '$20',
		'imga' => 'img/Nuke.jpg',
	],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="main.css">
	<title>Document</title>
</head>
<body>
	<?php foreach ($products as $product)
	{?>
		<figure>
			<p><img src="<?=$product['imga']?>"/></p>
			<figcaption><?=$product['name']?></figcaption>
			<figcaption><?=$product['Price']?></figcaption>
			<a href=form.php class='btn'></a>
		</figure> <?php
	}?>
</body>
</html>
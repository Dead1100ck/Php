<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<h2>Задание 1</h2>
	<h3>Создайте массив, заполненный числами от 1 до 100. Найдите сумму элементов данного массива.</h3>

	<?php
		$arr = range(1, 100);
		$sum = 0;

		foreach($arr as $el)
			$sum += $el;

		echo "Сумма элементов массива: ".$sum;
	?>
</body>
</html>
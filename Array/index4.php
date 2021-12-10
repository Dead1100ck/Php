<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<h2>Задание 4</h2>
	<h3>Даны два массива: первый с элементами 1, 2, 3, второй с элементами 'a', 'b', 'c'. Сделайте из них массив с элементами 1, 2, 3, 'a', 'b', 'c'.</h3>

	<?php
		$arr1 = array(1, 2, 3);
		$arr2 = array('a', 'b', 'c');
		$arr3 = array_merge($arr1, $arr2);

		echo "Первый массив: ";
		foreach($arr1 as $el)
			echo $el." ";

		echo "<br/>Второй массив: ";
		foreach($arr2 as $el)
			echo $el." ";

		echo "<br/>Третий массив: ";
		foreach($arr3 as $el)
			echo $el." ";
	?>
</body>
</html>
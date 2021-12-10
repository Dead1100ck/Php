<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<h2>Задание 5</h2>
	<h3>Дан массив с элементами 1, 2, 3, 4, 5. С помощью функции array_slice создайте из него массив $result с элементами 2, 3, 4.</h3>

	<?php
		$arr = array(1, 2, 3, 4, 5);

		echo "Массив: ";
		foreach ($arr as $el)
			echo $el." ";

		$arr = array_slice($arr, 1, 3);
		echo "<br/>Срез массива: ";
		foreach ($arr as $el)
			echo $el." ";
	?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<h2>Задание 2</h2>
	<h3>Дан массив с элементами 'a', 'b', 'c', 'd', 'e'. С помощью функции array_map сделайте из него массив 'A', 'B', 'C', 'D', 'E'.</h3>

	<?php
		$arr = array('a', 'b', 'c', 'd', 'e');

		echo "Изначальный массив: ";
		foreach($arr as $el)
			echo $el." ";

		$arr = array_map('strtoupper', $arr);

		echo "<br/>Массив после преобразования: ";
		foreach($arr as $el)
			echo $el." ";
	?>
</body>
</html>
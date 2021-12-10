<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<h2>Задание 3</h2>
	<h3>Дан массив с числами. Проверьте, что в нем есть элемент со значением 3.</h3>

	<?php
		$arr = array(rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5));
		$check_number = false;

		echo "Массив: ";
		foreach($arr as $el)
			echo $el." ";

		$check_number = in_array('3', $arr);
		if ($check_number == false)
			echo "<br/>Числа 3 в массиве нет";
		else
			echo "<br/>Число 3 в массиве есть";
	?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="index.php">
		<input type="checkbox" name="Product1" value="Молоко"/>Молоко<input type="number" name="Count1"/><br/>
		<input type="checkbox" name="Product2" value="Сыр"/>Сыр<input type="number" name="Count2"/><br/>
		<input type="checkbox" name="Product3" value="Хлеб"/>Хлеб<input type="number" name="Count3"/><br/>
		<input type="checkbox" name="Product4" value="Банан"/>Банан<input type="number" name="Count4"/><br/><br/>
		<input type="submit"/><br/><br/>
	</form>

	<?php
		class Product {
			public function GetProducts() {
				$arr = array();

				if (isset($_POST["Product1"])) {
					$arr[$_POST["Product1"]] = $_POST["Count1"] == "" ? 0 : $_POST["Count1"];
				}
				if (isset($_POST["Product2"])) {
					$arr[$_POST["Product2"]] = $_POST["Count2"] == "" ? 0 : $_POST["Count2"];
				}
				if (isset($_POST["Product3"])) {
					$arr[$_POST["Product3"]] = $_POST["Count3"] == "" ? 0 : $_POST["Count3"];
				}
				if (isset($_POST["Product4"])) {
					$arr[$_POST["Product4"]] = $_POST["Count4"] == "" ? 0 : $_POST["Count4"];
				}

				return $arr;
			}
		}

		class Order {
			public $Orders;

			public function AddOrder($arr) {
				$this->Orders = $arr;
			}

			public function GetOrder() {
				if (count($this->Orders) == 0) {
					echo "Вы ничего не заказали";
				}
				else {
					echo "Текущий заказ<br/>";
					foreach($this->Orders as $key => $value) {
						echo $key." ".$value."<br/>";
					}
				}
			}
		}

		$p = new Product();
		$o = new Order();
		$o->AddOrder($p->GetProducts());
		$o->GetOrder();	
	?>
</body>
</html>
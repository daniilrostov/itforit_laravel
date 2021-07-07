<?php

$conn = new mysqli(locahost, root, "et5dq0Ayp/6H");

$sql = "select * from itforit";

$res = $conn->query($sql);

foreach ($res as $i) {
	echo $res[$i];
}




class animal {
	public $color;
	public $age;
	
	function __construct($color, $age) {
		$this->color = $color;
		$this->age = $age;
	}
	
	public function show() {
		echo "<h1>It is animal " . $this->color . " and age: " . $this->age . ".</h1>";
	}
}

$cat = new animal("black", 3);

$cat->show();

$app = array(1, 2, "vi");

for ($x=0; $x<count($app); $x++) {
	echo $app[$x];
}

?>

<p>-Make a Class named "Number". Take two variables number1 and number2. Now set their values by setter and get the number which is bigger.<p>
<h1><?php
	class number{
		public $num=500;
		public $num1=600;
		public $number3;

		public function setNumber($number){
			$this->num=$number;
		}

		public function getNumber(){
			return $this-> num;
		}

	}

	
	$number1 = new number;
	$number1 ->setNumber(500);
	$green = $number1 ->getNumber();

	$number2 = new number;
	$number2 ->setNumber(700);
	$red =  $number2 ->getNumber();

	$bigger = array($green,$red);
	echo "The number is bigger ".max($bigger)." between "."  ".$green."  ".$red;
	
?> 
</h1>
<h2><?php

$polash = new number();
	$polash -> setNumber(2000);

	$shimul = new number();
	$shimul -> setNumber(5000);

	$joba = new number();
	$joba   -> setNumber(7000);

	$call = array($polash->getNumber(),$shimul->getNumber(),$joba->getNumber());
	echo "<b>"."Bigger Number is ".max ($call)." within ".$polash->getNumber()." ".$shimul->getNumber()." &".$joba->getNumber()."</b>";

?>
</h2>
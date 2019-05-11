<?php
namespace App;
class Number{
	public function checknumber($number){
		$i = 1;
		while($i <= $number){
			$a = $this->IsPrime($i);
			if ($a!=0)
				$this->multiplication($i);
			
			$i++;
		}
	}
	/*
		Function : IsPrime
		Parameter : $n - integer number
		Return : true if number $n is prime else 0 
	*/
	function IsPrime($n)
	{
		for($x=2; $x<$n; $x++){
			if($n %$x ==0){
			   return 0;
			 }
		}
		return 1;
	}
	/*
		Function : multiplication
		Parameter : $num - integer number
		Return : return multiplication of a $num
	*/
	function multiplication($num){
		$j=1;
		while ($j<=10)
		{
			$total=$num*$j;
			echo $num." * ".$j." = ".$total."<br>";
			$j++;
		}
		echo "<br/><br/>";
	}
}

$classob = new Number();
$classob->checknumber(5);

?>
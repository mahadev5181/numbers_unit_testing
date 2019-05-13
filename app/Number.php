<?php
namespace App;
class Number{
	public function checknumber($number,$count){
		$i = 1;
		$prime_num_array = [];
		$counter = 1;
		while($i <= $number){
			if($counter <= $count){
				$a = $this->IsPrime($i);
				if ($a!=0){
					$this->prime_num_array[] = $i;
					$counter++;
				}
			}
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
	*/
	function multiplication(){
		foreach($this->prime_num_array as $val){
			foreach($this->prime_num_array as $jval){
				echo $val * $jval."  ";
			}
			echo "<br/><br/>";
		}
	}
}

$classob = new Number();
$classob->checknumber(100,10);
$classob->multiplication();

?>
<?php

class NumberTest extends \PHPUnit_Framework_TestCase{
	public function testThatItsPrimeNumber(){
		$number = new \App\Number;
		$this->assertTrue($number->checknumber(5), true);
	}
}
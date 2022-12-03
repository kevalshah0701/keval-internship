<?php

class abc{
	public function first(){
		echo "This is first function<br><br>";
		return $this;
	}
	public function second(){
		echo "This is second function<br><br>";
		return $this;
	}
	public function third(){
		echo "This is third function<br><br>";
	}
}

$test = new abc();

$test->first()->second()->third();
?>
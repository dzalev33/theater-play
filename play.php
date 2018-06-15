<?php

interface canDance {
	public function dance($text);
}

interface canSing {
	public function sing($text);
}
class Artist implements canSing
{
	protected $name;
	protected $age;

	function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}

	function printNameAge()
	{
		echo $this->name.' ('.$this->age.'): ';
	}

	public function sing($text){
		echo $text.' ';
	}
}

class Dancer extends Artist implements canDance
{
	function __construct($name, $age)
	{
		parent::__construct($name, $age);
	}

	function dance($text){
		echo '[gesture]'.$text.'[gesture]';
	}

}

function play()
{	
	$john = new Artist('John', 39);
	$john->printNameAge();
	$john->sing("Once upon a time ");
	echo "\n"; 

	$tom = new Dancer('Tom', 23);
	$tom->printNameAge();
	$tom->sing("There was a girl");
	$tom->dance("points the hand to another girl artist");
	echo "\n"; 

	$andre = new Artist('Andre', 50);
	$andre->printNameAge();
	$andre->sing("That lived in a small village.");
	echo "\n"; 

	$michael = new Dancer('Michael', 30);
	$michael->printNameAge();
	$michael->sing("She loved to read books");
	$michael->dance("holds a book in hand while speaking");
	echo "\n"; 

	$sofia = new Artist('Sofia', 30);
	$sofia->printNameAge();
	$sofia->sing("And her biggest wish was to become a writer.");
	echo "\n"; 
}

play();

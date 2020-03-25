<?php

class User {
	public $name;
	public $age;

	public function __construct($name, $age){ //paduodam i funcija
		//echo 'constructor ran...'; //runs everytime this object is created (Instatiate a user) object) //rodys tiek kartu kiek bus sukurta nauju objektu
		echo 'Class ' . __CLASS__ . ' instantiated<br>'; //__CLASS__ parodo klases pavadinima
		$this->name = $name;//uzsetinam userio name  
		$this->age = $age; //uzsetinam age,
	}

	public function sayHello(){
		echo $this->name . 'Says hello';
	}

    //Call when no other reference to certain object
    //Usedfor cleanup, closing connections, etc
	public function __destruct(){
		echo 'destructor run...<br>';
	}	//use when no refereces to particular object, usually use for cleanup connections to database //suveikia po paskutinio objekto sukurimo
	
}

$user1 = new User('Martin', 36);
echo $user1->name . ' is '  . $user1->age . ' years old.';
echo '<br>';
echo $user1->sayHello();

echo '<br>';

$user2 = new User('Andrius', 58);
echo $user2->name . ' is '  . $user2->age . ' years old.';
echo '<br>';
echo $user2->sayHello();
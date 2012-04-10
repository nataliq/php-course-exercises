<?php
	
	interface A{
		public function setFirstName($fname);
		public function setLastName($lname);
		public function getFirstName();
		public function getLastName();
	}
	
	interface B{
		public function setName($name);
		public function getName();
	}
	class Adaptee implements B{
		private $name;
		public function setName($name){
			$this->name = $name;
		}
		public function getName(){
			return $this->name;
		}
	}
	
	//creating a B-to-A object adapter
	class Adapter implements A{
		/**
		* A reference to another Adaptee object
		* @var Adaptee
		*/
		private $adaptee;
		
		/**
		* First name indentifier
		* @var string 
		*/
		private $firstName;
		
		/**
		* Last name indentifier
		* @var string 
		*/
		private $lastName;
		
		public function __construct(B $adapt){
			$this->setAdaptee($adapt);
		}
		
		private function setAdaptee(B $adapt){
			$this->adaptee = $adapt; 
		}
		public function setFirstName($fname){
			$this->firstName = $fname;
		}
		public function setLastName($lname){
			$this->lastName = $lname;
		}
		public function getFirstName(){
			$temp = explode(" ", $this->adaptee->getName());
			$this->firstName = $temp[0];
			return $this->firstName;
		}
		public function getLastName(){
			$temp = explode(" ", $this->adaptee->getName());
			$this->lastName = $temp[1];
			return $this->lastName;
		}
	}
	
	$adaptee = new Adaptee();
	$adaptee->setName("Nataliya Nikolaewa");
	$adapter = new Adapter($adaptee);
	echo "Fullname: " . $adaptee->getName() . "<br>";
	printf("First name: %s <br>", $adapter->getFirstName());
	printf("Last name: %s <br>", $adapter->getLastName());
	
	
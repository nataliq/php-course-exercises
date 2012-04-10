<?php
	class Person{
		private $name;
		private $id;
		private $occupation;

		 function __construct($name_, $id_, $occupation_){
			 $this->name=$name_;
			 $this->id=$id_;
			 $this->occupation=$occupation_;
		 }
		 function getName(){
			return $this->name;
		 }
		 function getId(){
			return $this->id;
		 }
		 function getOccupation(){
			return $this->occupation;
		 }
		 
		 function represent(){
			return 'Person with name "'. $this->getName() .'" and id ' . $this->getId() . ' have current occupation: ' . $this->getOccupation();
		 }
		 
	}
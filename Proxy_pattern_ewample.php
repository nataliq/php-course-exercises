<?php 
	include_once('Person.php');
	include_once('PeopleList.php');
	
	class ProxyPeopleList{
		private $peopleList = NULL;
		function __construct() {}
		function makePeopleList() {
			  $this->peopleList = new PeopleList();
		}
		function getPeopleCount(){
			if(NULL == $this->peopleList){
			$this->makePeopleList();
			}
			return $this->peopleList->getPeopleCount();
		}
		function  addPerson($person_){
			if(NULL == $this->peopleList){
				$this ->makePeopleList();
			}
			return $this->peopleList->addPerson($person_);
		}
		function removePerson($person_) {
			 if (NULL == $this->peopleList) {
				$this->makePeopleList();
			 } 
			 return $this->peopleList->removePerson($person_);
		}

	}
	
	define('BR', '<'.'BR'.'>');
	echo 'BEGIN TESTING PROXY PATTERN'.BR;
	echo BR;
	  
	$proxyPeopleList = new ProxyPeopleList();	  
	$newPerson = new Person('Nikolay','61300','Programmer');
	  
	$proxyPeopleList->addPerson($newPerson);
	  
	  echo 'test 1 - show the people count after a person is added: '.BR;
	  echo $proxyPeopleList->getPeopleCount();
	  echo BR.BR;

	  $proxyPeopleList->removePerson($newPerson);
	  
	  echo 'test 2 - show the people count after a person is removed: '.BR;
	  echo $proxyPeopleList->getPeopleCount();
	  echo BR.BR;

	  echo 'END TESTING PROXY PATTERN'.BR;

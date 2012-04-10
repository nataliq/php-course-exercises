<?php
include_once('Person.php');
 class PeopleList{
  private $people=array();
  private $peopleCount=0;
  public function __construct() {
    }
	 public function getPeopleCount() {
      return $this->peopleCount;
    }


    private function setPeopleCount($newCount) {
      $this->peopleCount = $newCount;
    }
	public function addPerson(Person $newPerson){
		$this->setPeopleCount($this->getPeopleCount()+1);
		$this->people[$this->getPeopleCount()] = $newPerson;
		return $this->getPeopleCount();
	}
	public function removePerson(Person $person_){
		$counter = 0;
		while(++$counter<= $this->getPeopleCount()){
			if($this->people[$counter]->represent() == $person_->represent()){
				for($y=$counter;$y < $this->getPeopleCount();$y++){
				$this->people[$y] = $this->people[$y+1];
			}
			$this->setPeopleCount($this->getPEopleCount()-1);
			}
		}
		return $this->getPeopleCount();
	}
	
	
	
	


    
 }
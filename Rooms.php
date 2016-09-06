<?php
class Room {
	
	protected $name;
	protected $capacity;
	protected $lines;
	 
	public function __construct($name, $capacity, $lines){
		$this->name = $name;
		$this->capacity= $capacity;
		$this->lines= $lines;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function getCapacity(){
		return $this->capacity;
	}
	
	public function getLines(){
		return $this->lines;
	}
	
}



class Cinema_Room extends Room {
	protected $screenSize;
	protected $screenType;
	protected $soundType;
	
	public function __construct($name, $capacity, $lines, $screenSize, $screenType, $soundType){
		parent::__construct($name, $capacity, $lines);	
		$this->screenSize=$screenSize;	
		$this->screenType=$screenType;
		$this->soundType=$soundType;
	}
	public function getScreenSize(){
		return $this->screenSize;
	}
	
	public function getScreenType(){
		return $this->screenType;
	}
	
	public function getSoundType(){
		return $this->soundType;
	}
}

class Theater_Room extends Room {
	protected $dressingRooms;

	public function __construct($name, $capacity, $lines, $dressingRooms){
		parent::__construct($name, $capacity, $lines);	
		$this->dressingRooms=$dressingRooms;	
	}

	public function getDressingRooms(){
		return $this->dressingRooms;
	}

}

?>




















<?php
class Play {
	
	protected $name;
	protected $director;
	protected $actors;
	 
	public function __construct($name, $director, $actors){
		$this->name = $name;
		$this->director= $director;
		$this->actors= $actors;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function getDirector(){
		return $this->director;
	}
	
	public function getActors(){
		return $this->actors;
	}
	
}



class Movie_Play extends Play {
	protected $duraction;
	
	public function __construct($name, $director, $actors, $duraction){
		parent::__construct($name, $director, $actors);	
		$this->duraction=$duraction;	
	}
	public function getDuraction(){
		return $this->duraction;
	}
}

class Theater_Play extends Play {
	protected $dressingRooms;

	public function __construct($name, $capacity, $lines){
		parent::__construct($name, $capacity, $lines);	
	}

}

?>




















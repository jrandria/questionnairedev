<?php
class foo {
	private $unevariable = 'test';
	  
	final function getMessage();
	  
	public function something() {
	    echo __CLASS__; // (1)
	    var_dump($this);
	}
  
  	public function faitceci() {
  		print_r($this);
  	}
}

class foo_bar extends foo
{
    public function __construct() {
        parent::__construct();
        print "In SubClass constructor\n";
        echo $unevariable; // (2)
    }

	private function faitceci() { // (3)
		echo 'faitceci()';
	}
	
	public function something() {
	    echo __CLASS__; 
	    var_dump($this);
	}
}

class foo_bar_baz extends foo_bar
{
  public function something() {
    echo __CLASS__;
    var_dump($this);
  }
  
  function getMessage() {// (4)
  }
  
  public function call() {
    echo self::something(); // (5)
  }
}

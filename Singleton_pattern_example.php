<?php
	class SingletonExample {
		private  static $object;
		
		private function __construct(){}
		
		public function __clone(){
			trigger_error("Clone is not allow",E_USER_NOTICE);
		}
		public static function singleton() {
			if (!isset(self::$object)) {
				$class = __CLASS__;
				self::$object = new $class;
				echo "Creating new instance of class $class</br>";
			}
        return self::$object;
		}
	}
	
	$test1=SingletonExample::singleton();
	$test2=SingletonExample::singleton();
	if($test1===$test2){
		echo "Singletone pattern works fine";
	} 
	else {
		echo "PROBLEM";
	}
	
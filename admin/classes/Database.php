<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "vatiza", "admin", "ecommerce_db");
		return $this->con;
	}
}

?>
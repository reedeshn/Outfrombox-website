<?php

class dbjoin
{
	protected $host = 'localhost';
	protected $user = 'root';
	protected $password = '';
	protected $database = 'maindbofb';


	// connection property
	public $con = null;

	//Constructor
	public function __construct()
	{
		$this->con = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		if($this->con->connect_error){
			echo "Fail".$this->con->connect_error;
		}
	}

	public function __destruct(){
		$this->closeConn();
	}
	
	//closing mysqli connection
	protected function closeConn()
	{
		if($this->con != null){
			$this->con->close();
			$this->con = null;
		}

	}
}

?>

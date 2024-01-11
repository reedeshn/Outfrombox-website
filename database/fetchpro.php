<?php


//fetch product data
class fetchpro
{
	public $db = null;

	public function __construct(dbjoin $db)
	{
		if(!isset($db->con)) return null;
		$this->db = $db;
	}

	//fetch product from mysql 
	public function getData($table = 'product')
	{
		$result = $this->db->con->query(query:"SELECT * FROM {$table} LIMIT 6");

		$resultArray = array();

		//fetch data one by one
		while($item = mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			$resultArray[] = $item;	
		}

		return $resultArray;

	}

	//fetch product from mysql 
	public function getLocalData($table = 'product')
	{
		$result = $this->db->con->query(query:"SELECT * FROM {$table} LIMIT 6 OFFSET 12");

		$resultArray = array();

		//fetch data one by one
		while($item = mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			$resultArray[] = $item;	
		}

		return $resultArray;

	}

		//fetch product from mysql 
	public function getMoreData($table = 'product')
	{
		$result = $this->db->con->query(query:"SELECT * FROM {$table} LIMIT 6 OFFSET 20");

		$resultArray = array();

		//fetch data one by one
		while($item = mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			$resultArray[] = $item;	
		}

		return $resultArray;

	}

	//fetch product from mysql 
	public function getNewData($table = 'product')
	{
		$result = $this->db->con->query(query:"SELECT * FROM {$table} LIMIT 6 OFFSET 18");

		$resultArray = array();

		//fetch data one by one
		while($item = mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			$resultArray[] = $item;	
		}

		return $resultArray;

	}


	//get product using product_id
	public function getProduct($item_id = null,$table = 'product')
	{
		if(isset($item_id))
		{
			$result = $this->db->con->query(query:"SELECT * FROM {$table} WHERE item_id={$item_id}");

			$resultArray = array();

		//fetch data one by one
		while($item = mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			$resultArray[] = $item;	
		}

		return $resultArray;
		}
	}

	public function getLocalProduct($item_id = null,$table = 'localpro')
	{
		if(isset($item_id))
		{
			$result = $this->db->con->query(query:"SELECT * FROM {$table} WHERE item_id={$item_id}");

			$resultArray = array();

		//fetch data one by one
		while($item = mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			$resultArray[] = $item;	
		}

		return $resultArray;
		}
	}


}
?>


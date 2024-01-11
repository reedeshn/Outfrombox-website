<?php

class cart
{
	public $db = null;

	public function __construct(dbjoin $db)
	{
		if(!isset($db->con)) return null;
		$this->db = $db;
	}

	//insert into cart table
	public function intoCart($para = null, $table = "cart")
	{
		if($this->db->con != null) {
			if($para != null)
			{
				$columns = implode(',', array_keys($para));
			
				$values = implode(',',array_values($para));

				//sql query
				$query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)",$table,$columns,$values);

				//execute query
				$result = $this->db->con->query($query_string);
				return $result;
		
			}
		}
	}


	//gets the user_id and item_id and insert into cart table
	public function addToCart($userid,$itemid)
	{
		if(isset($userid)&&isset($itemid))
		{
			$para = array(
				"user_id"=>$userid,
				"item_id"=>$itemid
			);

			//insert data in cart
			$result = $this->intoCart($para);
			
			
		}
	}


	//delete cart item
	public function deleteCart($item_id=null, $table='cart')
	{
		if($item_id != null)
		{
			$result = $this->db->con->query("delete from {$table} where item_id={$item_id}");
			if($result)
			{
				header("Location:".$_SERVER['PHP_SELF']);
			}
		return $result;
		}
	}

	


	//calculate the total price
	public function getSom($arr)
	{
		if(isset($arr))
		{
			$sum=0;
			foreach($arr as $item)
			{
				$sum+=floatval($item[0]);
			}
		return sprintf('%2d',$sum);
		}
	}

	//STOP FROM ADDING DUPLICATE ITEMS
	public function getCartId($cartArr = null,$key = "item_id")
	{
		if($cartArr != null)
		{
			$cart_id = array_map(function($value) use($key){
				return $value[$key];
			},$cartArr);
		return $cart_id;
		}
	}

	//wishlist
	public function wishList($item_id = null, $saveTable = "wishlist", $fromTable = "cart"){
        if ($item_id != null){
            $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id={$item_id};";
            $query .= "DELETE FROM {$fromTable} WHERE item_id={$item_id};";
            
            // execute multiple query
            $result = $this->db->con->multi_query($query);

            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }






}

?>
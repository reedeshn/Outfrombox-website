//Product button: Product page

let $qtn_up = $(".qtn .qty-up");
let $qtn_down = $(".qtn .qty-down");
let $deal_price = $("#deal_price");
//let $input = $(".qtn .qty_input");

$qtn_up.click(function(e){

	let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
	let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

	//change product price
	$.ajax({url:"Template/ajax.php",type:'post',data:{itemid:$(this).data("id")},success:function(result){
		let oj = JSON.parse(result);
		let item_price = oj[0]['item_price'];

		if($input.val()>=1 && $input.val()<=4){
		$input.val(function(i,oldval){
			return ++oldval;
		});

		//increase the product price
		$price.text(parseInt(item_price*$input.val()).toFixed(2));

		//for subtotal
		let subtotal = parseInt($deal_price.text())+parseInt(item_price);
		$deal_price.text(subtotal.toFixed(2));
	}
	
	}});//close ajax request

	
	
});


$qtn_down.click(function(e){
	let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
	let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

	//change product price
	$.ajax({url:"Template/ajax.php",type:'post',data:{itemid:$(this).data("id")},success:function(result){
		let oj = JSON.parse(result);
		let item_price = oj[0]['item_price'];

	if($input.val()>1 && $input.val()<=5){
		$input.val(function(i,oldval){
			return --oldval;
		});


		//increase the product price
		$price.text(parseInt(item_price*$input.val()).toFixed(2));

		//for subtotal
		let subtotal = parseInt($deal_price.text())-parseInt(item_price);
		$deal_price.text(subtotal.toFixed(2));
	}

	}});//close ajax request

	
});



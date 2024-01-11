//About the img in product page

var mainimg = document.getElementById('mainimg');
var smallimg = document.getElementsByClassName('small-img');

smallimg[0].onclick = function(){
	mainimg.src = smallimg[0].src;
}

smallimg[1].onclick = function(){
	mainimg.src = smallimg[1].src;
}

smallimg[2].onclick = function(){
	mainimg.src = smallimg[2].src;
}

smallimg[3].onclick = function(){
	mainimg.src = smallimg[3].src;
}

//Product button: Product page

let $qtn_up = $(".qtn .qty-up");
let $qtn_down = $(".qtn .qty-down");
let $input = $(".qtn .qty-input");

$qtn_up.click(function(e){
	if($input.val()>=1 && $input.val()<=4){
		$input.val(function(i,oldval){
			return ++oldval;
		});
	}
});


$qtn_down.click(function(e){
	if($input.val()>1 && $input.val()<=5){
		$input.val(function(i,oldval){
			return --oldval;
		});
	}
});








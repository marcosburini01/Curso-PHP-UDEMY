<?php  

function test($callback){

	//processo lento

	$callback();

}


test(function(){
	echo "TERMINOU";
}
);

?>
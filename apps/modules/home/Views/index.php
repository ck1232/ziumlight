<?php
if (isset($cards)){
	foreach($cards as $card){
		echo modules::run($card);
	}
} 
?>
<?php
function linkGenerator($lenght)
{
	$char = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz@#$&*";
	$link = "";
	for ($i=0; $i <= $lenght; $i++) { 
		$link .= $char[rand(0,strlen($char)-1)];
	}
	return $link.'.php';
}

// echo linkGenerator(8);




?>
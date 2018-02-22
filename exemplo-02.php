<?php 

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'João',
	'idade'=>20
));


array_push($pessoas, array(
	'nome'=>'Leonardo',
	'idade'=>27
));

echo '<pre>';

print_r($pessoas);

echo '<hr>';

print_r($pessoas[0]);

echo '<hr>';

print_r($pessoas[1]['nome']);

echo '</pre>';
 ?>
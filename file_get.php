<?php
	$json= file_get_contents('order_fetch.json');
	//echo $json;
	$decode= json_decode($json);
	echo "<pre>";
	print_r($decode->orders[0]);
	echo "Product Qty: ".count($decode->orders[1]->line_items);
	echo "</pre>";
?>
<?php
include '../config/class.php';

// contoh panggil yg edit
$data=["ID"=>"cus_DsXuZ0FyplChUL",
	   "description"=>"Mari Berbelanja",
	   "email"=>"Ismulativah@gmail.com"];
$result = $myStripe->update_charger($data)['email'],$data['description'],$data['id']);
echo "<pre>";print_r($result);

?>
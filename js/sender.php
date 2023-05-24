<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];

	$to = "ridnirechi@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = "R1ndaman@testwordpress.zzz.com.ua";
	$subject = "Завка Ліда Речі";

	
	$msg="
    Имя: $name /n
    Телефон: $phone /n"; 	
	mail($to, $subject, $msg, "From: $from ");

?>

<p>Дякуємо! Очікуйте на дзвінок.</p>

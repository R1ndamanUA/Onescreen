<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];

	$to = "lesnika95@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = "lesnika95@gmail.com";
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name /n
    Фамилия: $surname /n
    Телефон: $phone /n
    Почта: $email /n
    Текст: $text"; 	
	mail($to, $subject, $msg, "From: $from ");

?>

<p>Привет, форма отправлена</p>

<?php
$name = $_GET["name"];
$addr = $_GET["addr"];
$comm = $_GET["comm"];
$from = "web@itforit.ru";
$subject = "=?utf-8?B?".base64_encode($subject)."?=";
$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
$bro = $_SERVER['REMOTE_ADDR'];
if ($name == "") {
        header("refresh:5;http://itforit.ru/#contact");
        echo ('<h1>Ups. You should make it over form.</h1>');
        mail('daniil-rostov@list.ru', "Спамер создал(а) заявку на ИТ помощь", "Я спамер. Мой IP: $bro",$headers);
        exit;
}
else
        {mail('daniil-rostov@list.ru', "$subject $name создал(а) заявку на ИТ помощь", "$comm. Мой контакт $addr, Мой IP: $bro",$headers);
}
echo $name;
?>

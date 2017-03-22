<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>النتيجة لكابتشا</title>
</head>

<body>
<?php
$input = $_POST['hcaptcha_input'];
$ch    = $_POST['hcaptcha_challenge'];
$key    = $_POST['hcaptcha_key'];
$lang   = $_POST['hcaptcha_language'];
 if(empty ($input) || empty ($ch) || empty ($key) || empty ($lang))
 die('false'); 
 $url ="http://captcha.hsoub.com/api/%s/verify?key=%s&input=%s&challenge=%s";
 $url = sprintf ($url,$lang,$key,$input);
 $request = curl_init($url);
 curl_setopt($request,CURLOPT_RETURNTRANSFER,1);
 $response = curl_exec($request);
 curl_close($request);
 if ($response =="true" )
 {
	echo ' نم الادخال بشكل صحيح'; 
	 }
	 else 
	 {
		echo ' نم الادخال بشكل خاطئ'; 
	 }
	 
?>
</body>
</html>
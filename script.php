<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="description" content="Moorish House is a detached holiday home, situated in Aghmat in the Marrakech-Tensift-El Haouz Region on the main road to Ourika Valley" />
<meta name="keywords" content="Inn,b&b,affordable,house,Aghmat,Ourika Valley,marrakech,tensift,el haouz,booking.com,Expedia,Airbnb,gay friendly,Marrakech-Tensift-El Haouz" />
<meta name="author" content="Moorish Gardens" />
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/logo.jpg">
<title>Moorish Gardens</title>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/logo.jpg">


</head>
<body>

<style>*,::after,::before{webkit-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box}htm,body{font: normal 14px/1.4 'Arima Madurai',serif;font-weight:300;margin:0;color:#fff;background:#1F6820;-webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility;overflow:hidden}a{width:auto;text-decoration:none;background:rgba(0,0,0,0.6);color:#000}header{padding:3px;border-bottom:0.5px solid #fff;}.container>header{position:relative;padding-bottom:20px}a.entre{width:auto;border-radius:0 10px 0 10px;padding:0 2px;background:orange}header>.entre,.title,.logo img{vertical-align:middle}span{color:#ff0;display:inline-block}strong>span{margin:0 2px;color:#fff}div>span{display:block}h1>span{display:block;font-family:'Arima Madurai',serif;font-variant:small-caps;line-height:0;font-size:13px;padding:0;font-weight:300;color:#fff}h1{font-size:24px;line-height:35px}.title,.logo,button{vertical-align:middle;display:inline-block}.logo img{border-radius:5px;width:53px;height:53px}.bttm-tools{margin:20px 0}.bttm-tools a{font-size:14px;border-radius:5px;padding:0.1% 0.4%;color:#fff;margin:0 8px}.container{position:absolute;top:0;left:0;width:100%;height:100%;padding:20px;}.trigger-back{position:absolute;top:0;margin:3%;right:0;width:25px;height:25px;line-height:25px;border-radius:50%;text-align:center;background:#ededed;cursor:pointer}#map{position:relative;top:0;left:0;width:100%;height:90%}.contact td{display:inline-table}.contact label{display:block;color:#fff;font-size:95%;font-weight:700;line-height:150%;margin:0;padding:0 0 3px;border:none;white-space:normal}.contact textarea{width:250px;height:60px;display:block}.contact tr{display:block}#top-raw{width:320px}@media only screen and (max-width:1024px) and (min-width:220px){htm,body{font-weight:600}#map{width:100%;height:100%}header,.container>header{padding:5px;width:100%;background:#000}.container{padding:0}}</style>
<style>@font-face{font-family:'Arima Madurai';font-style:normal;font-weight:400;src:local('Arima Madurai'),local('ArimaMadurai-Regular'),url(https://fonts.gstatic.com/s/arimamadurai/v2/8fNfThKRw_pr7MwgNdcHieOcRrl6Of6EMOqimOKNePc.woff2) format('woff2');unicode-range:U+0964-0965,U+0B82-0BFA,U+200B-200D,U+20B9,U+25CC}@font-face{font-family:'Arima Madurai';font-style:normal;font-weight:400;src:local('Arima Madurai'),local('ArimaMadurai-Regular'),url(https://fonts.gstatic.com/s/arimamadurai/v2/8fNfThKRw_pr7MwgNdcHiUwCeDsz2Chx7aYVpw8ne6I.woff2) format('woff2');unicode-range:U+0102-0103,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Arima Madurai';font-style:normal;font-weight:400;src:local('Arima Madurai'),local('ArimaMadurai-Regular'),url(https://fonts.gstatic.com/s/arimamadurai/v2/8fNfThKRw_pr7MwgNdcHiYEMFHo8fJCOZjaCxXVE7N0.woff2) format('woff2');unicode-range:U+0100-024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Arima Madurai';font-style:normal;font-weight:400;src:local('Arima Madurai'),local('ArimaMadurai-Regular'),url(https://fonts.gstatic.com/s/arimamadurai/v2/8fNfThKRw_pr7MwgNdcHiRbke1jeBh3drm8XFbAU4Xs.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215}</style>
<body>

<div class="container">
<?php

define('_EMAIL_TO','contact@moorish-house.com');// your email address where reservation details will be received
define('_EMAIL_SUBJECT', 'Garden Maintenance |Moorish Gardens'); // email message subject
define('_EMAIL_FROM', $_POST["email"]);


$fields = array(
    array('name' => 'name', 'title' => 'Dear', 'valid' => array('require')),
    array('name' => 'text', 'title' => "<h1>Your next garden service has been booked. Thank You</h1> <br> Here is your appointment details"), 
    array('name' => 'email', 'title' => 'Email:'),
	array('name' => 'events-upcoming', 'title' => 'Appointment Date:'),
	array('name' => 'special-requirements', 'title' => 'Instructions:'),
	array('name' => 'text', 'title' => "<span>This service will be provided by <strong>Charaf Ouggag</strong> <br> Moorish Gardens</span><span style='display:inline-block'>🌹 Recommend us @</span> <div class='join'><a style='margin:0 10px 0 0' href='https://twitter.com/intent/tweet?via=MoorishGardens&text=Welcome%20to%20Moorish%20Gardens.%20Providing%20garden%20services%20to%20private%20and%20business%20clients' target='_blank'>Twitter</a>|<a style='margin:0 10px' href='https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fmoorish-house.com%2Fmoorish-gardens%2Findex.html&quote=Welcome%20to%20Moorish%20Gardens.%20Providing%20garden%20services%20to%20private%20and%20business%20clients' target='_blank'>Facebook</a>Contact: <a href='tel:+447411958160'>+44 7411958160 </a></div>")
);

$error_fields = array();
$email_content = array();
foreach ($fields AS $field){
	$value = isset($_POST[$field['name']])?$_POST[$field['name']]:'';
	$title = empty($field['title'])?$field['name']:$field['title'];
	$email_content[] = $title.' '.nl2br(stripslashes($value));
	$is_valid = true;
	$err_message = '';
	if (!empty($field['valid'])){
		foreach ($field['valid'] AS $valid) {
			switch ($valid) {
				case 'require':
					$is_valid = $is_valid && strlen($value) > 0;
					$err_message = 'Field required';
					break;
				case 'email':
					$is_valid = $is_valid && preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $value);
					$err_message = 'Email required';
					break;
				default:				
					break;
			}
		}
	}
	if (!$is_valid){
		if (!empty($field['err_message'])){
			$err_message = $field['err_message'];
		}
		$error_fields[] = array('name' => $field['name'], 'message' => $err_message);
	}
}

if (empty($error_fields)){
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers = "From: "._EMAIL_FROM."\r\n"; 
	$headers .= "Reply-To: "._EMAIL_FROM."\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	
	// Send email
	
	mail (_EMAIL_TO,_EMAIL_SUBJECT, implode('<hr>', $email_content), $headers);
	echo ("<header><div><h1>Moorish Gardens</h1></div></header>
    <div style='display:block;margin:3%'><br><strong>☺️|&nbsp;Thank You</strong><br><br><br>Your appointment submitted successfully<br><br>We will be in touch with you as soon as possible.<br>This service will be provided by:&nbsp;<strong>Charaf Ouggag</div><div><span style='display:inline;margin:0 10px 0 0'>🌹 Recommend us @</span><a style='color:#fff;background:transparent; margin:0 10px 0 0' href='https://twitter.com/intent/tweet?via=MoorishGardens&text=Welcome%20to%20Moorish%20Gardens.%20Providing%20garden%20services%20to%20private%20and%20business%20clients' target='_blank'>Twitter</a>|<a style='color:#fff;background:transparent; margin:0 10px' href='https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fmoorish-house.com%2Fmoorish-gardens%2Findex.html&quote=Welcome%20to%20Moorish%20Gardens.%20Providing%20garden%20services%20to%20private%20and%20business%20clients' target='_blank'>Facebook</a></div>");
}else{
	echo json_encode(array('code' => 'failed', 'fields' => $error_fields));
}
?>
</div>
</body>
</html>
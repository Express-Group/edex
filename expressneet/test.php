<?php
date_default_timezone_set ("Asia/Calcutta");
ini_set('display_errors',1);
require_once('phpmailer/class.phpmailer.php');
$to='krishraja005@gmail.com';
$subject="New User has registered";
	$from="admin";
	$from_name="EDEXLIVE";
	$from_id="admiddn@edexlive.com";
	$message ='<div style="float:left;width:98%;border:1px solid #eee;border-radius:5px;padding:10px;">'.
	'<div style="width:100%;float:left;text-align:center;">'.
	'<img style="width:25%;" src="http://images.edexlive.com/images/FrontEnd/images/NIE-logo21.jpg">'.
	'</div>'.
	'<h2 style="color: green;width: 100%;float: left;margin: 1% 0 1%;text-align: center;font-family: inherit;">A new user has registered</h2>'.
	'<table style="width:50%;margin:0 auto;border-collapse: collapse;">'.
	'<tr><td style="padding: 10px;border: 1px solid #eee;border-collapse: collapse;">Student Name</td><td style="padding: 10px;border: 1px solid #eee;border-collapse: collapse;">krishwer</td></tr>'.
	'<tr><td style="padding: 10px;border: 1px solid #eee;border-collapse: collapse;">Mobile Number</td><td style="padding: 10px;border: 1px solid #eee;border-collapse: collapse;">8428611815</td></tr>'.
	'<tr><td style="padding: 10px;border: 1px solid #eee;border-collapse: collapse;">Email Address</td><td style="padding: 10px;border: 1px solid #eee;border-collapse: collapse;">krishraja005@gmail.com</td></tr>'.
	'<tr><td style="padding: 10px;border: 1px solid #eee;border-collapse: collapse;">City</td><td style="padding: 10px;border: 1px solid #eee;border-collapse: collapse;">Chennai</td></tr>'.
	'<tr><td style="padding: 10px;border: 1px solid #eee;border-collapse: collapse;">Amount</td><td style="padding: 10px;border: 1px solid #eee;border-collapse: collapse;">350.0</td></tr>'.
	'<tr><td style="padding: 10px;border: 1px solid #eee;border-collapse: collapse;">Order id</td><td style="padding: 10px;border: 1px solid #eee;border-collapse: collapse;">23</td></tr>'.
	'<tr><td style="padding: 10px;border: 1px solid #eee;border-collapse: collapse;">Payment status</td><td style="padding: 10px;border: 1px solid #eee;border-collapse: collapse;color:green">Success</td></tr>'.
	'<tr><td style="padding: 10px;border: 1px solid #eee;border-collapse: collapse;">Bank Reference ID</td><td style="padding: 10px;border: 1px solid #eee;border-collapse: collapse;">5848524585</td></tr>'.
	'</table>'.
	'</div>';

		$email = new PHPMailer();
		$email->From      = $from;
		$email->FromName  = $from_name;
		$email->Debugoutput = 'html';
		$email->isHTML(true);
		$email->Subject   = $subject;
		$email->Body       = $message;
		$email->AddAddress( $to );
		$sentmail=$email->Send();
		if(!$sentmail)
		{
			echo 1;
		}
		else
		{
			echo 0;
		} 
		exit;
?>
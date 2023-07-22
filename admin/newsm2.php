<?php
$var1=$_POST['askname'];
echo "$var1";
$var2=$_POST['askmno'];
echo "<br>$var2";
$var3=$_POST['askmes'];
echo "<br>$var3";
$var4="hello ".$var1." the message from Online Blood Donation managment System your blood urgently need to following address <br>".$var3;
echo "<br>$var4";


$username="ThameemAnsari"; //create account in bulksms gate way for send sms

$password="ansari";

$message=$var4;

$sender="TestID"; //ex:INVITE

$mobile_number=$var2;

$url="login.bulksmsgateway.in/sendmessage.php?user=".urlencode($username)."&password=".urlencode($password)."&mobile=".urlencode($mobile_number)."&message=".urlencode($message)."&sender=".urlencode($sender)."&type=".urlencode('3');

$ch=curl_init($url);

curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

$curl_scraped_page=curl_exec($ch);

curl_close($ch); 
echo "sent successfully";


// $username="";

// $password=""

// $message="hello";

// $sender=""; //ex:INVITE

// $mobile_number="";

// $url="login.bulksmsgateway.in/sendmessage.php?user=.urlencode($username)."&password=".urlencode($password)."&mobile=".urlencode($mobile_number)."&message=".urlencode($message)."&sender=".urlencode($sender)."&type=".urlencode('3');

// $ch = curl_init($url);

// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// $curl_scraped_page = curl_exec($ch);

// curl_close($ch);

?>



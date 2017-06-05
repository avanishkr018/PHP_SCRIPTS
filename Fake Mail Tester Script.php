<html>
<h1>Fake Mailer</h1>
</html>

<table border=2>
<form action="" method=post>
<tr><td>Recipent: </td><td><input type=text name=email size=30></td></tr>
<tr><td>Sender name: </td><td><input type=text name=name size=30></td></tr>
<tr><td>Sender Email Address: </td><td><input type=text name=sender size=30></td></tr>
<tr><td>Subject: </td><td><input type=text name=subject size=30></td></tr>
<tr><td>Content: </td><td><textarea rows=10 cols=30 name=content></textarea></td></tr>
<tr><td><input type=submit value="Send Mail"></td></tr>
</form>
</table>


<?php
$email = $_POST['email'];
$content = nl2br($_POST['content']);
$content .= "This is a Fake mail, Sent for Testing or Educational Purpose. CyberCure Solutions is not Responsible for any Data Loss from this Mail";
$name = $_POST['name'];

$sender = $_POST['sender'];

$subject = $_POST['subject'];

$headers = "From: $name "."<".$sender.">\r\n";
//add boundary string and mime type specification
//$headers .= 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

//send the email
mail($email, $subject, $content, $headers );

?>

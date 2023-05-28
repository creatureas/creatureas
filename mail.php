<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>THANK YOU</title>
</head>

<body>
<?php $name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];
$formcontent="From: $name \n Message: $comments" \n Email: $email \n Phone $phone;
$recipient = "contactthemnz@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: http://creatureas.000webhostapp.com/creatureas/v5/index.html');
?>

</body>
</html>
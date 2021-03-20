 <?php

 if(isset($_POST["email"]) and isset($_POST["message"])){      
  $email=$_POST["email"];   $message=$_POST["message"];

$header="MIME-Version: 1.0\r\n";
$header.='Form:"Camer-Food.com"<support@Camer-Food.com>'."\n";
$header.='content-type:text/html; charset="utf-8"'."\n";
$header.='title:Camer-Food';
$header.='Content-Transfer-Encoding: 8bit';

$message = str_replace("\n.", "\n..", $message);
$email = $email.",pongenyengue48@gmail.com" ;

// send email
mail($email,$subject,$message, $header);
}
?> 
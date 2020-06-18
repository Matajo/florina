<?php
    if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];

$to      = 'Matajo98@gmail.com';
$subject = 'Formularz kontaktowy';
$message="Imię :".$name."\n"."Email :".$email. "\n"."Wiadomość :".$msg;
$headers = 'From: wordpress2033083@wordpress2033083.home.pl' . "\r\n" .
    'Reply-To: wordpress2033083@wordpress2033083.home.pl' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    	if(mail($to, $subject, $message, $headers)){
			echo "<script>alert('Wysłano!'); location.href='index.html';</script>";
		}
		else{
			echo "<script>alert('Wystpąpił problem z wysłaniem wiadomości!'); location.href='index.html';</script>";
		}
	}
?>
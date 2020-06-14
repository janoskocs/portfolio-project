<?php
$user_name = $_POST["user_name"];
$user_email = $_POST["user_email"];
$user_message = $_POST["user_message"];
$user_subject = $_POST["user_subject"];

$to      = 'contact@janoskocs.com';
$subject = $user_subject;
$message = $user_message . 'Sender\'s name is: ' . $user_name;
$headers = 'From: Portfolio' . "\r\n" .
    'Reply-To: '.$user_email."\r\n" .
    'X-Mailer: PHP/';

mail($to, $subject, $message, $headers);
?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Email Sent! | János Kócs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background: #3a7bd5;
            font-family: Courier;
            text-align: center;
            color: #fff;
        }
        img {
            width: 8vw;
        }
        a {
            font-size: 1.3rem;
            color: #fff;
            transition: .4s ease;
        }
        a:hover {
            transition: .4s ease;
            color: #30b133;
        }
    </style>

</head>
<body>
    <div class="container">
        <img src="../img/sent.png" alt="Picture of a check mark." draggable="false">
        <h1>Thank you <?php echo $user_name ?>!</h1>
        <h1>Your message has been sent to contact@janoskocs.com</h1>
        <br>
        <a href="http://janoskocs.com">Go back to janoskocs.com</a>
    </div>
</body>
</html>
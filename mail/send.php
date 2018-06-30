<?php
$user_name = $_POST["user_name"];
$user_email = $_POST["user_email"];
$user_message = $_POST["user_message"];

$to      = 'contact@janoskocs.com';
$subject = Mail from Portfolio
$message = $user_message . 'Sender\'s name is: ' . $user_name . ' <br>';
$headers = 'From: Portfolio' . "\r\n" .
    'Reply-To: '.$user_email."\r\n" .
    'X-Mailer: PHP/';

mail($to, $subject, $message, $headers);
?>

<html>
<head>
    <title>Email sent! Thank you.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i|Ubuntu:700,300" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <style>
        body {
            background-color: #efefef;
            text-align: center;
            font-family: 'Ubuntu', sans-serif;
        }
        a {
            color: #f34fb8;
        }
        a:hover {
            color: #5f5f5f;
        }
        img {
            width: 95px;
        }
    </style>
</head>
<body>
    <img src="../img/pink_checkmark.png" alt="Picture of a checkmark on a microchip." draggable="false">
    <h1>Thank you <?php echo $user_name ?>!</h1>
    <h3>Your message has been sent to contact@janoskocs.com.</h3>
    <a href="http://janoskocs.com">Go back to janoskocs.com</a>
</body>
</html>

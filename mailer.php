<html>
<head>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
    <body>
        <?php              
          require 'PHPMailer/PHPMailerAutoload.php';
          $mail = new PHPMailer;

            $mail->isSMTP();                            // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                     // Enable SMTP authentication
            $mail->Username = 'rakcraze@gmail.com';          // SMTP username
            $mail->Password = 'rak333rak333'; // SMTP password
            $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                          // TCP port to connect to

            $mail->setFrom('rakcraze@gmail.com', 'ISTE');
            $mail->addReplyTo('rakcraze@gmail.com', 'ISTE');
            $mail->addAddress('rakeshgamedesigner@gmail.com');   // Add a recipient
            $mail->addCC(' ');
            $mail->addBCC(' ');

            $mail->isHTML(true);  // Set email format to HTML
        ?>
    </body>
</html>

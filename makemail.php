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
            require 'connect.php';
            require 'mailer.php';

            $query="SELECT * From student";
            $response=mysqli_query($dbc,$query);

            $content="";

            if($response)
            {
                while($row=mysqli_fetch_array($response))
                {
                    $content.=$row['RollNumber']." ".$row['Name']."<br>";
                }
            }
            $bodyContent = '<h1>ISTE On-Duty List</h1>.<br> ';
            $bodyContent .= $content;

            $mail->Subject = 'Email from ISTE for OD';
            $mail->Body    = $bodyContent;

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo "<div class=\"alert alert-success alert-dismissible fade show\">";
                echo "<strong>Success!</strong> The On-Duty list had been sent. <a href=\"admins.html\">Return To page</a>";
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
                echo "</div>";
            }

        ?>
    </body>
</html>

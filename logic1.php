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
            $user = $_POST['user'];
            $pass = $_POST['pass'];

            if($user == "rakesh")
            {
                if($pass =="rakesh")
                {
                    header("Location: adminlogged.html");
                }
            }

            echo "<div class=\"alert alert-danger\" role=\"alert\" >";
                echo "<strong>Login Failed!</strong> Enter valid username and password.<a href=\"admins.html\">return to login page </a>";
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
                echo "</div>";
        ?>
    </body>
</html>

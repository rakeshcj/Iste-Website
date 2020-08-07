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

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $name = trim($fname)." ".$lname;
            $roll = $_POST['roll'];
            $email = $_POST['email'];
            $dept = $_POST['dept'];
            $phone = $_POST['phone'];
            $event = $_POST['event'];

            $query="INSERT INTO student(Name,RollNumber,MailAddress,
                    PhoneNumber,DepartmentName,EventName) VALUES
                    (?,?,?,?,?,?)";
            $stmt=mysqli_prepare($dbc,$query);
            mysqli_stmt_bind_param($stmt,"ssssss",$name,$roll,$email,
                    $phone,$dept,$event);
            mysqli_stmt_execute($stmt);
                echo "<div class=\"alert alert-success alert-dismissible fade show\">";
                echo "<strong>Success!</strong> You have been successfully registered for the event.<a href=\"register.html\">submit another response </a>";
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
                echo "</div>";

        ?>
    </body>
</html>

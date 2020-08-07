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

            $roll = $_POST['rollnumbers'];
            $roll = trim($roll);

            $ar=explode(",",$roll);
            
            $query="DELETE FROM student where (RollNumber=\" \" ";
            foreach ($ar as $val) {
                $query.=" || RollNumber=\"$val\"";
            }
            $query.=" );";
            mysqli_query($dbc,$query);

            echo "<div class=\"alert alert-success alert-dismissible fade show\">";
            echo "The entered details is succesfully deleted. <a href=\"admins.html\">Return to page</a>";
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            echo "</div>";
        ?>
    </body>
</html>

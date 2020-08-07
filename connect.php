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
            DEFINE('DB_USER','adminweb');
            DEFINE('DB_PASS','adminweb');
            DEFINE('DB_HOST','localhost');
            DEFINE('DB_NAME','iste');

            $dbc=@mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME)
            OR die("Cant connect my sql".mysqli_connect_error());
        ?>
    </body>
</html>

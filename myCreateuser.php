<?php include('myConnectDB.php'); ?>
<?php

$number=$_POST['myno'];
$email=$_POST['mymail'];
$password=$_POST['mypass'];

$sql = "INSERT INTO users (id, numb, mail, pass)
VALUES (NULL, '$number', '$email', '$password')";
// use exec() because no results are returned
$conn->exec($sql);
?>

<html>
    <head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/myCreateuser.css" />    
        <title>Registered User</title>
    </head>
    <body>
        <div id="echo">
            <span><b><?php echo "$email with $number Registered"; ?></b></span>
        </div>
        <div class="btnpost">
            <button class="btn btn-warning"><a href="http://localhost:8000/mypost.php">پست گذاشتن</a></button>
        </div>
    </body>
</html>

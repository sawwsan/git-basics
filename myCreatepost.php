<?php include('myConnectDB.php'); ?>
<?php

$title=$_POST['mytitle'];
$description=$_POST['mydescription'];

$sql = "INSERT INTO posts (id, title, descri)
VALUES (NULL, '$title', '$description')";
// use exec() because no results are returned
$conn->exec($sql);
?>

<html>
    <head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/myCreatepost.css" />    
        <title>Posts</title>
    </head>
    <body>
        <div id="echo">
            <span><b><?php echo "$title created"; ?></b></span>
        </div>
        <div class="btnpost">
            <button class="btn btn-warning"><a href="http://localhost:8000/myListpost.php">لیست پست ها</a></button>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href = "welcome.css"> 
</head>
<body>
<body>
    <div class="bodyvid">
        <video autoplay loop id="background-video" src="background.mp4"></video>
    <div class="box">
        <div class="upper-box">
            <ul class="navul">
                <li class="navli"><a class="active" href="#setting">Setting</a></li>
                <li class="navli"><a href="#service">Items</a></li>
                <li class="navli"><a href="#order">Order</a></li>
                <li class="navli"><a href="#home">Home</a></li>
            </ul>
        </div>
        <div class="welcome-input">
            <?php
            session_start();
            if(isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                $firstname = $_SESSION['firstname'];
                $lastname = $_SESSION['lastname'];
                echo "<h1>Welcome, amigoo!  $firstname $lastname </h1>";
            } else {
                header("Location: index.php");
                exit();
            }
            ?>
        </div>
    </div>
    </div>
</body>
</body>
</html>
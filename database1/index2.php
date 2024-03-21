    <?php
        include("dbconnect.php");
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Signup</title>
        <link rel = "stylesheet" type = "text/css" href = "stylesignup.css"> 
    </head>
    <body>
    <div class="container-all">
        <div class="left-right-div">
            <div class="left-box">
                <div class="left-upper-box">
                </div>
                <img src="miles.webp" alt="logo" class="logo">
                    <div class="title-box">
                        <h1 class="h1t">&#x2630; SPIDER MAN &#x2630;</h1>
                        <h2 class="h2t">MILE'S SHOP</h2>
                    </div>
                <div class="left-lower-box">
                </div>
            </div>
            <div class=right-box>
                <div class="right-upper-box">
                </div>
                <div class="signup-box">
                <h3 class="signup-title">SIGN UP</h3>
                <form action="signup.php" method="POST">
                    <div class="inp-form">
                        <input type="text" id="firstname" name="firstname" placeholder="First name" required>
                        <input type="text" id="lastname" name="lastname" placeholder="Last name" required>
                    </div>
                    <div class="inp-form">
                        <input type="text" id="age" name="age" name="firstname" placeholder="Age" required>
                    </div>
                    <div class="inp-form">
                        <input type="address" id="address" name="address" placeholder="Address" required>
                    </div>
                    <div class="inp-form">
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="inp-form">
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                    <br>
                    <input class="signup-btn" type="submit" name="submit" value="Sign up">
                    <p>Already have an account? <a class="signin-btn" href="index.php">Sign in</a></p>
                </form>
            </div> 
            </div>
        </div>
    </div>
    </body>
    </html>

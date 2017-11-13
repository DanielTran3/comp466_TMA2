<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
        <link rel = "stylesheet" type="text/css" href="../shared/tma2_stylesheet.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="SiteMark.js" ></script>
        <script type="text/javascript">
            window.onload = function () {
                pageStartup();
            }
        </script>
        <title>Learnatorium Signup</title>
    </head>
    <body>
        <?php
            // Check for valid user login, if there is one, redirect the user to the main page
            if (isset($_COOKIE["user"])) {
                header("Location:Learnatorium.php");
            }
        ?>

        <!-- If there is no currently logged in user, display the signup page, allowing for a user to 
             enter their credentials to create a new account-->
        <form method="post" action="Signup.php">
            <div class="containerDiv">
                <h1 class="title1 loginTitle">Learnatorium Signup</h1>    
                <div class="innerDiv" style="margin-top: 50px;">
                    <label class="floatLeftLabel">Username</label>
                    <input type="text" name="signupUsername" class="floatRight largeInputBox"></input>
                </div>
                <div class="innerDiv">
                    <label class="floatLeftLabel">Password</label>
                    <input type="password" name="signupPassword" class="floatRight largeInputBox"></input>
                </div>
                <div class="innerDiv">
                    <button type="submit" class="whiteButton">Signup</button>
                </div>
            </div>
        </form>
    </body>
</html>
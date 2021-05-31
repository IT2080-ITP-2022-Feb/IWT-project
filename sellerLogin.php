<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Seller Login</title>
        <link type="text/css" rel="stylesheet" href="./css/sellerLogin.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    </head>
    
    <body>
        <?php
        $title = 'Seller Login'; include("header.php");
        ?>

                <!-- Type your Code here -->
        <h1>Seller Login</h1>


        <div align="center"style="width:800px;text-align:center;height:700px;border:1px solid black;">

        <div class="include">
        <br/><br/><center><h3>Sign in to your DSK Book Store Seller Account</h3></center><br/><br/>
                    <form method="POST" action="./includes/sellerLogAction.php">

                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" required><br/><br/>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required><br/><br/><br/><br/>

                        <button type="submit" class="btn" name="logSub">LogIn</button>

                        <input type="checkbox"  onclick="">
                        show password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
                        <br>
                        
                        <center>
                            <button type = "submit" name="logSub" class="login">Sign in</button>
                        </center>
                    </form>

                        <a href="#" style="float:right">Forgot your password ?</a><br><br>
                        <br>
                        <a style="float:left; color: #006699;">Don't have an account?</a>&nbsp;&nbsp;
                        
                        <a href=".......">Sign up</a>
            </div>
        </div>

        <script src="./js/sellerLogin.js"></script>
        <?php
            include("footer.php");
        ?>
    </body>
</html>
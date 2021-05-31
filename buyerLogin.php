
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Buyer Login</title>
        <link type="text/css" rel="stylesheet" href="css/buyerLogin.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    </head>
    
    <body>
        <?php
            $title = 'Buyer Login'; include("header.php");
        ?>

        <h1>Buyer Login</h1>


        <div align="center"style="width:800px;text-align:center;height:700px;border:1px solid black;">

        
                <center><h3>Sign in to your DSK Book Store Buyer Account</h3></center>
				<form method="POST" action="./includes/buyerLogAction.php">

					<label for="email"><b>Email</b></label>
					<input type="text" placeholder="Enter Email" name="email" required><br/><br/>

					<label for="psw"><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="psw" required><br/><br/><br/><br/>

					<button type="submit" class="btn" name="logSub">LogIn</button>

					<input type="checkbox"  onclick="">
					show password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
					<br>
				</form>
				<br/><br/>
            		<center>
						<button type = "submit" name="logSub" class="login">Sign in</button>
					</center>
        </div>

        <script src="js/buyerLogin.js"></script>
        <?php
            include("footer.php");
        ?>
    </body>
</html>
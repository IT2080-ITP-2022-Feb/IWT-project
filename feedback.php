<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Feedback</title>
        <link type="text/css" rel="stylesheet" href="css/feedback.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    </head>
    
    <body>
        <?php
            $title = 'Feedback'; include("header.php");
        ?>

    <h1>Feedback</h1>
    <div class="rBody">
        <div class="box">
            <p class="p">rate us!</p>
			<form action="includes/feedbackaction.php" method="POST">
                <div class="rating">
                    <input type = "radio" name="rating" id="vote5" value="5"><label for="vote5" onclick="dComment(5)">5</label>
                    <input type = "radio" name="rating" id="vote4" value="4"><label for="vote4" onclick="dComment(4)">4</label>
                    <input type = "radio" name="rating" id="vote3" value="3"><label for="vote3" onclick="dComment(3)">3</label>
                    <input type = "radio" name="rating" id="vote2" value="2"><label for="vote2" onclick="dComment(2)">2</label>
                    <input type = "radio" name="rating" id="vote1" value="1"><label for="vote1" onclick="dComment(1)">1</label>
                </div>
                <p id ="para" class="para"></p>
                
                <h3 style="color:white">submit your thoughts about our service.</h3>
                <div class="align">
					<input type="text" name="username1" placeholder="*Enter Email*" required><br/>
                    <textarea id="comment" name="comment" cols="60" rows="5" placeholder="Describe your experience...." class="textarea"></textarea><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" name="feedsub" value="post" onclick="display()" class="dec"><b>Post</b></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="reset" id="rst" name="rst" value="Reset" class="dec"><b>Reset</b></button>

                    <a href="ratingscore.php">view rating details</a>
				</div>
			</form>
		</div>
	</div>



        <script src="../js/Feedback.js"></script>

        <?php
            include "./footer.php";
        ?>
    </body>
</html>
<?php
  $title = 'Feedback'; include("header.php");
?>


<link rel="stylesheet" href="css/feedback.css">


<!-- Type your Code here -->
<h1>Feedback</h1>
<div class="rBody">
		<div class="box">
		<p class="p">rate us!</p>
		<div class="rating">
			<input type = "radio" name="rating" id="vote5"><label for="vote5" onclick="dComment(5)">5</label>
			<input type = "radio" name="rating" id="vote4"><label for="vote4" onclick="dComment(4)">4</label>
			<input type = "radio" name="rating" id="vote3"><label for="vote3" onclick="dComment(3)">3</label>
			<input type = "radio" name="rating" id="vote2"><label for="vote2" onclick="dComment(2)">2</label>
			<input type = "radio" name="rating" id="vote1"><label for="vote1" onclick="dComment(1)">1</label>
		</div>
		<p id ="para" class="para"></p>
		
		<h3 style="color:white">submit your thoughts about our service.</h3>
		<div class="align">
			<form action="rating.php" method="POST">
					<textarea id="comment" name="comment" cols="60" rows="5" placeholder="Describe your experience...." class="textarea"></textarea><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" value="post" onclick="display()" class="dec">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="reset" id="rst" name="rst" value="Reset" class="dec">

                    <a href="ratingscore.php">view rating details</a>
			</form>
		</div>
		
	</div>
	</div>




<script src="../js/Feedback.js"></script>

<?php
	include "./footer.php";
?>



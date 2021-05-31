<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Feedback</title>
        <link type="text/css" rel="stylesheet" href="../css/assigment.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
    <body style="background-image: url('images/salon1.jpg'); background-repeat: no-repeat;background-size: 100%">
		<?php
            $title = 'Feedback'; include("header.php");
        ?>
		<center>
            <table style = "border-collapse:collapse; background-color: #d9d9d9; bodercolor:black;" border = "5px" width = "70%" class="vtable">
                <tr style="background-color: #b3b3b3">
                    <th>Email</th>
                    <th>Rate</th>
                    <th>Comment</th>
                    <th></th>
                </tr>

				<?php
                    include_once 'includes/ratingDisplay.php'; //including the Data Base handler 
                    

                    while($loop_data = mysqli_fetch_assoc($count_Result)){
                        $email = $UserAdDetails[$count]['email'];
                        $rate = $UserAdDetails[$count]['rate'];
                        $comment = $UserAdDetails[$count]['comment'];

						if($rate==1){
							$rate1="<img src='images/color_star.png' width='20px'>
							<img src='images/star.png' width='20px'>
							<img src='images/star.png' width='20px'>
							<img src='images/star.png' width='20px'>
							<img src='images/star.png' width='20px'>";
						}else{
							$rate1="";
						}

						if($rate==2){
							$rate2="<img src='images/color_star.png' width='20px'>
							<img src='images/color_star.png' width='20px'>
							<img src='images/star.png' width='20px'>
							<img src='images/star.png' width='20px'>
							<img src='images/star.png' width='20px'>";
						}else{
							$rate2="";
						}

						if($rate==3){
							$rate3="<img src='images/color_star.png' width='20px'>
							<img src='images/color_star.png' width='20px'>
							<img src='images/color_star.png' width='20px'>
							<img src='images/star.png' width='20px'>
							<img src='images/star.png' width='20px'>";
						}else{
							$rate3="";
						}

						if($rate==4){
							$rate4="<img src='images/color_star.png' width='20px'>
							<img src='images/color_star.png' width='20px'>
							<img src='images/color_star.png' width='20px'>
							<img src='images/color_star.png' width='20px'>
							<img src='images/star.png' width='20px'>";
						}else{
							$rate4="";
						}

						if($rate==5){
							$rate5="<img src='images/color_star.png' width='20px'>
							<img src='images/color_star.png' width='20px'>
							<img src='images/color_star.png' width='20px'>
							<img src='images/color_star.png' width='20px'>
							<img src='images/color_star.png' width='20px'>";
						}else{
							$rate5="";
						}
						
                        
						echo
							"<tr>
								<td>$email</td>
								<td> 
									$rate1 $rate2 $rate3 $rate4 $rate5
								</td>
								<td>$comment</td>
								<td style='text-align: center;'>
									<form action='includes/feedbackEdit.php' method='POST'>
										<input type = 'radio' name='emailF' value='$email' required>
										<input type='text' name='editComment' placeholder='*Re-enter commet*'><br/>
										<button type='submit' name='feedEdit' class='button2'>Edit</button>
										<button type='submit' name='feedDel' class='button2'>Remove</button>
									</form>
								</td>
							</tr>";
						$count=$count+1;
					}
				?>
                
            </table>
        </center>
		<?php
            include "./footer.php";
        ?>
    </body>
</html>
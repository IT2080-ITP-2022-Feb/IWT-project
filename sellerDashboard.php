<?php
  $title = 'Buyer Dashboard'; include("header.php");
?>


<link rel="stylesheet" href="./css/buyerDashboard.css">


<!-- Type your Code here -->
<h1>Seller Dashboard</h1>
<div class="mainbody">
            <table class="table1">
                <tr>
                    <td class="td1">
                        <div class="td1div1">
                            <table class="table2">
                                <tr>
                                    <td width="35%"></td>
                                    <td width="30%">
                                        <div>
                                        <?php
                                            include_once 'includes/buyerdashAction.php'; //including the Data Base handler 
                                            $tempEmail = 'Suneth@gmail.com';

                                            while($loop_data = mysqli_fetch_assoc($count_Result)){
                                                $email = $UserAdDetails[$count]['B_email'];
                                                $name = $UserAdDetails[$count]['F_name'];
                                                $userName = $UserAdDetails[$count]['B_ID'];
                                                $image = $UserAdDetails[$count]['profilePic'];
                                                $birth = $UserAdDetails[$count]['B_dob'];
                                                $cont = $UserAdDetails[$count]['contact'];

                                            if($email==$tempEmail){
                                                $email1=$email;
                                                $userName1=$userName;
                                                $birth1=$birth;
                                                $cont1=$cont;
                                                echo
                                                    "<label style='font-size: 20px;'><b>Hi $name</b></label></br>
                                                    <img src='$image' alt='profileLogo' class='imagepro'></br>";
                                                    break;
                                            }else{
                                                $count=$count+1;
                                                }
                                            }
                                        ?>

                                            <div style="text-align: center; border: 1px solid black; border-radius: 8px;">

                                                <form action="includes/buyerform.php" method="POST">
                                                    <input type="file" name="project_file" style="margin-left: 15%;">

                                                    <input type="text" name="username1" placeholder="*Enter Email*" required><br/>

                                                    <button type="submit" name="prochange" class="button1">Change</button>
                                                    <button type="submit" name="remove" class="button1">Remove</button></br>
                                                </form>

                                            </div>
                                            <?php
                                            include_once 'includes/buyerdashAction.php'; //including the Data Base handler
                                                echo"<label><b>$userName1</b></label><br/>
                                                <label><b>$birth1</b></label><br/>
                                                <label><b>$email1</b></label><br/>
                                                <label><b>$cont1</b></label>";
                                            ?>
                                        </div>
                                    </td>
                                    <td width="35%"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="tbl2tr2td1" style="border: 1px solid black; padding: 10%; margin: 10% 0 1% 10%; border-radius: 8px;">
                                            <label><a href="#">&#128722; My Orders</a></label><br/>
                                            <label><a href="#">&#128181; My Wallet</a></label><br/>
                                            <label><a href="#">&#127968; My Address</a></label><br/>
                                            <br/><br/>
                                            <label><a href="#">My Rewards</a></label><br/>
                                            <label><a href="#">Rate the APP</a></label><br/>
                                            <label><a href="#">Account Setting</a></label><br/>
                                            <label><a href="#">Clear History</a></label><br/>
                                            <label><a href="#">Sign Out</a></label><br/>

                                        </div>
                                    </td>
                                    <td></td>
                                    <td style="text-align: center;">
                                        <label><b>Edit yor profile</b></label>
                                        <div class="tbl2tr2td3" style="border-radius: 8px;">
                                            <table style="width: 100%;">
                                                <form action="includes/buyerform.php" method="POST">
                                                    <tr>
                                                        <td colspan="2"><input type='text' name='username1' placeholder='*USER Email*' required><br/><br/>
                                                        <input type='text' name='change' placeholder='*What you need to change*'>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left;">
                                                            <label>&#1566;  Name</label>
                                                        </td>
                                                        <td class="editTableTd2">
                                                            <button type="submit" name="Name" class="button2">Edit</button>
                                                            <button type="submit" name="remove1" class="button2">Remove</button><br/><br/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left;">
                                                            <label>&#1566;  Age</label>
                                                        </td>
                                                        <td class="editTableTd2">
                                                            <button type="submit" name="Age" class="button2">Edit</button>
                                                            <button type="submit" name="remove2" class="button2">Remove</button><br/><br/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left;">
                                                            <label>&#1566;  Birthday</label>
                                                        </td>
                                                        <td class="editTableTd2">
                                                            <button type="submit" name="Birthday" class="button2">Edit</button>
                                                            <button type="submit" name="remove3" class="button2">Remove</button><br/><br/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left;">
                                                            <label>&#1566;  Birth place</label>
                                                        </td>
                                                        <td class="editTableTd2">
                                                            <button type="submit" name="Birthplace" class="button2">Edit</button>
                                                            <button type="submit" name="remove4" class="button2">Remove</button><br/><br/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left;">
                                                            <label>&#1566;  Contact no</label>
                                                        </td>
                                                        <td class="editTableTd2">
                                                            <button type="submit" name="Contactno" class="button2">Edit</button>
                                                            <button type="submit" name="remove5" class="button2">Remove</button><br/><br/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left;">
                                                            <label>&#1566;  Email</label>
                                                        </td>
                                                        <td class="editTableTd2">
                                                            <button type="submit" name="Email" class="button2">Edit</button>
                                                            <button type="submit" name="remove6" class="button2">Remove</button><br/><br/>
                                                        </td>
                                                    </tr>
                                                </form>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                    <td rowspan="2" class="td2">
                        <div class="td1div1" style="padding: 10px;" >
                            <br/><b>UPGRADE YOUR ACCOUNT !</b><br/><br/>
                            <label style="font-size: 15px;">ENJOY WITH SPECIAL<br/>RECIPES ONLY FOR<br/>PREMIUM USER</label><br/>
                            <label><b>Just for 10$ !</b></label>

                            <div class="td1div2">
                                <label><b>Select a Payment Method</b></label>
                            <form action="#" method="POST">
                                <table width="100%">
                                    <tr>
                                        <td width="70%">
                                            <div class="td1div2" style="border-radius: 10px; ">
                                                <label><b>Your saved Credit and Debit cards</b></label>
                                                <hr>
                                                <table width="100%" style="font-size: 14px;">
                                                            <tr>
                                                                <th><u>Card type</u></th>
                                                                <th>Name</th>
                                                                <th>Valid True</th>
                                                            </tr>
                                                            <tr>
                                                                <td>VISA -2147483647</td>
                                                                <td>Com bank</td>
                                                                <td>2025-05-23</td>
                                                            </tr>
                                                </table>
                                                <form action="#" method="POST">
                                                <label for="CVV">CVV</label>
                                                <input type="text" name="CVV" placeholder="*xxx" required>
                                            </div>
                                        </td>
                                        <td width="30%">
                                            <div style="text-align: center;">
                                                <button type="submit" name="Continue" class="continue">Continue</button>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </form>   <br/>
                             <label><b>Another payment method</b></label><hr>

                                <input type="radio" onclick="otherfun(1)" class="Un_que" id="credit" name="unsat_system" value="credit">
                                <img src="images/credit.png"  alt="credit" style="width: 30px;">
                                <label for="credit">Credit Card</label><br>
                                    <div class="un_other" id="un_otherid" >
                                        <div class="paymentLogoDiv">
                                            <img src="images/visa.png" alt="visa" class="PyLogo">
                                            <img src="images/mastercard.png" alt="master" class="PyLogo">
                                            <img src="images/Discover.png" alt="Discover" class="PyLogo">
                                            <img src="images/maestro.png" alt="maestro" class="PyLogo">
                                            <img src="images/american-express.png" alt="american" class="PyLogo">
                                        </div>
                                        <div style="margin: 1% 5%;">
                                            <form action="../actions/userAccountActionform.php" method="POST">
                                                <label for="F_name">First Name :</label>
                                                <input type="text" class="F_name" id="F_name" name="F_name" placeholder="*" pattern="[A-Za-z]{2,}" required><br>

                                                <label for="L_name">Last Name :</label>
                                                <input type="text" class="F_name" id="L_name" name="L_name" placeholder="*" pattern="[A-Za-z]{2,}" required><br>

                                                <label for="credit">Credit Card No :</label>
                                                <input type="text" class="F_name" id="credit" name="credit" placeholder="*" pattern="[0-9]{5,}" required><br>

                                                <label for="date">Expiration Date :</label>
                                                <input type="date" class="F_name" id="date" name="date"><br>

                                                <label for="adress1">Billing Address line 1:</label>
                                                <input type="text" class="Full_text" id="adress1" name="adress1" placeholder="*" required><br>

                                                <label for="adress2">Billing Address line 2:</label>
                                                <input type="text" class="Full_text" id="adress2" name="adress2"><br>

                                                <label for="city">City :</label>
                                                <input type="text" class="F_name" id="city" name="city" placeholder="*" required><br>
                            
                                                <label for="State">State :</label>
                                                <input type="text" class="F_name" id="State" name="State" placeholder="*" required><br>

                                                <label for="zip">Zip Code :</label>
                                                <input type="text" class="F_name" id="zip" name="zip" placeholder="*" pattern="[0-9]{0,}" required><br>

                                                <label for="Bank">Bank Name :</label>
                                                <input type="text" class="F_name" id="Bank" name="Bank" placeholder="*" required><br>

                                                <label for="Tp">Telephone :</label>
                                                <input type="text" class="F_name" id="Tp" name="Tp" placeholder="*" pattern="[0-9]{10}" required><br>

                                                <label for="Email1">Email :</label>
                                                <input type="text" class="F_name" id="Email1" name="Email1" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"><br>

                                                <div class="paypalSubmit">
                                                    <button type="submit" class="P_Sub" name="creditS">Process</button><br/>
                                                    <button type="reset" class="P_Sub" name="paypalS">Reset</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <input type="radio" onclick="otherfun(2)" class="Un_que" id="paypal" name="unsat_system" value="paypal">
                                    <img src="images/paypal.png"  alt="paypal" style="width: 30px;">
                                    <label for="paypal">PayPal</label><br>
                                        <div class="un_other1" id="un_otherid1">
                                            <form action="../actions/userAccountActionform.php" method="POST">
                                                <label for="Email">Email :</label>
                                                <input type="text" class="F_name" id="Email" name="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  required><br>
                    
                                                <label for="password">password :</label>
                                                <input type="password" class="F_name" id="password" name="password" pattern=".{6,}" required><br>
                    
                                                <div class="paypalSubmit">
                                                    <button type="submit" class="P_Sub" name="paypalS">Process</button><br/>
                                                    <button type="reset" class="P_Sub" name="paypalS">Reset</button>
                                                </div>
                                            </form>
                                        </div>
                                    
                                    <input type="radio" onclick="otherfun(3)" class="Un_que" id="cash" name="unsat_system" value="cash">
                                    <img src="images/money.png"  alt="cash" style="width: 30px;">
                                    <label for="cash">Cash on delivery</label><br>
                                <div class="un_other2" id="un_otherid2">
                                    <form action="../actions/userAccountActionform.php" method="POST">
                                        
                                        <label for="F_name">Full Name :</label>
                                        <input type="text" class="F_name" id="F_name" name="F_name" placeholder="*" required><br>

                                        <label for="adress1">Billing Address line 1:</label>
                                        <input type="text" class="Full_text" id="adress1" name="adress1" placeholder="*" required><br>
                                        
                                        <label for="city">City :</label>
                                        <input type="text" class="F_name" id="city" name="city" placeholder="*" required><br>
                                        
                                        <label for="zip">Zip Code :</label>
                                        <input type="text" class="F_name" id="zip" name="zip" placeholder="*" pattern="[0-9]{0,}" required><br>
                                        
                                        <label for="Tp">Telephone :</label>
                                        <input type="text" class="F_name" id="Tp" name="Tp" placeholder="*" pattern="[0-9]{10}" required><br>
            
                                        <div class="paypalSubmit">
                                            <button type="submit" class="P_Sub" name="cashOn">Process</button><br/>
                                            <button type="reset" class="P_Sub" name="cashOn">Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </div>


<script src="./js/buyerDashboard.js"></script>

<?php
	include "./footer.php";
?>
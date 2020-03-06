<?php
    include ('session.php');

    if(!isset($_SESSION['login_user']))
        header("location: index.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meat name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Manila City Hall: Cedula</title>
        <link rel="stylesheet" href="style.css" />
        <style>
            @import url('https://fonts.googleapis.com/css?family=Montserrat|Muli|Roboto&display=swap');
        </style>
    </head>

    <body>
        <div class="mainclassab">
            <div class="container">
                <div class="navbar">
                    <div class="logo-pic"><img src="img/Clogo.png" height="25px" width="25px"></div>
                    <div class="logo"><a href="index.php"><i>manila</i>&nbsp;<b>cedula</b></a></div>
                <div class="menu">
                    <ul>
                        <li id="btn1"><a class="btn" href=""><b>How&nbsp;to&nbsp;Use</b></a></li>
                        <!-- <li><a class="btn" href=""><b>Procedure</b></a></li> --> <!-- Thinking this might just be similar to "How to Use" (?) -H -->
                        <li><a class="btn" href=""><b>About</b></a></li>
                        <li><a class="btn" href=""><b>Settings</b></a></li> <!-- Change password feature. Yay or  nay? -H-->
                        <li><a class="btn" href="logout.php"><b>Logout</b></a></li>
                        <!--
                        <li id="btn1"><a class="btn" href=""><b>How&nbsp;to&nbsp;Use</b></a></li>
                        <li><a class="btn" href=""><b>Procedure</b></a></li>
                        <li><a class="btn" href=""><b>About</b></a></li>
                        -->
                    </ul>
                </div>
            </div>
            </div>
            <div class="maincontent_form">
                <h1>Class AB Form:</h1>
                <h2><i>(Employed & Business Owners)</i></h2><br>
                <div class="formfield_ab">
                    <h2><i>Please fill in your information:</i></h2>
                    <br>
                    <form action="classabinsert.php" method="post" class="formstyle">
                        <label for="fname">Full Name&nbsp;&nbsp;</label>
                        <input type="text" id="fname" name="fname" required placeholder="First Name">
                        <input type="text" id="minitial" name="minitial" required placeholder="M.I.">
                        <input type="text" id="lname" name="lname" required placeholder="Last Name"><br>
                        <label for="address">Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" id="address" name="address" required><br>
                        <label for="birthday">Date of Birth</label>
                        <input type="date" id="birthday" name="birthday" required>
                        <label for="citizenship">Citizenship</label>
                        <input type="text" id="citizenship" name="citizenship" required><br>
                        <!-- Shouldn't citizenship be a dropdown list?
                             If user selected Filipino, then the ACR number is disabled.
                             Or maybe if the user typed "Filipino", ACR number is automatically disabled.
                        -->
                        <label for="birthplace">Place of Birth</label>
                        <input type="text" id="birthplace" name="birthplace" required><br>
                        <label for="civilstatus">Civil Status</label>
                        <select id="civilstatus" class="civilstatus" name="civilstatus"> 
                            <option value="select">Select</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Separated">Separated</option>
                            <option value="Widowed">Widowed</option>
                        </select>
                        <label for="gender">Gender at Birth</label>
                        <input type="radio" name="gender" value="Male">
                            <label for="gender1">Male&nbsp;&nbsp;&nbsp;</label>
                        <input type="radio" name="gender" value="Female">
                            <label for="gender1">Female</label><br>
                        <label for="profession">Profession/Occupation Business</label>
                        <input type="text" id="profession" name="profession" required>
                        <label for="taxaccnum">Taxpayer's Account Number</label>
                        <input type="text" id="taxaccnum" name="taxaccnum" required><br>
                        <label for="acrnum">ACR Number <i>(if Alien)</i></label>
                        <input type="text" id="acrnum" name="acrnum"><br>
                        <!-- Temporarily disabled and removed the required attribute for acrnum. Assuming for now that all Class AB applicants are Filipinos. -->
                        <label for="height">Height</label>
                        <input type="text" id="height" name="height" required placeholder="in centimeter">
                        <label for="weight">Weight</i></label>
                        <input type="text" id="weight" name="weight" required placeholder="in kilograms">
                       
                        <br><br><br><hr>

                        <p>
                            ADDITIONAL RESIDENCE TAX on the following items owned or earned
                            in the Philippines.<br><i>(Tax not exceeding P5,000.00)</i>
                        </p>
                        <!-- Temporarily removed required attributes 
                             I think there should be a question that's something like "Does your tax exceed P5,000.00?
                             If yes, disable/show this form.
                             Else, enable/show this form.
                        -->
                        <label for="incomerp"><b>1.</b>&nbsp;Income from Real Property.</label><br>
                        <input type="text" id="incomerp" name="incomerp" placeholder="(P1.00 for every P1,000.00)"><br>
                        <label for="grossrec"><b>2.</b>&nbsp;Gross Receipts or Earnings derived from business during the preceding year.</label>
                        <input type="text" id="grossrec" name="grossrec" placeholder="(P1.00 for every P1,000.00)"><br>
                        <label for="salgrossrec"><b>3.</b>&nbsp;Salaries or Gross Receipts or Earnings derived from exercise of profession or pursuit of any occupation.</label>
                        <input type="text" id="salgrossrec" name="salgrossrec" placeholder="(P1.00 for every P1,000.00)"><br>
                        <br><br><br>
                        <div style="text-align: center;">
                            <input type="submit" class="submitform" value="SUBMIT FORM">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    
</html>
<?php
    include 'session.php';

    $_SESSION['currentPage'] = 'form_class_c';

    if(!isset($_SESSION['login_user']))
        header("location: index.php");
    if($_SESSION['login_user'] == 'admin')
        header("location: admin_class_a.php");
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
        <div class="mainclassc">
            <div class="container_all">
                <div class="navbar">
                    <div class="logo-pic"><img src="img/Clogo.png" height="25px" width="25px"></div>
                    <div class="logo"><a href="home.php"><i>manila</i>&nbsp;<b>cedula</b></a></div>
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
            <div class="headerdivcontainer">
                    <div class="headerdiv">
                        <div class="headertitle">
                            <h1>Class C Form:</h1>
                            <h2><i>(Corporation)</i></h2><br>
                        </div>
                        <div class="formsdropdown">
                            <form id="chooseclasstype" method="POST" style="">
                                <select id="classtypelist" class="classtypes" name="classtypes" onchange="selectClassType()">
                                    <option selected disabled value="">Change class</option>
                                    <option value="classa">Class A (Unemployed)</option>
                                    <option value="classab">Class AB (Employed)</option>
                                </select>&nbsp;&nbsp;
                                <input type="submit" value="Proceed" class="proceedbtn">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="formfield_c">
                    <h2><i>Please fill in your information:</i></h2><br>
                    <form onsubmit="return confirm('Are you sure you want to submit?\nYour data will now be uploaded to the database.')" action="report_class_c.php" method="post" class="formstyle">
                        <label for="fname">President/ Authorized Representative&nbsp;&nbsp;</label><br>
                        <input type="text" id="fname" name="fname" required placeholder="First Name">
                        <input type="text" id="minitial" name="minitial" required placeholder="M.I.">
                        <input type="text" id="lname" name="lname" required placeholder="Last Name"><br>
                        <label for="corporation">Name of Corporation/ Partnership&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" id="corporation" name="corporation" required><br>
                        <label for="address">Address of Corporation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" id="address" name="address" required><br>
                        <label for="dateofreg">Date of Registration</label>
                        <input type="date" id="birthday" name="birthday" required><br>
                        <label for="placeofreg">Place of Registration</label>
                        <input type="text" id="placeofreg" name="placeofreg" required><br>
                        <label for="natureofbusiness">Nature of Business&nbsp;&nbsp;</label>
                        <input type="text" id="natureofbusiness" name="natureofbusiness" required><br>
                        <label for="nbsptin">NBSP TIN</label>
                        <input type="text" id="nbsptin" name="nbsptin" required><br>
                        <label for="assessedval">Total Assessed Value of Real Property</label>
                        <input type="text" id="assessedval" name="assessedval" required placeholder="in Philippine Peso"><br>
                        <label for="grossearn">Total Gross Earnings from Business</label>
                        <input type="text" id="grossearn" name="grossearn" required placeholder="in Philippine Peso"><br>

                        <p align=center><b>NOTE:</b> Please double check your input data before submitting.</p><br>
                        <div style="text-align: center;">
                        <input type="submit" class="submitform" value="SUBMIT FORM">
                        <br>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        <script src="script.js">
        </script>
    </body>
</html>
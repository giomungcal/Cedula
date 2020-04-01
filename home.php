<?php
    include 'session.php';
    $_SESSION['currentPage'] = 'home';

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
        <div class="main">
            <div class="container_all">
                <div class="navbar">
                        <div class="logo-pic"><img src="img/Clogo.png" height="25px" width="25px"></div>
                        <div class="logo"><a href=""><i>manila</i>&nbsp;<b>cedula</b></a></div>
                    <div class="menu">
                        <ul>
                            <li><a href="home.php" class='btn' ><b>Home</b></a></li>
                            <li id="btn1"><a class="btn"><b>Help</b></a></li>
                            <!-- <li><a class="btn" href=""><b>Procedure</b></a></li> -->
                            <!-- button below must be "About" -->
                            <!-- <li><a class="btn" onclick="alert('GCM, Proposals for class ab\n*If user inputted \'Filipino\' at the Citizenship, enable TIN No., disable ACR No (but Im curious whats the case for multiple citizenships? Do they have both TIN No. and ACR No.?)\n*Does your tax do not exceed 5000? If yes, enable yung last three textboxes. If no, disable them.\n\nOther: Please include a \'Close\' button at the bottom of help modal. Sorry dont know how to do it. In my part, will do the computation for payments and soon\n\n-H :)');"><b>Gio click me!</b></a></li> -->
                            <!-- <li><a class="btn" href=""><b>Settings</b></a></li> Change password feature. Yay or  nay? -H -->
                            <li><a class="btn" href="logout.php"><b>Logout</b></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <div class="main-text">
                    <h1>Manila City Hall</h1>
                    <h2>Community Tax Certificate</h2>
                    <br>
                    <div class="description">
                        Choose your class type on the dropdown below.
                    </div>
                    <br><br>
                    <div class="dropdown">
                        <form id="chooseclasstype" action="" method="POST">
                            <select id="classtypelist" class="classtypes" name="classtypes" onchange="selectClassType()" required>
                                <option selected disabled value="">Please select a class.</option> <!-- Please don't change the punctuation mark -H-->
                                <option value="classa">Class A (Unemployed)</option>
                                <option value="classab">Class AB (Employed)</option>
                                <option value="classc">Class C (Corporation)</option>
                            </select>
                            <br><br>
                            <input type="submit" value="Proceed" class="proceedbtn">
                        </form>
                    </div>
                </div>
                <!-- The Modal -->
                <div id="myModal" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content-container">
                        <span class="close">&times;&nbsp;&nbsp;</span>
                        <div class="modal-content">
                            <div class="icon"><img src="img/help/procedure.png" style="width:100px; height:100px;"></div>
                            <div class="icon-title"><br><h1 style="">Procedure</h1><p class="icon-subtitle">Steps in Cedula Application</p></div>
                            <br><br><br><br>
                            <div class="steps-container">
                                <div class="steps-content">
                                    <div class="number-header"><h1>1</h1></div>
                                    <div class="number-content"><img class="content-icons" src="img/help/choose.png"><h2>Choose class type</h2><p>Indicate which class you belong among the three types: <i><b>A</b>: Unemployed, <b>AB</b>: Employed, & <b>C</b>: Corporation</i></p></div>
                                </div>
                                <div class="steps-content">
                                    <div class="number-header"><h1>2</h1></div>
                                    <div class="number-content"><img class="content-icons" src="img/help/fill-up.png"><h2>Fill-up Form</h2><p>Provide all information needed in the form.</p></div>
                                </div>
                                <div class="steps-content">
                                    <div class="number-header"><h1>3</h1></div>
                                    <div class="number-content"><img class="content-icons" src="img/help/verify.png"><h2>Verify & Submit</h2><p>Make sure that all information is correct before pressing the submit button.</p></div>
                                </div>
                                <div class="steps-content">
                                    <div class="number-header"><h1>4</h1></div>
                                    <div class="number-content"><img class="content-icons" src="img/help/queue.png"><h2>Wait for Queue</h2><p>After submitting, applications will be forwarded to the CTC office for verification and processing.</p></div>
                                </div>
                                <div class="steps-content">
                                    <div class="number-header"><h1>5</h1></div>
                                    <div class="number-content"><img class="content-icons" src="img/help/present-reqs.png"><h2>Prepare and Present Requirements</h2><p>Upon being called, proceed to the designated window and present all requirements needed.</p></div>  
                                </div>
                                <div class="steps-content">
                                    <div class="number-header"><h1>6</h1></div>
                                    <div class="number-content"><img class="content-icons" src="img/help/pay.png"><h2>Pay</h2><p>After completing all these steps, you need to pay for your tax.</p></div>
                                </div>
                                </div>

                            <div class="icon"><img src="img/help/faq.png" style="width:100px; height:100px;"></div>
                            <div class="icon-title"><br><h1 style="">FAQs</h1><p class="icon-subtitle">Frequently Asked Questions</p></div>
                            <br>
                            <div class="steps-container">
                                    <div class="steps-content">
                                        <!-- <div class="number-header"><h1></h1></div> -->
                                        <div class="number-content"><h2>1. What are the requirements needed?</h2>
                                            <div class="faqs-text">
                                            <b>CLASS “A” </b>- For unemployed individuals 
                                            <br>Requirements: 
                                                <p>
                                                    &emsp;- Queue Stub<br>
                                                    &emsp;- Valid ID <br>
                                                    &emsp;- Fees/Payment<br>
                                                </p>
                                                <b>CLASS “AB” </b>- For employed individuals and for sole proprietor or a person who is the exclusive owner of a business.
                                            <br>Requirements: 
                                                <p>
                                                    &emsp;- Queue Stub<br>
                                                    &emsp;- Valid ID <br>
                                                    &emsp;- Proof of income (Form W2)<br>
                                                    &emsp;- Fees/Payment<br>
                                                </p>
                                                <b>CLASS “C” </b>- For corporation.
                                            <br>Requirements: 
                                                <p>
                                                    &emsp;- Queue Stub<br>
                                                    &emsp;- Valid ID <br>
                                                    &emsp;- Appropriate Proof of income and/or assessment <br>
                                                    &emsp;- Fees/Payment<br>
                                                </p>
                                            </div>
                                        </div>
                                        <br><br><br><br><br><br><br>
                                        <div class="number-content"><h2>2. What Valid IDs are accepted?</h2>
                                            &emsp;&emsp;✓ Philippine Passport<br>
                                            &emsp;&emsp;✓ Driver’s License<br>
                                            &emsp;&emsp;✓ SSS UMID Card<br>
                                            &emsp;&emsp;✓ PhilHealth ID<br>
                                            &emsp;&emsp;✓ TIN Card<br>
                                            &emsp;&emsp;✓ Postal ID<br>
                                            &emsp;&emsp;✓ Voter’s ID<br>
                                            &emsp;&emsp;✓ PRC ID<br>
                                            &emsp;&emsp;✓ Senior Citizen ID<br>
                                            &emsp;&emsp;✓ OFW ID<br>
                                        </div>
                                        <br><br><br><br><br><br><br><br>
                                        <div class="number-content"><h2>3. How do I compute my community tax?</h2>
                                            <div class="faqs-text">
                                            <b>CLASS “A”</b><br>
                                                &emsp;Basic Community Tax = ₱10<br>
                                            <br>
                                            <b>CLASS “AB”</b><br>
                                                &emsp;Basic Community Tax = ₱10<br>
                                                &emsp;+ Gross Receipt or Earnings from Business during the preceding year P 1.00 for every P 1,000.00<br>
                                                &emsp;+ Salaries or Gross Receipt or Earnings derived from exercise of Profession – P 1.00 for every P 1,000.00<br>
                                                &emsp;+ Income from Real Property – P 1.00 for every P 1,000.00<br>

                                            <b>CLASS “C”</b><br>
                                                &emsp;Basic Community Tax – P 500.00<br>
                                                &emsp;+ Assessed Value of Real Property owned in the Philippines. P2.00 for every P5, 000.00<br>
                                                &emsp;+ Gross receipts including dividend earnings derived from business in the Philippines during the preceding year P2.00 for every P5, 000.00<br>
                                            </div>
                                        </div>
                                    <!-- <div class="number-content"><h2>Fill-up Form</h2><p>Provide all information needed in the form.</p></div> -->
                                    </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="script.js">
        </script>
    </body>
</html>
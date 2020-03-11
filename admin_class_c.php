<!-- ATTN Mr Mungcal
just tried the table sorting feature, but can only sort in ascending order (no descending).
pls feel free to remove the codes for the sorting feature if you're able to make a
code which sorts table data in both asc. and desc. orders
note: some tutorials show they use bootstrap/jquery for the asc./desc. ordering of tables.
u might try that if that interests you
-->

<?php
    include 'session.php';

    if(!isset($_SESSION['login_user']))
        header("location: index.php");
    if($_SESSION['login_user'] == "user")
        header("location: home.php");
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
        <div class="1mainclassa">
            <div class="container">
                <div class="navbar">
                    <div class="logo-pic"><img src="img/Clogo.png" height="25px" width="25px"></div>
                    <div class="logo"><a href="admin_class_a.php"><i>manila</i>&nbsp;<b>cedula</b>&nbsp;administrator</a></div>
                <div class="menu">
                    <ul class="navbar_ul">
                        <!-- <li id="btn1"><a class="btn" href=""><b>How&nbsp;to&nbsp;Use</b></a></li> -->
                        <!-- <li><a class="btn" href=""><b>Procedure</b></a></li> -->
                        <!-- I just set this as comment in order to include "Settings" option. I know this ("Procedure" option) is important.
                        Maybe you could place all five options without affecting the overall design of the panel. -H -->
                        <!-- <li><a class="btn" href=""><b>About</b></a></li> -->
                        <!-- <li><a class="btn" href=""><b>Settings</b></a></li> Change password feature. Yay or  nay? -H -->
                        <li><a  class="btn" href="logout.php"><b>Logout</b></a></li>
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
                <h1>Class C: Corporation</h1>
                <label for="birthday"><b>Date:</b></label>
                <!-- Eto yung pagshow ng entries depende sa date? -->
                <input type="date" id="birthday" name="birthday" required><br/><br>
                <div class="table_container">
                    <div class="table_classa">
                        <table id="myTable" class="table" style="width: 100%;">
                            <thead>
                              <tr>
                                <th>Date and time processed</th>
                                <th>Authorized Representative</th>
                                <th>Corporation</th>
                                <th>Address of Corporation</th>
                                <th>Date of Registration</th>
                                <th>Place of Registration</th>
                                <th>Nature of Business</th>
                                <th>NBSP TIN No.</th>
                                <th>Total Assessed Value of Real Property</th>
                                <th>Total Gross Earnings from Business</th>
                                <td>View</td>
                              </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $con = mysqli_connect('localhost', 'root', '');
                                    mysqli_select_db($con, 'cedula');
                                    $query = "SELECT * FROM classc";
                                    $result=mysqli_query($con, $query);

                                    while($rows=mysqli_fetch_assoc($result))
                                    {
                                ?>
                                        <tr>
                                            <td><?php echo $rows['dateProcessed'] . " " . $rows['timeProcessed']; ?></td>
                                            <td><?php echo $rows['firstName']; echo " "; echo $rows['middle']; echo " "; echo $rows['lastName']; ?></td>
                                            <td><?php echo $rows['corporation']; ?></td>
                                            <td><?php echo $rows['addressOfCorporation']; ?></td>
                                            <td><?php echo $rows['dateOfRegistration']; ?></td>
                                            <td><?php echo $rows['placeOfRegistration']; ?></td>
                                            <td><?php echo $rows['natureOfBusiness']; ?></td>
                                            <td><?php echo $rows['nbspTIN']; ?></td>
                                            <td>PHP <?php echo sprintf("%.2f", $rows['assessedRealProperty']); ?></td>
                                            <td>PHP <?php echo sprintf("%.2f", $rows['grossEarnings']); ?></td>
                                            <td><a href="">View</a></td>
                                        </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

 
        <script type="text/javascript">
        th = document.getElementsByTagName('th');
        for(let c=0; c<th.length; c++)
        {
            th[c].addEventListener('click',item(c));
        }

        function item(c)
        {
            return function()
            {
                console.log(c);
                sortTable(c);
            }
        }

        function sortTable(c) {
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById("myTable");
            switching = true;
            /*Make a loop that will continue until
            no switching has been done:*/
            while (switching) {
                //start by saying: no switching is done:
                switching = false;
                rows = table.rows;
                /*Loop through all table rows (except the
                first, which contains table headers):*/
                for (i = 1; i < (rows.length - 1); i++) {
                //start by saying there should be no switching:
                shouldSwitch = false;
                /*Get the two elements you want to compare,
                one from current row and one from the next:*/
                x = rows[i].getElementsByTagName("td")[c];
                y = rows[i + 1].getElementsByTagName("td")[c];
                //check if the two rows should switch place:
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    //if so, mark as a switch and break the loop:
                    shouldSwitch = true;
                    break;
                }
                }
                if (shouldSwitch) {
                /*If a switch has been marked, make the switch
                and mark that a switch has been done:*/
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                }
            }
            }
    </script>        
    </body>
</html>
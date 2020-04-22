<?php  
include 'session.php';

if(!isset($_SESSION['login_user']))
    header("location: index.php");
if($_SESSION['login_user'] == "user")
    header("location: home.php");
?>  
<!DOCTYPE html>  
<html>  
     <head>  
          <title>Webslesson Tutorial | Datatables Jquery Plugin with Php MySql and Bootstrap</title>  
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
          <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
          <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
          <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
          <link rel="stylesheet" href="style.css" />
          <style>
            @import url('https://fonts.googleapis.com/css?family=Montserrat|Muli|Roboto&display=swap');
        </style>
     </head>  
     <body>  
     <div class="adminclass">
        <div class="container_all">
                <div class="navbaradmin">
                    <div class="logo-pic"><img src="img/Clogo-Blue.png" height="25px" width="25px"></div>
                    <div class="logo"><a href="admin_class_ab.php"><i>manila</i>&nbsp;<b>cedula</b>&nbsp;administrator</a></div>
                <div class="menuadmin">
                    <ul class="navbaradmin_ul">
                        <li><a  class="btn" href="logout.php"><b>Logout</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
          <div class="container" style="font-family: 'Montserrat';">  
               <h3 align="center">Class A (Unemployed)</h3>  
               <br />  
               <div class="table-responsive">  
                    <table id="class_a_data" class="table table-striped table-bordered">  
                         <thead>  
                              <tr>  
                                   <td>Date Processed</td>  
                                   <td>First Name</td>  
                                   <td>M.I.</td>  
                                   <td>Last Name</td>  
                                   <td>Gender</td>  
                                   <td>Address</td>
                              </tr>  
                         </thead>  
                         <?php  
                         $con = mysqli_connect('localhost', 'root', '');
                         mysqli_select_db($con, 'cedula');
                         $query = "SELECT * FROM classa";
                         $result=mysqli_query($con, $query);

                         while($row = mysqli_fetch_array($result))  
                         {  
                              echo '  
                              <tr>  
                                   <td>'.$row["dateAndTimeProcessed"].'</td>
                                   <td>'.$row["firstName"].'</td>  
                                   <td>'.$row["middle"].'</td>  
                                   <td>'.$row["lastName"].'</td>  
                                   <td>'.$row["gender"].'</td>  
                                   <td>'.$row["homeAddress"].'</td>   
                              </tr>  
                              ';  
                         }  
                         ?>  
                    </table>  
               </div>  
          </div>  
     </body>  
</html>  
<script>  
$(document).ready(function(){  
     $('#class_a_data').DataTable();  
});  
</script> 
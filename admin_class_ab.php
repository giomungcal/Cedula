<?php  
include 'session.php';

if(!isset($_SESSION['login_user']))
    header("location: index.php");
if($_SESSION['login_user'] == "user")
    header("location: home.php");
?>
<!DOCTYPE html>  
<html style="background-color: white;">  
     <head>  
          <title>Manila City Hall: Cedula</title>  
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
                    <div class="logoadmin-pic"><img src="img/Clogo.png" height="25px" width="25px"></div>
                    <div class="logoadmin"><a href=""><i>manila</i>&nbsp;<b>cedula</b>&nbsp;administrator</a></div>
                <div class="menuadmin">
                    <ul class="navbaradmin_ul">
                    <li><a  class="btn" href="admin_class_a.php"><b>Class A</b></a></li>
                    <li><a  class="btn" href="admin_class_ab.php"><b>Class AB</b></a></li>
                    <li><a  class="btn" href="admin_class_c.php"><b>Class C</b></a></li>
                    <li><a  class="btn" href="logout.php"><b>Logout</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
          <div class="container" style="font-family: 'Montserrat';">  
               <h3 align="center" style="color: #1f4498"><b>Class AB (Employed)</b></h3>  
               <br />  
               <div class="table-responsive">  
                    <table id="class_ab_data" class="table table-striped table-bordered">  
                         <?php include  'admin_class_ab_table.php'; ?>
                    </table>  <br><br><br>
               </div>  
          </div>  
     </body>  
</html>  
<script>  
// setInterval(() => {
//      $('#class_ab_data').load("admin_class_ab_table.php");
// }, 1);g
</script> 
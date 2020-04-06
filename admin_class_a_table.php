<thead>  
     <tr>  
          <td><b>ID</b></td>
          <td><b>Time Processed</b></td>   
          <td><b>Full Name</b></td> <!-- Strictly don't swap order -->
          <td><b>Status</b></td>
          <td><b>&nbsp;&nbsp;&nbsp;&nbsp;View</b></td>  
     </tr>  
</thead>

<?php
     $con = mysqli_connect('localhost', 'root', '');
     mysqli_select_db($con, 'cedula');
     $query = "SELECT * FROM classa";
     mysqli_query($con, $query);
     $sortTable="SELECT * FROM classa ORDER BY id DESC";
     $sortedTable = mysqli_query($con, $sortTable);


     while($row = mysqli_fetch_array($sortedTable))  
     {  
          echo '  
          <tr>
               <td>'.$row["queueNo"].' </td>
               <td>'.$row["timeProcessed"].'</td>
               <td>'.$row["lastName"].', '.$row["firstName"].' '.$row["middle"].'</td>  
               <td align="center" bgcolor="#32CD32"><font color="white">COMPLETED</font></td>
               <!-- Other status: RECEIVED (gray #A9A9A9), CANCELLED (red#8B0000), COMPLETED (green #32CD32)-->
               <td align="center"><a href="">👁️</a></td>
          </tr>  
          ';  
          // changed the symbol because the previous one has nothing to do with "view"
     }
?>  

<script>  
$(document).ready(function(){  
     $('#class_a_data').DataTable();  
});
</script>
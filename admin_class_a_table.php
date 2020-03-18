<thead>  
     <tr>  
          <td><b>ID</b></td>
          <td><b>Time Processed</b></td>   
          <td><b>Last Name</b></td> <!-- Strictly don't swap order -->
          <td><b>First Name</b></td>
          <td><b>M.I.</b></td>
          <td><b>Gender at Birth</b></td>
          <td><b>Home Address</b></td>
          <td><b>&nbsp;&nbsp;&nbsp;&nbsp;View</b></td>  
     </tr>  
</thead> 
                    
<?php
     $con = mysqli_connect('localhost', 'root', '');
     mysqli_select_db($con, 'cedula');
     $query = "SELECT * FROM classa";
     $result=mysqli_query($con, $query);
     $sortTable="SELECT * FROM classa ORDER BY id DESC";
     $sortedTable = mysqli_query($con, $sortTable);


     while($row = mysqli_fetch_array($sortedTable))  
     {  
          echo '  
          <tr>  
               <td>'.$row["queueNo"].' </td>
               <td>'.$row["timeProcessed"].'</td>
               <td>'.$row["lastName"].'</td>  
               <td>'.$row["firstName"].'</td>  
               <td>'.$row["middle"].'</td>  
               <td>'.$row["gender"].'</td>  
               <td>'.$row["homeAddress"].'</td>   
               <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">👁️</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
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
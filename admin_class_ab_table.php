<thead>  
     <tr>  
          <td><b>ID</b></td>
          <td><b>Time Processed</b></td>
          <td><b>Last Name</b></td>
          <td><b>First Name</b></td>  
          <td><b>M.I.</b></td>
          <td><b>Citizenship</b></td>
          <td><b>Gender at Birth</b></td>
          <td><b>Profession</b></td>
          <td align="center"><b>View</b></td> 
     </tr>  
</thead>  
<?php  
     $con = mysqli_connect('localhost', 'root', '');
     mysqli_select_db($con, 'cedula');
     $query = "SELECT * FROM classab";
     $result=mysqli_query($con, $query);
     $sortTable="SELECT * FROM classab ORDER BY id DESC";
     $sortedTable = mysqli_query($con, $sortTable);

     while($row = mysqli_fetch_array($sortedTable))  
     {  
          echo '  
          <tr>  
               <td>'.$row["queueNo"].'</td>
               <td>'.$row["timeProcessed"].'</td>
               <td>'.$row["lastName"].'</td>
               <td>'.$row["firstName"].'</td>
               <td>'.$row["middle"].'</td>
               <td>'.$row["citizenship"].'</td>
               <td>'.$row["gender"].'</td>
               <td>'.$row["profession"].'</td>
               <td align="center"><a href="">👁️</a></td>
          </tr>
          ';  
     }  
?>

<script>  
$(document).ready(function(){  
     $('#class_ab_data').DataTable();  
});  
</script>
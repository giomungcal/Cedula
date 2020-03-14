<thead>  
     <tr>  
          <td>Date Processed</td>  
          <td>First Name</td>  
          <td>M.I.</td>  
          <td>Last Name</td>  
          <td>Corporation</td>  
          <td>NBSP TIN</td>
          <td>Assessed Real Property</td>
          <td>Gross Earnings</td>
     </tr>  
</thead>  
<?php  
     $con = mysqli_connect('localhost', 'root', '');
     mysqli_select_db($con, 'cedula');
     $query = "SELECT * FROM classc";
     $result=mysqli_query($con, $query);

     while($row = mysqli_fetch_array($result))  
     {  
     echo '  
     <tr>  
          <td>'.$row["dateProcessed"].'</td>
          <td>'.$row["firstName"].'</td>  
          <td>'.$row["middle"].'</td>  
          <td>'.$row["lastName"].'</td>  
          <td>'.$row["corporation"].'</td>   
          <td>'.$row["nbspTIN"].'</td>   
          <td>'.$row["assessedRealProperty"].'</td>  
          <td>'.$row["grossEarnings"].'</td>  
     </tr>  
     ';  
     }  
?>  

<script>  
$(document).ready(function(){  
     $('#class_c_data').DataTable();  
});  
</script>
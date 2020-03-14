<thead>  
     <tr>  
          <td>Date Processed</td>  
          <td>Queue</td>  
          <td>First Name</td>  
          <td>M.I.</td>  
          <td>Last Name</td>  
          <td>Gender</td>  
          <td>Address</td>
          <td>View</td>  
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
               <td>'.$row["dateProcessed"].'</td>
               <td> A001-031120 </td>
               <td>'.$row["firstName"].'</td>  
               <td>'.$row["middle"].'</td>  
               <td>'.$row["lastName"].'</td>  
               <td>'.$row["gender"].'</td>  
               <td>'.$row["homeAddress"].'</td>   
               <td><a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;⨭&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
          </tr>  
          ';  
     }  
?>  

<script>  
$(document).ready(function(){  
     $('#class_a_data').DataTable();  
});  
</script>
<thead>  
     <tr>  
          <td align="center"><b>ID</b></td>
          <td align="center"><b>TIME PROCESSED</b></td>   
          <td align="center"><b>FULL NAME</b></td> <!-- Strictly don't swap order -->
          <td align="center"><b>DATE OF BIRTH</b></td>
          <td align="center"><b>VIEW</b></td>  
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
               <td align="center">'.$row["queueNo"].' </td>
               <td align="center">'.$row["timeProcessed"].'</td>
               <td>'.$row["lastName"].', '.$row["firstName"].' '.$row["middle"].'</td>  
               <td align="center">'.$row["dateOfBirth"].'</td>
               <td align="center"><button type="button" class="btn" style="padding: 0;border: none;background: none;"> 👁️ </button></td>
          </tr>  
          ';
          // changed the symbol because the previous one has nothing to do with "view"
     }
?>

<script>  
$(document).ready(function(){  
     $('#class_a_data').DataTable();  
});

$('.table tbody').on('click','.btn',function(){
     var currow = $(this).closest('tr');
     queueNum = currow.find('td:eq(0)').text();
     window.location.href = 'http://localhost:808/cedula/cedula_printout.php?queueNum=' + queueNum;
});

</script>
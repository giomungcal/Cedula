<thead>  
     <tr>  
          <td><b>ID</b></td>
          <td><b>Time Processed</b></td>
          <td><b>Name of Corporation</b></td>
          <td><b>Corporate Address</b></td>
          <td align="center"><b>View</b></td>
     </tr>  
</thead>  
<?php  
     $con = mysqli_connect('localhost', 'root', '');
     mysqli_select_db($con, 'cedula');
     $query = "SELECT * FROM classc";
     mysqli_query($con, $query);
     $sortTable="SELECT * FROM classc ORDER BY id DESC";
     $sortedTable = mysqli_query($con, $sortTable);     

     while($row = mysqli_fetch_array($sortedTable))  
     {
     echo '  
     <tr>
          <td>'.$row["queueNo"].'</td>
          <td>'.$row["timeProcessed"].'</td>
          <td>'.$row["corporation"].'</td>
          <td>'.$row["addressOfCorporation"].'</td>
          <td align="center"><button type="button" class="btn" style="padding: 0; border: none; background: none;"> 👁️ </button></td>
     </tr>
     ';
     } 
?>

<script>  
$(document).ready(function(){  
     $('#class_c_data').DataTable();  
});

$('.table tbody').on('click','.btn',function() {
          var currow = $(this).closest('tr');
          queueNum = currow.find('td:eq(0)').text();
          window.location.href = 'http://localhost:808/cedula/cedula_printout_c.php?queueNum=' + queueNum;
          // Remove the ":808" if cedula_printout doesn't display on your browser. Sa browser ko kailangan may ":808", namodify kasi settings ng XAMMP ko -H
     });
</script>
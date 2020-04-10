*decrease column width for Date/Time Processed, Date of Birth, and View
<br>
*increase column width for First/Last Names
<thead>  
     <tr>
          <td align="center"><b>ID</b></td>
          <td align="center"><b>DATE PROCESSED</b></td>  
          <td align="center"><b>TIME PROCESSED</b></td>
          <td align="center"><b>LAST NAME</b></td>
          <td align="center"><b>FIRST NAME</b></td>
          <td align="center"><b>M.I.</b></td>
          <td align="center"><b>DATE OF BIRTH</b></td>
          <td align="center"><b>VIEW</b></td>  
     </tr>
</thead>

<?php
     $con = mysqli_connect('localhost', 'root', '');
     mysqli_select_db($con, 'cedula');
     $sortTable="SELECT ID, queueNo, dateProcessed, timeProcessed, lastName, firstName, middle, dateOfBirth FROM classa";
     $sortedTable = mysqli_query($con, $sortTable);

     while($row = mysqli_fetch_array($sortedTable))
     {
          echo
          '
               <tr>
                    <td align="center">'.$row["queueNo"].' </td>
                    <td align="center">'.$row["dateProcessed"].'</td>
                    <td align="center">'.$row["timeProcessed"].'</td>
                    <td>'.$row["lastName"].'</td>
                    <td>'.$row["firstName"].'</td>
                    <td align="center">'.$row["middle"].'</td>
                    <td align="center">'.$row["dateOfBirth"].'</td>
                    <td align="center"><button type="button" class="btn" style="padding: 0; border: none; background: none;"> 👁️ </button></td>
               </tr>
          ';
     }
?>

<script>
     $(document).ready(function() {
          $('#class_a_data').DataTable(
               { "order": [[ 1, "desc" ], [ 2, 'desc' ]] }
          );
     });

     $('.table tbody').on('click','.btn',function() {
          var currow = $(this).closest('tr');
          queueNum = currow.find('td:eq(0)').text();
          window.location.href = 'http://localhost:808/cedula/cedula_printout.php?queueNum=' + queueNum;
     });
</script>
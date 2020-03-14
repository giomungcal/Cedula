<thead>  
                              <tr>  
                                   <td>Date Processed</td>  
                                   <td>First Name</td>  
                                   <td>M.I.</td>  
                                   <td>Last Name</td>  
                                   <td>Tax Account Number</td>  
                                   <td>ACR Number</td>
                                   <td>Real Property Income</td>  
                                   <td>Gross Receipts</td>  
                                   <td>Salary</td>
                              </tr>  
                         </thead>  
                         <?php  
                         $con = mysqli_connect('localhost', 'root', '');
                         mysqli_select_db($con, 'cedula');
                         $query = "SELECT * FROM classab";
                         $result=mysqli_query($con, $query);

                         while($row = mysqli_fetch_array($result))  
                         {  
                              echo '  
                              <tr>  
                                   <td>'.$row["dateProcessed"].'</td>
                                   <td>'.$row["firstName"].'</td>  
                                   <td>'.$row["middle"].'</td>  
                                   <td>'.$row["lastName"].'</td>  
                                   <td>'.$row["taxAccountNo"].'</td>  
                                   <td>'.$row["ACRNo"].'</td>   
                                   <td>'.$row["realPropertyIncome"].'</td>   
                                   <td>'.$row["grossReceiptsFromBusiness"].'</td>   
                                   <td>'.$row["salariesFromProfession"].'</td>   
                              </tr>  
                              ';  
                         }  
                         ?>

<script>  
$(document).ready(function(){  
     $('#class_ab_data').DataTable();  
});  
</script>
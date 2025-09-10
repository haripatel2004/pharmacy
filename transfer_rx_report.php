<?php
 
 include 'config.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--- bootstrap Icon (For Icons Image) --->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
      <!-- style css  (For our own CSS file)-->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Millstreet Pharmacy</title>
    
  </head>
  
  <body> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>      

    <div class="container-fluid  mt-3">
      <div class="row  justify-content-evenly">
        <div class="col-md-12 pt-3 table-responsive">
        
          <h2>Transfer Rx Records</h2>
          <?php
           //$conn=mysqli_connect("localhost","root","","pharmacy") or die("Connection Failed");
             $sql="select * from rx_transfer";
             $result=mysqli_query($conn,$sql) or die("Query Unsuccessful.");

             if(mysqli_num_rows($result) > 0)
              {
          ?>
                <table class="table table-bordered table-info table-striped table-hover">
                   <thead class="table-dark">
                      <tr>
                      <th>DELETE</th>
                        <th>Sr.No.</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Phone No.</th>    
                        <th>Borth Date</th>
                        <th>Address <br> City <br> State <br> Zip Code </th>
                        <th>Pharmacy Name </th>
                        <th>Pharmacy Phone </th>
                        <th>Rx1 <br>Name<br>Number </th>
                        <th>Rx2 <br>Name<br>Number </th>
                        <th>Rx3 <br>Name<br>Number </th>
                        <th>Rx4 <br>Name<br>Number </th>
                        <th>Rx5 <br>Name<br>Number </th>
                        
                      </tr>
                   </thead>
                   <tbody>
                       <?php
                            while($row = mysqli_fetch_assoc($result))
                              {
                        ?>
                                <tr>
                                  
                                    <td>
                                        <a href='delete_rx_transfer.php?id=<?php echo $row['sr_no']; ?>'>Delete</a>
                                    </td>

                                    <td><?php echo $row['sr_no']; ?></td>
                                    <td><?php echo $row['l_name']; ?></td>
                                    <td><?php echo $row['f_name']; ?></td>
                                    <td><?php echo $row['phone']; ?></td>
                                    <td><?php echo $row['dob']; ?></td>
                                    <td>
                                        <?php echo $row['address']; ?><br>
                                        <?php echo $row['city']; ?><br>
                                        <?php echo $row['state']; ?><br>
                                        <?php echo $row['zip']; ?>
                                    </td>
                                    <td><?php echo $row['p_name']; ?></td>
                                    <td><?php echo $row['p_no']; ?></td>
                                    <td>
                                        <?php echo $row['rx_1_name']; ?><br>
                                        <?php echo $row['rx_1_no']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['rx_2_name']; ?><br>
                                        <?php echo $row['rx_2_no']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['rx_3_name']; ?><br>
                                        <?php echo $row['rx_3_no']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['rx_4_name']; ?><br>
                                        <?php echo $row['rx_4_no']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['rx_5_name']; ?><br>
                                        <?php echo $row['rx_5_no']; ?>
                                    </td>

                                 </tr>
                       <?php  
                              } 
                        ?>
                   </tbody>
                </table>
          <?PHP 
   }         else{
                  echo "<h2>No Record Found</h2>";
                }
             mysqli_close($conn);
          ?>
        </div>
      </div>
     </div>

    </body>
</html>















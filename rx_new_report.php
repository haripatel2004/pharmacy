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
        
          <h2>New Rx Records</h2>
          <?php
           //$conn=mysqli_connect("localhost","root","","pharmacy") or die("Connection Failed");
             $sql="select * from new_rx";
             $result=mysqli_query($conn,$sql) or die("Query Unsuccessful.");

             if(mysqli_num_rows($result) > 0)
              {
          ?>

                <table class="table table-bordered table-info table-striped table-hover">
                   <thead class="table-danger">
                      <tr>
                        <th>DELETE</th>
                        <th>Sr.No.</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Phone No.</th>    
                        <th>Rx1<br>Rx2<br>Rx3<br>Rx4 </th>
                        <th>Med. Name-1<br>Quantity-1 </th>
                        <th>Med. Name-2<br>Quantity-2 </th>
                        <th>Med. Name-3<br>Quantity-3 </th>
                        <th>Med. Name-4<br>Quantity-4 </th>
                        <th>Med. Name-5<br>Quantity-5 </th>
                        <th>Pick-up Status</th>
                        <th> Notification</th>
                        
                      </tr>
                   </thead>
                   <tbody>
                       <?php
                            while($row = mysqli_fetch_assoc($result))
                              {
                        ?>
                                <tr>
                                    <td>
                                        <a href='delete_new_rx.php?id=<?php echo $row['sr_no']; ?>'>Delete</a>
                                    </td>
                                    <td><?php echo $row['sr_no']; ?></td>
                                    <td><?php echo $row['l_name']; ?></td>
                                    <td><?php echo $row['f_name']; ?></td>
                                    <td><?php echo $row['ph_no']; ?></td>
                                    <td>
                                        <?php echo $row['rx_1']; ?><br>
                                        <?php echo $row['rx_2']; ?><br>
                                        <?php echo $row['rx_3']; ?><br>
                                        <?php echo $row['rx_4']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['name_1']; ?><br>
                                        <?php echo $row['qty_1']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['name_2']; ?><br>
                                        <?php echo $row['qty_2']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['name_3']; ?><br>
                                        <?php echo $row['qty_3']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['name_4']; ?><br>
                                        <?php echo $row['qty_4']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['name_5']; ?><br>
                                        <?php echo $row['qty_5']; ?>
                                    </td>
                                    <td><?php echo $row['pic']; ?></td>
                                    <td><?php echo $row['inf']; ?></td>
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















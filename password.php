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

    <div class="container-fluid  mt-5">
      <div class="row  justify-content-evenly">
        <div class="col-md-10 p-5 mt-5 bg-info text-center border border-5 border-secondary rounded rounded-circle">
        
          <?php


             $fpass=$_POST['mpass'];
             //$cus_sr_no = $_GET['id'];

              include 'config.php';
              
              //$result = $data1 . ' ' . $data2;
              $fpass= " '$fpass' "; 
             // echo $fpass;
          
              $sql = "select pass FROM pass WHERE pass=$fpass";
              $result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

              //header("Location: http://localhost/pharmacy/rx_new_report.php");

             

             if(mysqli_num_rows($result) > 0)
              {
          ?>

             <!-- <h1>passwors is match. -->
            
                <h2 class="text-danger">Mill Street Pharmacy Reports</h2>
              <BR>
                 <a href="phar_meet_report.php"> 
                   <input class="btn btn-primary col-5  btn-lg fs-3 mb-4 " type="submit" value="Pharmacist Meeting Report">
                 </a>
              <BR>
                 <a href="rx_new_report.php"> 
                    <input class="btn btn-primary col-5  btn-lg fs-3 mb-4 " type="submit" value="New Rx Report">
                 </a>  
              <BR>
                 <a href="transfer_rx_report.php"> 
                    <input class="btn btn-primary col-5 btn-lg fs-3 mb-4 " type="submit" value="Transfer Rx Report">
                 </a>

          <?PHP 
   }         else{
                  echo "<h2>Password Mismatch</h2>";
                  header("Location: http://localhost/pharmacy/login.html");
                }
             mysqli_close($conn);
          ?>
        </div>
      </div>
     </div>

    </body>
</html>
















<?php    

     //------------------------------ INSERT METHOD START  ------------------------------
    $db_server="localhost";
    $db_user="root";
    $db_password="";
    $db_name="db_pharmacy";
    $conn="";

    try{
        $conn = mysqli_connect($db_server,
                               $db_user,
                               $db_password,
                               $db_name);

    }catch(mysqli_sql_exception)
      {
        echo "Could not connected! <br>";
      }


      if($conn) {
        echo "you are connected! <br>";
    }
 
     // $fname="xyz";
     //  $fage="25";

      $fname=$_POST['m_name'];
      $faddress=$_POST['m_address'];
      $fcity=$_POST['m_city'];
      $fstate=$_POST['m_state'];
      $fzip=$_POST['m_zip'];
      $fe_mail=$_POST['m_e_mail'];
      $fphone=$_POST['m_phone'];
      $ffax=$_POST['m_fax'];
      $fmdate=$_POST['m_mdate'];
      $fmtime=$_POST['m_mtime'];

    //$sql= "INSERT INTO temp (sr_no,name,age) 
    //       VALUES (NULL,'$fname','$fage')";
   
      $sql="INSERT INTO meet_phar (name, address, city, state, zip, e_mail, phone, fax, mdate, mtime, sr_no)
            VALUES ('$fname', '$faddress', '$fcity', '$fstate', '$fzip', '$fe_mail', '$fphone', '$ffax', '$fmdate', '$fmtime', NULL)"; 
   
   try{
       mysqli_query($conn,$sql);
       echo "Record success fully Saved <br>";
    }catch(mysqli_sql_exception)
      {
        echo "Error in record <br>";
      }
     mysqli_close($conn);
   
     //------------------------------ INSERT METHOD STOP  ------------------------------
 
 
 ?>
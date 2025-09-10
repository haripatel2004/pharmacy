
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
 

   
    $fm_l_name=$_POST['m_l_name'];
    $fm_f_name=$_POST['m_f_name'];
    $fphone=$_POST['m_phone'];
    $fm_dob=$_POST['m_dob'];
    $fm_address=$_POST['m_address'];
    $fm_city=$_POST['m_city'];
    $fm_state=$_POST['m_state'];
    $fm_zip=$_POST['m_zip'];
    $fm_p_name=$_POST['m_p_name'];
    $fm_p_no=$_POST['m_p_no'];
    $fm_rx_1_name=$_POST['m_rx_1_name'];
    $fm_rx_1_no=$_POST['m_rx_1_no'];
    $fm_rx_2_name=$_POST['m_rx_2_name'];
    $fm_rx_2_no=$_POST['m_rx_2_no'];
    $fm_rx_3_name=$_POST['m_rx_3_name'];
    $fm_rx_3_no=$_POST['m_rx_3_no'];
    $fm_rx_4_name=$_POST['m_rx_4_name'];
    $fm_rx_4_no=$_POST['m_rx_4_no'];
    $fm_rx_5_name=$_POST['m_rx_5_name'];
    $fm_rx_5_no=$_POST['m_rx_5_no'];
      
   
            $sql="INSERT INTO rx_transfer (sr_no, l_name, f_name, phone, dob, address, city, state, zip, p_name, p_no, rx_1_name, rx_1_no, rx_2_name, rx_2_no, rx_3_name, rx_3_no, rx_4_name, rx_4_no, rx_5_name, rx_5_no) 
             VALUES (NULL, '$fm_l_name', '$fm_f_name', '$fphone', '$fm_dob', '$fm_address', '$fm_city', '$fm_state', '$fm_zip', '$fm_p_name', '$fm_p_no', '$fm_rx_1_name', '$fm_rx_1_no', '$fm_rx_2_name', '$fm_rx_2_no', '$fm_rx_3_name', '$fm_rx_3_no', '$fm_rx_4_name', '$fm_rx_4_no', '$fm_rx_5_name', '$fm_rx_5_no')";

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
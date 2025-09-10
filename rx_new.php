
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
      $fm_ph_no=$_POST['m_ph_no'];
      $fm_rx_1=$_POST['m_rx_1'];
      $fm_rx_2=$_POST['m_rx_2'];
      $fm_rx_3=$_POST['m_rx_3'];
      $fm_rx_4=$_POST['m_rx_4'];
      $fm_name_1=$_POST['m_name_1'];
      $fm_qty_1=$_POST['m_qty_1'];
      $fm_name_2=$_POST['m_name_2'];
      $fm_qty_2=$_POST['m_qty_2'];
      $fm_name_3=$_POST['m_name_3'];
      $fm_qty_3=$_POST['m_qty_3'];
      $fm_name_4=$_POST['m_name_4'];
      $fm_qty_4=$_POST['m_qty_4'];
      $fm_name_5=$_POST['m_name_5'];
      $fm_qty_5=$_POST['m_qty_5'];
      $fm_pic=$_POST['m_pic'];
      $fm_inf=$_POST['m_inf'];

      
      $sql="INSERT INTO new_rx (sr_no, l_name, f_name, ph_no, rx_1, rx_2, rx_3, rx_4, name_1, qty_1, name_2, qty_2, name_3, qty_3, name_4, qty_4, name_5, qty_5, pic, inf) 
            VALUES (NULL, '$fm_l_name', '$fm_f_name', '$fm_ph_no', '$fm_rx_1', '$fm_rx_2','$fm_rx_3', '$fm_rx_4', '$fm_name_1', '$fm_qty_1', '$fm_name_2', '$fm_qty_2','$fm_name_3','$fm_qty_3', '$fm_name_4', '$fm_qty_4','$fm_name_5','$fm_qty_5', '$fm_pic', '$fm_inf')";
   
  
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
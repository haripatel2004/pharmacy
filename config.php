<?php

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
             // echo "Could not connected! <br>";
            }
       if($conn) {
          //echo "you are connected! <br>";
        }

    ?>


        <?php

     
       include_once 'scripts/connect_to_mysql.php';
      $user_id= $_POST['user_id'];
      $event_id= $_POST['event_id'];
      print($user_id.'..................');

       $sql_registration_check = mysql_query("SELECT event_id FROM participation WHERE user_id=$user_id and event_id=$event_id");
            $registration_check = mysql_num_rows($sql_registration_check);

            if(!$registration_check>0){
                 $sql = mysql_query("INSERT INTO participation (user_id,event_id)
                             VALUES($user_id,$event_id)")
                       or die (mysql_error());
                $msgToUser= "you are successfully registered.";
           }
           else $msgToUser="you are already registered";
            //include_once 'msgToUser.php';*/
            
        ?>
    
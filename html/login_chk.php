<?php
   session_cache_limiter('');
   session_start();   
?>






<?php 
      
    $conn = mysql_connect("localhost", "root", "");
    if( !$conn ) {
        die("SQL error occurred on connect: " . mysql_error());
    } 

    # choose which database on server to use (similar to SQL USE database;)
    if( !mysql_select_db("dbtravel") ) {
        die("SQL error occurred selecting DB: " . mysql_error());
    } 

    extract($_POST); 

    
    $query = "SELECT user.usr_id, user.usr_name, user.usr_pwd, user.comp_suv FROM user WHERE user.usr_id= '$user_email'";
    $results = mysql_query($query);
    $rID = mysql_fetch_array($results);
   
    
    if($rID['usr_id']==$user_email){
         if($rID['usr_pwd']==$user_password){
      
                 $_SESSION['is_logged']='YES';
                  $_SESSION['usr_name'] = $rID['usr_name'];
               $_SESSION['usr_id'] = $user_email;
     
         
         if($rID['comp_suv']=="y"){ ?>

               <script type="text/javascript">
                       window.location.replace('./HTML/index.html')
               </script>
      
      <?php   }
         else{ 
	  $row_query = "SELECT text_idx FROM ques_text_list";
      $resultID = mysql_query($row_query);   
      $row_number = mysql_num_rows($resultID);
      
      $_SESSION['survey_cnt']= $row_number;


		 ?>

               <script type="text/javascript">
                       window.location.replace('./ready_survey.php')
               </script>
      
            
      <?php   }
         
         }
         else{?>

         <script type="text/javascript">
                 window.location.replace('./checking.php')
         </script>
      
          <?php }
    }
    else { ?>

           <script type="text/javascript">
           window.location.replace('./checking.php')
      </script>


<?php }
   
?>





<?php
  
   session_start();   




?>




<?php
   
    $conn = mysql_connect("127.0.0.1", "root", "");
    if( !$conn ) {
        die("SQL error occurred on connect: " . mysql_error());
    } 
    if( !mysql_select_db("dbtravel") ) {
        die("SQL error occurred selecting DB: " . mysql_error());
    } 

   




$query = "select text_idx, ques_text from ques_text_list order by rand() limit 5";


   $result = mysql_query($query);

   $rID = mysql_fetch_array($result);
   $_SESSION['que1_idx'] = $rID['text_idx'];
   $_SESSION['que1'] = $rID['ques_text'];
      

   $rID = mysql_fetch_array($result);
   $_SESSION['que2_idx'] = $rID['text_idx'];
   $_SESSION['que2'] = $rID['ques_text'];

   $rID = mysql_fetch_array($result);
   $_SESSION['que3_idx'] = $rID['text_idx'];
   $_SESSION['que3'] = $rID['ques_text'];


   $rID = mysql_fetch_array($result);
   $_SESSION['que4_idx'] = $rID['text_idx'];
   $_SESSION['que4'] = $rID['ques_text'];

   $rID = mysql_fetch_array($result);
   $_SESSION['que5_idx'] = $rID['text_idx'];
   $_SESSION['que5'] = $rID['ques_text'];



?>


<script>                 location.replace("./survey.php");                              </script>  
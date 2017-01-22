<?php

   session_start();   
?>


<?php
$que1 = $_SESSION['que1_idx'];
$ans1 = $_POST['first'];

$que2 = $_SESSION['que2_idx'];
$ans2 = $_POST['second'];

$que3 = $_SESSION['que3_idx'];
$ans3 = $_POST['third'];

$que4 = $_SESSION['que4_idx'];
$ans4 = $_POST['fourth'];

$que5 = $_SESSION['que5_idx'];
$ans5 = $_POST['fifth'];
?>

<?php

$conn = mysql_connect("127.0.0.1", "root", "");
    if( !$conn ) {
        die("SQL error occurred on connect: " . mysql_error());
    } 


    if( !mysql_select_db("dbtravel") ) {
        die("SQL error occurred selecting DB: " . mysql_error());
    } 

  

   $user_email = $_SESSION['usr_id'];

 $insert_query1 = "insert into survey(usr_id, ques_idx, result) values('$user_email', $que1, $ans1)";
 $results1 = mysql_query($insert_query1);


 $insert_query2 = "insert into survey(usr_id, ques_idx, result) values('$user_email', $que2, $ans2)";
 $results2 = mysql_query($insert_query2);


 $insert_query3 = "insert into survey(usr_id, ques_idx, result) values('$user_email', $que3, $ans3)";
 $results3 = mysql_query($insert_query3);

 $insert_query4 = "insert into survey(usr_id, ques_idx, result) values('$user_email', $que4, $ans4)";
 $results4 = mysql_query($insert_query4);

 $insert_query5 = "insert into survey(usr_id, ques_idx, result) values('$user_email', $que5, $ans5)";
 $results5 = mysql_query($insert_query5);
 

  $update_query = "UPDATE user SET comp_suv = 'y' WHERE usr_id = '$user_email'";
    $up_res = mysql_query($update_query);

    
?>
<script type="text/javascript">

 
 window.location.replace('./callpy.php')
         
      </script>


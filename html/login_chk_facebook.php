<?php
	session_cache_limiter('');
	session_start();   
?>


<!DOCTYPE HTML>
<html lang="ko">

<head>
<meta charset="utf-8">
<title>validate id</title>
</head>
<body>
<?php


 $conn = mysql_connect("127.0.0.1", "root", "");
    if( !$conn ) {
        die("SQL error occurred on connect: " . mysql_error());
    } 

    if( !mysql_select_db("dbtravel") ) {
        die("SQL error occurred selecting DB: " . mysql_error());
    } 


$email = $_POST['emaila'];
$name = $_POST['namea'];

$query = "SELECT user.usr_id, user.usr_name, user.usr_pwd, user.comp_suv FROM user WHERE user.usr_id= '$email' and user.usr_is_facebook = 'y'";
$resultID = mysql_query($query);   
$number = mysql_num_rows($resultID);
    

if($number == 1){
    $_SESSION['is_logged']='YES';
	$_SESSION['usr_name'] = $_POST['namea'];
    $_SESSION['usr_id'] = $_POST['emaila'];
    $_SESSION['fb'] = 'Y';
    if($rID['comp_suv']=="y"){ ?>

        <script type="text/javascript">
                window.location.replace('./HTML/index.html')
        </script>
      
    <?php }
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
else
{ ?>
    <script>
        document.location.href ='./checking_facebook.php';   
    </script> 
<?php }
    ?>
	
</body>
</html>

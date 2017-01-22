<?php
   session_cache_limiter('');
   session_start();   
?>



<?php
    $fb_status = "n";
    $survey_status = "n";
    $conn = mysql_connect("127.0.0.1", "root", "");
    if( !$conn ) {
        die("SQL error occurred on connect: " . mysql_error());
    } 
    if( !mysql_select_db("dbtravel") ) {
        die("SQL error occurred selecting DB: " . mysql_error());
    } 

   

extract($_POST);


$query = "INSERT INTO user VALUES('$user_email', '$user_name', '$user_password','$fb_status', '$survey_status')";


$result = mysql_query($query);

        $_SESSION['is_logged']='YES';
   $_SESSION['usr_name'] = $user_name;
        $_SESSION['usr_id'] = $user_email;

?>

<script type="text/javascript">
           window.location.replace('./ready_survey.php');
      </script>
        /*header("Location: http://127.0.0.1/web/HTML/index.html");*/
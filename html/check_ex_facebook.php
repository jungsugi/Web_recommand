<?php 
session_cache_limiter('');    session_start();
$r_value;
$string = $_POST['emaila'];
$name = $_POST['namea'];
$number;
$conn = mysql_connect("127.0.0.1", "root", "");
    if( !$conn ) {
        die("SQL error occurred on connect: " . mysql_error());
    } 

    # choose which database on server to use (similar to SQL USE database;)
    if( !mysql_select_db("dbtravel") ) {
        die("SQL error occurred selecting DB: " . mysql_error());
    } 

$id_query = "SELECT usr_id FROM user WHERE usr_id = '$string'";
$resultID = mysql_query($id_query);	
$number = mysql_num_rows($resultID);


if($number == 0){
    $query = "INSERT INTO user VALUES('$string', '$name', 'null','y','n')";
	
	$_SESSION['is_logged']='YES';
	$_SESSION['usr_name'] = $name;
    $_SESSION['usr_id'] = $string;
    $_SESSION['fb'] = 'Y';
	mysql_query($query);	
	?>

    <script type="text/javascript">
        window.location.replace('./ready_survey.php')
    </script>
<?php }
else if($number == 1){?>
<script type="text/javascript">
    alert("?´ë? ì¡´ìž¬?˜ëŠ” ê³„ì •?…ë‹ˆ??")
    window.location.replace('./facebook_gotomain.php');
</script>
<?php }
?>





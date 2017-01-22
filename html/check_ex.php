
<?php 

$r_value;
$string = $_POST['email'];
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
$r_value = true;
}
else if($number == 1){
$r_value = false;
}

echo $r_value;
//echo "$string";
?>





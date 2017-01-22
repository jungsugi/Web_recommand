<?php session_start(); ?>

<?php 

     $user_email = $_SESSION['usr_id'];
       $conn = mysql_connect("127.0.0.1", "root", "");
    if( !$conn ) {
        die("SQL error occurred on connect: " . mysql_error());
    } 


    if( !mysql_select_db("dbtravel") ) {
        die("SQL error occurred selecting DB: " . mysql_error());
    } 


    $query = "select ques_text from survey, ques_text_list where text_idx = ques_idx and result > 2 and usr_id = '$user_email'";
       $resultID = mysql_query($query);
    $number = mysql_num_rows($resultID);
    $result = "";
	
	
if($number ==1 ){
	$rID = mysql_fetch_array($resultID);		
	$_SESSION['keyword1']= $rID['ques_text'];
	$kw1 = $_SESSION['keyword1'];
	
	$result = exec("python3 visit_recommend_f.py $kw1");	




$result = str_replace('[','',$result);
$result = str_replace(']','',$result);	
$result = str_replace('\'','',$result);
$visit_list = explode("," , $result);

echo $visit_list[0];
echo "<br/>"; 
echo $visit_list[1];
echo "<br/>"; 
echo $visit_list[2];
echo "<br/>"; 
echo $visit_list[3];
echo "<br/>"; 
echo $visit_list[4];
echo "<br/>"; 
echo $visit_list[5];
echo "<br/>"; 
echo $visit_list[6];
echo "<br/>"; 
echo $visit_list[7];
echo "<br/>"; 
echo $visit_list[8];
echo "<br/>"; 
echo $visit_list[9];








}
else if($number ==2 ){
		$rID = mysql_fetch_array($resultID);
		$_SESSION['keyword1']= $rID['ques_text'];
		$rID = mysql_fetch_array($resultID);
		$_SESSION['keyword2']= $rID['ques_text'];

		$kw1 = $_SESSION['keyword1'];
		$kw2 = $_SESSION['keyword2'];
			
	
		$result = exec("python3 visit_recommend_f.py $kw1 $kw2");	




$result = str_replace('[','',$result);
$result = str_replace(']','',$result);	
$result = str_replace('\'','',$result);
$visit_list = explode("," , $result);

echo $visit_list[0];
echo "<br/>"; 
echo $visit_list[1];
echo "<br/>"; 
echo $visit_list[2];
echo "<br/>"; 
echo $visit_list[3];
echo "<br/>"; 
echo $visit_list[4];
echo "<br/>"; 
echo $visit_list[5];
echo "<br/>"; 
echo $visit_list[6];
echo "<br/>"; 
echo $visit_list[7];
echo "<br/>"; 
echo $visit_list[8];
echo "<br/>"; 
echo $visit_list[9];		

}
else if($number ==3 ){


		$rID = mysql_fetch_array($resultID);
		$_SESSION['keyword1']= $rID['ques_text'];
		$rID = mysql_fetch_array($resultID);
		$_SESSION['keyword2']= $rID['ques_text'];
		$rID = mysql_fetch_array($resultID);
		$_SESSION['keyword3']= $rID['ques_text'];


		$kw1 = $_SESSION['keyword1'];
		$kw2 = $_SESSION['keyword2'];
		$kw3 = $_SESSION['keyword3'];
	
		
	
		
	$result = exec("python3 visit_recommend_f.py °è°î ³ó¿ø Ä·ÇÎ");	
		

$result = str_replace('[','',$result);
$result = str_replace(']','',$result);	
$result = str_replace('\'','',$result);
$visit_list = explode("," , $result);

echo $visit_list[0];
echo "<br/>"; 
echo $visit_list[1];
echo "<br/>"; 
echo $visit_list[2];
echo "<br/>"; 
echo $visit_list[3];
echo "<br/>"; 
echo $visit_list[4];
echo "<br/>"; 
echo $visit_list[5];
echo "<br/>"; 
echo $visit_list[6];
echo "<br/>"; 
echo $visit_list[7];
echo "<br/>"; 
echo $visit_list[8];
echo "<br/>"; 
echo $visit_list[9];
		

}else if($number ==4 ){
$rID = mysql_fetch_array($resultID);
		$_SESSION['keyword1']= $rID['ques_text'];
		$rID = mysql_fetch_array($resultID);
		$_SESSION['keyword2']= $rID['ques_text'];
		$rID = mysql_fetch_array($resultID);
		$_SESSION['keyword3']= $rID['ques_text'];
$rID = mysql_fetch_array($resultID);
		$_SESSION['keyword4']= $rID['ques_text'];



		$kw1 = $_SESSION['keyword1'];
		$kw2 = $_SESSION['keyword2'];
		$kw3 = $_SESSION['keyword3'];
		$kw4 = $_SESSION['keyword4'];
	 $result = exec("python3 visit_recommend_f.py $kw1 $kw2 $kw3 $kw4");	




$result = str_replace('[','',$result);
$result = str_replace(']','',$result);	
$result = str_replace('\'','',$result);
$visit_list = explode("," , $result);

echo $visit_list[0];
echo "<br/>"; 
echo $visit_list[1];
echo "<br/>"; 
echo $visit_list[2];
echo "<br/>"; 
echo $visit_list[3];
echo "<br/>"; 
echo $visit_list[4];
echo "<br/>"; 
echo $visit_list[5];
echo "<br/>"; 
echo $visit_list[6];
echo "<br/>"; 
echo $visit_list[7];
echo "<br/>"; 
echo $visit_list[8];
echo "<br/>"; 
echo $visit_list[9];

}                    
else if($number ==5 ){

$rID = mysql_fetch_array($resultID);
		$_SESSION['keyword1']= $rID['ques_text'];
		$rID = mysql_fetch_array($resultID);
		$_SESSION['keyword2']= $rID['ques_text'];
		$rID = mysql_fetch_array($resultID);
		$_SESSION['keyword3']= $rID['ques_text'];
$rID = mysql_fetch_array($resultID);
		$_SESSION['keyword4']= $rID['ques_text'];
		$rID = mysql_fetch_array($resultID);
		$_SESSION['keyword5']= $rID['ques_text'];


		$kw1 = $_SESSION['keyword1'];
		$kw2 = $_SESSION['keyword2'];
		$kw3 = $_SESSION['keyword3'];
		$kw4 = $_SESSION['keyword4'];
		$kw5 = $_SESSION['keyword5'];

		$result = exec("python3 visit_recommend_f.py $kw1 $kw2 $kw3 $kw4 $kw5");




$result = str_replace('[','',$result);
$result = str_replace(']','',$result);	
$result = str_replace('\'','',$result);
$visit_list = explode("," , $result);

echo $visit_list[0];
echo "<br/>"; 
echo $visit_list[1];
echo "<br/>"; 
echo $visit_list[2];
echo "<br/>"; 
echo $visit_list[3];
echo "<br/>"; 
echo $visit_list[4];
echo "<br/>"; 
echo $visit_list[5];
echo "<br/>"; 
echo $visit_list[6];
echo "<br/>"; 
echo $visit_list[7];
echo "<br/>"; 
echo $visit_list[8];
echo "<br/>"; 
echo $visit_list[9];
		

}		

else {

		$result = exec("python3 visit_recommend_f.py $not_pos");





$result = str_replace('[','',$result);
$result = str_replace(']','',$result);	
$result = str_replace('\'','',$result);
$visit_list = explode("," , $result);

echo $visit_list[0];
echo "<br/>"; 
echo $visit_list[1];
echo "<br/>"; 
echo $visit_list[2];
echo "<br/>"; 
echo $visit_list[3];
echo "<br/>"; 
echo $visit_list[4];
echo "<br/>"; 
echo $visit_list[5];
echo "<br/>"; 
echo $visit_list[6];
echo "<br/>"; 
echo $visit_list[7];
echo "<br/>"; 
echo $visit_list[8];
echo "<br/>"; 
echo $visit_list[9];
		

}	






	
?>


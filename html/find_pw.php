<?php


$conn = mysql_connect("127.0.0.1", "root", "");
    if( !$conn ) {
        die("SQL error occurred on connect: " . mysql_error());
    } 

    # choose which database on server to use (similar to SQL USE database;)
    if( !mysql_select_db("dbtravel") ) {
        die("SQL error occurred selecting DB: " . mysql_error());
    } 

    extract($_POST);

   $query = "SELECT user.usr_id, user.usr_pwd, user.usr_is_facebook FROM user WHERE user.usr_id = '$user_email'";
$results = mysql_query($query);
$rID = mysql_fetch_array($results);

if($rID['usr_id'] == $user_email){
	if($rID['usr_is_facebook']=="n"){ ?>
		
    // 메일 보냄
    <?php
    require_once("./PHPmailer-master/PHPMailerAutoload.php"); //받�? 주소?�다가!

    $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

    $mail->IsSMTP(); // telling the class to use SMTP

    try {

        $mail->Host = "smtp.gmail.com"; // email 보낼???�용???�버�?지??
        $mail->SMTPAuth = true; // SMTP ?�증???�용??
        $mail->Port = 465; // email 보낼???�용???�트�?지??
        $mail->SMTPSecure = "ssl"; // SSL???�용??
        $mail->Username   = "jaehyun0419@gmail.com"; // Gmail 계정
        $mail->Password   = "kjh129342"; // ?�스?�드
        $message = "비�?번호??[" . $rID['usr_pwd'] . "] ?�니??";
        
        $mail->SetFrom('jaehyun0419@gmail.com', '관리자'); // 보내???�람 email 주소?� ?�시???�름
        $mail->AddAddress($user_email, 'YOU'); // 받을 ?�람 email 주소?� ?�시???�름
        $mail->Subject = "비�?번호 ?�니??"; // 메일 ?�목
        $mail->MsgHTML($message); // 메일 ?�용 
        $mail->CharSet = 'UTF-8';
        $mail->Send();
        echo "Message Sent OK
    \n";
    }

    catch (phpmailerException $e) {
        echo $e->errorMessage(); 
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    ?>


    




		<script type="text/javascript">
		     window.location.replace('./findpw_suc.php')
		</script>


	<?php }

	else{   ?>
	
		<script type="text/javascript">
		     window.location.replace('./findpw_fb_fail.php')
		</script>

	<?php }

}
else{   ?>

		<script type="text/javascript">
		     window.location.replace('./findpw_fail.php')
		</script>

<?php }
?>


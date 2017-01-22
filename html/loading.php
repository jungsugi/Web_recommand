<?php

	session_start();   
?>


<!DOCTYPE html>
<html lang="ko">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   <!--<META http-equiv="refresh" content="3; url=http://www.naver.com"> -->
   <link href="http://www.jonathantneal.com/wp-content/uploads/2013/01/favicon-32.png" rel="shotrcut icon">
    <title>BDA4team2-prototype</title>   <!--윗제목 --> 

   

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    
    

</head>




<body>
    

    <!-- Header -->
    <header id="top" class="header">
    	<div class="text-vertical-center">
       <h1><span style="font-style: italic ;  font-weight: bold;  font-size: 1.5em;line-height: 1.0em;  color: navy;font-family: arial;">
            	잠시만 기다려주세요.
             </span></h1>
            
            <h3><span style="font-style: italic ;  font-weight: bold;  font-size: 1.5em;line-height: 1.0em;  color: navy;font-family: arial;">
            	분석 중입니다.
            	</span></h3>
            
		<progress id="progressBar" value="0" max="100" style="width:800px; height: 60px"></progress>
		<span id="status"></span>
		<h2 id="finalMessage"></h1>
		</div>
    </header>

</body>



<script>
function progressBarSim(al) {
  var bar = document.getElementById('progressBar');
  var status = document.getElementById('status');
  status.innerHTML = al+"%";		//id=status인 태그안을 al+ "%" 로 같이 출력
  bar.value = al;	// progressbar의 값을 al로 맞춘다 (al 증가시에 같이 증가하도록)
  al++;	
	var sim = setTimeout("progressBarSim("+al+")",50);	
	
	if(al == 100){
	  status.innerHTML = "100%";
	  bar.value = 100;
	  clearTimeout(sim);
	  var finalMessage = document.getElementById('finalMessage');	  
	  finalMessage.innerHTML = " 분석 완료 !";
	  window.location.replace('../HTML/index.html')

	}else if(al >= 20 && al <40){
	    var finalMessage = document.getElementById('finalMessage');
	    finalMessage.innerHTML = "분석 초기단계입니다.^^"
		
	}else if(al >= 40 && al<60){
		var finalMessage = document.getElementById('finalMessage');
		finalMessage.innerHTML = "열심히 분석중이에요."
		
	}else if(al >= 60 && al <80){
		var finalMessage = document.getElementById('finalMessage');
		finalMessage.innerHTML = "거의 다 왔어요 !"
		
	}else if(al >= 80 && al<100){
		var finalMessage = document.getElementById('finalMessage');
		finalMessage.innerHTML = "이제 곧 마무리 할께요 !"
		
	}
}
var amountLoaded = 0;
progressBarSim(amountLoaded);
</script>
</html>

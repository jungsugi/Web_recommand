<?php session_start();
$input_var =$_POST['input_value'];
?>



<html lang="ko">

<head>



<meta charset="utf-8">
    <link href="css/stylish-portfolio.css" rel="stylesheet"> 
    <link href="css/star_rating.css" rel="stylesheet"> 
    <link href="css/star_rating2.css" rel="stylesheet">
    <link href="css/star_rating3.css" rel="stylesheet">
    <link href="css/star_rating4.css" rel="stylesheet">
    <link href="css/star_rating5.css" rel="stylesheet">
    <link href="css/join_login-d8d843bcc67c1c8f200176e7368f182a.css" media="screen" rel="stylesheet" />
    <script src="./join_login-af879f01b12e7a742b1a3e1628136535.js" type="text/javascript"></script> 
<link href="http://www.jonathantneal.com/wp-content/uploads/2013/01/favicon-32.png" rel="shotrcut icon">
    <title>?щ떒湲?survey</title>

<script type="text/javascript">
//<![CDATA[
window.gon = {};
//]]>
</script>
<script>
    var rating_arr = []; //?됱젏 ?댁쓣 蹂??
    var input_value = "<?=$input_var?>"
</script>

<body class="header">
    <div id="contents">
 <FORM name="send_info" action = "./insert_survey.php" method = "post">
    <INPUT TYPE="hidden" name="first" >
    <INPUT TYPE="hidden" name="second" >
    <INPUT TYPE="hidden" name="third" >
    <INPUT TYPE="hidden" name="fourth" >
    <INPUT TYPE="hidden" name="fifth" >
</FORM> 



<div class="movable second" style="position: absolute; width: 100%; left: 0px;">
  <div class="table_center">
    <div class="tut_large_box">
      <div class="content_top">
        <div class="poster_wrapper" style="overflow:hidden">
          
          <div class="jackpot_wrapper">
            
          </div>
        </div>
        <div class="profile_wrapper">
          <img id="profile_default" src="https://d12hfz37g51hrt.cloudfront.net/assets/default/user/photo_big-c38aedcbb04b43bcf4adea6627123cb9.jpg">
          <img id="profile_mask" src="https://d12hfz37g51hrt.cloudfront.net/assets/tutorial/profile_mask_new-2d37cb2b985d5e75fed800c904eb6c07.png">
        </div>
      </div>
      <div class="content_bottom">
        <div class="username" style="font-size: 20px">       
		여.단.기
        </div>
        <div style="text-align:center; font-size: 20px">
		회원님이 좋아할 여행 및 축제를 추천하기 위해 설문조사를 시작합니다. <br> 각 문항에 대해 최소 별 반개 이상 부여해주셔야 합니다.(최하점:별반개)
        </div>
        <div class="button_wrapper">
          <button id="to_three">
   		   
   		     다음           
         
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
    
<div class="movable three" style="position:absolute; width:100%; left:100%;">
  <div class="table_center">
    <div class="tut_large_box">
      <div class="content_top">
        <div class="poster_wrapper">
          <div id="eval_tut_flow" class="ContentFlow">
            <div class="loadIndicator" style="display: none;">
              <div class="indicator"></div>
            </div>
            <div class="flow" style="text-align:center;visibility: visible; height: 405px; margin-bottom: 0px;">
            	<div style="height:40%"></div>
	<font size = 8> <?php echo $_SESSION['que1'] ?></font>
            </div>
            <div class="globalCaption">
                <div class="star-input" align="center">
                  <div class="input">
                	<input type="radio" name="star-input" id="a2" value="1"><label for="a2">1</label>
                    <input type="radio" name="star-input" id="a4" value="2"><label for="a4">2</label>
                    <input type="radio" name="star-input" id="a6" value="3"><label for="a6">3</label>
                    <input type="radio" name="star-input" id="a8" value="4"><label for="a8">4</label>
                    <input type="radio" name="star-input" id="a10" value="5"><label for="a10">5</label>
                  </div>
                  <div align="center" style="color:black;">
                   <output class="star-input">별점 평가</output>
                  </div>
                </div>
            </div>
          <div class="mouseoverCheckElement"></div></div>
        </div>
      </div>
      <div class="content_bottom">
        <div class="username"></div>
        <div class="comment_img"></div>
        <div class="button_wrapper">
          
          	<button id="to_fourth">다음</button>
		           
        
  
        </div>
      </div>
    </div>
  </div>
</div>


<div class="movable fourth" style="position:absolute; width:100%; left:100%;">
  <div class="table_center">
    <div class="tut_large_box">
      <div class="content_top">
        <div class="poster_wrapper">
          <div id="eval_tut_flow" class="ContentFlow">
            <div class="loadIndicator" style="display: none;">
              <div class="indicator"></div>
            </div>
            <div class="flow" style="text-align:center;visibility: visible; height: 405px; margin-bottom: 0px;">
            	<div style="height:40%"></div>
	<font size = 8> <?php echo $_SESSION['que2'] ?></font>
            </div>
            <div class="globalCaption">
                <div class="star-input1" align="center">
                  <div class="input">
                    <input type="radio" name="star-input1" id="b2" value="1"><label for="b2">1</label>
                    <input type="radio" name="star-input1" id="b4" value="2"><label for="b4">2</label>
                    <input type="radio" name="star-input1" id="b6" value="3"><label for="b6">3</label>
                    <input type="radio" name="star-input1" id="b8" value="4"><label for="b8">4</label>
                    <input type="radio" name="star-input1" id="b10" value="5"><label for="b10">5</label>
                  </div>
                  <div align=
                  <div align="center" style="color:black;">
                   <output class="star-input1">별점 평가</output>
                  </div>
                </div>
            </div>
          <div class="mouseoverCheckElement"></div></div>
        </div>
      </div>
      <div class="content_bottom">
        <div class="username"></div>
        <div class="comment_img"></div>
        <div class="button_wrapper">
          <button id="to_fifth">다음</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="movable fifth" style="position:absolute; width:100%; left:100%;">
  <div class="table_center">
    <div class="tut_large_box">
      <div class="content_top">
        <div class="poster_wrapper">
          <div id="eval_tut_flow" class="ContentFlow">
            <div class="loadIndicator" style="display: none;">
              <div class="indicator"></div>
            </div>
            <div class="flow" style="text-align:center;visibility: visible; height: 405px; margin-bottom: 0px;">
            	<div style="height:40%"></div>
	<font size = 8> <?php echo $_SESSION['que3'] ?></font>
            </div>
            <div class="globalCaption">
                <div class="star-input2" align="center">
                  <div class="input">
                    <input type="radio" name="star-input2" id="c2" value="1"><label for="c2">1</label>
                    <input type="radio" name="star-input2" id="c4" value="2"><label for="c4">2</label>
                    <input type="radio" name="star-input2" id="c6" value="3"><label for="c6">3</label>
                    <input type="radio" name="star-input2" id="c8" value="4"><label for="c8">4</label>
                    <input type="radio" name="star-input2" id="c10" value="5"><label for="c10">5</label>
                  </div>
                  <div align="center" style="color:black;"
                   <output class="star-input2">별점 평가</output>
                  </div>
                </div>
            </div>
          <div class="mouseoverCheckElement"></div></div>
        </div>
      </div>
      <div class="content_bottom">
        <div class="username"></div>
        <div class="comment_img"></div>
        <div class="button_wrapper">
          <button id="to_sixth">다음</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ----------------------------------추가된 코드 -----------------------------------------   -->


<div class="movable sixth" style="position:absolute; width:100%; left:100%;">
  <div class="table_center">
    <div class="tut_large_box">
      <div class="content_top">
        <div class="poster_wrapper">
          <div id="eval_tut_flow" class="ContentFlow">
            <div class="loadIndicator" style="display: none;">
              <div class="indicator"></div>
            </div>
            <div class="flow" style="text-align:center;visibility: visible; height: 405px; margin-bottom: 0px;">
            	<div style="height:40%"></div>
		<font size = 8> <?php echo $_SESSION['que4'] ?></font>
            </div>
            <div class="globalCaption">
                <div class="star-input3" align="center">
                  <div class="input">
                    <input type="radio" name="star-input3" id="d2" value="1"><label for="d2">1</label>
                    <input type="radio" name="star-input3" id="d4" value="2"><label for="d4">2</label>
                    <input type="radio" name="star-input3" id="d6" value="3"><label for="d6">3</label>
                    <input type="radio" name="star-input3" id="d8" value="4"><label for="d8">4</label>
               	    <input type="radio" name="star-input3" id="d10" value="5"><label for="d10">5</label>
                  </div>
                  <div align="center" style="color:black;"
                   <output class="star-input3">별점 평가</output>
                  </div>
                </div>
            </div>
          <div class="mouseoverCheckElement"></div></div>
        </div>
      </div>
      <div class="content_bottom">
        <div class="username"></div>
        <div class="comment_img"></div>
        <div class="button_wrapper">
          <button id="to_seventh">다음</button>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="movable seventh" style="position:absolute; width:100%; left:100%;">
  <div class="table_center">
    <div class="tut_large_box">
      <div class="content_top">
        <div class="poster_wrapper">
          <div id="eval_tut_flow" class="ContentFlow">
            <div class="loadIndicator" style="display: none;">
              <div class="indicator"></div>
            </div>
            <div class="flow" style="text-align:center;visibility: visible; height: 405px; margin-bottom: 0px;">
            	<div style="height:40%"></div>
		<font size = 8> <?php echo $_SESSION['que5'] ?></font>
            </div>
            <div class="globalCaption">
                <div class="star-input4" align="center">
                  <div class="input">
                          <input type="radio" name="star-input4" id="e2" value="1"><label for="e2">1</label>
	                      <input type="radio" name="star-input4" id="e4" value="2"><label for="e4">2</label>
      		              <input type="radio" name="star-input4" id="e6" value="3"><label for="e6">3</label>
            	          <input type="radio" name="star-input4" id="e8" value="4"><label for="e8">4</label>
                	      <input type="radio" name="star-input4" id="e10" value="5"><label for="e10">5</label>
                  </div>
                  <div align="center" style="color:black;"
                   <output class="star-input4">별점 평가</output>
                  </div>
                </div>
            </div>
          <div class="mouseoverCheckElement"></div></div>
        </div>
      </div>
      <div class="content_bottom">
        <div class="username"></div>
        <div class="comment_img"></div>
        <div class="button_wrapper">
          <button id="to_tut_eval">다음</button>
        </div>
      </div>
    </div>
  </div>
</div>






<script>
var myNewFlow = null;
$(document).ready(function(){
  $("body").css("overflow","hidden");
  $('.movable.first').animate(
    {'left':'-100%'},
    {duration:1000});
  $('.movable.second').animate(
    {'left':'0'},
    {
      duration:1000,
      complete: function(){
        if ($.browser.msie) {
          myNewFlow = new ContentFlow('eval_tut_flow', {reflectionHeight:0, scaleFactor:1.7, scaleFactorLandscape:2,maxItemHeight:270, startItem:'first',flowSpeedFactor:0.4, scrollWheelSpeed:0, relativeItemPosition:'center', circularFlow: false } ) ;
          myNewFlow.init();
        } else {
          myNewFlow = new ContentFlow('eval_tut_flow', {reflectionHeight:0, scaleFactor:2.3, scaleFactorLandscape:2,maxItemHeight:270, startItem:'first',flowSpeedFactor:0.4, scrollWheelSpeed:0, relativeItemPosition:'center', circularFlow: false } ) ;
          myNewFlow.init();
        }
        run_jackpots();
      }
    });
});
$("#to_three").click(function(){
    
  $('.movable.second').animate(
    {'left':'-100%'},
    {duration:1000});
  $('.movable.three').animate(
    {'left':'0'},
    {
      duration:1000,
      complete:eval_onebyone
    });
});

$("#to_fourth").click(function(){
  rating_arr[0] = document.querySelector('input[name="star-input"]:checked').value;   
  document.querySelector('input[name="star-input"]:checked').checked = false;  
  $('.movable.three').animate(
    {'left':'-100%'},
    {duration:1000});
  $('.movable.fourth').animate(
    {'left':'0'},
    {
      duration:1000,
      complete:eval_onebyone
    });
});



$("#to_fifth").click(function(){
   
  
      rating_arr[1] = document.querySelector('input[name="star-input1"]:checked').value;   
      document.querySelector('input[name="star-input1"]:checked').checked = false;     
  
 

  $('.movable.fourth').animate(
    {'left':'-100%'},
    {duration:1000});
  $('.movable.fifth').animate(
    {'left':'0'},
    {
      duration:1000,
      complete:eval_onebyone
    });
});


$("#to_sixth").click(function(){
      rating_arr[2] = document.querySelector('input[name="star-input2"]:checked').value;   
      document.querySelector('input[name="star-input2"]:checked').checked = false;       
  	  
 

  $('.movable.fifth').animate(
    {'left':'-100%'},
    {duration:1000});
  $('.movable.sixth').animate(
    {'left':'0'},
    {
      duration:1000,
      complete:eval_onebyone
    });
});


$("#to_seventh").click(function(){
    
  
      rating_arr[3] = document.querySelector('input[name="star-input3"]:checked').value;   
      document.querySelector('input[name="star-input3"]:checked').checked = false;  

 

  $('.movable.sixth').animate(
    {'left':'-100%'},
    {duration:1000});
  $('.movable.seventh').animate(
    {'left':'0'},
    {
      duration:1000,
      complete:eval_onebyone
    });
});


$("#to_tut_eval").click(function(){
    
  
      rating_arr[4] = document.querySelector('input[name="star-input4"]:checked').value;   
      document.querySelector('input[name="star-input4"]:checked').checked = false;  

 

  $('.movable.sixth').animate(
    {'left':'-100%'},
    {
      duration:1000,
      complete: function(){
            document.send_info.first.value = rating_arr[0];
            document.send_info.second.value = rating_arr[1];
            document.send_info.third.value = rating_arr[2];
            document.send_info.fourth.value = rating_arr[3];
            document.send_info.fifth.value = rating_arr[4];
            document.send_info.submit();
      }
    });
});
var eval_onebyone_id=0;
eval_onebyone = function(){
  var pad='00'
  eval_onebyone_id = eval_onebyone_id+1
  var idx_str = eval_onebyone_id+"";
  idx_str = pad.substring(0,pad.length-idx_str.length)+idx_str
  $('#cs_active'+idx_str).animate({
    'opacity':'0.999'
  },{
    duration : 600
  });
  $('#cs_normal'+idx_str).animate({
    'opacity':'0.999'
  },{
    duration : 600,
    complete : function(){
      $('#cs_active'+idx_str).animate({
        'opacity':'0'
      },{
        duration : 600,
        complete : function(){
          if (eval_onebyone_id == 8)
            return;
          myNewFlow.moveTo('next');
          $('#cs_active'+idx_str).animate({
            'opacity':'0'
          },{
            duration : 1000,
            complete : function(){
              eval_onebyone();
            }
          });
        }
      });
    }
  });
}

</script>
<script>
var jparr = [[1,'-7000px',2000],[2,'20000px',2200],[3,'-17000px',2400],[4,'-21000px',2500],[5,'15000px',2600],[6,'-21987px',2800],[7,'15000px',3000],[8,'-16000px',3200],[9,'9000px',3300],[10,'-13000px',3400],[11,'-10000px',3600],[12,'4000px',3700],[13,'-10000px',4000]]
var poparr = [[1,'57px','134px','166px',700],[2,'42px','160px','186px',700],[3,'20px','197px','220px',700]]
var pad='00'
var pop_posters_check = 0;
var pop_poster_id = -1
run_pop_posters = function(){
  pop_posters_check = pop_posters_check+1;
  if (pop_posters_check == 10){
    $('.pop_poster').show()
    $('.jackpot').animate({
      'opacity':'0.4'
    },{
      duration:500
    });
    run_pop_poster();
  }
}
run_pop_poster = function() {
  pop_poster_id = pop_poster_id+1;
  var arr = poparr[pop_poster_id];
  if (pop_poster_id == 3)
    return;
  var idx_str = arr[0]+"";
  idx_str = pad.substring(0,pad.length-idx_str.length)+idx_str
  $('.pop_poster#pp'+idx_str).animate({
    'opacity' : '1'
  },{
    duration:500,
    complete:function(){
      $('.pop_poster#pp'+idx_str).animate({
        'margin-top':arr[1],'margin-left':arr[2],'width':arr[3]
      },{
        duration : arr[4],
        complete : run_pop_poster
      });
    }
  });
}
run_jackpots = function(){
  $.each(jparr, function(i, arr){
    run_jackpot(arr[0],arr[1],arr[2])
  });
}
run_jackpot = function(id,px,du){
  idx_str = id+"";
  idx_str = pad.substring(0,pad.length-idx_str.length)+idx_str;
  if ($.browser.mozilla){
    $('.jackpot#jp'+idx_str).css({
      'background-position':'0px '+px,
      '-moz-transition':'background-position 3300ms ease'
    });
    $('.jackpot#jp'+idx_str).animate({
      'background-position-y':px
    },{
      duration:du,
      easing: "easeInOutExpo",
      complete : run_pop_posters
    });

  } else if ($.browser.msie && $.browser.version<9.0) {
    $('.jackpot#jp'+idx_str).animate({
      'background-position-y':px
    },{
      duration:du,
      complete : run_pop_posters
    });
  } else {
    $('.jackpot#jp'+idx_str).animate({
      'background-position-y':px
    },{
      duration:du,
      easing: "easeInOutExpo",
      complete : run_pop_posters
    });
  }
}

</script>
</div>
  

</body></html>




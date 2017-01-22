<!DOCTYPE html>
<html lang="ko">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


<link href="http://www.jonathantneal.com/wp-content/uploads/2013/01/favicon-32.png" rel="shotrcut icon">
    <title>BDA4team2-prototype</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/stylish-portfolio.css" rel="stylesheet">
   

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
 


</head>

<body>
<script>

  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);

        if (response.status == 'connected') { 
            FB.logout(function(response) {
            });         
        }
    }
  

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1563675043942424',
    cookie     : true, 
    xfbml      : true, 
    version    : 'v2.7'
  });



    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });

  };





  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/ko_KR/sdk.js#xfbml=1&version=v2.7&appId=1563675043942424";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
    

</script>


    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
         
        <div>
 
<div class="movable">
  <div class="table_center">
    <div class="flip">
      <div class="ham_box front" style="margin-bottom:12px;">
        <div class="title" style ="height: auto;">
          로그인 오류
        </div>
        <div class="content_ham no_top_radius1">   
      
<form accept-charset="UTF-8" action="./index.html" class="new_user" id="new_user" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="nZbLYCKM2tCh4OYFWwNljDU5f6Pc1yBZPWN9hIzkLZc=" /></div>
          <div class="input_form">
            <div>
            
            </div>
          </div>
          <div class="input_field_errors find">
          </div>

          <div class="comment_btm downbtn">
            등록되지 않은 페이스북 계정입니다. 회원가입 후 이용해 주세요
          </div>

         <input class="btn_login" name="commit" type="submit" value="돌아가기" />
                           
          </div>

          <div class="comment_top">
        
          </div>
</form> 
    </div>
        </div>


</div></div></div></div>
<div class="shadow">
    </div></div>
    
</div>

    </header>

 
</body>

</html>

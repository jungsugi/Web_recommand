<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);


        if (response.status == 'connected') {

            FB.logout(function(response) {
            }); 
            window.location.replace('./index.html');
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

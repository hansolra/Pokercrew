<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"/>
  
  <title>Login Demo - Kakao JavaScript SDK</title>
  <script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
 </head>
 
 <body>
  <a id="kakao-login-btn"></a>
  <a href="http://developers.kakao.com/logout"></a>
  
  <script type='02167523ac9a9790d5300422dace0581'>
    //<![CDATA[
   // 사용할 앱의 JavaScript 키를 설정해 주세요.
   Kakao.init('67d61667fbfe05422ccab3809db0b863');
   
   // 카카오 로그인 버튼을 생성합니다.
   Kakao.Auth.createLoginButton({
     container: '#kakao-login-btn',
     success: function(authObj) {
    alert(JSON.stringify(authObj));
     },
     fail: function(err) {
     alert(JSON.stringify(err));
     }
   });
    //
  </script>
 </body>
</html>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>포커크루-토너먼트 결과 공유</title>

    <!-- Bootstrap core CSS -->
    <link href="css\bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">
    

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js\ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">포커 크루</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="Tournarmant.html">토너 일정</a></li>
            <li><a href="Ranking.html">포커 랭킹</a></li>
            <li><a href="insert.html">프로필 등록</a></li>
            <li><a href="#contact">제휴 문의</a></li>
          
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!--/php 등록 -->
<?php
header("Content-Type: text/html; charset=utf-8");
$day = $_POST['day'];
$time = $_POST['time'];
$buyin = $_POST['buyin'];
$place = $_POST['place'];
$type = $_POST['type'];

echo "<p class='title'> <b>토너먼트 정보 등록 종료</b> - $id</p> " ;
echo "아래와 같은 정보를 가진 정보로 등록되었습니다.. <br/>";
echo "<br/>";
echo "&nbsp; &nbsp; &nbsp;   사용자ID : $id <br/>";
echo "&nbsp; &nbsp; &nbsp;   사용자명 : $name <br/>";
echo "&nbsp; &nbsp; &nbsp;   비밀번호 : $pass <br/>";
echo "<p class='title'> &nbsp; &nbsp; &nbsp;  </p> <br/> " ;
$conn = mysqli_connect('localhost:3307', 'root', '965796', 'education');
$sql = "insert into member(id, pass, name)" . "values('$id', '$pass', '$name')";
$result = mysqli_query($conn, $sql);
?>





 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
   
  </body>
  </html>
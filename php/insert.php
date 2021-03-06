<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>포커크루</title>

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

  


     
    <form action="insert_result.php" method="POST">
      <p>날짜:<input type="post" name="day" placeholder="ex:2020-01-01"></p>
      </br>
      <p>시간:<input type="post" name="time" placeholder="ex:20:30"></p>
      </br>
      <p>참가 조건:<textarea name="buyin" placeholder="ex:티켓 4매 or Free roll or 개별 문의(연락처)"></textarea></p>
      </br>
      <p>장소:<textarea name="place" placeholder="ex:대전 대덕구 220(3층) 포커크루"></textarea></p>
      </br>
      <p>게임 종류:<input type="post" name="type" placeholder="ex:NLH or PLH or 7Stud"></p>
      </br>
      <p>개런티:<input type="post" name="gtd" placeholder="ex:10,000,000 GTD"></p>
      </br>
      <p>스트럭쳐<textarea name="structure" placeholder="10,000 chips / 20min up"></textarea></p>
      </br>
      
      <p><input type="submit"></p></p>
    </form>
      
      

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
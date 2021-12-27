<!-- 로그인 화면 -->
<!DOCTYPE html>
<html lang="en">

<!-- head 시작 -->
<head>
    <meta charset="utf-8">
    <meta name="description" content="학부융합프로젝트">
    <meta name="keywords" content="HTML5, CSS, JQUERY">
    <link rel="stylesheet" type="text/css" href="../CSS/Style.css"> 
    <title>로그인 | SizeLab</title>
    <style>
    @media(max-height: 705px) {
  .container{
    height: 705px;
  }
}
    </style>
</head>
<!-- head 끝 -->

<!-- body 시작 -->
<body>
    <!-- form 시작 -->
    <form action="login_server.php" method="post">
    <div class = "container">
         <center>
        <div class="sizelab-wrapper wrapper-member devicePC">
            <div class="n-member-area">
            <a href="../main.php" style= "color:black; text-decoration: none">
                <h1 style="font-size: 3em; text-align: center;">SizeLab</h1>
            </a>
                <header>
                    <h1 style = "text-align: center;">로그인</h1>
                </header>

                <h4 style = "text-align: center;">
                    <?php if(isset($_GET['error'])){ ?>
                    <p class="error"><?php echo $_GET['error']; ?></p> <!-- 로그인 실패시 에러 메시지 출력 -->
                    <?php } ?>

                    <?php if(isset($_GET['success'])){ ?>
                    <p class="success"><?php echo $_GET['success']; ?></p> <!-- 로그인 성공시 성공 메시지 출력 -->
                    <?php } ?>
                </h4>               

                <!-- Login -->

                    <input type="text" class="n-input" placeholder="아이디를 입력해 주세요." name="ID"> <!-- 아이디 입력 창-->
                    <input type="password" class="n-input" placeholder="비밀번호를 입력해 주세요." name="password"> <!-- 비밀번호 입력 창-->
                    <br><br>
                    <button type="submit" class="n-btn btn-md btn-accent" name="login_btn">로그인</button> <!-- 로그인 버튼-->
                    <br>
                    <button type="button" class="n-btn btn-md btn-accent" onclick="document.location.href='member.php'">회원가입</button> <!-- 회원가입 버튼-->
                        <div class="login-util">
                        <br>
                            <form name="find_idpw" method="POST">
                                <a href="find_idpw.php" style="text-decoration: none"><font color="black">아이디/비밀번호 찾기</font></a>  <!-- 아이디 비밀번호 찾기 화면으로 이동-->
                            </form>
                            <span></span>
                        </div>
            </div><!-- //Member -->
        </div><!-- //WRAPPER -->
        </center>
    </div>
    </form>
    <!-- form 끝 -->
</body>
<!--body 끝 -->
</html>
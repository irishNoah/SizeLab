<!-- 아이디 및 비밀번호 찾기 화면 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="학부융합프로젝트">
    <meta name="keywords" content="HTML5, CSS, JQUERY">
    <link rel="stylesheet" type="text/css" href="../CSS/Style.css"> 
    <title>아이디/비밀번호 찾기 | SizeLab</title>
    <style>
    @media(max-height: 1000px) {
  .container{
    height: 100%;
  }
}
    </style>
</head>

<body>
    <!-- form 시작 -->
    <form action="login_server.php" method="post">
        <div class = "container">
            <div class="sizelab-wrapper wrapper-member devicePC">
                <div class="n-member-area">
                <a href="../main.php" style= "color:black; text-decoration: none">
                    <h1 style="font-size: 3em; text-align: center;">SizeLab</h1>
                </a>
                    <!-- Header 시작 -->
                    <header>
                        <h1 style = "text-align: center;">아이디 찾기</h1>
                    </header>
                    <!-- Header 끝 -->

                <br>

                    <!-- 아이디 찾기에 대한 form 시작 -->
                    <form name='find_id' method="POST">
                        <label>
                        <p>휴대전화<input type='text' class="n-input" name='user_phone'  placeholder='휴대전화입력(-없이)' ></p><br>
                        <p>이메일 <input type='text' class="n-input" name='user_email' placeholder='이메일입력'></p>
                        </label>
                        <br>
                        <!-- "아이디 찾기" 버튼 클릭시 find_id_server.php와 연동되는 효과 발생 -->
                        <input type="submit" class="n-btn btn-md btn-accent" value="아이디 찾기" onclick="javascript:form.action='find_id_server.php';">
                    </form>
                    <!-- 아이디 찾기에 대한 form 종료 -->
                    <br>
                    <hr style="border: solid 2px; color:gray;"><br>

                    <header>
                            <h1 style = "text-align: center;">비밀번호 찾기</h1>
                    </header>

                    <br>

                    <!-- 비밀번호 찾기에 대한 form 시작 -->
                    <form name='find_pw' method="POST">
                        <label>
                        <p>아이디<input type='text' class="n-input" name='ID'  placeholder='아이디입력' ></p><br>    
                        <p>휴대전화<input type='text' class="n-input" name='user_phone'  placeholder='휴대전화입력(-없이)' ></p><br>
                        <p>이메일 <input type='text' class="n-input" name='user_email' placeholder='이메일입력'></p>
                        </label>
                        <br>
                        <!-- "비밀번호 찾기" 버튼 클릭시 find_pw_server.php와 연동되는 효과 발생 -->
                        <input type="submit" class="n-btn btn-md btn-accent" value="비밀번호 찾기" onclick="javascript:form.action='find_pw_server.php';">
                        <br>
                    </form>
                    <!-- 비밀번호 찾기에 대한 form 종료 -->
            </div>
        </div>
    </form>
    <!-- form 끝 -->
</body>
</html>
message.txt
4KB
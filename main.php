<?php 
session_start();

/* 세선 전역변수를 사용할 페이지의 상단부에 배치하면 된다. */
?>
<!-- 메인UI 화면 -->
<!DOCTYPE html>
<html>
    <head>
        <title>StyleLab</title>
        <meta charset="utf-8">
	    <meta name="keywords" content="html5, CSS, JQUERY">
        
        <!--반응형 웹 영역-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--반응형 웹 영역-->

        <!--글자폰트 영역-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Hi+Melody&family=Nanum+Gothic+Coding&family=Sunflower:wght@300&display=swap" rel="stylesheet">
        <!--글자폰트 영역-->

        <!--이모티콘 영역-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/v4-shims.css">
        <!--이모티콘 영역-->

        <!-- 외부 css연결 -->
        <link rel ="stylesheet" type ="text/css" href ="CSS/main2.css">
        <!-- 외부 css연결 -->
    </head>
    
    <body>
    <!-- 상단 탭 영역 -->
    <div class="primary">
        <!-- 로그인 영역 -->
        <div style ="display: inline-block;">
                <?php
                if(!isset($_SESSION['ID']) || !isset($_SESSION['password'])) {
                    echo "로그인을 해주세요. <a href=\"html/login.php\"><i class=\"fas fa-sign-in-alt\"></i>로그인</a>";
                } else {
                    $ID = $_SESSION['ID'];
                    $password = $_SESSION['password'];
                    $nickname = $_SESSION['nickname'];
                    echo "$nickname 님 환영합니다. ";
                    echo "<a href=\"html/logout.php\"><i class=\"fas fa-sign-out-alt\"></i>로그아웃</a>";?>
                    <a href="html/jungbo.php" ><i class="fas fa-id-badge"></i>계정</a><!-- 계정UI 영역 -->
                    <?php 
                }
               ?>
        </div>
        </div>
        <!-- 로그인 영역 -->
        
        <!-- 헤더영역 시작  -->
        <header class="header">
            <span id="logo">
                <div><a href="main.php" style="color: white;">SIZELAB</a></div>
            </span>
            <!-- 검색창 영역-->
            <span class = "box">
                <div class="container-1">
                  <span class="icon"><i class="fa fa-search"></i></span>
                  <input type="search" id="search" placeholder="Search..." style="height:35px;" />
                </div>
            </span>
            <!-- 검색창 영역-->
		</header>
		<!-- 헤더영역 끝 -->
        
        <!-- 콘텐츠 및 섹션 영역 시작 -->
        <div class="content_div">
            <article>
                <header>
                    <div class ="tab_wrapper">
                    <div class="tab_content">
                        <div class ="tab"><a href="main.php">추천</a><!-- 메인UI 영역 -->
                        </div>
                        <div class ="tab"><a href="html/knit.php">니트</a><!--니트UI 영역 -->
                        </div>
                        <div class ="tab"><a href="html/jacket.php">자켓</a><!--자켓UI 영역 -->
                        </div>
                        <div class ="tab"><a href="html/long.php">롱슬리브</a><!--롱슬리브UI 영역 -->
                        </div>
                        <div class ="tab"><a href="html/shirt.php">셔츠</a><!--셔츠UI 영역 -->
                        </div>
                        <div class ="tab"><a href="html/cadigan.php">가디건</a><!--가디건UI 영역 -->
                        </div>
                        <div class ="tab"><a href="html/hoodteeds.php">후드티</a><!--후드티UI 영역 -->
                        </div>
                        <div class ="tab"><a href="html/hood_zipup.php">후드집업</a><!--후드집업UI 영역 -->
                        </div>
                        <div class ="tab"><a href="html/mantoman.php">맨투맨</a><!--맨투맨UI 영역 -->
                        </div>
                    </div>
                    </div>
                </header>
                <div style = "margin-top: 150px; margin-bottom: 150px; text-align: center;">
                    <h1 style = "font-size: 35px;">＊추천시스템을 이용하기 위해서는 로그인을 해야합니다＊</h1>
                </div>    
            </article>
        </div>
        <!-- 콘텐츠 및 섹션 영역 끝 -->
        
        <!-- 푸터 영역 시작 -->
        <div class="footer">
            <footer>
                <details>
                    <!-- summary태그는 크롬 브라우저에서 작동한다. 익스플로러 브라우저에서는 작동 안됨 -->
                    <summary style="color: white;">
                        <font color="white">사업자 정보 표시</font>
                    </summary>
                    <p>
                        <font color="white"><b style="font-size:25px;">SizeLab</b><br><br>
                            제작자: 박창영, 임병찬, 이원준, 이창수, 김민수 <br>
						    Tel: 010-1234-5678 <br><br>
        
						    COPYRIGHT 2021. SizeLab. ALL RIGHT RESERVED.
                        </font>
                    </p>
                </details>
            </footer>
        </div>
        <!-- 푸터 영역 끝 -->
    </body>

    
</html>
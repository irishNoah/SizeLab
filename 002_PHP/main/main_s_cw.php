<?php 
session_start();
include "../HTML/db_test.php";
/* 세선 전역변수를 사용할 페이지의 상단부에 배치하면 된다. */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>StyleLab</title>
        <meta charset="utf-8">
	    <meta name="keywords" content="HTML5, CSS, JQUERY">
        
        <!--반응형 웹-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--글자폰트-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Hi+Melody&family=Nanum+Gothic+Coding&family=Sunflower:wght@300&display=swap" rel="stylesheet">

        <!--이모티콘-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/v4-shims.css">
        
        <link rel ="stylesheet" type ="text/css" href ="../CSS/main2.css">
        <style>
        </style>
    </head>
    
    <!-- 로그인 영역 -->
    <body>
        <div class="primary">
            <div style ="display: inline-block;">
                <?php
                if(!isset($_SESSION['ID']) || !isset($_SESSION['password'])) {
                    echo "로그인을 해주세요. <a href=\"../HTML/login.php\"><i class=\"fas fa-sign-in-alt\"></i>로그인</a>";
                } else {
                    $ID = $_SESSION['ID'];
                    $password = $_SESSION['password'];
                    $nickname = $_SESSION['nickname'];
                    echo "$nickname 님 환영합니다. ";
                    echo "<a href=\"../HTML/logout.php\"><i class=\"fas fa-sign-out-alt\"></i>로그아웃</a>";
                }
               ?>
        </div>
                <a href="../HTML/jungbo.php" ><i class="fas fa-id-badge"></i>계정</a>
        </div>
        <!-- 로그인 영역 -->

        <!-- 헤더영역 시작  -->
        <header class="header">
            <span id="logo">
                <div><a href="" style="color: white;">SIZELAB</a></div>
            </span>
            <span class = "box">
                <div class="container-1">
                  <span class="icon"><i class="fa fa-search"></i></span>
                  <input type="search" id="search" placeholder="Search..." style="height:35px;" />
                </div>
            </span>
		</header>
		<!-- 헤더영역 끝 -->
        
        <!-- 콘텐츠 및 섹션 영역 시작 -->
        <div class="content_div">
            <article>
                <header>
                    <div class ="tab_wrapper">
                        <div class="tab_content">
                        <div class ="tab"><a href="">추천</a>
                            </div>
                            <div class ="tab"><a href="../HTML/knit.php">니트</a>
                            </div>
                            <div class ="tab"><a href="../HTML/jacket.php">자켓</a>
                            </div>
                            <div class ="tab"><a href="../HTML/long.php">롱슬리브</a>
                            </div>
                            <div class ="tab"><a href="../HTML/shirt.php">셔츠</a>
                            </div>
                            <div class ="tab"><a href="../HTML/cadigan.php">가디건</a>
                            </div>
                            <div class ="tab"><a href="../HTML/hoodteeds.php">후드티</a>
                            </div>
                            <div class ="tab"><a href="../HTML/hood_zipup.php">후드집업</a>
                            </div>
                            <div class ="tab"><a href="../HTML/mantoman.php">맨투맨</a>
                            </div>
                        </div>
                    </div>
                </header>
            </article>
        </div>
        <!-- 콘텐츠 및 섹션 영역 끝 -->

        <div class= "row tm-gallary">
                <div class="tm-gallery-page">
                        <figcaption>
                            <!-- 데이터베이스 테이블 가져와서 순서대로 데이터 출력 영역-->
                                <?php
                                    $sql = "SELECT * FROM s_cw";
                                    $result = mysqli_query($db, $sql);
                                    while($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <article class="padd max-width">    
                                    <a href="<?php echo $row["link"];?>"><img src="<?php echo $row["image"];?>" width="250px;" height="315px;"></a>
                                    <b>
                                    <?php
                                    echo $row["brand"]; ?> </b><br>
                                    <?php
                                        echo $row["product"];
                                    ?> <br>
                                    </figcaption>
                                    </article>
                                    <?php
                                    }
                                    mysqli_close($db); // 디비 접속 닫기
                                ?>
                        </div>
                    </div>
                    <!-- 데이터베이스 테이블 가져와서 순서대로 데이터 출력 영역-->

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
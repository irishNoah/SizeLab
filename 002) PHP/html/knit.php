<?php 
session_start();
include('db_test.php');
/* 세선 전역변수를 사용할 페이지의 상단부에 배치하면 된다. */
?>

<!-- 맨투맨UI 화면 -->
<!DOCTYPE html>
<html>
    <head>
        <title>StyleLab Test</title>
        <meta charset="utf-8">
	    <meta name="keywords" content="HTML5, CSS, JQUERY">
        
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
        <link rel ="stylesheet" type ="text/css" href ="../CSS/main2.css">
        <!-- 외부 css연결 -->
    </head>
    
    <body>
    <!-- 상단 탭 영역 -->
    <div class="primary">
        <!-- 로그인 영역 -->
        <div style ="display: inline-block;">
                <?php
                if(!isset($_SESSION['ID']) || !isset($_SESSION['password'])) {
                    echo "로그인을 해주세요. <a href=\"login.php\"><i class=\"fas fa-sign-in-alt\"></i>로그인</a>";
                } else {
                    $ID = $_SESSION['ID'];
                    $password = $_SESSION['password'];
                    $nickname = $_SESSION['nickname'];
                    echo "$nickname 님 환영합니다. ";
                    echo "<a href=\"logout.php\"><i class=\"fas fa-sign-out-alt\"></i>로그아웃</a>";?>
                    <a href="jungbo.php" ><i class="fas fa-id-badge"></i>계정</a>
                    <?php
                }
               ?>
        </div>
        </div>
        <!-- 로그인 영역 -->

        <!-- 헤더영역 시작  -->
        <header class="header">
            <span id="logo">
                <div>
                     <?php
                        if(isset($_SESSION['ID']) || isset($_SESSION['password'])) { 
                            $ID = $_SESSION['ID'];
                        $sql = "select * from member where ID = '$ID'";
                        $result = mysqli_query($db, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $_SESSION['size'] = $row['size'];
                        $_SESSION['tone'] = $row['tone'];
                        $size = $_SESSION['size'];
                        $tone = $_SESSION['tone']; 
                        ?>
                        <!--사용자에 적합한 체형 및 피부톤 추천페이지로 이동 영역 -->
                        <?php
                        if($size == "S" && $tone == "ws"){ ?>
                            <div><a href="../main/main_s_ws.php" style="color: white;">SIZELAB</a></div>
                        <?php } 
                        elseif($size == "S" && $tone == "wf") { ?>
                            <div><a href="../main/main_s_wf.php" style="color: white;">SIZELAB</a></div>
                            <?php } 
                        elseif($size == "S" && $tone == "cs") { ?>
                            <div><a href="../main/main_s_cs.php"  style="color: white;">SIZELAB</a></div>
                            <?php } 
                        elseif($size == "S" && $tone == "cw") { ?>
                            <div><a href="../main/main_s_cw.php"  style="color: white;">SIZELAB</a></div>
                            <?php } 
                        elseif($size == "M" && $tone == "ws") { ?>
                            <div><a href="../main/main_m_ws.php"  style="color: white;">SIZELAB</a></div>
                            <?php } 
                        elseif($size == "M" && $tone == "wf") { ?>
                            <div><a href="../main/main_m_wf.php"  style="color: white;">SIZELAB</a></div>
                            <?php } 
                        elseif($size == "M" && $tone == "cs") { ?>
                            <div><a href="../main/main_m_cs.php"  style="color: white;">SIZELAB</a></div>
                            <?php } 
                        elseif($size == "M" && $tone == "cw") { ?>
                            <div><a href="../main/main_m_cw.php"  style="color: white;">SIZELAB</a></div>
                            <?php }
                        elseif($size == "L" && $tone == "ws") { ?>
                            <div><a href="../main/main_l_ws.php"  style="color: white;">SIZELAB</a></div>
                            <?php } 
                        elseif($size == "L" && $tone == "wf") { ?>
                            <div><a href="../main/main_l_wf.php"  style="color: white;">SIZELAB</a></div>
                            <?php } 
                        elseif($size == "L" && $tone == "cs") { ?>
                            <div><a href="../main/main_l_cs.php"  style="color: white;">SIZELAB</a></div>
                            <?php } 
                        elseif($size == "L" && $tone == "cw") { ?>
                            <div><a href="../main/main_l_cw.php"  style="color: white;">SIZELAB</a></div>
                            <?php } 
                        elseif($size == "XL" && $tone == "ws") { ?>
                            <div><a href="../main/main_xl_ws.php" style="color: white;">SIZELAB</a></div>
                            <?php } 
                        elseif($size == "XL" && $tone == "wf") { ?>
                            <div><a href="../main/main_xl_wf.php" style="color: white;">SIZELAB</a></div>
                            <?php } 
                        elseif($size == "XL" && $tone == "cs") { ?>
                            <div><a href="../main/main_xl_cs.php" style="color: white;">SIZELAB</a></div>
                            <?php } 
                        elseif($size == "XL" && $tone == "cw") { ?>
                            <div><a href="../main/main_xl_cw.php" style="color: white;">SIZELAB</a></div>
                            <?php } 
                        elseif($size == "XXL" && $tone == "ws") { ?>
                            <div><a href="../main/main_xxl_ws.php" style="color: white;">SIZELAB</a></div>
                            <?php } 
                        elseif($size == "XXL" && $tone == "wf") { ?>
                            <div><a href="../main/main_xxl_wf.php" style="color: white;">SIZELAB</a></div>
                            <?php } 
                        elseif($size == "XXL" && $tone == "cs") { ?>
                            <div><a href="../main/main_xxl_cs.php" style="color: white;">SIZELAB</a></div>
                            <?php } 
                        elseif($size == "XXL" && $tone == "cw") { ?>
                            <div><a href="../main/main_xxl_cw.php" style="color: white;">SIZELAB</a></div>
                        <?php } ?>
                    <?php } 
                    else{ ?>
                         <div><a href="../main.php" style="color: white;">SIZELAB</a></div>
                    <?php }   
                    ?>
                   <!--사용자에 적합한 체형 및 피부톤 추천페이지로 이동 영역 -->
                        <!-- 메인UI 영역 -->
                </div>
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
                    <?php
                        if(isset($_SESSION['ID']) || isset($_SESSION['password'])) { 
                            $ID = $_SESSION['ID'];
                        $sql = "select * from member where ID = '$ID'";
                        $result = mysqli_query($db, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $_SESSION['size'] = $row['size'];
                        $_SESSION['tone'] = $row['tone'];
                        $size = $_SESSION['size'];
                        $tone = $_SESSION['tone']; 
                        ?>
                        <!--사용자에 적합한 체형 및 피부톤 추천페이지로 이동 영역 -->
                        <?php
                        if($size == "S" && $tone == "ws"){ ?>
                            <div class ="tab"><a href="../main/main_s_ws.php">추천</a>
                        <?php } 
                        elseif($size == "S" && $tone == "wf") { ?>
                            <div class ="tab"><a href="../main/main_s_wf.php">추천</a>
                            <?php } 
                        elseif($size == "S" && $tone == "cs") { ?>
                            <div class ="tab"><a href="../main/main_s_cs.php">추천</a>
                            <?php } 
                        elseif($size == "S" && $tone == "cw") { ?>
                            <div class ="tab"><a href="../main/main_s_cw.php">추천</a>
                            <?php } 
                        elseif($size == "M" && $tone == "ws") { ?>
                            <div class ="tab"><a href="../main/main_m_ws.php">추천</a>
                            <?php } 
                        elseif($size == "M" && $tone == "wf") { ?>
                            <div class ="tab"><a href="../main/main_m_wf.php">추천</a>
                            <?php } 
                        elseif($size == "M" && $tone == "cs") { ?>
                            <div class ="tab"><a href="../main/main_m_cs.php">추천</a>
                            <?php } 
                        elseif($size == "M" && $tone == "cw") { ?>
                            <div class ="tab"><a href="../main/main_m_cw.php">추천</a>
                            <?php }
                        elseif($size == "L" && $tone == "ws") { ?>
                            <div class ="tab"><a href="../main/main_l_ws.php">추천</a>
                            <?php } 
                        elseif($size == "L" && $tone == "wf") { ?>
                            <div class ="tab"><a href="../main/main_l_wf.php">추천</a>
                            <?php } 
                        elseif($size == "L" && $tone == "cs") { ?>
                            <div class ="tab"><a href="../main/main_l_cs.php">추천</a>
                            <?php } 
                        elseif($size == "L" && $tone == "cw") { ?>
                            <div class ="tab"><a href="../main/main_l_cw.php">추천</a>
                            <?php } 
                        elseif($size == "XL" && $tone == "ws") { ?>
                            <div class ="tab"><a href="../main/main_xl_ws.php">추천</a>
                            <?php } 
                        elseif($size == "XL" && $tone == "wf") { ?>
                            <div class ="tab"><a href="../main/main_xl_wf.php">추천</a>
                            <?php } 
                        elseif($size == "XL" && $tone == "cs") { ?>
                            <div class ="tab"><a href="../main/main_xl_cs.php">추천</a>
                            <?php } 
                        elseif($size == "XL" && $tone == "cw") { ?>
                            <div class ="tab"><a href="../main/main_xl_cw.php">추천</a>
                            <?php } 
                        elseif($size == "XXL" && $tone == "ws") { ?>
                            <div class ="tab"><a href="../main/main_xxl_ws.php">추천</a>
                            <?php } 
                        elseif($size == "XXL" && $tone == "wf") { ?>
                            <div class ="tab"><a href="../main/main_xxl_wf.php">추천</a>
                            <?php } 
                        elseif($size == "XXL" && $tone == "cs") { ?>
                            <div class ="tab"><a href="../main/main_xxl_cs.php">추천</a>
                            <?php } 
                        elseif($size == "XXL" && $tone == "cw") { ?>
                            <div class ="tab"><a href="../main/main_xxl_cw.php">추천</a>
                        <?php } ?><!--사용자에 적합한 체형 및 피부톤 추천페이지로 이동 영역 -->
                            <?php } ?><!-- 메인UI 영역 -->
                        </div>
                        <div class ="tab"><a href="knit.php">니트</a><!--니트UI 영역 -->
                        </div>
                        <div class ="tab"><a href="jacket.php">자켓</a><!--자켓UI 영역 -->
                        </div>
                        <div class ="tab"><a href="long.php">롱슬리브</a><!--롱슬리브UI 영역 -->
                        </div>
                        <div class ="tab"><a href="shirt.php">셔츠</a><!--셔츠UI 영역 -->
                        </div>
                        <div class ="tab"><a href="cadigan.php">가디건</a><!--가디건UI 영역 -->
                        </div>
                        <div class ="tab"><a href="hoodteeds.php">후드티</a><!--후드티UI 영역 -->
                        </div>
                        <div class ="tab"><a href="hood_zipup.php">후드집업</a><!--후드집업UI 영역 -->
                        </div>
                        <div class ="tab"><a href="mantoman.php">맨투맨</a><!--맨투맨UI 영역 -->
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
                                    $sql = "SELECT * FROM knit";
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
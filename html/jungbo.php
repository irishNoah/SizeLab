<!-- 정보 변경 화면 -->
<?php 
/* 세선 전역변수를 사용할 페이지의 상단부에 배치하면 된다. */
session_start();
include('db_test.php');
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta name="description" content="학부융합프로젝트">
    <meta name="keywords" content="HTML5, CSS, JQUERY">
    <link rel="stylesheet" type="text/css" href="../CSS/Style.css">
    <title>정보 변경 | SizeLab</title>
	<style>
	@media(max-height: 969px) {
  .container{
    height: 100%;
  }
}
</style>
</head>
<!-- head 끝 -->

<!-- body 시작 -->
<body>
	<!-- form 시작 -->
    <!-- 실제 서버와 연동 -->
    <!-- 보안 전송을 위해 post를 이용 -->
	<form action="jungbo_server.php" method="post">
	<div class = "container">
		<div class="sizelab-wrapper wrapper-member">
		<h1 class="header__title" style="font-size: 3em;">
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
					<div><a href="../main/main_s_ws.php" style="text-decoration: none; color: black;">SIZELAB</a></div>
				<?php } 
				elseif($size == "S" && $tone == "wf") { ?>
					<div><a href="../main/main_s_wf.php" style="text-decoration: none; color: black;">SIZELAB</a></div>
					<?php } 
				elseif($size == "S" && $tone == "cs") { ?>
					<div><a href="../main/main_s_cs.php" style="text-decoration: none; color: black;">SIZELAB</a></div>
					<?php } 
				elseif($size == "S" && $tone == "cw") { ?> 
					<div><a href="../main/main_s_cw.php" style="text-decoration: none; color: black;">SIZELAB</a></div>
					<?php } 
				elseif($size == "M" && $tone == "ws") { ?> 
					<div><a href="../main/main_m_ws.php" style="text-decoration: none; color: black;" >SIZELAB</a></div>
					<?php } 
				elseif($size == "M" && $tone == "wf") { ?> 
					<div><a href="../main/main_m_wf.php" style="text-decoration: none; color: black;">SIZELAB</a></div>
					<?php } 
				elseif($size == "M" && $tone == "cs") { ?> 
					<div><a href="../main/main_m_cs.php" style="text-decoration: none; color: black;">SIZELAB</a></div>
					<?php } 
				elseif($size == "M" && $tone == "cw") { ?>
					<div><a href="../main/main_m_cw.php" style="text-decoration: none; color: black;">SIZELAB</a></div>
					<?php }
				elseif($size == "L" && $tone == "ws") { ?> 
					<div><a href="../main/main_l_ws.php" style="text-decoration: none; color: black;">SIZELAB</a></div>
					<?php } 
				elseif($size == "L" && $tone == "wf") { ?> 
					<div><a href="../main/main_l_wf.php" style="text-decoration: none; color: black;">SIZELAB</a></div>
					<?php } 
				elseif($size == "L" && $tone == "cs") { ?> 
					<div><a href="../main/main_l_cs.php" style="text-decoration: none; color: black;">SIZELAB</a></div>
					<?php } 
				elseif($size == "L" && $tone == "cw") { ?> 
					<div><a href="../main/main_l_cw.php" style="text-decoration: none; color: black;">SIZELAB</a></div>
					<?php } 
				elseif($size == "XL" && $tone == "ws") { ?>
					<div><a href="../main/main_xl_ws.php" style="text-decoration: none; color: black;">SIZELAB</a></div>
					<?php } 
				elseif($size == "XL" && $tone == "wf") { ?>
					<div><a href="../main/main_xl_wf.php" style="text-decoration: none; color: black;">SIZELAB</a></div>
					<?php } 
				elseif($size == "XL" && $tone == "cs") { ?>
					<div><a href="../main/main_xl_cs.php" style="text-decoration: none; color: black;">SIZELAB</a></div>
					<?php } 
				elseif($size == "XL" && $tone == "cw") { ?>
					<div><a href="../main/main_xl_cw.php" style="text-decoration: none; color: black;">SIZELAB</a></div>
					<?php } 
				elseif($size == "XXL" && $tone == "ws") { ?>
					<div><a href="../main/main_xxl_ws.php" style="text-decoration: none; color: black;">SIZELAB</a></div>
					<?php } 
				elseif($size == "XXL" && $tone == "wf") { ?>
					<div><a href="../main/main_xxl_wf.php" style="text-decoration: none; color: black;">SIZELAB</a></div>
					<?php } 
				elseif($size == "XXL" && $tone == "cs") { ?>
					<div><a href="../main/main_xxl_cs.php" style="text-decoration: none; color: black;">SIZELAB</a></div>
					<?php } 
				elseif($size == "XXL" && $tone == "cw") { ?>
					<div><a href="../main/main_xxl_cw.php" style="text-decoration: none; color: black;">SIZELAB</a></div>
				<?php } ?>
			<?php }  ?>
			<!--사용자에 적합한 체형 및 피부톤 추천페이지로 이동 영역 -->
		</h1>
			

		<!-- Member -->
		<div class="n-member-area form-area">
			<!-- Header -->
			<header>
				<h1 style = "text-align: center">정보 변경</h1> <!-- 자신의 아이디, 닉네임, 이메일, 현재 사이즈, 현재 피부톤을 확인 가능 -->
			</header>
			<br>
			<div>
				<div>
					<label for="memberId">아이디 : </label> <!-- 확인하고 싶은 정보는 login_server에서 if(password_verify($password, $hash)
															부분에서 추가해주기 -->
					<?php
					$ID = $_SESSION['ID'];
					echo "$ID"
					?>
				</div>
				<br>
				<div>
					<label for="nickname">닉네임 : </label>
					<?php
					$nickname = $_SESSION['nickname'];
					echo "$nickname"
					?>
				</div>
				<br>
				<div>
					<label for="email">이메일 : </label>
					<?php
					$user_email = $_SESSION['user_email'];
					echo "$user_email"
					?>
				</div>
				<br>
				<div>
					<label for="size">현재 사이즈 : </label>
					<?php
					// 현재 DB에 담겨져 있는 size를 파악하기 위해 다음 sql문 실행
					$now_size = "SELECT size FROM member WHERE ID = '" . $ID . "';";
					//mysqli_query() 메소드를 통해 위 sql문을 DB 안에서 질의 처리
					$check_size = mysqli_query($db, $now_size);
					//배열을 통해 해당 값을 가져옴
					$result_size = mysqli_fetch_assoc($check_size);
					//그걸 문자로 출력해야 하니 아래 문장 실행
					$result_size_str = $result_size['size'];
					// 출력
					echo $result_size_str;
					?>
				</div>
				<br>
				<div>
					<label for="tone">현재 피부톤 : </label>
					<?php
					// 현재 DB에 담겨져 있는 size를 파악하기 위해 다음 sql문 실행
					$now_tone = "SELECT tone FROM member WHERE ID = '" . $ID . "';";
					//mysqli_query() 메소드를 통해 위 sql문을 DB 안에서 질의 처리
					$check_tone = mysqli_query($db, $now_tone);
					//배열을 통해 해당 값을 가져옴
					$result_tone = mysqli_fetch_assoc($check_tone);
					//그걸 문자로 출력해야 하니 아래 문장 실행
					$result_tone_str = $result_tone['tone'];

					if($result_tone_str == 'ws')
					echo ("봄 웜톤");
					else if($result_tone_str == 'cs')
					echo ("여름 쿨톤");
					else if($result_tone_str == 'wf')
					echo ("가을 웜톤");
					else
					echo ("겨울 쿨톤");
					?>
				</div>
			</div>
			<div class="n-member-area form-area">
			<br><br>
			<!-- Header -->
			<header class="member-header">
					<h1 style = "text-align: center">사이즈 변경</h1> <!-- 사이즈 선택 -->
			</header>
			<br>
			<div class="size_tab"style="width:500px;">
			<!-- 사이즈별 라디오 버튼 -->
				<input type = "radio" name = "newsize" value = "S" checked style = "margin: 0 3px 0px 1px">S(90) 
				<input type = "radio" name = "newsize" value = "M" style = "margin: 0 4px 0px 1px">M(95)
				<input type = "radio" name = "newsize" value = "L" style = "margin: 0 4px 0px 1px">L(100)
				<input type = "radio" name = "newsize" value = "XL" style = "margin: 0 4px 0px 1px">XL(105)
				<input type = "radio" name = "newsize" value = "XXL" style = "margin: 0 4px 0px 1px">XXL(110)

			</div>
			<!-- 피부톤별 라디오 버튼 -->
			<hr style="border: solid 2px; color:gray;"><br>
			<h1 style = "text-align: center">피부톤 선택</h1><br> <!-- 피부톤 선택 -->
			
			<h2 style = "text-align: center">웜톤 피부</h2><br>
			<img src = "../image/warmtone.jpg" width = "350px;">
			<p class="size_tab"style="width:500px;">
				<input type = "radio" name = "newtone" value= "ws" checked style = "margin: 0 50px 0 80px">
				<input type = "radio" name = "newtone" value= "wf" style = "margin: 0 50px 0 110px">
			</p><br>

			<h2 style = "text-align: center">쿨톤 피부</h2><br>
			<img src = "../image/cooltone.jpg" width = "350px;" >
			<p class="size_tab"style="width:500px;">
				<input type = "radio" name = "newtone" value= "cs" style = "margin: 0 50px 0 80px"> 
				<input type = "radio" name = "newtone" value= "cw" style = "margin: 0 50px 0 110px">
			</p>
			<br><br>
			<div id="joinBtnDiv" class="member-btn">
				<button type="submit" id="update_Size_Tone" class="n-btn btn-md btn-accent" name="save">수정하기</button>
			</div>
		</div>
	</div>
		
	</div>
    </div>
</div>
<form>
	<!-- form 끝 -->
</body>
<!-- body 끝 -->
</html>
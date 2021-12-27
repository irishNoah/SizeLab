<!-- 회원가입 화면 -->

<!DOCTYPE html>
<html lang="en">

<!-- head 시작 -->
<head>
    <meta charset="utf-8">
    <meta name="description" content="학부융합프로젝트">
    <meta name="keywords" content="HTML5, CSS, JQUERY">
    <link rel="stylesheet" type="text/css" href="../CSS/Style.css">
    <title>회원가입 | SizeLab</title>
	<script>
		// 아이디 중복검사시 팝업 생성
        function checkid(){ 
            var ID = document.getElementById("uid").value; //아이디 중복 팝업창 크기 조절 
            var popupX = (document.body.offsetWidth / 2) - (400 / 2);
            var popupY = 200;
            if(ID)
            {
                url = "id_check.php?ID="+ID; //아이디 중복 검사 팝업창 생성
                window.open(url,"chkid", 'width=400, height=100, left='+ popupX + ', top='+ popupY);
            }
            else
            {
                alert("아이디를 입력하세요"); // 아이디 입력 공백시 팝업창 생성
            }
        }

		// 닉네임 중복검사시 팝업 생성
		function checknick(){ 
			var nickname = document.getElementById("unick").value; //닉네임 중복 팝업창 크기 조절 
			var popupX = (document.body.offsetWidth / 2) - (400 / 2);
			var popupY = 200;
			if(nickname)
			{
				url = "nick_check.php?nickname="+nickname; //닉네임 중복 검사 팝업창 생성
				window.open(url,"chknick", 'width=400, height=100, left='+ popupX + ', top='+ popupY);
			}
			else
			{
				alert("닉네임을 입력하세요"); // 닉네임 입력 공백시 팝업창 생성
			}
		}	
    </script>
    <style>
    @media(max-height: 1329px) { /* 화면의 크기가 작아졌을 때 */
  .container{
    height: 100%; /* 화면 크기 고정 */
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
	<form action="member_server.php" method="post">  <!-- 회원가입 서버로 데이터 전송 -->
	<div class = "container">
		<div class="sizelab-wrapper wrapper-member"> 
				<a href="../main.php" style= "color:black; text-decoration: none; text-align: center;"> <!-- 메인 페이지로 이동 -->
				<h1 class="header__title" style="font-size: 3em">SizeLab</h1>
				</a>
		</div>

		<!-- Member -->
		<div class="n-member-area form-area">			
				<!-- Header -->
				<header>
					<h2 style = "text-align: center">회원가입</h2>
				</header>
				
				<?php if(isset($_GET['error'])){ ?>
				<p class="error"><?php echo $_GET['error']; ?></p> <!-- 회원가입 실패시 에러 메시지 출력 -->
				<?php } ?>

				<?php if(isset($_GET['success'])){ ?>
				<p class="success"><?php echo $_GET['success']; ?></p> <!-- 회원가입 성공시 성공 메시지 출력 -->
				<?php } ?>
				<br>

				<div>					
					<div>
						<label>아이디 </label><br>	<!-- 아이디 입력 -->
						<input type="text" class="n-input2" placeholder="아이디 입력(5~11자)" name="ID" ID="uid">
						<input class ="redundancy_check" type="button" value="중복검사" onclick="checkid();">					
					</div>
				
					<br>
					<div>
						<label>비밀번호 </label>  <!-- 비밀번호 입력 -->
						<div>
							<input type="text" class="n-input2" placeholder="비밀번호(숫자,영문,특수문자 조합 최소8자)" name="password">
						</div>
					</div>
					<br>
					<div>
						<label>비밀번호 다시 입력 </label> <!-- 비밀번호 재입력 -->
						<div>
							<input type="password" class="n-input2" placeholder="비밀번호(숫자,영문,특수문자 조합 최소8자)" name="password_CK">								
						</div>
					</div>
					<br>
					<div>
						<label>닉네임 </label> <!-- 닉네임 입력 -->
						<div>
							<input type="text" class="n-input2" placeholder="닉네임 입력" name="nickname" ID="unick">
							<input class ="redundancy_check" type="button" value="중복검사" onclick="checknick();">							
						</div>
					</div>
					<br>
					<div>
						<label>이름 </label> <!-- 이름 입력 -->
						<div>
							<?php if(isset($_GET['user_name'])){ ?>
							<input type="text" class="n-input2" placeholder="이름 입력" name="user_name" value="<?php echo $_GET['user_name']; ?>">
							<?php } else{ ?>
							<input type="text" class="n-input2" placeholder="이름 입력" name="user_name">
							<?php } ?>							
						</div>
					</div>
					<br>
					<div>
						<label>이메일 </label> <!-- 이메일 입력 -->
						<div id = "emailFromLayer">
							<?php if(isset($_GET['user_email'])){ ?>
							<input type="text" class="n-input2" placeholder="이메일 입력" name="user_email" value="<?php echo $_GET['user_email']; ?>">
							<?php } else{ ?>
							<input type="text" class="n-input2" placeholder="이메일 입력" name="user_email">
							<?php } ?>
							
						</div>
					</div>
					<br>
					<div>
						<label>전화번호 </label> <!-- 전화번호 입력 -->
						<div id = "telFromLayer">
							<?php if(isset($_GET['user_phone'])){ ?>
							<input type="text" class="n-input2" placeholder="전화번호 입력" name="user_phone" value="<?php echo $_GET['user_phone']; ?>">
							<?php } else{ ?>
							<input type="text" class="n-input2" placeholder="전화번호 입력" name="user_phone">
							<?php } ?>							
						</div>
					</div>
					<br>					
					<div>
						<label>성별(M / F) </label> <!-- 성별 입력 -->
						<div id = "gender">							
							<?php if(isset($_GET['gender'])){ ?>
							<input type="text" class="n-input2" placeholder="성별 입력" name="gender" value="<?php echo $_GET['gender']; ?>">
							<?php } else{ ?>
							<input type="text" class="n-input2" placeholder="성별 입력" name="gender">
							<?php } ?>					
						</div>
					</div>
				</div>
			<br><br>
			<!-- Header -->
			<header class="member-header">
					<h1 style = "text-align: center">사이즈 입력</h1> <!-- 사이즈 선택 -->
			</header>
			<br>
			<p style="width:500px;">
				<!-- 사이즈별 라디오 버튼 -->
				<input Style="font-weight:bold;" type = "radio" name = "size" value = "S" checked>S(90)
				<input Style="font-weight:bold;" type = "radio" name = "size" value = "M">M(95)
				<input Style="font-weight:bold;" type = "radio" name = "size" value = "L">L(100)
				<input Style="font-weight:bold;" type = "radio" name = "size" value = "XL">XL(105)
				<input Style="font-weight:bold;" type = "radio" name = "size" value = "XXL">XXL(110)
							</p>
			
			<hr style="border: solid 2px; color:gray;"><br>
			<h1 style = "text-align: center">피부톤 선택</h1><br> <!-- 피부톤 선택 -->
			
			<!-- 톤별 라디오 버튼 -->
			<h2 style = "text-align: center">웜톤 피부</h2><br>
			<img src = "../Image/warmtone.jpg" width = "350px;" >
			<p style="width:500px;">
				<input type = "radio" name = "tone" value = "ws" checked style = "margin: 0 50px 0 80px">
				<input type = "radio" name = "tone" value = "wf" style = "margin: 0 50px 0 110px">
				
			</p><br>
			<h2 style = "text-align: center">쿨톤 피부</h2><br>
			<img src = "../Image/cooltone.jpg" width = "350px;" >
			<p style="width:500px;">
				<input type = "radio" name = "tone" value = "cs" style = "margin: 0 50px 0 80px"> 
				<input type = "radio" name = "tone" value = "cw" style = "margin: 0 50px 0 110px">
			</p>
			
			<br><br>
			<div id="joinBtnDiv" class="member-btn">
				<button type="submit" id="joinBtn" class="n-btn btn-md btn-accent" name="save">저장</button>
			</div>		
		</div>
		<br>	
		</div>
	</div>
	</form>
	<!-- form 끝 -->
</body>
<!-- body 끝 -->
</html>
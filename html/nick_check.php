<!-- 닉네임 중복 확인 서버 -->
<?php
    include('db_test.php');

    // nick값을 GET방식으로 가져오기
    $unick = $_GET["nickname"]; 
    // sql문으로 입력된 nick값을 선택하기 
    $sql_nick = nick_CK("select * from member where nickname='".$unick."'");  
    // 배열정렬시키기
    $member_nick = $sql_nick->fetch_array();                                  
   
    // 닉네임이 중복되지 않을 시 사용가능한 아이디라고 알려주고 만약 아닐시 중복된 아이디라고 알려줌
    if($member_nick==0)        
    {
?>
    <div style='font-family:"malgun gothic"'><?php echo $unick; ?>는 사용가능한 닉네임입니다.</div>
<?php 
    }else{
?>
    <div style='font-family:"malgun gothic"'><?php echo $unick; ?>는 중복된 닉네임입니다.<div>
<?php
    }
?>

<button value="닫기" onclick="window.close()">닫기</button>  <!-- 닫기 버튼 생성-->
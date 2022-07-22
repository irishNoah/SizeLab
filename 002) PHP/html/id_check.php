<!-- 아이디 중복확인 UI -->
<?php
    //DB와 연결
    include('db_test.php');
    // ID값을 GET방식으로 가져오기 
    $uid = $_GET["ID"]; 
    // sql문으로 입력된 id값을 선택하기 
    $sql_ID = ID_CK("select * from member where ID='".$uid."'");  
    // 배열 정렬시키기
    $member_ID = $sql_ID->fetch_array();                          

    // 아이디가 중복되지 않을 시 사용가능한 아이디라고 알려주고 만약 아닐시 중복된 아이디라고 알려줍니다.
    if($member_ID==0)         
    {
?>
    <div style='font-family:"malgun gothic"'><?php echo $uid; ?>는 사용가능한 아이디입니다.</div>
<?php 
    }else{
?>
    <div style='font-family:"malgun gothic"'><?php echo $uid; ?>는 중복된 아이디입니다.<div>
<?php
    }
?>

<button value="닫기" onclick="window.close()">닫기</button>  <!-- 닫기 버튼 생성-->
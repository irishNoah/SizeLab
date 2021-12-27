<!-- 비밀번호 찾기 서버 -->
<?php
 #DB connect
   include("db_test.php");

   // find_idpw.php에서 "비밀번호 찾기" 구간에서 입력받은 ID를 POST를 통해 비교
   $ID = $_POST['ID'];
    // find_idpw.php에서 "비밀번호 찾기" 구간에서 입력받은 전화번호 POST를 통해 비교 
   $user_phone = $_POST['user_phone'];
    // find_idpw.php에서 "비밀번호 찾기" 구간에서 입력받은 이메일을 POST를 통해 비교
   $user_email = $_POST['user_email'];

   // 입력받은 아이디와 전화번호와 이메일과 일치하는 닉네임이 존재하는지 DB에 검색하는 변수 $query 선언
   $query ="SELECT * FROM member WHERE ID = '$ID' and user_phone ='$user_phone' and user_email='$user_email'";
   //실제 DB에 검색을 시행하게 하는 변수 $res 선언
   $res = mysqli_query($db, $query);
   //만약 검색 시 일치하는 ID가 존재하면 1, 아니면 0 값을 가지게 되는 변수 $num 선언
   $num = mysqli_num_rows($res);
   if($num == 0 ) //$num이 0이라면 일치하는 것이 없으므로 다음과 같은 문장을 스크립트로 보여줌
   {
     echo "<script>alert('가입된 ID가 존재하지 않습니다.')</script>";
     mysqli_close($db);
     echo "<meta http-equiv='refresh' content='0;url=find_idpw.php'>";
   }
   else if($num ==1) //$num이 1이라면 일치하는 것이 있으므로 다음과 같은 문장을 스크립트로 보여줌
   {
      $arr = mysqli_fetch_array($res);
      mysqli_close($db);
      echo "<meta http-equiv='refresh' content='0;url=change_pw.php'>";
   }
   else //에러가 발생하면 다음과 같은 문장을 스크립트로 보여줌
   {
     echo "<script>alert('Fatal ERROR.... ask ADMIN');history.back();";
     mysqli_close($db);
   }

  ?>
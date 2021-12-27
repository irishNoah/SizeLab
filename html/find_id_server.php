<!-- 아이디 찾기 서버 -->
<?php
 #DB connect
   include("db_test.php");
   $user_phone = $_POST['user_phone']; //find_idpw.php에서 입력받은 전화번호를 POST를 통해 비교
   $user_email = $_POST['user_email']; //find_idpw.php에서 입력받은 이메일을 POST를 통해 비교

   $query ="SELECT ID FROM member WHERE user_phone ='$user_phone' and user_email='$user_email'";
    //DB에서 실제 ID와 일치하는 게 있는지 검색해보는 변수 $query 선언

   $res = mysqli_query($db, $query);
   //만약 검색 시 일치하는 ID가 존재하면 1, 아니면 0 값을 가지게 되는 변수 $num 선언
   $num = mysqli_num_rows($res);
   if($num == 0 )
   {
     //$num이 0이라면 일치하는 것이 없으므로 다음과 같은 문장을 스크립트로 보여줌
     echo "<script>alert('가입된 ID가 존재하지 않습니다.')</script>";
     mysqli_close($db);
     echo "<meta http-equiv='refresh' content='0;url=find_idpw.php'>";
   }
   else if($num ==1)
   {
      //$num이 1이라면 일치하는 것이 있으므로 다음과 같은 문장을 스크립트로 보여줌
      //ID를 저장하는 변수 $arr 선언
      $arr = mysqli_fetch_array($res);
      mysqli_close($db);
      echo "<script>alert('회원님의 ID는 : $arr[0]입니다.')</script>";
      echo "<meta http-equiv='refresh' content='0;url=login.php'>";
   }
   else //에러가 발생하면 다음과 같은 문장을 스크립트로 보여줌
   {
     echo "<script>alert('Fatal ERROR.... ask ADMIN');history.back();";
     mysqli_close($db);
   }

  ?>
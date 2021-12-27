<!-- 비밀번호 변경 서버-->
<?php
  $ID = $_POST[ 'ID' ]; //change_pw.php에서 입력받은 ID를 POST를 통해 비교
  $password_new = $_POST[ 'password_new' ]; //change_pw.php에서 입력받은 password_new를 POST를 통해 비교
  $password_new_CK = $_POST[ 'password_new_CK' ]; //change_pw.php에서 입력받은 password_new_CK를 POST를 통해 비교

  if ( !is_null( $ID ) ) { //ID칸이 빈칸이 아니라면 아래 if문을 수행
    //DB와 연동하는 변수 $jb_conn 선언
    $jb_conn = mysqli_connect( 'localhost', 'root', '1234', 'sizelab_db' );
    //DB에서 실제 ID와 일치하는 게 있는지 검색해보는 변수 $jb_sql 선언
    $jb_sql = "SELECT * FROM member WHERE ID = '" . $ID . "';";
    //$jb_conn와 $jb_sql로 통해 실제 DB에 질의를 처리하는 변수 $jb_result 선언
    $jb_result = mysqli_query( $jb_conn, $jb_sql );

    if ( $jb_result == true ) { //jb_result가 참이라면 아래 if문을 수행
      if ( $password_new == $password_new_CK ) {// 새로운 비밀번호랑 새로운 비밀번호 확인이랑 일치하다면 아래 if문 수행
        $encrypted_new_password = password_hash( $password_new, PASSWORD_DEFAULT);
        //비밀번호 갱신
        $jb_sql_change_password = "UPDATE member SET password = '" . $encrypted_new_password . "' WHERE ID = '" . $ID . "';";
        mysqli_query( $jb_conn, $jb_sql_change_password );

        //갱신이 됐다면 "비밀번호가 갱신되었습니다."를 팝업창으로 띄어준 후 login.php 화면으로 이동
        echo "<script>alert('비밀번호가 갱신되었습니다.')</script>";
        echo "<meta http-equiv='refresh' content='0;url=login.php'>";

       }
    }
  }
?>
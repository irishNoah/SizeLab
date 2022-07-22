<?php
  $db = mysqli_connect('localhost','root','1234','sizelab_db');
  // $db = mysqli_connect('localhost','root','1234','level1') or die('DB 접속 실패'); //에러 테스트 용

  function ID_CK($sql_ID){
    global $db;              // 전역변수 $db 선언
    return $db->query($sql_ID); // 
  }

  function nick_CK($sql_nick){
    global $db;              // 전역변수 $db 선언
    return $db->query($sql_nick); // 
  } 

?>

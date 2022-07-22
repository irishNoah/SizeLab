<!-- 로그인 서버 -->
<?php
/* 세선 전역변수를 사용시 session_start();를 상단부에 배치하면 된다. */
session_start(); 
include('db_test.php'); 

if(isset($_POST['ID']) && isset($_POST['password'])){
    // 보안을 더욱 강화(secure 코딩, 보안 코딩)
    // 남이 함부로 sql을 변경할 수 없도록 
    $ID = mysqli_real_escape_string($db, $_POST['ID']);  
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // 에러를 체크
    if(empty($ID)){//ID가 비어있을 경우 다음과 같은 문장 출력
        header("location: login.php?error=아이디가 비어있습니다");
        exit();
    }
    else if(empty($password)){//비밀번호가 비어있을 경우 다음과 같은 문장 출력       
        header("location: login.php?error=비밀번호가 비어있습니다");
        exit();
    }
    else {//로그인 시키는 코딩
        //DB에 일치하는 ID가 존재하는지 검색 $sql 선언
        $sql = "select * from member where ID = '$ID'";
        //실제 DB에 접속해서 검색하게 하는 변수 $result 선언
        $result = mysqli_query($db, $sql);

        //만약 일치하다면 다음 if문 실행
        if(mysqli_num_rows($result) == 1){// == 으로 해도 실행이 됨
            $row = mysqli_fetch_assoc($result); //db에 저장되어 있는 id와 일치하다면 실행시킴
            $hash = $row['password']; //DB에 있는 암호화되어 있는 password 값을 대입

            if(password_verify($password, $hash)){//정상적으로 로그인 됐다면 메인페이지로 이동하게 해야 함
                $_SESSION['ID'] = $row['ID'];                  //고객의 아이디 가져오기
                $_SESSION['nickname'] = $row['nickname'];      //고객의 닉네임 가져오기
                $_SESSION['password'] = $row['password'];      //고객의 비밀번호 가져오기
                $_SESSION['user_email'] = $row['user_email'];  //고객의 이메일 가져오기
                $_SESSION['size'] = $row['size'];              //고객의 사이즈 가져오기
                $_SESSION['tone'] = $row['tone'];              //고객의 톤 가져오기
                
                $size_check = $_SESSION['size'];                //고객의 사이즈 대입
                $tone_check = $_SESSION['tone'];                //고객의 톤 대입

                

                //사이즈가 A이고 tone이 B일 때 다음을 수행
                if($size_check == "S" && $tone_check="ws"){
                    header("location: ../main/main_s_ws.php");
                }
                else if($size_check == "S" && $tone_check="cs"){
                    header("location: ../main/main_s_cs.php");
                }
                else if($size_check == "S" && $tone_check="wf"){
                    header("location: ../main/main_s_wf.php");
                }
                else if($size_check == "S" && $tone_check="cw"){
                    header("location: ../main/main_s_cw.php");
                }
                else if($size_check == "M" && $tone_check="ws"){
                    header("location: ../main/main_m_ws.php");
                }
                else if($size_check == "M" && $tone_check="cs"){
                    header("location: ../main/main_m_cs.php");
                }
                else if($size_check == "M" && $tone_check="wf"){
                    header("location: ../main/main_m_wf.php");
                }
                else if($size_check == "M" && $tone_check="cw"){
                    header("location: ../main/main_m_cw.php");
                }
                else if($size_check == "L" && $tone_check="ws"){
                    header("location: ../main/main_l_ws.php");
                }
                else if($size_check == "L" && $tone_check="cs"){
                    header("location: ../main/main_l_cs.php");
                }
                else if($size_check == "L" && $tone_check="wf"){
                    header("location: ../main/main_l_wf.php");
                }
                else if($size_check == "L" && $tone_check="cw"){
                    header("location: ../main/main_l_cw.php");
                }
                else if($size_check == "XL" && $tone_check="ws"){
                    header("location: ../main/main_xl_ws.php");
                }
                else if($size_check == "XL" && $tone_check="cs"){
                    header("location: ../main/main_xl_cs.php");
                }
                else if($size_check == "XL" && $tone_check="wf"){
                    header("location: ../main/main_xl_wf.php");
                }
                else if($size_check == "XL" && $tone_check="cw"){
                    header("location: ../main/main_xl_cw.php");
                }
                else if($size_check == "XXL" && $tone_check="ws"){
                    header("location: ../main/main_xxl_ws.php");
                }
                else if($size_check == "XXL" && $tone_check="cs"){
                    header("location: ../main/main_xxl_cs.php");
                }
                else if($size_check == "XXL" && $tone_check="wf"){
                    header("location: ../main/main_xxl_wf.php");
                }
                else{
                    header("location: ../main/main_xxl_cw.php");
                }
                exit();
            }
            else{  // 로그인에 실패했을 때
                header("location: login.php?error=로그인에 실패하였습니다.");
                exit();
            }
        }
        else{
            //아이디를 잘못 입력했을 때
            header("location: login.php?error=아이디를 잘못 입력하셨습니다.");
            exit();
        }
    }
}

else{
    // 에러 메시지
    header("location: login.php?error=알 수 없는 오류가 발생하였습니다.");
    exit();
}


?>
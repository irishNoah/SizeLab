<!-- 정보 서버 -->
<?php
    include('db_test.php');
    session_start();

    $ID = $_SESSION['ID'];

    //새로운 사이즈에 해당하는 변수 $size 선언
    $newsize = $_POST['newsize'];
    //새로운 톤에 해당하는 변수 $size 선언
    $newtone = $_POST['newtone'];

    $inf_size_change = "UPDATE member SET size = '" . $newsize . "' WHERE ID = '" . $ID . "';";
     //DB에서 실제 ID와 일치하는 사용자의 사이즈를 변경한 값을 $inf_size_change 대입
    $inf_tone_change = "UPDATE member SET tone = '" . $newtone . "' WHERE ID = '" . $ID . "';";
     //DB에서 실제 ID와 일치하는 사용자의 톤을 변경한 값을 $inf_size_change 대입

    mysqli_query( $db, $inf_size_change );
    mysqli_query( $db, $inf_tone_change );

    echo "<script>alert('성공적으로 정보변경이 완료되었습니다.')</script>";

    // 사용자의 사이즈별 피부별에 맞는 추천 페이지로 이동 -->
    if($newsize == "S" && $newtone == "cs"){
        echo "<meta http-equiv='refresh' content='0;url=../main/main_s_cs.php'>";
    }
    else if($newsize == "S" && $newtone == "cw"){
        echo "<meta http-equiv='refresh' content='0;url=../main/main_s_cw.php'>";
    }
    else if($newsize == "S" && $newtone == "wf"){
        echo "<meta http-equiv='refresh' content='0;url=../main/main_s_wf.php'>";
    }
    else if($newsize == "S" && $newtone == "ws"){
        echo "<meta http-equiv='refresh' content='0;url=../main/main_s_ws.php'>";
    }

    else if($newsize == "M" && $newtone == "cs"){
        echo "<meta http-equiv='refresh' content='0;url=../main/main_m_cs.php'>";
    }
    else if($newsize == "M" && $newtone == "cw"){
        echo "<meta http-equiv='refresh' content='0;url=../main/main_m_cw.php'>";
    }
    else if($newsize == "M" && $newtone == "wf"){
        echo "<meta http-equiv='refresh' content='0;url=../main/main_m_wf.php'>";
    }
    else if($newsize == "M" && $newtone == "ws"){
        echo "<meta http-equiv='refresh' content='0;url=../main/main_m_ws.php'>";
    }

    else if($newsize == "L" && $newtone == "cs"){
        echo "<meta http-equiv='refresh' content='0;url=../main/main_l_cs.php'>";
    }
    else if($newsize == "L" && $newtone == "cw"){
        echo "<meta http-equiv='refresh' content='0;url=../main/main_l_cw.php'>";
    }
    else if($newsize == "L" && $newtone == "wf"){
        echo "<meta http-equiv='refresh' content='0;url=../main/main_l_wf.php'>";
    }
    else if($newsize == "L" && $newtone == "ws"){
        echo "<meta http-equiv='refresh' content='0;url=../main/main_l_ws.php'>";
    }

    else if($newsize == "XL" && $newtone == "cs"){
        echo "<meta http-equiv='refresh' content='0;url=../main/main_xl_cs.php'>";
    }
    else if($newsize == "XL" && $newtone == "cw"){
        echo "<meta http-equiv='refresh' content='0;url=../main/main_xl_cw.php'>";
    }
    else if($newsize == "XL" && $newtone == "wf"){
        echo "<meta http-equiv='refresh' content='0;url=../main/main_xl_wf.php'>";
    }
    else if($newsize == "XL" && $newtone == "ws"){
        echo "<meta http-equiv='refresh' content='0;url=../main/main_xl_ws.php'>";
    }

    else if($newsize == "XXL" && $newtone == "cs"){
        echo "<meta http-equiv='refresh' content='0;url=../main/main_xxl_cs.php'>";
    }
    else if($newsize == "XXL" && $newtone == "cw"){
        echo "<meta http-equiv='refresh' content='0;url=../main/main_xxl_cw.php'>";
    }
    else if($newsize == "XXL" && $newtone == "wf"){
        echo "<meta http-equiv='refresh' content='0;url=../main/main_xxl_wf.php'>";
    }
    else if($newsize == "XXL" && $newtone == "ws"){
        echo "<meta http-equiv='refresh' content='0;url=../main/main_xxl_ws.php'>";
    }
    ?>
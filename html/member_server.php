<?php
include('db_test.php');

if(isset($_POST['ID']) && isset($_POST['password']) && isset($_POST['password_CK']) && isset($_POST['nickname']) 
&& isset($_POST['user_name']) && isset($_POST['user_email']) && isset($_POST['user_phone']) && isset($_POST['gender'])){
    // 차례대로 ID, ID 중복 확인, 비밀번호, 비밀번호 확인, 닉네임, 닉네임 중복 확인, 이름, 이메일, 전화번호, 성별 순임
    // 순서대로 ID, ID_CK, password, password_CK, nickname, nickname_CK, user_name, user_email, user_phone, gender

    //남이 함부로 sql을 변경할 수 없도록 함
    $ID = mysqli_real_escape_string($db, $_POST['ID']); //아이디
    $password = mysqli_real_escape_string($db, $_POST['password']); //비밀번호
    $password_CK = mysqli_real_escape_string($db, $_POST['password_CK']); //비밀번호 다시 확인(중복 확인)
    $nickname = mysqli_real_escape_string($db, $_POST['nickname']); //닉네임
    $user_name = mysqli_real_escape_string($db, $_POST['user_name']); //이름(실명)
    $user_email = mysqli_real_escape_string($db, $_POST['user_email']); //이메일
    $user_phone = mysqli_real_escape_string($db, $_POST['user_phone']); //전화번호
    $gender = mysqli_real_escape_string($db, $_POST['gender']); //성별
    
    //주소창 get
    $user_info = "ID=".$ID."&password=".$password."&password_CK=".$password_CK."&nickname="
    .$nickname."&user_name=".$user_name."&user_email=".$user_email."&user_phone=".$user_phone."&gender=".$gender;

    // 에러를 체크
    if(empty($ID)){//ID 대한 에러 체크    
        header("location: member.php?error=아이디가 비어있습니다&$user_info");
        exit();
    }    
    else if(empty($password)){//password 대한 에러 체크
        header("location: member.php?error=비밀번호가 비어있습니다&$user_info");
        exit();           
    }
    else if(empty($password_CK)){//password_CK 대한 에러 체크    
        header("location: member.php?error=비밀번호 확인란이 비어있습니다&$user_info");
        exit();        
    }
    else if($password !== $password_CK){//비밀번호와 비밀번호 중복 확인이 동일한지 확인해 봄
        header("location: member.php?error=비밀번호가 일치하지 않습니다&$user_info");
        exit();       
    }
    else if(empty($nickname)){//nickname 대한 에러 체크    
        header("location: member.php?error=닉네임이 비어있습니다&$user_info");
        exit();    
    }
    else if(empty($user_name)){//user_name 대한 에러 체크
        header("location: member.php?error=이름이 비어있습니다&$user_info");
        exit();         
    }
    else if(empty($user_email)){//user_email 대한 에러 체크     
        header("location: member.php?error=이메일이 비어있습니다&$user_info");
        exit();   
    }
    else if(empty($user_phone)){//user_phone 대한 에러 체크 
        header("location: member.php?error=전화번호가 비어있습니다.&$user_info");
        exit();     
        
    }
    else if(empty($gender)){//gender 대한 에러 체크 
        header("location: member.php?error=성별이 비어있습니다.&$user_info");
        exit();             
    }
    else{
        //암호화
        $password = password_hash($password, PASSWORD_DEFAULT);

        //Database에 있는 다른 회원의 아이디와 일치하는 것이 있는지 확인하는 것에 대한 변수 $sql_same_ID 선언
        $sql_same_ID = "SELECT * FROM member where ID = '$ID'";
        //Database에 있는 다른 회원의 닉네임과 일치하는 것이 있는지 확인하는 것에 대한 변수 $sql_same_nickname 선언
        $sql_same_nickname = "SELECT * FROM member where nickname = '$nickname'";        

        //mysqli_query(db 접속, 명령을 수행해라);
        $order_ID = mysqli_query($db, $sql_same_ID); // ID에 대한 명령
        $order_nickname = mysqli_query($db, $sql_same_nickname); // nickname에 대한 명령

        
        if(mysqli_num_rows($order_ID)>0){ //만약 아이디만 이미 존재한다면~
            header("location: member.php?error=아이디가 이미 존재합니다.&$user_info");      
            exit();      
            
        }
        else if(mysqli_num_rows($order_ID)<0){ //만약 닉네임만 이미 존재한다면~
            header("location: member.php?success=사용 가능한 아이디입니다.&$user_info");  
            exit();
        }
        
        else{//중복이 없다면 insert into를 시행~
            //사이즈에 해당하는 변수 $size 선언
            $size = $_POST['size'];

            //톤 해당하는 변수 $tone 선언
            $tone = $_POST['tone'];
            
            //여기서는 성별, 사이즈, 톤까지 넣어주어야 한다.
            //순서 : ID > password > nickname > user_name > user_email > user_phone > gender > size > tone
            //중복 값이 없고 오류도 없다면 회원가입 정보 대해 DB에 대입해주는 변수 $sql_save 선언
            $sql_save = "insert into member(ID, password, nickname, user_name, user_email, user_phone, gender, size, tone) 
            values('$ID','$password','$nickname', '$user_name', '$user_email', '$user_phone', '$gender', '$size', '$tone')";
        
            $result = mysqli_query($db, $sql_save);

            if($result){//가입이 성공적이라면 
                header("location: member.php?success=성공적으로 가입 되었습니다.");
                exit();       
            }
            else{//어떤한 이유에서든지 성공적으로 저장되지 않는다면
                header("location: member.php?error=가입에 실패하였습니다.");
                exit();               
            }
        }       
    }
}

else{
    // 에러 메시지
    header("location: member.php?error=알 수 없는 오류가 발생하였습니다.&$user_info");
    exit();   

}
?>
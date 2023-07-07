- [프로젝트 전체 설명 REAMD.MD 이동](https://github.com/irishNoah/SizeLab)

# 🔥 프로젝트 주요 메소드
## mysqli_connet() 
![image](https://github.com/irishNoah/SizeLab/assets/80700537/fe8fa326-f92a-4d7f-9281-55e7a4ee8200)
- mysqli_connet() 함수를 활용해 DB에 연동
- 정확히는 DB인 MySQL과 PHP를 연동시켜 DB에 접근할 수 있도록 한다.
- [상세 설명 블로그 이동하기](https://blog.naver.com/park_ckddud/222599987713) 

## "$_GET[]"
![image](https://github.com/irishNoah/SizeLab/assets/80700537/d1a35189-1952-4786-a006-a30d2ac07ed6)
- 사용자가 회원가입을 하고자 할 때, 아이디 입력창에 입력한 값을 $_GET[] 를 통해 가져오기
- $_GET[] 를 통해 가져온 값과, DB에 존재하는 ID의 모든 값을 매칭 시켜줘서 중복 여부 알려주기
- [상세 설명 블로그 이동하기](https://blog.naver.com/park_ckddud/222605645697) 

## "$_POST[]"
![image](https://github.com/irishNoah/SizeLab/assets/80700537/1b2cb736-1bcc-4e4f-9214-d12db8d604d0)
"$_POST"란?
- 입력받은 무언가에 대해 실제로 DB에 있는지를 알기 위한 전송 메소드
- 사용 예 : $A = $_POST[ 'B' ];
  - 화면단에서 입력받은 B를 $_POST[ ]를 통해 전달하여 A라는 변수에 할당
- [상세 설명 블로그 이동하기](https://blog.naver.com/park_ckddud/222605816149) 

## mysqli_real_escape_string()
![image](https://github.com/irishNoah/SizeLab/assets/80700537/daf48663-8b0e-4a79-993c-aba44079aaf7)
- 보안 상 외부인이 sql에 관련한 것을 함부로 변경하지 못하도록 해야 한다.
- 이를 mysqli_real_escape_string()을 통해 실현
- [상세 설명 블로그 이동하기](https://blog.naver.com/park_ckddud/222605816149) 

# 🔥 기타 코드 설명 블로그 포스팅 목록
- [회원가입 - UI편](https://blog.naver.com/park_ckddud/222605678915)
- [회원가입 - SERVER편](https://blog.naver.com/park_ckddud/222605816149)
- [로그인](https://blog.naver.com/park_ckddud/222605906972)
- [로그아웃](https://blog.naver.com/park_ckddud/222605924901)
- [아이디 찾기](https://blog.naver.com/park_ckddud/222606127307)
- [비밀번호 찾기 및 변경](https://blog.naver.com/park_ckddud/222606163330)
- [정보 확인 및 변경](https://blog.naver.com/park_ckddud/222606577107)

# :blue_book: SizeLab 프로젝트 소개

SizeLab은 AI를 활용한 의류 추천 시스템입니다.

# :beginner: 개발 배경 및 목적

## :penguin: 개발 배경
:heavy_check_mark: 매해 온라인 쇼핑 이용률이 증가하고 있으나, 환불율도 함께 증가<br>
🚨 환불 주 이유 : 의류 사이즈 or 색상 불만족<br><br>
:heavy_check_mark: 기존 의류 시스템 중 회원 가입 시 사용자의 신체 사이즈 및 선호 스타일을 입력 받았으나 이를 반영하지 않는 곳이 많았음<br>

## :fire: 개발 목적
:heavy_check_mark: 입력받은 사용자의 신체 사이즈 및 선호 스타일을 AI를 활용하여 도출 => 사용자의 만족율 향상에 기여<br>
:heavy_check_mark: 이를 위해 남성 상의 8가지 종류를 대상으로 개발

# :sweat_drops: 시스템 설계

## :tada: 시스템 구조

![image](https://user-images.githubusercontent.com/80700537/180342693-2c0340c6-63ab-470f-bf93-24b6ebc85610.png)

:speech_balloon: [의류 정보 저장 모듈/피부톤 적합 색상 매칭 모듈/의류 추천 모듈/데이터베이스]로 구분<br>

> :rotating_light: 의류 정보 저장 모듈 = Clothing Information Storage Module<br> :rotating_light: 피부톤 적합 색상 매칭 모듈 = Color Check Module Suutable for Skin Tone<br> :rotating_light: 의류 추천 모듈 = Clothing Recommendation Module


__[1] 의류 정보 저장 모듈 기능__<br>
:heavy_check_mark: 외부 System Actor에서 제공하는 의류 정보를 개발 시스템에 등록<br>
:heavy_check_mark: 등록된 의류를 수정 및 삭제<br>

__[2] 피부톤 적합 색상 매칭 모듈 기능__<br>
:heavy_check_mark: 피부톤(봄 웜톤, 여름 쿨톤, 가을 웜톤, 겨울 쿨톤)에 적합한 의류 색상 매칭<br>

__[3] 의류 추천 모듈__<br>
:heavy_check_mark: 사용자가 입력한 사이즈 정보 및 피부 톤을 고려 > 등록 의류 정보 중 사용자와 관련된 의류 추천<br>

__[4] 데이터베이스__<br>
:heavy_check_mark: [사용자 정보/사이즈 정보/피부톤 정보/의류 정보] 저장<br>

## :pushpin: Usecase Diagram
![image](https://user-images.githubusercontent.com/80700537/180343263-864ac039-e3ff-414a-9c07-ff8095c95ce8.png)

__[1] Actor__<br>
:heavy_check_mark: [비회원/회원/관리자/쇼핑몰 시스템]으로 구분<br>

__[2] Usecase__<br>
:heavy_check_mark: 비회원 Usecase 역할 : 회원가입<br>
:heavy_check_mark: 회원 Usecase 역할 : 로그인, 회원 정보 조회/수정, 의류 추천, 의류 구매 사이트 이동, 사용자 인증<br>
:heavy_check_mark: 관리자 Usecase 역할 : 의류 등록/수정/의류 삭제, 회원 조회/삭제, 사용자 인증<br>
:heavy_check_mark: 쇼핑몰 시스템 Usecase 역할 : 의류 제공<br>

__[3] Link__<br>
:heavy_check_mark: 회원과 관리자는 사용자 인증 Usecase를 통해 연결<br>
:heavy_check_mark: 쇼핑몰 시스템과 회원은 의류 추천 Usecase를 통해 연결<br>

## :notebook_with_decorative_cover: E-R Diagram
![image](https://user-images.githubusercontent.com/80700537/180343378-b18bfcbc-7cff-4b4f-b1c7-6cf5995cf4ee.png)

__[1] 사용자 정보(User Information) 테이블__<br>
:heavy_check_mark: 사용자 이름, 닉네임, 이메일, 연락처, 성별 및 사이즈 정보 저장<br>
:heavy_check_mark: 피부톤 분류로 도출된 사용자 사이즈 및 사용자 피부톤 저장<br>

__[2] 사이즈 정보(Size Information) 테이블__<br>
:heavy_check_mark: 각 의류 사이즈에 해당되는 S, M, L, XL, XXL가 분류되어 저장<br>

__[3] 피부톤 분류 테이블__<br>
:heavy_check_mark: 사용자의 피부톤 종류인 [봄 웜톤, 여름 쿨톤, 가을 웜톤, 겨울 쿨톤] 중 1개의 정보가 저장<br>

__[4] 의류 정보 테이블__<br>
:heavy_check_mark: 의류 추천 위한 여러 의류 정보 저장<br>

# :factory: 시스템 구현
## :dart: 개발 환경
![1](https://user-images.githubusercontent.com/80700537/180343426-1bff7ba4-b852-47a2-9604-d27925cb894f.JPG)

## :monorail: 주요 기능 구현
__[1] 사이즈 입력__

![image](https://user-images.githubusercontent.com/80700537/180343523-996b22df-f11a-4c39-a9c9-9b90c13f0438.png)

:heavy_check_mark: 회원가입 및 개인 정보 수정 시 사용자의 사이즈 선택 및 변경 가능<br>
:heavy_check_mark: 선택된 사용자 사이즈가 추천 서비스 반영됨<br>
:heavy_check_mark: 대한민국 남성 가슴 둘레를 기준으로 사이즈를 구분하였음<br>
:heavy_check_mark: 인치의 치수를 토대로 사이즈를 S, M, L, XL, XXL로 구분<br>
:heavy_check_mark: S은 90-95인치, L은 100-105인치, XL은 105-110인치, XXL은 100인치 이상에 해당<br>

__[2] 피부톤 선택__

![image](https://user-images.githubusercontent.com/80700537/180343555-f27bcc23-351a-4482-b830-22085376a9e6.png)

:heavy_check_mark: 회원가입 및 개인 정보 수정 시 사용자의 피부톤 선택 및 변경 가능<br>
:heavy_check_mark: 피부톤은 기본적으로 웜톤과 쿨톤으로 구분됨<br>
:heavy_check_mark: 웜톤 피부는 따뜻한 느낌의 피부색 / 쿨톤 피부는 차갑고 창백한 느낌이 있는 피부색<br>
:heavy_check_mark: 웜톤 피부 및 쿨톤 피부 내에서 각각 2개로 구분됨<br>
:heavy_check_mark: 웜톤 피부 종류 : 봄톤, 가을톤 / 쿨톤 피부 종류 : 여름톤, 겨울톤<br>
:heavy_check_mark: 이 4가지 톤 중 사용자는 본인 피부톤과 가장 비슷한 톤 1개를 택함. 이 정보는 DB에 저장됨<br>

__[3] 의류 추천__

![image](https://user-images.githubusercontent.com/80700537/180343674-29f19693-3008-4661-b6fc-ea4aaee6bfde.png)

:heavy_check_mark: 의류 추천 위해 웹 크롤링 시행. 이를 통해 얻은 의류 정보는 주기적으로 엑셀로 변환 및 DB에 저장<br>
:heavy_check_mark: 위 이미지는 엑셀로 변환된 의류 정보에 해당<br>

![image](https://user-images.githubusercontent.com/80700537/180343700-4abc7aed-cfcd-41fe-abda-70b61ac7b8f2.png)

:heavy_check_mark: 크롤링된 의류 이미지는 위 이미지처럼 색상 도출 AI 프로그램에 대입하여 이미지에서 도출되는 2가지 색상을 얻음<br>

![image](https://user-images.githubusercontent.com/80700537/180343725-a9247b1c-752f-43ee-90e2-2112649914ae.png)

:heavy_check_mark: 참고로 색상은 138개로 구분되며, 색상에 대한 정보는 별도의 엑셀 파일에 저장되어 있음 <br>

# :european_castle: 의류 추천 원리
:heavy_check_mark: 색상 도출 AI 프로그램을 통해 가장 높게 나온 의류 이미지 내 2가지 색상 중 1개를 관리자 최종 선정<br>
:heavy_check_mark: 그 이유는 가장 높게 나온 2가지의 색상은 배경 색상 및 류의 색상에 해당되기 때문<br>
:heavy_check_mark: 의류 이미지마다 배경 색상의 비율이 더 높을 수 있고, 의류의 색상의 비율이 더 높을 수 있음<br>
:heavy_check_mark: 이에 따라 관리자가 1개의 색상만 최종적으로 선별<br>
:heavy_check_mark: 처음부터 가장 많이 차지하는 1가지 색상만 도출 시 의류 색상이 아닌 배경 색상을 얻는 문제가 생길 수 있음<br>
:heavy_check_mark: 최종 선정된 의류 색상이 DB에 반영<br>

![image](https://user-images.githubusercontent.com/80700537/180343843-5ca40b09-42b3-4d5d-9e47-0de337fe8012.png)

:heavy_check_mark: 위 이미지와 같이 DB에 저장된 의류 색상이 피부톤 종류 중 무엇에 적합한가를 매칭시켜 해당 색상에 어울리는 피부톤 종류의 결과를 DB에 저장<br>

![image](https://user-images.githubusercontent.com/80700537/180343880-264d28c9-f7f0-4a33-bdcc-3213fb8b20e8.png)

:heavy_check_mark: 위 이미지와 같이 사용자의 사이즈와 피부톤을 DB에 저장되어 있는 각 의류의 사이즈와 의류 색상에 적합한 피부톤과 비교하여 일치한 것이 있다면 이를 사용자에게 추천<br>











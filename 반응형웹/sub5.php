<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>서브5</title>
    <link rel="stylesheet" href="css/reset.css">

<script src="lib/jquery.min.js"></script>
<script src="js/main.js"></script>

<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/footer.css">
<style>
        .subbg{
            background-image: url(image/sub5_search/sub5_visual.jpg);
            height: 300px;
            background-repeat:no-repeat;
            background-size:cover;
            color: white;
        }

        .baro{
            position: absolute;
            top: 350px;
            font-size: 0.5em;
            color: #fff;
        }

        .title{
            text-align: center;
            font-size: 2em;
            line-height: 300px;
            font-weight: bold;
        }

        .baro>a{
            color: white;
            font-weight: 0.9em;
        }

        .tabmenu{
            max-width:800px;

            width: 100%;
            text-align: center;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            position: relative;
            top: -20px;
        }
        .tabmenu>a{
            width: 30%;
            text-align: center;
            height: 70px;
            border: 1px solid #000;
            text-align: center;
            line-height: 70px;
            background-color: red;
        }
        
        .tabmenu>a:first-child{
            background-color: white;
            color: red;
        }

        .tabmenu>a{
            color: white;
            font-size:1.1em;
        }

        h2{
            text-align: center;
            margin-top: 50px;    
        }

        .sub_box{
            margin-top: 100px;
            width: 100%;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
        }

        .sub_box_box{
            display: flex;
            width: 100%;
            margin-bottom: 25px;
           
        }

        .sub_box_box_txt{
            flex: 1;
            margin-left: 5%;
            border-bottom:1px solid #ff4c5b;
        }

        .title1{
            margin-top: 50px;
            font-weight: bold;
            font-size: 1.2em;
        }


        .location{
            margin-top: 100px;
        }

        .location>span{
            text-align: right;
        }
        .red{
            color: red;
        }

        .icon{
            margin-top: 5%;
            border-bottom:1px solid #ff4c5b;
        }

        .icon>img{
            width: 50px;
            height: auto;
        }

        @media screen and (max-width:760px) and (min-width:360px){

            .sub_box_box{
                flex-direction:column;
            }

            .title1{
                margin-top 10px;
                text-align: center;
            }

            .location{
                margin-top: 10px;
            }

            .sub_box_box_txt{
                border: none;
            }

            .icon{
                text-align: center;
            }
        }
</style>
</head>
<body>
<?php include "include/header.html" ?>
    <div class="subbg">
        <div class="wrap">
        <div class="title">매장 찾기</div>
        <div class="baro">매장 > <a href="#"> 매장 찾기</a></div>
        </div>
    </div>

    <div class="wrap">
    <div class="tabmenu">
            <a href="#">매장 찾기</a>
            <a href="#">이용 안내</a>
            <a href="#">입점 제의</a>
        </div>

        <h2>좋은 공부 습관은 좋은 학습 공간에서 이루어진다.</h2>
            

        <div class="sub_box">
           
            <div class="sub_box_box">
                <div class="sub_box_box_img"><img src="image/sub5_search/sub5_image1.jpg" alt="서브5 이미지 1"></div>
                <div class="sub_box_box_txt">
                    <div class="title1">창원 진해점(오픈 예정)</div>
                    <div class="location"><span class="red">위치</span>경남 창원시 진해구 충장루104길 흥부빌딩 3층</div>
                    <div class="time"><span class="red">영업시간</span> 24시간</div>
                    <div class="number"><span class="red">전화번호</span> 010-5128-3333</div>
                    <div class="date"><span class="red">휴일</span> 연중무휴</div>
                </div>
                <div class="icon"><img src="image/sub5_search/sub5.icon.png" alt=""></div>
            </div>

            <div class="sub_box_box">
                <div class="sub_box_box_img"><img src="image/sub5_search/sub5_image2.jpg" alt="서브5 이미지 2"></div>
                <div class="sub_box_box_txt">
                    <div class="title1">서울 노원점(오픈 예정)</div>
                    <div class="location"><span class="red">위치</span>서울 노원구 노원역 충장로 104길</div>
                    <div class="time"><span class="red">영업시간</span> 24시간</div>
                    <div class="number"><span class="red">전화번호</span> 010-5128-3323</div>
                    <div class="date"><span class="red">휴일</span> 연중무휴</div>
                </div>
                <div class="icon"><img src="image/sub5_search/sub5.icon.png" alt=""></div>
            </div>

            <div class="sub_box_box">
                <div class="sub_box_box_img"><img src="image/sub5_search/sub5_image3.jpg" alt="서브5 이미지 3"></div>
                <div class="sub_box_box_txt">
                    <div class="title1">서울 중계점(오픈 예정)</div>
                    <div class="location"><span class="red">위치</span> 서울 노원구 중계역 중계빌딩 2층</div>
                    <div class="time"><span class="red">영업시간</span> 24시간</div>
                    <div class="number"><span class="red">전화번호</span> 010-5128-3333</div>
                    <div class="date"><span class="red">휴일</span> 연중무휴</div>
                </div>
                <div class="icon"><img src="image/sub5_search/sub5.icon.png" alt=""></div>
            </div>

            <div class="sub_box_box">
                <div class="sub_box_box_img"><img src="image/sub5_search/sub5_image4.jpg" alt="서브5 이미지 4"></div>
                <div class="sub_box_box_txt">
                    <div class="title1">서울 상계점(오픈 예정)</div>
                    <div class="location"><span class="red">위치</span> 서울 노원구 상계역 영진빌딩3층</div>
                    <div class="time"><span class="red">영업시간</span> 24시간</div>
                    <div class="number"><span class="red">전화번호</span> 010-5128-3333</div>
                    <div class="date"><span class="red">휴일</span> 연중무휴</div>
                </div>
                <div class="icon"><img src="image/sub5_search/sub5.icon.png" alt=""></div>
            </div>
        </div>
    </div><!-- wrpa end -->
<?php include "include/footer.html" ?>

</body>
</html>
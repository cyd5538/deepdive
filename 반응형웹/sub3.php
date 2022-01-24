<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>서브3</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  
    <script src="lib/jquery.min.js"></script>
    <script src="js/main.js"></script>

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">

    <style>
            .subbg{
            background-image: url(image/sub3_coporate/sub3_visual.jpg);
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
            margin: 0 auto;
            display: flex;
            position: relative;
            top: -20px;
            justify-content: center;

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


            .wrap>h2{
                text-align: center;
            }

            .box{
                margin-top: 50px;
                width: 100%;
                display: flex;
                flex-wrap: wrap;
                justify-self: center;
                align-items: center;
            }

            .iconbox{
                width: 33%;
                display: flex;
                flex-direction: column;
                justify-self: center;
                align-items: center;
                position: relative;
            }

            .iconbox_red{
                position: absolute;
                top: 200px;
                font-size: 1.5em;
                color: red;
            }

            .iconbox_subtitle{
                font-size: 1.1em;
                font-weight: bold;
            }

            .iconbox_substitle_sub{
                margin-top: 20px;
                margin-bottom: 100px;
                width: 50%;
            }



            .subtxt_baro{
                margin: 0 auto;
                text-align: center;
                width: 200px;
                line-height: 60px;
                height: 60px;
                border: 1px solid #f2b341;
                font-size: 1.1em;
                color: black;
                border-radius: 30px;
                font-weight: bold;
                background-color: #f2b341;
            }


            @media screen and (max-width:760px) and (min-width:360px){
                .iconbox{
                    width: 100%;
                }

                .iconbox_substitle_sub{
                    width: 75%;
                }
            }
    </style>
</head>
<body>
<?php include "include/header.html" ?>
<div class="subbg">
        <div class="wrap">
        <div class="title">인재상</div>
        <div class="baro">모집 > <a href="#"> 인재상</a></div>
        </div>
    </div>

    <div class="wrap">
    <div class="tabmenu">
            <a href="#">인재상</a>
            <a href="#">채용공고</a>
        </div>

        <h2>Corporate Philosophy</h2>

        <div class="box">
            <div class="iconbox"><img src="image/sub3_coporate/sub3_icon1.png" alt="서브3아이콘1">
            <div class="iconbox_red">CHALLENGE</div>
            <div class="iconbox_subtitle">새 시대를 향한 변화</div> 
            <div class="iconbox_substitle_sub">처음 접하는 새로운 상황에서도 두려워하지 않고 다양한 경험과 배움을 통해성과를 창출하는 인재</div>
        </div>
            <div class="iconbox"><img src="image/sub3_coporate/sub3_icon2.png" alt="서브3아이콘2">
            <div class="iconbox_red">CHANGE</div>
            <div class="iconbox_subtitle">능동적인 팀워크</div>
            <div class="iconbox_substitle_sub">공간과 소통을 통해 다른 구성원들과 생각을 통해 동료를 신뢰하는 인재.</div>
        </div>
            <div class="iconbox"><img src="image/sub3_coporate/sub3_icon3.png" alt="서브3아이콘3">
            <div class="iconbox_red">TEAMWORK</div>
            <div class="iconbox_subtitle">위대한 도전 정신</div>
            <div class="iconbox_substitle_sub">강인한 리더십으로 동료와 함께 한계의영역을 뛰어넘어 위대한 결과를 만드는 뜨거운 열정의 인재 </div>
        </div>
        </div>

        <div class="center"><div class="subtxt_baro"><a href="#">채용공고 바로가기 <i class="fas fa-chevron-right"></i></a></div></div>
    </div> <!-- wrap end -->
    
<?php include "include/footer.html" ?>
</body>
</html>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>서브4</title>
    <link rel="stylesheet" href="css/reset.css">

    <script src="lib/jquery.min.js"></script>
    <script src="js/main.js"></script>

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
   
   <style>
          .subbg{
            background-image: url(image/sub4_introduce/sub4_visual.jpg);
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
            width: 25%;
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

        h2,
        .subtxt{
            margin-top: 20px;
            width: 100%;
            text-align: center;
        }
        
        .sub4_image{
            margin-top: 100px;
            display: flex;
            flex-wrap: wrap;
            width: 100%;            
        }

        .sub4_image>div{
            width: 33%;
            text-align: center;
        }

        .sub4_image_hover{
            margin-top: 100px;
            display: flex;
            flex-wrap: wrap;
            width: 100%;     
            position: relative;
            top: -260px;
        }

        .sub4_image_hover>span{
            width: 33%;
            text-align: center;
            color: white;
            font-size: 1.3em;
        }

        .subbg_under{
            width: 100%;
            background-image: url(image/sub4_introduce/sub4_introduce.jpg);
            height: 400px;    
            background-size: cover;
            background-repeat: no-repeat;
        }

        .subbg_title{
            position: relative;
            top: 100px;
            left: 0;
            color: white;
            font-size: 1.5em;
            font-weight: bold;
        }

        .subbg_titletxt{
            position: relative;
            top: 110px;
            left: 0;
            color: white;
            font-size: 1.3em;
        }

        .subbg_under_under{
            background: #292927;
            height: 70px;
        }

        .undertxt_flex{
            width: 100%;
            display: flex;
            padding-top: 10px;
            justify-content: center;
            align-items:center;
            color: white;
        }

        .undertext_left{
            width: 20%;

        }

        .undertext_center{
            width: 40%;

  
        }

        .undertext_right{
            width: 40%;
            display: flex;
            justify-content: center;
            align-items:center;
        }


        .undertext_right>div{
            margin-left: 4%;
        }

        @media screen and (max-width:760px) and (min-width:360px){
            .tabmenu{
                text-align: center;
            }

            .tabmenu>a{
                width: 80px;
            }

            .tabmenu>a:first-child{
                padding-top: 15px;
                line-height: 20PX;
            }
            .sub4_image>div{
                width: 100%;
                margin-bottom: 20px;
            }

            .sub4_image_hover{
                position: relative;
                top: -980px;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .sub4_image_hover>span:nth-child(2){
                position: relative;
                top: 300px;
            }

            .sub4_image_hover>span:nth-child(3){
                top: 560px;
                position: relative;
            }

            .subbg_under{
                margin-top: -200px;
                height: 300px;
            }

            .subbg_under_under{
                height: 220px;
            }

            .undertxt_flex{
                flex-direction: column;
                justify-content: first baseline;
                align-items: start;
            }

            .undertext_left{
            width: 100%;

            }

            .undertext_center{
                width: 100%;

    
            }

            .undertext_right{
                width: 40%;
                margin-top: 5%;
                display: inline-block;
            }

            .undertext_right>div{
                
                margin-left: 0;
            }
        }  
        @media screen and (max-width:1200px) and (min-width:760px) {
            .subbg_under{
                height: 300px;
            }

      
        }
    </style>
    
</head>
<body>
    <?php include "include/header.html" ?>
    

    <div class="subbg">
        <div class="wrap">
        <div class="title">또바기 소개</div>
        <div class="baro">또바기소개 > <a href="#"> 또바기 소개</a></div>
        </div>
    </div>
    
    <div class="wrap">
        <div class="tabmenu">
            <a href="#">또바기 소개</a>
            <a href="#">또바기 경쟁력</a>
            <a href="#">CEO 인사말</a>
            <a href="#">BI / CI</a>
        </div>

        <h2>좋은 공부 습관은 좋은 학습 
            공간에서 이루어진다.</h2>
        <div class="subtxt">최적화된 프리미엄 학습공간에서 고객은 매일 일상처럼 그루를 이용하고 학습 습관 형성 및 능률을 높일 수 있습니다.</div>
        <div class="sub4_image">
            <div><img src="image/sub4_introduce/sub4_image1.png" alt="서브4 이미지1"></div>
            <div><img src="image/sub4_introduce/sub4_image2.png" alt="서브4 이미지2"></div>
            <div><img src="image/sub4_introduce/sub4_image3.png" alt="서브4 이미지3"></div>
        </div>
        <div class="sub4_image_hover">
            <span class="sub4_image_text">최적의 학습공간 제공</span>
            <span class="sub4_image_text">66일간 또바기 이용</span>
            <span class="sub4_image_text">고객의 학습습관 완성!</span>
        </div>
    </div>  <!-- wrap end -->
   
        <div class="subbg_under">
            <div class="wrap">
            <div class="subbg_title">공부습관의 변화 <br>또바기가 답이다.</div>
            <div class="subbg_titletxt">또바기스터디카페 고객이라면 ‘누구나’ <br> 공부를 습관으로 만들 수 있습니다.</div>   
            </div>
        </div>

        <div class="subbg_under_under">
            <div class="wrap">
                <div class="undertxt_flex">
                <div class="undertext_left">창 업 안 내</div>
                <div class="undertext_center">1644-22459 <br>평일 09:00~18:00/토요일 공휴일 휴무</div>
                <div class="undertext_right">
                    <div>온라인 창업문의</div>
                    <div>온라인 가맹문의</div>
                    <div>가맹 FAQ</div>
                </div>
                </div> <!-- undertxt_flex end -->
               
            </div> <!-- wrap end -->
        </div>

        <?php include "include/footer.html" ?>
</body>
</html> 
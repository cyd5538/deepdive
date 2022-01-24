<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>서브1</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  
    <script src="lib/jquery.min.js"></script>
    <script src="js/main.js"></script>

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <style>


        .subbg{
            background-image: url(image/sub1_coffee/sub1_visual.jpg);
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
            width: 33%;
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

        .sub1_txt{
            margin-top: 100px;
            width: 100%;
            text-align: left ;
        }

        .subtxt{
            font-size: 1.2em;
            margin-top: 20px;
        }

        .subsubtxt{
            margin-top: 50px;
        }

        .coffeeimage{
            background-image: url(image/sub1_coffee/sub1_image.png);
            height: 800px;
            width: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
        }

        #barogagi{
            position: absolute;
            top: 200px;
            width: 150px;
            height: 50px;
            border: 1px solid #000;
            border-radius: 25px;
            font-size: 1.1em;
            text-align: center;
            line-height: 50px;
        }



        @media screen and (max-width:760px) and (min-width:360px){
            .coffeeimage{
                height: 400px;
            }

            .tabmenu>a{
                width: 110px;
            }
            .tabmenu>a:first-child{
                line-height: 35px;
            }

            #barogagi{
                top: 100px;
            }

            .title{
                font-size: 1.8em;
            }
        }

        @media screen and (max-width:1200px) and (min-width:760px) {
            .coffeeimage{
                height: 500px;
            }
        }
    </style>
</head>

<body>
    <?php include "include/header.html" ?>
    <div class="subbg">
        <div class="wrap">
        <div class="title">COFFEE & BEAERAGE</div>
        <div class="baro">또바기 차별화 > <a href="#"> COFFEE & BEAERAGE</a></div>
        </div>
    </div>

    <div class="wrap">
    <div class="tabmenu">
            <a href="#">COFFEE & BEAERAGE</a>
            <a href="#">공간 소개</a>
            <a href="#">또바기의 차별화</a>
    </div>
    <div class="sub1_txt">  
    <h2>나에게 주는 한 잔의 선물</h2>
    <div class="subtxt">당신의 꿈이 이뤄지기 바라는 마음을 담아 제조하였습니다.</div>
    <div class="subsubtxt">당신이 평소에 마시는 커피와 음료를 <br> 또바기에서는 당신에게 특별한 선물이 되어주길 <br> 바라며 준비하고만듭니다. </div>
    </div>
    </div>  
    <div class="coffeeimage">
        <div class="wrap">
        <a id="barogagi" href="#">공간보러가기 <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
    </div>
    <?php include "include/footer.html" ?>
</body>
</html>
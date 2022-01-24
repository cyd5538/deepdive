<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>서브2</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  
    <script src="lib/jquery.min.js"></script>
    <script src="js/main.js"></script>

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <style>
       .subbg{
            background-image: url(image/sub2_event/sub2.visual.jpg);
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

        .eventbox{
            width: 80%;
            margin: 100px auto;
            border-top: 3px solid #000;
            display: flex;
        }
        .eventimage{
            margin-top: 20px;
            margin-left: 5%;
        }

        .eventtxt{
            margin-top: 40px;
            margin-left: 5%;
        }

        .event_title{
            font-size: 1.3em;
            font-weight: bold;
        }

        .event_subtitle{
            margin-top: 20px;
            font-size: 1.1em;
        }



        .event_themore{
            display: block;
            margin-top: 60px;
            width: 120px;
            height: 30px;
            border: 1px solid #000;
            border-radius: 15px;
            text-align: center;
            line-height: 30px;
        }

        @media screen and (max-width:760px) and (min-width:360px){
            .eventbox{
                flex-direction: column;
            }
        }
        @media screen and (max-width:1200px) and (min-width:760px) {
            .eventtxt{
                margin: 15px;
            }

            .event_themore{
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>
    <?php include "include/header.html" ?>  
    <div class="subbg">
        <div class="wrap">
        <div class="title">EVENT</div>
        <div class="baro">뉴스 > <a href="#"> EVENT</a></div>
        </div>
    </div>
    <div class="wrap">
    <div class="tabmenu">
            <a href="#">EVENT</a>
            <a href="#">NEWS</a>
            <a href="#">MEMBERSHIP</a>
        </div>
        


        <div class="eventbox">
            <div class="eventimage"><a href="#"><img src="image/sub2_event/sub2_event2.jpg" alt="서브2이벤트사진1"></a></div>
            <div class="eventtxt">
                <div class="event_title"><a href="#">또바기 코로나 백신 접종 이벤트</a></div>
                <div class="event_subtitle">코로나 백신 접종 증명시 100시간권을 50% 할인해 드립니다.</div>
                <div class="event_date">2022.1.1 ~ 2022.3.1</div>
                <a href="#" class="event_themore">자세히보기 <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="eventbox">
            <div class="eventimage"><a href="#"><img src="image/sub2_event/sub2_event3.jpg" alt="서브2이벤트사진2"></a></div>
            <div class="eventtxt">
                <div class="event_title"><a href="#">또바기 코로나 백신 접종 이벤트</a></div>
                <div class="event_subtitle">코로나 백신 접종 증명시 100시간권을 50% 할인해 드립니다.</div>
                <div class="event_date">2022.1.1 ~ 2022.3.1</div>
                <a href="#" class="event_themore">자세히보기 <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="eventbox">
            <div class="eventimage"><a href="#"><img src="image/sub2_event/sub2_event4.jpg" alt="서브2이벤트사진3"></a></div>
            <div class="eventtxt">
                <div class="event_title"><a href="#">또바기 코로나 백신 접종 이벤트</a></div>
                <div class="event_subtitle">코로나 백신 접종 증명시 100시간권을 50% 할인해 드립니다.</div>
                <div class="event_date">2022.1.1 ~ 2022.3.1</div>
                <a href="#" class="event_themore">자세히보기 <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        
        <div class="eventbox">
            <div class="eventimage"><a href="#"><img src="image/sub2_event/sub2_event1.jpg" alt="서브2이벤트사진4"></a></div>
            <div class="eventtxt">
                <div class="event_title"><a href="#">또바기 코로나 백신 접종 이벤트</a></div>
                <div class="event_subtitle">코로나 백신 접종 증명시 100시간권을 50% 할인해 드립니다.</div>
                <div class="event_date">2022.1.1 ~ 2022.3.1</div>
                <a href="#" class="event_themore">자세히보기 <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

    </div>
    <?php include "include/footer.html" ?>
</body>
</html>
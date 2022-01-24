<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>또바기스터디카페</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <script src="lib/aos/dist/aos.js"></script>
    <link rel="stylesheet" href="lib/aos/dist/aos.css">
    <script src="lib/jquery.min.js"></script>
    <script src="lib/bxslider/dist/jquery.bxslider.min.js"></script>
    <link rel="stylesheet" href="lib/bxslider/dist/jquery.bxslider.css">
   
   <script>
        $(document).ready(function(){
            
            // 헤더

            $('.menu>li>a').mouseenter(function(){
                $('.bg').stop().slideDown()
                $('.submenu').stop().slideDown()
                $(this).addClass('on')
            })

            $('.menu>li>a').focus(function(){
                $('.bg').stop().slideDown()
                $('.submenu').stop().slideDown()
            })

            $('.menu>li').mouseleave(function(){
                $('.menu>li>a').removeClass('on')
            })



            $('header').mouseleave(function(){
                $('.bg').stop().slideUp()
                $('.submenu').stop().slideUp()

            })
         

            $(document).ready(function(){
            AOS.init({duration:1200,ease:'ease-out-sine'})
           })

             $('.bxslider').bxSlider({
                slideWidth: 340,
                maxSlides: 4,
                minSlides: 1,
                moveSlides: 3,
                slideMargin: 10,
   
            });

           

            $(window).resize(function(){

            height = $('#item').height();
            $('.design_flexbox_box').height(height)

            })


            $(window).resize(function(){

            height2 = $('#item2').height();
            $('#foundationbox').height(height2)

            })
            
            $( window ).scroll( function() {
                if ( $( this ).scrollTop() > 200 ) {
                    $( '.shortcut' ).fadeIn();
                } else {
                    $( '.shortcut' ).fadeOut();
                }
            } );

            $( '.shortcut' ).click( function() {
            $( 'html, body' ).animate( { scrollTop : 0 }, 400 );
            return false;
            } );
        
            $(document).mousemove(function(e){ 

                var x = e.pageX + 40, y = e.pageY + 40; 

                $(".cursor").css("left", x+"px"); 
                $(".cursor").css("top", y+"px"); 

            }); 

            w

            })//end ready
        
            // xmenu
            var burger = $('.menu-trigger');
            var movemenu = function(menunum){
            $("#menu"+menunum).toggleClass("active")
            $('.mobilemenu_div').slideToggle()
            }

            window.onlade = function(){
                $('.mobilemenu_div').hide();
            }
    </script>      

    <style>

        .cursor{
            position:absolute; 
            top:0; 
            left: 0; 
            z-index: 9999; 
            width: 50px; 
            height: 50px; 
            transform:translate(-50%, -50%); 
        }

        .visual{
            margin: 0 auto;
            position: relative;
            text-align: center;
            top: -10px;
        }
    
        .up_text{
            z-index: 993;
            color: black;
            position: absolute;
            left: 200px;
            bottom: 400px;
            font-size: 3em;
            font-weight: bold;
        }
    
        .middle_text{
            z-index: 993;
            color: black;
            position: absolute;
            left: 200px;
            bottom: 350px;
            font-size: 3em;
            font-weight: bold;
            
        }
    
        .down_text{
            z-index: 993;
            color: black;
            position: absolute;
            left: 200px;
            bottom: 300px;
            font-size: 3em;
            font-weight: bold;
        }
    
    
        /* 섹션 디자인  */
    
        .design>.wrap>h2{
            padding-top: 0;
            padding-bottom: 20px;
        }
    
    
        .design_flexbox{
            padding-top: 50px;
            display: flex;
            justify-content: space-between;
            height: auto;
            position: relative;
            margin-bottom: 60px;
        }
    
    
    
        .design_flexbox>div{
            width: 340px;   
            margin-right: 50px;
        }
    
        .design_flexbox>div:last-child{
            margin-right: 0;
        }
    
        .hover{
            width: 340px;
            margin-right: 50px;
            background-color: black;
            
            max-height: 310px;
            min-height: 310px;
        }
        .design_flexbox_hover{
            display: flex;
            height: 310px;
            width: 100%;
            position: relative;
            top: -370px;
            
        }
    
        .design_flexbox_hover>div{
            width: 340px;
            background-color: black;
            opacity: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    
    
        .design_flexbox_hover>div:hover{
            opacity: 0.8;
        }
    
        .design_flexbox_hover>div:first-child{
            margin-right: 50px;
        }
    
        .design_flexbox_hover>div:nth-child(2){
            margin-right: 50px;
        }
    
        .design_flexbox_hover>div:nth-child(3){
            margin-right: 50px;
        }
    
        .design_flexbox_hover_txt{
            font-size: 1.4em;
            padding-bottom: 10px;
            color: #fff;
        }
    
        .design_flexbox_hover_subtxt{
            font-size: 1.1em;
            padding-bottom: 10px;
            color: #fff;
            padding-right: 10px;
            padding-left: 10px;
        }
        /* 섹션 카페 */
    
    
        
    
        .cafeimage{
            width: 100%;
            height: 300px;
            text-align: center;
            background-image: url(image/section2-1.jpg);
            background-size: cover;
            background-position-y: 600px;
            margin-top: -200px;
        }
    
        .cafetext{
            position: relative;
            display: flex;
            width: 300px;
            margin-top: -100px;
            color: white;
        }
        
        .cafecontent{
            padding-top: 20px;
            display: flex;
            position: relative;
        }
    
        .cafetext>span,
        .cafetext>h2,
        .cafetext>div{
            position: absolute;
        }
    
        .cafetext>span{
            top: -200px;
        }
        
        .cafetext>h2{
            top: -150px;
        }
    
        .cafetext>div{
            top: -80px;
            width: 100px;
            height: 40px;
            border-radius: 20px;
            text-align: center;
            line-height: 40px;
        }
        .coffeeimage{
            position: absolute;
            top: -250px;
            left: 400px;
            transition: all  1s ease-in ;
    
        }
        .coffeeimage2{
            position: absolute;
            top: -250px;
            left: 300px;
            transition: all  1s ease-in ;
      
        }
    
        .coffeeimage2:hover{
            transform: scale(1.1) rotate(10deg);
        }
    
        .coffeeimage:hover{
            transform: scale(1.1) rotate(-10deg);
        }
        .cafebox{
            margin-top: 20px;
            transition: all  1s ease-in ;
            background-color: transparent;
            border: 1px solid #fff;
        }
    
        .cafebox>a{
            color: #fff;
            font-weight: 500;
        }
    
        .cafebox:hover{
            border: 1px solid #fff;
            color : white;
            background-color: #fff;
        }
    
        .cafebox>a:hover{
            color: #000;
        }
    
    
        /* 섹셔 창업 */
    
        .foundation{
           
            padding-bottom: 200px;
        }   
    
        .container{
    
        position: relative;
        display: flex;
        justify-content: space-between;
     
        }
    
        .container .card{
        position: relative;
        cursor: pointer;
    
        }
    
        .container .card{
        width: 468px;
        height: auto;
        transition: 0.5s;
        margin-right: 50px;
        transition: all 0.3s ease-in;
        }
        .container:last-child .card:last-child{
            margin-right: 0;
        }
    
        .container .card .face.face1{
        position: relative;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1;
        transform: translateY(100px);
        transition: all 0.3s ease-in;
        }
    
        .container .card:hover .face.face1{
        background: #ffffff;    
        transform: translateY(0);
        }
    
        .container .card .face.face1 .content{
        opacity: 0.8;
        transform: scale(0.9);
        transition: all 0.3s ease-in;
        }
    
        .container .card:hover .face.face1 .content{
        opacity: 1;
        transform: scale(1);
        }
    
    
    
        .container .card .face.face1 .content img{
        max-width: 100%;
    
        }
    
        .container .card .face.face1 .content h3{
        margin: 10px 0 0;
        padding: 0;
        color: #000;
        text-align: center;
        font-size: 1.5em;
    
        }
    
        .container .card .face.face2{
        position: relative;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        box-sizing: border-box;
        box-shadow: 0 10px 50px rgba(0, 0, 0, 0.1);
        transform: translateY(-100px);
        }
    
        .container .card:hover .face.face2{
        transform: translateY(0);
        }
    
        .container .card .face.face2 .content p{
        margin: 0;
        padding: 0;
        }
    
        .container .card .face.face2 .content a{
        margin: 15px 0 0;
        display:  inline-block;
        text-decoration: none;
        font-weight: 900;
        color: #333;
        padding: 5px;
        border: 1px solid #333;
        }
    
        .container .card .face.face2 .content a:hover{
        background: #333;
        color: #fff;
        }
    
        /* 섹션 워리 */
        
        .worry{
            margin-top: -70px;
        }

        .worrybg{
            background-image: url(image/section4.jpg);
            width: 100%;
            height: 200px;
            
            background-size: cover;
        }
    
        .worry_content{
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    
        .worry_content>h2{
            text-align: center;
            padding-bottom: 20px;
            padding-top: 20px;
            padding-bottom: 20px;
        }    
    
        .worry_flexbox{
            position: relative;
            top: 100px;
            justify-content: space-between;
            align-items: center;
            display: flex;
            flex-wrap: wrap;
            width: 100%;
        }
    
        .worry_flexbox>div{
            width: 40%;
            height: 245px;
            border: 1px solid rgb(0, 0, 0);
            box-shadow: 10px 10px 10px rgb(17, 16, 16,0.3);
            position: relative;
            padding: 0 15px;
            transition: all 0.3s ease-in;
        }
    
        .worry_flexbox>div:first-child{
            position: absolute;
            top: -50px;
            left: 100px;
        
        }
    
        .worry_flexbox>div:last-child{
            position: absolute;
            top: -50px;
            right: 100px;
            z-index: 999 !important;
        }
    
        .worry_flexbox_txt{
            font-size: 24px;
            padding-top: 50px;
            padding-bottom: 10px;
        }
    
        .worry_flexbox_viewmore{
            position: absolute;
            bottom: 20px;
            right: 30px;
            transition: all 0.3s ease-in;
    
        }
    
        .worry_flexbox_viewmore:hover{
            transform: scale(1.1);
        } 
    
    
    
        /* 섹션 위치 */
        .location{
            margin-top: 400px;
        }
    
        .location_flexbox{
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-top: 20px;
        }
    
        .bxslider>li{
            float: right;
            margin-left: 20px;
        }
    
        .location_flexbox_txtbox{
            width: 25%;
            position: relative;
        }
    
        .location_flexbox_txtbox_nextprev{
            bottom: 100px;
            left: 10px;
            position: absolute;
        }
        
        .location_flex_location{
            width: 75%;
            height: 450px;
      
        }
    
        .location_flexbox_locationbox{
            max-width: 327px;
            width: 100%;
            height: 340px;
            border: 3px solid #b7d8b6;
            transition: all 0.3s ease-in-out;
        }
    
        .location_flexbox_locationbox:hover{
            border: 3px solid #718871;
            transform:translateY(5px)
        }
    
    
    
        .location_flex_location>div{
            margin-right: 1%;
        }
    
        .location_flexbox_locationbox_txt{
            color: #117f0e;
            padding-top: 30px;
            padding-left: 10px;
        }
    
        .location_flexbox_locationbox_subtxt{
            padding-left: 10px;
        }
    
        /* 섹션 파트너 */
    
        .partner_txt{
        
            text-align: center;
        }
    
        .partner_flexbox{
            width: 100%;
            padding-top: 25px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
    
        .partner_flexbox_icon{ 
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;    
        }
    
    
        .flexbox_icon>i{
            font-size:3em;
            opacity: 1;
        }
    
        .partner_flexbox_icon_txtbox{
            padding-left: 20px;
           
        }
    
        .partnerimage{
            background-image: url(image/partner.jpg);
            background-size: cover;
            height: 200px;
            width: 100%;
            margin-top: 100px;
    
        }
    
        .shortcut{
            width: 70px;
            height: 70px;
            border-radius: 50%;
            border: 3px solid #000;
            text-align: center;
            line-height: 60px;
            position:fixed;
            right: 3%;
            bottom: 3%;
            background-color: white;
            display: none;
            color: black;
            cursor: pointer;
            z-index: 9999999;
        }

        .inquiry_box{
            max-width: 250px;
            width: 100%;
            height: 50px;
            border: 1px solid rgb(255, 243, 243);
            border-radius: 25px;
            line-height: 50px;
            font-size: 1.5em;
            font-weight: bold;
            color: rgb(255, 255, 255);
            background-color: rgba(3, 3, 3, 0.3);
            text-align: center;
            position: relative;
            top: 75px;
            cursor: pointer;
            transition: all 0.3s ease-in;
        }

        .inquiry_box:hover{
            border: 2px solid rgb(12, 17, 1);
            background-color: rgb(238, 235, 235,0.7);
            color: #000;
            transform: translateY(-5px);
        }

    
        @media screen and (max-width:1200px) and (min-width:760px) {
            
        
            .wrap{
                    max-width: 1200px;
                    min-width: 760px;
                    padding: 0 20px;
                }
        
          
        
                .up_text{
                    font-size: 1.5em;
                    top: 50%;
                    left: 10%;
                }
        
                .middle_text{
                    font-size: 1.5em;
                    top: 60%;
                    left: 10%;
                }
        
                .down_text{
                    font-size: 1.5em;
                    top: 70%;
                    left: 10%;
                }
        
                .design_flexbox{
                    flex-wrap: wrap;
                    justify-content: center;
                    align-items: center;
                }
        
                .design_flexbox>div{
                  
                    margin: 10px 10px;
                    padding-top: 10px;
                }
        
        
                .design_flexbox_hover{
                    display: none;
                }
        
                .cafe{
                    padding-top: 200px;
                }
        
                .cafetext>span{
                    top: -200px;
                    left: 40px;
                }
            
                .cafetext>h2{
                    top: -150px;
                    left: 40px;
                }
        
                .cafetext>div{
                    top: -80px;
                    width: 100px;
                    height: 40px;
                    border-radius: 20px;
                    text-align: center;
                    line-height: 40px;
                    left: 40px;
                }
        
        
                .container{
                    flex-wrap: wrap;
                    align-items: center;
                    justify-content: center;
                }
        
                .container>div{
                    width: 80%;
                    margin: 60px;
                    padding: 0;
                }
        
                .container>div:last-child{
                    margin: 60px 0;
                }
        
                .worry_flexbox{
                    flex-wrap: nowrap;
                    
                }
        
                .worry_flexbox>div{
                    width:35%;
                    height: 220px;
                   
                }
            
        
                .location_flexbox{
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    width: 100%;
                    position: relative;
                    margin-top: -100px;
                }
        
        
                .location_flexbox_txtbox{
                    text-align: center;
                   
                }
                .location_flex_location{
                    width: 100%;
                    position: absolute;
                    padding-top: 300px;
                }
            
    
                .partner{
                    margin-top: 450px;
    
                }
    
                .partner_txt{
                    padding-top: 0;
                }
        
                .footer_flexbox{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 100%;
                } 
                
                .footer_logo{
                    width: 20%;
                }
                
                
                .footer_logo{
                    width: 10%;
                }    
                .footer_txt{
                    width: 70%;
                    display: flex;
                    flex-direction: column;
                }
    
    
                .footer_txt>div{
                    width: 100%;
                    height: 100%;
                   
                }
    
                .location_flexbox_locationbox{
                    
                    height: 290px;
                    border: 2px solid #b7d8b6;
                    transition: all 0.3s ease-in-out;
                }
            }
    
        @media screen and (max-width:760px) and (min-width:360px){


    
            .wrap{
                max-width: 760px;
                min-width: 360px;
                padding: 0 20px;    
                overflow: hidden;
            }
    
            .container .card{
                margin-right: 0;
            }
         
            .cafeimage{
                margin-top: 50px;
            }
    
    
    
            .up_text{
                    font-size: 1em;
                    top: 50%;
                    left: 10%;
                }
        
                .middle_text{
                    font-size: 1em;
                    top: 60%;
                    left: 10%;
                }
        
                .down_text{
                    font-size: 1em;
                    top: 70%;
                    left: 10%;
                }
    
                .design_flexbox{
                    flex-wrap: wrap;
                    justify-content: center;
                    align-items: center;
                }
        
                .design_flexbox>div{
                    justify-content: center;
                    display: flex;
                    width: 100%;
                    margin: 10px 0;
                    padding-top: 10px;
                }
    
    
    
                .design_flexbox_hover{
                    display: none;
                }
        
   
    

                .container{
                    width: 100%;
                    flex-wrap: wrap;
                    align-items: center;
                    justify-content: center;

                }



                

                .location_flexbox{
                    
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    width: 100%;
                    position: relative;
                    
                }
        
    
                .location_flexbox_txtbox{
                    text-align: center;
                    margin-top: -50px;
                    width: 200px;
                   
                }

    
                .location_flexbox_locationbox{
                    height: 280px;
                    width: 90%;
                }
    


    
                .worry_flexbox{
                    height: 500px;
                }
                .worry_flexbox>div{
                   width: 100%;
                   height: 200px;
                   text-align: center;
                }
                
                .worry_flexbox>div:last-child{
                    position: absolute;
                    top: 200px;
                    right: 0;
                }

                .worry_flexbox>div:first-child{
                    left: 0;
                }

                .worry_flexbox_txt{
                    padding-top: 10px;
                }
    
                .partnerimage{
                    margin-top: 30px;
                    height: 100px;
                }

                .location{
                    margin-top: 100px;
                }  

                .inquiry{

                   padding-top: 20px;
                    
                }

                .inquiry_box{
                    width: 150px;
                    top: 5px;
                    left: 0;
                    font-size: 1em;
                    padding-bottom: 5px;
                }

                .cafecontent{
                    position: absolute;
                }

                .worry_content>h2{
                    font-size: 1.1em;
                }
        }           
    </style>
    <link rel="stylesheet" href="css/footer.css">


<body>
<?php include "include/header.html" ?>

    <!-- 비쥬얼 -->
    <div class="visual">
        <video src="media/Skyscrapers-80724.mp4" autoplay muted loop></video>
        <!-- 영상 -->

        <!-- 텍스트 애니메이션 -->
  
        <div class="up_text item" data-aos="slide-up">
            <span class="item" data-aos="fade-up" data-aos-delay="100">또</span>
            <span class="item" data-aos="fade-up" data-aos-delay="200">바</span>
            <span class="item" data-aos="fade-up" data-aos-delay="300">기</span>
            <span class="item" data-aos="fade-up" data-aos-delay="400">스</span>
            <span class="item" data-aos="fade-up" data-aos-delay="500">터</span>
            <span class="item" data-aos="fade-up" data-aos-delay="600">디</span>
            <span class="item" data-aos="fade-up" data-aos-delay="700">카</span>
            <span class="item" data-aos="fade-up" data-aos-delay="800">페</span>
            <span class="item" data-aos="fade-up" data-aos-delay="900">는</span>
            </div>
        <div class="middle_text item" data-aos="slide-up" data-aos-delay="1000">
            <span class="item" data-aos="fade-up" data-aos-delay="1000">공</span>
            <span class="item" data-aos="fade-up" data-aos-delay="1100">부</span>
            <span class="item" data-aos="fade-up" data-aos-delay="1200">하</span>
            <span class="item" data-aos="fade-up" data-aos-delay="1300">고</span>
            <span class="item" data-aos="fade-up" data-aos-delay="1400">싶</span>
            <span class="item" data-aos="fade-up" data-aos-delay="1500">은</span>
            </div>
        <div class="down_text item" data-aos="slide-up" data-aos-delay="1600"> 
            <span class="item" data-aos="fade-up" data-aos-delay="2000">환</span>
            <span class="item" data-aos="fade-up" data-aos-delay="2100">경</span>
            <span class="item" data-aos="fade-up" data-aos-delay="2200">을</span>
            <span class="item" data-aos="fade-up" data-aos-delay="2300">만</span>
            <span class="item" data-aos="fade-up" data-aos-delay="2400">듭</span>
            <span class="item" data-aos="fade-up" data-aos-delay="2500">니</span>
            <span class="item" data-aos="fade-up" data-aos-delay="2600">다.</span>
            </div>  
    </div>

    <section class="design">
        <div class="wrap">
            <h2>공부의 비결은 편함이다</h2>
            <div>장시간 학습에도 피로를 최소화하여 공부하기 편한 공간을 설계합니다.</div>
            <div class="design_flexbox item" data-aos="slide-right" data-aos-delay="300" >
                <div class="item"><img id="item" src="image/section1-1.jpg" alt="공기청정기이미지"></div>
                <div class="item"><img src="image/section1-2.jpg" alt="의자이미지"></div>
                <div class="item"><img src="image/section1-3.jpg" alt="OLED조명 이지"></div>
                <div class="item"><img src="image/section1-4.jpg" alt="높낮이 책상 이미지"></div>
            </div>
            <div class="design_flexbox_hover item" data-aos="slide-right" data-aos-delay="300">
                <div class="design_flexbox_box">
                    <div class="design_flexbox_hover_txt">공기청정 시스템</div>
                    <div class="design_flexbox_hover_subtxt">깨끗한공기로편한 호흡을 한다</div>
                </div>
                <div class="design_flexbox_box">
                    <div class="design_flexbox_hover_txt">의자</div>
                    <div class="design_flexbox_hover_subtxt">좋은 의자로 편안한 자세를 만든다.</div>
                </div> 
                <div class="design_flexbox_box">
                    <div class="design_flexbox_hover_txt">OLED 조명</div>
                    <div class="design_flexbox_hover_subtxt">오랜 공부 시간에도 피로함을 적게 만든다    </div>
                </div> 
                <div class="design_flexbox_box">
                    <div class="design_flexbox_hover_txt">높낮이 책상</div>
                    <div class="design_flexbox_hover_subtxt">자기에게 맞는 높이의 책상을 설정 가능하게 한다</div>
                </div>
            </div>  <!-- .design_flexbox_hover end --> 
        </div> <!-- .wrpa end -->   
    </section>



    <section class="cafe" >
        <div class="cafeimage item" data-aos="slide-left" data-aos-delay="300"></div>
        <div class="wrap">
            <div class="cafecontent item" data-aos="slide-left" data-aos-delay="300">
            <div class="cafetext item" data-aos="slide-left" data-aos-delay="300">
                <span>STUDY ROOM</span>
                <H2>다양한 메뉴와 함께 공부 할 수 있는 카페</H2>
                <div class="cafebox"><a href="#"><span>바로가기<i class="fas fa-long-arrow-alt-right"></i></span></a></div>
            </div> <!-- .cafetext end -->
            <div class="coffeeimage item" data-aos="slide-up" data-aos-delay="300"><img src="image/coffee1.png" alt="커미이미지1"></div>
            <div class="coffeeimage2 item" data-aos="slide-up" data-aos-delay="300"><img src="image/coffee2.png" alt="커미이미지2"></div>
        </div><!-- .cafecontent end -->
        </div> <!-- .wrap end -->
    </section>



    <section class="foundation">
        <div class="wrap">
            <div class="container">
                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <img id="item2" src="image/section3-1.jpg" alt="프리미엄 디자인 이미지">
                            <h3>프리미엄 디자인</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>프리미엄 디자인으로 고급스러움을 창출합니다</p>
                                <a href="#">더보기</a>
                        </div>
                    </div>
                </div>
        
                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <img src="image/section3-2.jpg" alt="상권파악 및 분석 이미지">
                            <h3>상권파악 및 분석</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>상권을 조사하고 분석하여 알맞은 곳을 찾습니다.</p>
                                <a href="#">더보기</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <img src="image/section3-3.jpg" alt="SNS 마케팅 이미지">
                            <h3>SNS 마케팅</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>다양한 SNS 마케팅을 통해 홍보를 도와드립니다.</p>
                                <a href="#">더보기</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .wrap end -->
    </section>



    <section class="worry">
        <div class="worry_content">
        <span>STUDY CAFE Challenge, ABOUT US</span>
        <h2>또바기 스터디카페는 혁신적인 시스템으로<br>
            남다른 스터디카페 문화를 선도합니다</h2>
        <div class="worrybg">
        </div>      <!-- worry_content end -->
        <div class="wrap">
            <div class="worry_flexbox">
                <div data-aos="slide-right" data-aos-delay="300">
                    <div class="worry_flexbox_txt">공간에 대한 고민</div>
                    <div class="worry_flexbox_subtxt">우리는 더 완벽한 공간을 만들고 싶습니다
                        더 오래 더 많은 사랑을 받는 공간으로 만들기 위해 
                        우리만의 경쟁력을 키웠씁니다.</div>
                    <div class="worry_flexbox_viewmore"><a href="#">더 보기 <i class="fas fa-plus" id="view"></i></a></div>
                </div>
                <div data-aos="slide-left" data-aos-delay="300">
                    <div class="worry_flexbox_txt">상생에 대한 고민</div>
                    <div class="worry_flexbox_subtxt">또바기 스터디카페는 점주님과 결합하여 상생하는 
                        시스템을 만들어 나가겠습니다.
                    </div>
                    <div class="worry_flexbox_viewmore"><a href="#">더 보기 <i class="fas fa-plus" id="view2"></i></a> </div>
                </div>
            </div> <!-- .worry_flexbox end -->
        </div>  <!-- .wrap end -->
        </div>
    </section>



    <section class="location item" data-aos="slide-up">
        <div class="wrap">
            <div class="location_flexbox">
                <div class="location_flexbox_txtbox">
                    <h2>CENTER GUIDANCE</h2>
                    <div class="location_flexbox_subtxt">가까운 또바기 스터디카페를 확인하세여</div>
                    <div class="location_flexbox_txtbox_nextprev">
                    </div>

                    <!-- location_flexbox_txtbox_nextprev end -->
                </div>   <!-- .location_flexbox_txtbox end -->
                <div class="location_flex_location">
                <ul class="bxslider">
                <li>
                <div class="location_flexbox_locationbox">
                    <img src="image/section5-6.jpg" alt="노원센터 이미지">
                    <div class="location_flexbox_locationbox_txt">또바기 노원센터</div>
                    <div class="location_flexbox_locationbox_subtxt">상계7동 파출소 앞</div>
                </div>
                </li>
                <li>
                <div class="location_flexbox_locationbox">
                    <img src="image/section5-5.jpg" alt="노원센터 이미지">
                    <div class="location_flexbox_locationbox_txt">또바기 중계센터</div>
                    <div class="location_flexbox_locationbox_subtxt">중계7동 소방서 앞</div>
                </div>
                </li>
                <li>
                <div class="location_flexbox_locationbox">
                    <img src="image/section5-4.jpg" alt="노원센터 이미지">
                    <div class="location_flexbox_locationbox_txt">또바기 상계센터</div>
                    <div class="location_flexbox_locationbox_subtxt">상계7동 우체국 앞</div>
                </div>
                </li>
                <li>
                <div class="location_flexbox_locationbox">
                    <img src="image/section5-3.jpg" alt="노원센터 이미지">
                    <div class="location_flexbox_locationbox_txt">또바기 하계센터</div>
                    <div class="location_flexbox_locationbox_subtxt">하계7동 우체국 앞</div>
                </div>
                </li>
                <li>
                <div class="location_flexbox_locationbox">
                    <img src="image/section5-2.jpg" alt="노원센터 이미지">
                    <div class="location_flexbox_locationbox_txt">또바기 창동센터</div>
                    <div class="location_flexbox_locationbox_subtxt">창동7동 이마트 앞</div>
                </div>
                </li>
                <li>
                <div class="location_flexbox_locationbox">
                    <img src="image/section5-1.jpg" alt="노원센터 이미지">
                    <div class="location_flexbox_locationbox_txt">또바기 노원구청센터</div>
                    <div class="location_flexbox_locationbox_subtxt">상계1동 노원구청 앞</div>
                </div>
                </li>
                </ul>
                </div><!-- location_flex_location end -->
            </div>    <!-- location_flexbox end -->
        </div>        <!-- .wrap end -->
    </section>



    <section class="partner item" data-aos="slide-up">
        <div class="wrap">
            <div class="partner_txt">
            <span>WITH DDOBAGI</span>
            <H2>또바기와 함께 할 파트너를 모집합니다.</H2>
            </div> <!-- .partiner_txt end -->
            <div class="partner_flexbox">
                    <div class="partner_flexbox_icon">
                        <div class="flexbox_icon"><i class="fas fa-user-friends"></i></div>    
                        <div class="partner_flexbox_icon_txtbox">
                        <div class="partner_flexbox_icon_txt">가맹점</div>
                        <div class="partner_flexbox_icon_subtxt">개인투자 창업,일반적인가맹운영</div>
                    </div><!-- partner_flexbox_icon_txtbox -->
                    </div> <!-- partner_flexbox_icon -->
                    <div class="partner_flexbox_icon">
                        <div class="flexbox_icon"><i class="fas fa-american-sign-language-interpreting"></i></div>
                        <div class="partner_flexbox_icon_txtbox">
                        <div class="partner_flexbox_icon_txt">직영점</div>
                        <div class="partner_flexbox_icon_subtxt">본사에서 직접 운영하는 건물소유주와 본사의 파트너쉽 투자방식</div>
                    </div><!-- partner_flexbox_icon_txtbox -->
                    </div> <!-- partner_flexbox_icon -->    
            </div>   <!-- .partner_flexbox end -->
        </div> <!-- .wrap end -->

    </section>
    <div class="partnerimage">
        <div class="wrap">
            <div class="inquiry">
            <div class="inquiry_box">
                창업 문의 바로가기
            </div>
        </div>
        </div>
    </div>

    <?php include "include/footer.html" ?>

    <div class="shortcut">
       <i class="fas fa-arrow-up"></i>
    </div>

    <div class="cursor">
        <img src="image/footerlogo.png" alt="커서이미지">
    </div>

</body>
</html>

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

    })//end ready

    // xmenu
    var burger = $('.menu-trigger');
    var movemenu = function(menunum){
    $("#menu"+menunum).toggleClass("active")
    $('.mobilemenu_div').slideToggle()
    }


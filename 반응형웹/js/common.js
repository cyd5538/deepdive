$(document).ready(function () {
    $('.menu>li>a').mouseenter(function(){
        $('.bg').stop().slideDown()
        $('.submenu').stop().slideDown()
    })

    $('.menu>li>a').focus(function(){
        $('.bg').stop().slideDown()
        $('.submenu').stop().slideDown()
    })

    $('header').mouseleave(function(){
        $('.bg').stop().slideUp()
        $('.submenu').stop().slideUp()
    
    })
 
    $('.menu>li>a').click(function(){
        $('.menubox').stop().show()

    })
  
    $(document).ready(function(){
    AOS.init({duration:1200,ease:'ease-out-sine'})
})

     $('.bxslider').bxSlider({
        slideWidth: 340,
        maxSlides: 4,
        minSlides: 2,
        moveSlides: 2,
        slideMargin: 10,
        pagerType: 'dot',
    });
})//end ready
$(document).ready(function(){

    const about_check = $('.about-me').offset().top;
    if($(document).scrollTop() > about_check - about_check * 0.5){
        $('.left').addClass('fadeInLeftBig');
        $('.left').removeClass('left');
        $('.right').addClass('fadeInRightBig');
        $('.right').removeClass('right');
    }; 

    // Menu----------------------------------

    $('#nav_button').on('click', function(){
        $('#nav_button').css({'display': 'none'});
        $('#menu_close').css({'display': 'block'});
        $('#mobile_nav').slideDown(400);
    });

    $('#menu_close').on('click', function(){
        $('#nav_button').css({'display': 'flex'});
        $('#menu_close').css({'display': 'none'});
        $('#mobile_nav').slideUp(300);
    });

    // ------------------------------------

    // Fix Menu---------------------------

    $(document).scroll(function(){
        let fixed = false;
        if($(document).scrollTop() > 63 && !fixed){
            $('header .mobile_menu').addClass('menu_fixed');
            $('header .mobile_nav').addClass('mobile_nav_fixed');
            fixed = true;
        }
    })
        
    // -----------------------------------

    // ScrollMenu--------------------------

    const home = $('.thumb').offset().top;
    const about = $('.about-me').offset().top - 200;
    const jobs = $('.works').offset().top;
    const contact = $('.contacto').offset().top;


    $('.home').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
			scrollTop: home
		}, 500);
    })

    $('.abt-me').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
			scrollTop: about
		}, 500);
    })

    $('.jobs').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
			scrollTop: jobs
		}, 500);
    })

    $('.contact').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
			scrollTop: contact
        }, 500);
        $('#nombre').focus();
    })

    // ------------------------------------

    // AboutMe------------------------------

    $(document).scroll(function(){
        const about = $('.about-me').offset().top;
        if($(document).scrollTop() > about - about * 0.5){
            $('.left').addClass('fadeInLeftBig');
            $('.left').removeClass('left');
            $('.right').addClass('fadeInRightBig');
            $('.right').removeClass('right');
        }; 
    })

    $('.btn .know-more').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
			scrollTop: contact
        }, 500);
        $('#nombre').focus();
    })

    // ------------------------------------

    //Button to top----------------------------

    $(document).scroll(function(){
        const about = $('.about-me').offset().top;
        let isVisible = false;

        if($(document).scrollTop() > about - about * 0.5 && !isVisible){
            $('.button-to-top').css({
                'display': 'flex'
            });
            isVisible = !isVisible;
        }else{
            $('.button-to-top').css({
                'display': 'none'
            });
            isVisible = !isVisible;
        }; 
    })

    $('.button-to-top i').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
			scrollTop: home
		}, 500);
    })

    //Message times button--------------

    $('#close_message').on('click', function(){

        $('.message').slideUp(300);

    })


});
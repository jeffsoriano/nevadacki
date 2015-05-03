$( document ).ready(function() {

    $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(250)
        }
    );
    
    /*
    jQuery(function($) {
        $('ul.nav li.dropdown').hover(function() {
        $(this).find('ul.dropdown-menu').first().stop(true, true).slideDown(250);
        
        }, function() {
        $(this).find('ul.dropdown-menu').first().stop(true, true).slideUp(250);
        
        });
        
        $('.navbar .dropdown > a').click(function(){
        $(this).removeClass('open');
        });
    
    });
    */
    /*
    $('ul.nav li.dropdown').hover(
        function() {
            $(this).find('ul.dropdown-menu').slideDown(250); 
            $(this).addClass('open');
        },
        function() {
            $(this).find('ul.dropdown-menu').slideUp(250);
            $(this).removeClass('open');
        }
    );
    */
    
    // Reveal menu on hover
    /*
    $('.nav li.dropdown').hover(function() {
        $(this).addClass('open');
    }, function() {
        $(this).removeClass('open');
    });
    */
    
    /*
    $('.dropdown').on('mouseenter mouseleave', function() {
        if ($(window).width() > 1024) {
            $(this).find('.dropdown-menu').slideToggle(200);
        } else {
            $(this).find('.dropdown-menu').slideToggle(0);
        }
    });
    */
    /*
     *
    $('ul.nav li.dropdown').hover(
        function(){
            if ($(window).width() > 1024) {
                $(this).find('ul.dropdown-menu').slideDown(250); //.fadeIn(250)
            }
            else {
            }
        },
        function(){
            if ($(window).width() > 1024) {
                $(this).find('ul.dropdown-menu').slideUp(250); //.fadeOut(205)
            }
            else {
            }
        }
    );*/

    
    /*
    // Media event handler
    if (matchMedia)
    {
        var mq = window.matchMedia( "(min-width: 1024px)" );
        mq.addListener(WidthChange);
        WidthChange(mq);
    }
    
    // Media query change
    function WidthChange(mq) {
        if (mq.matches)
        {
            $('ul.nav li.dropdown').hover(
                function(){
                    $(this).find('ul.dropdown-menu').slideDown(250); //.fadeIn(250)
                },
                function(){
                    $(this).find('ul.dropdown-menu').slideUp(250); //.fadeOut(205)
                }
            );
        }
        else
        {
        }
    }*/
    
});
/*
$(window).resize(function(){
    
    if (matchMedia)
    {
        var mq = window.matchMedia( "(min-width: 1024px)" );
        mq.addListener(WidthChange);
        WidthChange(mq);asdf
    }
    
    // Media query change
    function WidthChange(mq) {
        if (mq.matches)
        {
            $('ul.nav li.dropdown').hover(
                function(){
                    $(this).find('ul.dropdown-menu').slideDown(250); //.fadeIn(250)
                },
                function(){
                    $(this).find('ul.dropdown-menu').slideUp(250); //.fadeOut(205)
                }
            );
        }
        else
        {
        }
    }
});*/
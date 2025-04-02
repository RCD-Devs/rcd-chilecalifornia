$(document).ready(function(){
    const windowWidth = $(window).width();
    if(windowWidth < 980){
        $('#btn-toggle-menu').click(function(){
            $(this).toggleClass('active');
            const menu = $('.menu-container');
            menu.toggleClass('expanded');
        });
        $('.btn-toggle-submenu, .change-lang').click(function(){
            $(this).toggleClass('active');
            const submenu = $(this).parent().find('.submenu');
            if(submenu.hasClass('expanded')){
                submenu.removeClass('expanded');
            }else{
                $('.submenu').removeClass('expanded');
                submenu.addClass('expanded');
            }
        });
    }else{
        $('.has-submenu').on("mouseenter", function () {
            $(this).find('.submenu-container').addClass('expanded');
            $(this).find('.btn-toggle-submenu').addClass('active');
        });
        $('.has-submenu').on("mouseleave", function () {
            $(this).find('.submenu-container').removeClass('expanded');
            $(this).find('.btn-toggle-submenu').removeClass('active');
        });
    }
    $('.lang').click(function(){
        const a = $(this).find('a');
        const langText = a.text();
        $('.change-lang span').text(langText);
        $('.lang').removeClass('active');
        $(this).addClass('active');
        $(this).parent().removeClass('expanded');
    });
});
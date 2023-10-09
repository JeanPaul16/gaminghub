const responsiveInit = () => {
    if (window.matchMedia("(max-width: 768px)").matches) {
        $('#LOGOFALLBACK_').attr('src', './sfx/images/logo/logo_nt_fallback.png');
        
        $('.burger').click(() => {
            $('.on').toggleClass('turn_off');
            $('.off').toggleClass('turn_off');
            $('.nav_bar').toggleClass('opened');            
            if ($('.nav_bar').hasClass('opened')) {
                $('.nav_list').fadeIn(200).css({'display': 'flex'});
                $('.parent_link').insertBefore('.info_content');
            } else {
                $('.nav_list').css({'display': 'none'});
                $('.parent_link').insertAfter('.nav_list_collection');
            }
            $('.nav_bar').hasClass('opened') ?
                $('body').css({'overflow': 'hidden'}) :
                $('body').css({'overflow': 'scroll'});
        });
    }
}

const loadMenuInteractions = () => {
    let accordionBtnCollection = [];
    $('.menu_button#open_variants').each(function (e) {
        accordionBtnCollection.push($(this));
    });

    accordionBtnCollection.forEach((element) => {
        $(element).click(() => {
            $(element).toggleClass('active');
            let panel = $(element).closest('.main_menu_item').next();

            $(panel).hasClass('turn_off') ? $(panel).toggleClass('turn_off') : $(panel).toggleClass('turn_off');
        });
    })
}

$(document).ready(() => {
    responsiveInit();
    loadMenuInteractions();
});
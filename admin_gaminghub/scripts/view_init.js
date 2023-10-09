const current_file = document.location.pathname.match(/[^\/]+$/)[0];

const onPageInit = () => {
    switch (current_file) {
        case 'service.php':
            $('#_service').toggleClass('selected');
            $('.loader_body h3').text('Atención');
            break;
        case 'management.php':
            $('#_management').toggleClass('selected');
            $('.loader_body h3').text('Control');
            break;
        case 'kitchen.php':
            $('#_kitchen').toggleClass('selected');
            $('.loader_body h3').text('Cocina');
            break;
    }

    setTimeout(() => {
        $('body').attr('style', '');
        $('.loader').fadeOut();
    }, 2000);
}

const responsiveInit = () => {
    if (window.matchMedia("(max-width: 768px)").matches) {
        $('.nav_list').each(function (e) {
            $('.nav_list_collection').append($(this));
        });

        $('.nav_logo').insertBefore('.nav_list_collection');
        $('.nav_logo').append(`<h2 class="current_file"></h2>`);

        switch (current_file) {
            case 'service.php':
                $('.current_file').text('Atención');
                break;
            case 'management.php':
                $('.current_file').text('Control');
                break;
            case 'kitchen.php':
                $('.current_file').text('Cocina');
                break;
        }
    
        $('.burger').click(() => {
            $('.on').toggleClass('turn_off');
            $('.off').toggleClass('turn_off');
            $('.nav_bar').toggleClass('opened').hasClass('opened') ? 
                $('.nav_list').fadeIn(200).css({'display': 'flex'}) :
                $('.nav_list').css({'display': 'none'});
            $('.nav_bar').hasClass('opened') ?
                $('body').css({'overflow': 'hidden'}) :
                $('body').css({'overflow': 'scroll'});
        }); 
    }
}

const dateInit = () => {
    // timeHandle
    let date = new Date();
    let date_options = {weekday: 'long', year: 'numeric', month: 'short', day: '2-digit'};
    date.toLocaleDateString('es-NI', date_options);

    let current_time = loadCurrentTime(date);

    $('.time_handler').text(`${date.toLocaleDateString('es-ES', date_options)} - ${current_time}`);
};

$(document).ready(() => {
    $(this).scrollTop(0);
    onPageInit();
    dateInit();
    responsiveInit();
    tableResponsiveInit();
});
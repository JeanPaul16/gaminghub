// Smooth scroll to section
const scrollToSection = () => {
    $('a[href*="#"]').on('click', (event) => {
        const hash = event.currentTarget.hash;
        if (hash) {
            event.preventDefault();
            if (!window.matchMedia('(max-width: 767px)').matches) {
                $('html, body').animate({scrollTop: $(hash).offset().top - 128}, 500);
            } else {
                $('html, body').animate({scrollTop: $(hash).offset().top - 128}, 500);

                //Mobiel Handler (close menu upon interaction)
                if ($('.nav_bar').hasClass('opened')) {
                    $('.nav_bar').toggleClass('opened');
                    $('.nav_list').css({'display': 'none'});
                    $('body').css({'overflow': 'scroll'});
                    $('.on').toggleClass('turn_off');
                    $('.off').toggleClass('turn_off');
                } 
            }
        }
    });
}

// Initialize Waypoints
const detectOpen = () => {
    let waypointInit = (target) => {
        $(target).waypoint(function(direction) {
            if (direction === 'down') {
                $(this.element).animate({opacity: 1});
            }
        }, {
            offset: '50%'
        });
    }

    waypointInit('#gallery');
    waypointInit('#pricing');
    waypointInit('#games');
    waypointInit('#availability');
}

// Initialize Scramble Animation
const scrambleInit = () => {
    const TEXTS = [
        'Gaming Hub',
        'En',
        'Nicaragua'
    ];

    const scrambler = new window.Scrambler();
    const handleScramble = (text) => {
        $('#scramble_').text(text);
    }

    let i = 0;
    function printText() {
        const targetText = TEXTS[i % TEXTS.length];
        if (i++ % 3 == 2) {
            scrambler.scramble(targetText, handleScramble, {
                characters: Scrambler.CHARACTERS.ALPHABET,
            });
        } else {
            scrambler.scramble(targetText, handleScramble);
        }
        if (i % 3 == 2) {
            setTimeout(printText, 2500);
        } else {
            setTimeout(printText, 5000);
        }
    }
    printText();
}

// Initialize Image Randomness on Gallery
const changeImageInit = () => {
    let imageElements = [];
    let imageCollection = {'first': 1, 'second': 2, 'third': 3, 'fourth': 10};
    let currentImageIndex = 1;

    $('.stock_collection').find('img').each(function (e) {
        imageElements.push($(this));
    });

    let loopCollection = () => {
        let nextImageIndex = RANDOM_(1, 4);
        let nextStockImage = RANDOM_(1, 10);

        if (nextImageIndex == currentImageIndex) {
            for (let i = 0; i < 100; i++) {
                nextImageIndex = RANDOM_(1, 4);
                if (nextImageIndex != currentImageIndex) break;
            }
        }
        
        currentImageIndex = nextImageIndex;

        if (getKeyFromValue(imageCollection, nextStockImage) != undefined) {
            for (let i = 0; i < 100; i++) {
                nextStockImage = RANDOM_(1, 10);
                if (getKeyFromValue(imageCollection, nextStockImage) == undefined) break;
            }
        }

        imageCollection[Object.keys(imageCollection)[nextImageIndex - 1]] = nextStockImage;

        $(imageElements[nextImageIndex - 1]).attr('src', './sfx/images/stock/stock_' + nextStockImage + '.jpg');
        setTimeout(loopCollection, 2000);
    }
    loopCollection();
};

// Initialize Viewer Handler
const galleryInit = () => {
    $('#image_collection').viewer({
        inline: false,
        navbar: false,
        title: false,
        toolbar: false,
        movable: false,
        tooltip: false,
        rotatable: false,
        loop: false,
    });

    changeImageInit();
};

// Initialize Responsive View
const responsiveInit = () => {
    if (window.matchMedia("(max-width: 768px)").matches) {
        $('#LOGOFALLBACK_').attr('src', './sfx/images/logo/logo_nt_fallback.png');
        $('.nav_list').each(function (e) {
            $('.nav_list_collection').append($(this));
        });

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

        const removeColumnFromTable = (columnName) => {
            var target = $('table').find('th[data-name="' + columnName + '"]');
            var index = (target).index();
            $('table tr').find('th:eq(' + index + '),td:eq(' + index + ')').remove(); 
        }        

        removeColumnFromTable('xbox');
        removeColumnFromTable('retro');
    }
}

$(document).ready(() => {
    scrollToSection();
    detectOpen();
    scrambleInit();
    galleryInit();
    responsiveInit();
});

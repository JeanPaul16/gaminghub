const phrases = [
    'Good luck next time',
    '¡Inténtalo de nuevo',
    'tried to swim in lava',
    'didn\'t bounce',
    'You died',
    'Wasted'
];

const loadEmptyOrder = () => {
    $('button.make_order.commit').remove();
    $('.container_title').remove();
    let table_code = $('.table_code').text();

    let chance = RANDOM_(0, 5);

    switch (chance) {
        case 0:
        case 1:
            $('.table_code').text(`${phrases[chance]} ${table_code}!`);
            break;
        case 2:
        case 3:
            $('.table_code').text(`${table_code} ${phrases[chance]}`);
            break;
        case 4:
        case 5:
            $('.table_code').text(phrases[chance]);
            break;
    }

    $('button.make_order.return').toggleClass('empty_order').empty().text('Volver');
}

let tableCode;

const addToCart = (itemCode, price, total) => {
    let promise = requestAjaxCall({
        'file_pointer': 'addToCart',
        'values': {
            'table_code': tableCode,
            'item_code': itemCode,
            'price': price,
            'total': total
        }
    });
}

const removeFromCart = (itemCode, total) => {
    let promise = requestAjaxCall({
        'file_pointer': 'removeFromCart',
        'values': {
            'item_code': itemCode,
            'total': total
        }
    });
}   

const itemEventListenerInit = () => {
    $('button.menu_button').each(function (index) {
        let handler = $(this).closest('.cart_section').find('.menu_item_detail'); 

        let price; 

        if ($(this).is('#addToCart')) {
            $(this).on('click', function (e) {
                let priceHandler = $(this).closest('[item-price]');
                price = $(priceHandler).attr('item-price');

                let total = parseInt($('.total_order').find('span').text()) + parseInt(price);
                $('.total_order').find('span').text(total);

                let quantity = parseInt(handler.text());
                quantity++;
                handler.text(quantity);

                addToCart($(this).attr('cart-data'), price, total);
                // console.log($(this).attr('cart-data'));
            });
        }

        if ($(this).is('#removeFromCart')) {
            $(this).on('click', function (e) {
                let priceHandler = $(this).closest('[item-price]');
                price = $(priceHandler).attr('item-price');

                let quantity = parseInt(handler.text());
                quantity--;
                
                let total = parseInt($('.total_order').find('span').text());
                if (quantity >= 0) total -= parseInt(price);
                
                $('.total_order').find('span').text(total);

                if (quantity <= 0) {
                    $(this).closest('.menu_item').remove();
                }

                if (total < 0 || total == 0) {
                    total = 0;
                    loadEmptyOrder();
                }
                
                handler.text(quantity);
                removeFromCart($(this).attr('cart-data'), total);
            })
        }
    });
}

const loadOrderValues = (item_code) => {
    let menuPromise = requestAjaxCall({
        'file_pointer': 'loadMenuValue',
        'values': {
            'condition': true,
            'item_code': item_code
        }
    });

    menuPromise.then(data => {
        $(`.menu_item_content[cart-item="${item_code}"`).find('.menu_item_desc').text(data);
    });

    let typePromise = requestAjaxCall({
        'file_pointer': 'loadMenuValue',
        'values': {
            'condition': false,
            'item_code': item_code
        }
    });

    typePromise.then(data => {
        $(`.menu_item_content[cart-item="${item_code}"`).find('.menu_item_name').text(data);
    });
}

const loadOrderItems = (data) => {
    let template = '';

    for (let [key, value] of Object.entries(data)) {
        template += 
        `
        <div class="menu_item">
            <div class="main_menu_item">
                <div class="menu_item_img img_container">
                    <img src="./sfx/images/menu_stock/${key.substring(0, 4).localeCompare('STU') ? key.replace('_01', '') : key.substring(0, 6)}.jpg" alt="stock_image" loading="lazy"/>   
                </div>
                <div class="menu_item_content" cart-item="${key}" item-price="${value.price}">
                    <p class="menu_item_name cart_desc">${key}</p>
                    <p class="menu_item_desc cart_desc">${key}</p>
                    <div class="menu_price_section">
                        <div class="button_section cart_section">
                            <button class="menu_button" id="removeFromCart" cart-data="${key}">
                                <i class="fa-solid fa-minus icon"></i>
                            </button>
                            <p class="menu_item_detail">${value.quantity}</p>
                            <button class="menu_button" id="addToCart" cart-data="${key}">
                                <i class="fa-solid fa-plus icon"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `;
        loadOrderValues(key);
    }

    $('.menu_container').append(template);
    itemEventListenerInit();
}

const loadOrderInMemory = () => {
    let promise = requestAjaxCall({
        'file_pointer': 'checkCart',
        'values': true
    });

    promise.then(data => {
        if (!data) return loadEmptyOrder();

        let promiseData = data;

        $('.table_code').attr('table-data', promiseData.table_code).text(promiseData.table_code);
        tableCode = promiseData.table_code;
        $('.total_order').find('span').text(promiseData.total);

        let values = {};
        for (let [key, value] of Object.entries(promiseData)) {
            if (key == 'table_code' || key == 'total') continue;
            values[key] = value;
        }
        return loadOrderItems(values);
    });
}

const returnButtonInit = () => {
    $('button.make_order.return').click(function (e) {
        window.location.replace(document.referrer);
    });
}   

const orderCommit = () => {
    $('button.make_order.commit').click(function (e) {
        $('button.menu_button').each(function (e) {
            $(this).prop('disabled', true);
        });


        $(this).prop('disabled', true);
        $(this).empty().append('<i class="fa-solid fa-spinner fa-spin-pulse icon"></i>');

        let promise = requestAjaxCall({
            'file_pointer': 'orderCommit',
            'values': true
        });

        setTimeout(() => {
            $('.container.order').empty();
            $('.total_order').text(`Total: ${$('.total_order').text()}`);
            $('.text_container h2').first().text('¡Gracias!');

            $('.container.order').append(`
                <div class="container_title">
                    <h2>Confirmación</h2>
                    <div class="line"></div>    
                </div>
                <div class="menu_container">
                    <p class="order_confirmed">
                        ¡Gracias por realizar una orden en Gaming Hub!
                        <br><br>
                        En un momento, alguien de nuestro personal se acercará para
                        confirmar tu orden y efectuar el pago.
                        <br><br>
                        ¡De esta manera podrás empezar a jugar sin ningún tipo de 
                        atrasos ni inquietudes!
                        <br><br>
                        <span>GL & HF!</span>
                    </p>
                </div>
            `);

            $('.make_order.commit').remove();
            $('button.make_order.return').toggleClass('empty_order').empty().text('Volver');
        }, 5000);
    });
}

const validateCartAccess = () => {
    if (!verifyOrderDate()) {
        console.log('return (closed)');
        window.location.href = './'; //Maybe change to a "We're closed" panel
        return;
    }
}

$(document).ready(() => {
    // validateCartAccess();
    loadOrderInMemory();
    returnButtonInit();
    orderCommit();
});
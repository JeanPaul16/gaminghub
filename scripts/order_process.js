let tableCode;
    
// Check for URL params
const validateClientAccess = () => {
    let params = new URLSearchParams(location.search);

    if (params.get('data') == null) {
        console.log('return (no data)');
        window.location.href = './'; 
        return;
    }

    if (!verifyOrderDate()) {
        console.log('return (closed)');
        window.location.href = './'; //Maybe change to a "We're closed" panel
        return;
    }
} 

const decodeOrderRequest = () => {
    let params = new URLSearchParams(location.search);
    
    let promise = requestAjaxCall({
        'file_pointer': 'decodeOrderRequest',
        'values': params.get('data')
    });

    promise.then(data => {
        tableCode = data;
        $('.table_code').text(data);
        $('.table_code').attr('table-data', data);
    });
}

const verifyOrderOnRefresh = () => {
    let promise = requestAjaxCall({
        'file_pointer': 'checkCart',
        'values': true
    });

    promise.then((data) => {
        if (!data) return;

        let promiseData = data;

        for (let [key, value] of Object.entries(promiseData)) {
            if (key == 'table_code') continue;
            if (key == 'total') {
                $('.bill').text(value);
                continue;
            }
            $(`.cart_section[menu-item="${key}"]`).find('.menu_item_detail').text(value.quantity);
        }

        $('.continue_to_order').toggleClass('off_');
    });
}

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

    // promise.then(data => {
    //     console.log(data);
    // });
}

const removeFromCart = (itemCode, total) => {
    let promise = requestAjaxCall({
        'file_pointer': 'removeFromCart',
        'values': {
            'item_code': itemCode,
            'total': total
        }
    });

    // promise.then(data => {
    //     console.log(data);
    // });
}   

// Initialize button events (cart functionality)
const itemEventListenerInit = () => {
    $('button.menu_button').each(function (index) {
        if ($(this).is('#open_variants')) {
            return;
        }   

        let price = $(this).closest('.menu_variant_item').find('.menu_item_price').find('span').text();
        if (price === '') {
            price = $(this).closest('.menu_price_section').find('.menu_item_price').find('span').text();
        }

        let handler = $(this).closest('.cart_section').find('.menu_item_detail');  

        if ($(this).is('#addToCart')) {
            $(this).click(() => {
                let total = parseInt($('.bill').text()) + parseInt(price);
                
                addToCart($(this).attr('menu-data'), price, total);

                $('.bill').text(total);
                if ($('.continue_to_order').hasClass('off_')) $('.continue_to_order').toggleClass('off_');

                let quantity = parseInt(handler.text());
                quantity++;
                handler.text(quantity);
            }); 
        }

        if ($(this).is('#removeFromCart')) {
            $(this).click(() => {
                let quantity = parseInt(handler.text());
                quantity--;
                
                let total = parseInt($('.bill').text());
                if (quantity >= 0) total -= parseInt(price);
                $('.bill').text(total);

                if (quantity < 0) quantity = 0;
                handler.text(quantity);

                removeFromCart($(this).attr('menu-data'), total);
                
                if (total < 0 || total == 0) {
                    total = 0;
                    if (!$('.continue_to_order').hasClass('off_')) $('.continue_to_order').toggleClass('off_');
                }
            })
        }
    });
}   

const proceedToOrder = () => {
    $('.make_order').click(function (e) {
        window.location.href = './cart.php'
    });
}

$(document).ready(() => {
    // validateClientAccess();
    verifyOrderOnRefresh();
    decodeOrderRequest();
    itemEventListenerInit();
    proceedToOrder();
})
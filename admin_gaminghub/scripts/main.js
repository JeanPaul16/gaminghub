const tableResponsiveInit = () => {
    setTimeout(() => {
        $('.table_init').footable();
    }, 1000);
}

const loadStatusTemplate = (_status) => {
    switch (_status) {
        case 'Por Confirmar':
            return `
                <div class="confirmation_label to_confirm">Por Confirmar</div>
                <div class="confirmation_options">
                    <button class="confirm">Confirmar</button>
                    <button class="cancel">Cancelar</button>
                </div>
            `;
        case 'En Preparación':
            return  `
                <div class="confirmation_label confirmed">En Preparación</div>
                <div class="confirmation_options"></div>
            `;
        case 'Cancelado':
            return `
                <div class="confirmation">
                    <div class="confirmation_label canceled">Cancelado</div>
                    <div class="confirmation_options"></div>
                </div>
            `;
        case 'Entregado':
            return `
                <div class="confirmation">
                    <div class="confirmation_label delivered">Entregado</div>
                    <div class="confirmation_options"></div>
                </div>
            `;
        case 'Preparación Completa':
            return `
                <div class="confirmation_label delivered">Preparación Completa</div>    
                <div class="confirmation_options">
                    <button class="commit">Finalizar</button>
                </div>
            `;
        case 'KITCHEN':
            return  `
                <div class="confirmation_label confirmed">En Preparación</div>
                <div class="confirmation_options">
                    <button class="commit">Finalizar</button>
                </div>
            `;
    }
}

const buttonEventListenerInit = () => {
    $('tbody').on('click', 'button.confirm', function (e) {
        orderObject = $(this).closest('tr');

        statusCondition = current_file === 'service.php' ? 'SERVICE' : 'KITCHEN';
        
        let promise = requestAjaxCall({
            'file_pointer': 'setOrderStatus',
            'values': {
                '_id': $(orderObject).attr('order-id'),
                '_status_identifier': statusCondition,
                '_status': 'EP'
            }
        });

        setTimeout(() => {
            location.reload();
        }, 1000);
    });

    $('tbody').on('click', 'button.cancel', function (e) {
        orderObject = $(this).closest('tr');
        
        statusCondition = current_file === 'service.php' ? 'SERVICE' : 'KITCHEN';
        
        let promise = requestAjaxCall({
            'file_pointer': 'setOrderStatus',
            'values': {
                '_id': $(orderObject).attr('order-id'),
                '_status_identifier': statusCondition,
                '_status': 'CD'
            }
        });

        $(orderObject).find('.confirmation_label').toggleClass('to_confirm').toggleClass('canceled').text('Cancelado');
        $(orderObject).find('.confirmation_options').empty();

        setTimeout(() => {
            location.reload();
        }, 5000);
    });

    $('tbody').on('click', 'button.commit', function (e) {
        orderObject = $(this).closest('tr');
        
        statusCondition = current_file === 'service.php' ? 'SERVICE' : 'KITCHEN';
        
        let promise = requestAjaxCall({
            'file_pointer': 'setOrderStatus',
            'values': {
                '_id': $(orderObject).attr('order-id'),
                '_status_identifier': statusCondition,
                '_status': 'END'
            }
        });

        switch (current_file) {
            case 'service.php':
                $(orderObject).find('.confirmation_label').text('Entregado');
                break;
            case 'kitchen.php':
                $(orderObject).find('.confirmation_label').toggleClass('confirmed').toggleClass('delivered').text('Entregado');
                break;
        }
        $(orderObject).find('.confirmation_options').empty();

        setTimeout(() => {
            location.reload();
        }, 5000);
    });   

    $('tbody').on('focusout', 'textarea', function (e) {
        if ($(this).val() === '' || $(this).val() === undefined) return;
        
        let comment = $(this).val();

        let orderID = $(this).closest('tr');

        let promise = requestAjaxCall({
            'file_pointer': 'setComment',
            'values': {
                '_id': $(orderID).attr('order-id'),
                '_comment': comment
            }
        }); 

        let timeTillReload = setTimeout(() => {
            location.reload();
        }, 2000);

        $(this).on('focusin', function (e) {
            clearTimeout(timeTillReload);
        });
    });
}

const loadOrderInformation = (orderJSON) => {
    let main_template = '';
    let status = current_file === 'service.php' ? true : false;
    let commentInit = []; 

    for (let [index, order] of Object.entries(orderJSON)) {
        if (current_file === 'kitchen.php' && order._kitchen_status !== 'En Preparación') {
            continue;
        }

        let item_template = '';
        let service_template = '';
        let kitchen_template = '';

        let order_at = loadCurrentTime(new Date(order._order_at));
        
        for (let [i, orderDetail] of Object.entries(order._order_details)) {
            item_template += 
            `
                <li item-code="${orderDetail._item_code}${orderDetail._code}">
                    ${orderDetail._item_name} - ${orderDetail._presentation} <span>${orderDetail._quantity}</span>
                </li>
            `;
        }

        service_template = loadStatusTemplate(order._service_status);
        kitchen_template = loadStatusTemplate('KITCHEN');
        
        main_template += 
        `
        <tr order-id="${order._id}">
            <td>${(parseInt(index) + 1) < 10 ? `0${(parseInt(index) + 1)}` : (parseInt(index) + 1)}</td>
            <td class="items">
                <ul class="item_descriptions">
                    ${item_template}
                </ul>
            </td>
            <td table-code="${order._table_code}">${order._table_code}</td>
            <td>
                <div class="confirmation">
                    ${status === true ? service_template : kitchen_template}
                </div>
            </td>
            <td>${order_at}</td>
            <td>
                <textarea class="comments_input" name="comments" placeholder="Sin Comentarios" id="ORDER_${order._id}"></textarea>
            </td>
        </tr>
        `;
        commentInit.push({_id: order._id, _comment: order._comment});
    }

    $('tbody.table_body').append(main_template);

    commentInit.forEach((order, index) => {
        if (order._comment === 'Sin Comentarios') return;
        
        let row = $(`[order-id="${order._id}"]`);
        row.find('textarea').text(order._comment);
    });

    if (current_file === 'kitchen.php') {
        $('textarea').each(function (e) {
            $(this).prop('disabled', true);
        });
    }

    buttonEventListenerInit();
    // console.log(main_template);
}

const orderInit = () => {
    let promise = requestAjaxCall({
        'file_pointer': 'loadCurrentOrdersInit',
        'values': true
    });

    promise.then(data => {
        if ('OrderException' in data) {
            return;
        }
        
        // console.log(JSON.parse(data));
        loadOrderInformation(data);
    });
}

const setInternalLoadLoop = () => {
    setTimeout(() => {
        $(document).scrollTop(0);
        location.reload();
    }, 300000);
}

$(document).ready(() => {
    orderInit();
    setInternalLoadLoop();
});
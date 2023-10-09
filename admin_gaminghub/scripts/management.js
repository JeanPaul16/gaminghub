const loadStatusTemplate = (_status) => {
    switch (_status) {
        case 'Por Confirmar':
            return `
                <div class="confirmation_label to_confirm">Por Confirmar</div>
            `;
        case 'En Preparación':
            return  `
                <div class="confirmation_label confirmed">En Preparación</div>
            `;
        case 'Cancelado':
            return `
                <div class="confirmation">
                    <div class="confirmation_label canceled">Cancelado</div>
                </div>
            `;
        case 'Entregado':
            return `
                <div class="confirmation">
                    <div class="confirmation_label delivered">Entregado</div>
                </div>
            `;
    }
}
    
const generateTableTemplate = (orderJSON) => {
    let main_template = '';
    let commentInit = []; 

    for (let [index, order] of Object.entries(orderJSON)) {
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
            <td>${order_at}</td>
            <td>
                <textarea disabled class="comments_input" name="comments" placeholder="Sin Comentarios" id="ORDER_${order._id}"></textarea>
            </td>
            <td>
                <div class="confirmation">
                    ${service_template}
                </div>
            </td>
        </tr>
        `;
        commentInit.push({_id: order._id, _comment: order._comment});
    }

    $('tbody.table_body').empty();
    
    $('tbody.table_body').append(main_template);

    commentInit.forEach((order, index) => {
        if (order._comment === 'Sin Comentarios') return;
        
        let row = $(`[order-id="${order._id}"]`);
        row.find('textarea').text(order._comment);
    });
}

const loadTableData = () => {
    let selectValues = {};
    $('select').each(function () {
        if ($(this).hasClass('flatpickr-monthDropdown-months')) return;
        selectValues[$(this).attr('name')] = $(this).val();
    });
    
    let dateInstance = document.querySelector('#date_picker_div')._flatpickr;
    let dateValue = dateInstance.selectedDates;

    let promise = requestAjaxCall({
        'file_pointer': 'loadOrdersOnManagement',
        'values': {
            selectValues,
            dateValue
        }
    });

    promise.then(data => {
        if ("OrderException" in data) {
            return;
        }

        generateTableTemplate(data);
    });
}

const selectInit = () => {
    $(".custom-select").each(function () {
        var classes = $(this).attr("class"),
            id = $(this).attr("id"),
            name = $(this).attr("name");
        var template = '<div class="' + classes + '">';
        template +=
            '<span class="custom-select-trigger">' +
            $(this).attr("placeholder") +
            "</span>";
        template += '<div class="custom-options">';
        $(this)
            .find("option")
            .each(function () {
                template +=
                    '<span class="custom-option ' +
                    $(this).attr("class") +
                    '" data-value="' +
                    $(this).attr("value") +
                    '">' +
                    $(this).html() +
                    "</span>";
            });
        template += "</div></div>";

        $(this).wrap('<div class="custom-select-wrapper"></div>');
        $(this).hide();
        $(this).after(template);
    });
    $(".custom-option:first-of-type").hover(
        function () {
            $(this).parents(".custom-options").addClass("option-hover");
        },
        function () {
            $(this).parents(".custom-options").removeClass("option-hover");
        }
    );
    $(".custom-select-trigger").on("click", function () {
        $("html").one("click", function () {
            $(".custom-select").removeClass("opened");
        });
        $('.custom-select').each(function (e) {
            if ($(this).hasClass('opened')) $(this).toggleClass('opened');
        });
        $(this).parents(".custom-select").toggleClass("opened");
        event.stopPropagation();
    });
    $(".custom-option").on("click", function () {
        $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
        $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
        $(this).addClass("selection");
        $(this).parents(".custom-select").removeClass("opened");
        $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());
        
        loadTableData();
    });
}

const datePickerInit = () => {
    let minDateInit = new Date();
    minDateInit.setDate(minDateInit.getDate() - 365);
    let index = 1;

    flatpickr('#date_picker_div', {
        'locale': 'es',
        minDate: minDateInit,
        maxDate: 'today',
        dateFormat: 'd-m-Y',
        defaultDate: ['today', 'today'],
        mode: 'range',
        wrap: true,
        onChange: function (selectedDates, dateStr, instance) {
            if (selectedDates.length < 2) {
                index++;
                return;
            }
            index = 1;
            loadTableData();
        }
    })
};

// const tableResponsiveInit = () => {
//     $('.table_init').footable();
// }

const tableInit = () => {
    let dateInit = new Date();
    let promise = requestAjaxCall({
        'file_pointer': 'loadOrdersOnManagement',
        'values': {
            'selectValues': {'table_select': 'ALL', 'status_select': 'ALL', 'order_select': 'DESC'},
            'dateValue': {0: dateInit, 1: dateInit}
        }
    });

    promise.then(data => {
        if ('OrderException' in data) {
            return;
        }

        generateTableTemplate(data)
    });

    setTimeout(() => {
        $('body').attr('style', '');
        $('.loader').fadeOut();
    }, 2000);
}

$(document).ready(() => {
    tableInit();
    selectInit();
    datePickerInit();
    // tableResponsiveInit();
});
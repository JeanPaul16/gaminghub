const onUsernameType = () => {
    $('#staff_username').keyup(function (e) {
       this.value = this.value.toUpperCase();
    });
}

const setUsernameIdentificator = () => {
    let roleValue = $('#staff_role').val();
    if (!$('.staff_role_table_section').hasClass('off_')) {
        roleValue += $('#staff_role_table').val();
    }
    $('.default_username').find('p').text('_GH' + roleValue);
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

        if ($(this).parents('.custom-select-wrapper').find('select').val() == '_WTR') {
            if ($('.staff_role_table_section').hasClass('off_')) {
                $('.staff_role_table_section').toggleClass('off_').toggle();
            }
        } else {
            if ($(this).parents('.custom-select-wrapper').find('select').is('#staff_role') 
            && !$('.staff_role_table_section').hasClass('off_')) {
                $('.staff_role_table_section').toggleClass('off_').toggle();
            }
        }
        
        if ($('#staff_username').prop('disabled')) {
            $('#staff_username').prop('disabled', false);
        }
        setUsernameIdentificator();
    });
}

$(document).ready(() => {
    selectInit();
    onUsernameType();
    $('.staff_role_table_section').toggleClass('off_').toggle();
});
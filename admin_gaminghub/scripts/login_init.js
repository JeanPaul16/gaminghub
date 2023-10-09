const onDocumentLoad = () => {
    $('footer').remove();
    $('html, body').css({
        overflow: 'hidden',
        height: '100%'
    });
}

$(document).ready(() => {
    onDocumentLoad();  
});
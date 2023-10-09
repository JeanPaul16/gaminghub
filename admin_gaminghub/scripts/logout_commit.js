const logout_commit = () => {
    $('.exit_button').click(function (e) {
        let promise = requestAjaxCall({
            'file_pointer': 'logoutCommit',
            'values': true
        });

        setTimeout(() => {
            window.location = './';
        }, 500);
    });
};

$(document).ready(() => {
    logout_commit();
});
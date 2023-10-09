const loginCommit = (username, password) => {
    let promise = requestAjaxCall({
        'file_pointer': 'loginCommit',
        'values': {
            '_user': username,
            '_pass': password
        }
    });

    promise.then(data => {
        if ('ERROR' in data) {
            let errorIdentifier = data;
            let template = '';
            let alert_target;
            switch (errorIdentifier.ERROR) {
                case 'no_user_match':
                    template = `
                    <div class="notifier user_match">
                        <p>
                            <span>El usuario no existe.</span>
                        </p>
                    </div>
                    `;
                    alert_target = '.user_match'
                    break;
                case 'no_password_match':
                    template = `
                    <div class="notifier pass_match">
                        <p>
                            <span>La contraseña no coincide.</span>
                        </p>
                    </div>
                    `;
                    alert_target = '.pass_match';
                    break;
            }
            alertTemplate(template, '#_commit', alert_target);
            return;
        }

        setTimeout(() => {
            window.location = `./${data.SUCCESS}`;
        }, 500);
    });
}

const validateInput = () => {
    $('#_commit').click(function (e) {
        let username = $('#username').val().trim();
        let password = btoa($('#password').val().trim());

        if (username === '' || password === '') {
            let template = `
            <div class="notifier empty_alert">
                <p>
                    <span>Por favor llena todos los espacios. </span>
                </p>
            </div>
            `;
            alertTemplate(template, '#_commit', '.empty_alert');
            return;
        }

        $(this).prop('disabled', true);
        $(this).empty().append('<i class="fa-solid fa-spinner fa-spin-pulse icon"></i>');
        loginCommit(username, password);
    });
}

$(document).ready(() => {
    validateInput();
});
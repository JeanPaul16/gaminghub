const registerCommit = (name, lastname, username, password, desc) => {
    let promise = requestAjaxCall({
        'file_pointer': 'registerCommit',
        'values': {
            'name': name,
            'lastname': lastname,
            'username': username,
            'password': password,
            'desc': desc
        }
    });

    promise.then(data => {
        console.log(data);
    })
}

const validateInput = () => {
    $('#_commit').click(function (e){
        let nameInput = $('#staff_name').val().trim();
        let lastNameInput = $('#staff_lastname').val().trim();
        let usernameInput = $('#staff_username').val().trim() + $('#user_identifier').text();
        let passwordInput = $('#staff_password').val().trim();
        let descriptionInput = $('#staff_description').val().trim();

        if (nameInput === '' || lastNameInput === '' || usernameInput === '_GH' || descriptionInput === '' || passwordInput === '') {
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

        registerCommit(nameInput, lastNameInput, usernameInput, passwordInput, descriptionInput);
    });
}


$(document).ready(() => {
    validateInput();
});
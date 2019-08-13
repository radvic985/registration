$(document).ready(function () {
    let email = $('#email');
    let pass = $('#pass');

    $('input').each(function () {
        $(this).change(function () {
            $(this).removeClass('error').addClass('success');
            $('.error-message').hide();
        });
    });

    $('button.login').click(function () {
        let param = {
            'email': email.val(),
            'password': pass.val(),
        };

        let result = false;
        // ajax запрос - верифицирует авторизацию пользователя
        $.post('verification.php', param, function (data, status) {
            if (status === 'success') {
                if (data === 'error') {
                    email.addClass('error');
                    pass.addClass('error');
                    $('.error-message').show();
                } else {
                    window.location.href = 'profile.php';
                    result = true;
                }
                return true;
            }
        });
        return result;
    });
});
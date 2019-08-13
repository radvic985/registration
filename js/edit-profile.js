$(document).ready(function () {
    $('.nav-link').removeClass('active');
    $('.nav-link.edit').addClass('active');

    $('button.edit').click(function () {
        let pass = $('#pass');
        if (pass.val() === '') {
            pass.addClass('error');
        }

        if ($('input.error').length === 0) { // если нет ошибок - отправляем данные на сервер
            let file = $('#file').val();
            if (file === '') {
                file = $('#old_file').val();
            } else {
                file = 'upload/' + file.substring(file.lastIndexOf('\\') + 1, file.length);
            }

            let param = {
                'sign_up': 'yes',
                'edit': 'yes',
                'old_email': $('#old-email').val(),
                'first_name': $('#first_name').val(),
                'last_name': $('#last_name').val(),
                'email': $('#email').val(),
                'gender': $('input[type="radio"]:checked').val(),
                'date_birth': $('#date').val(),
                'country': $('#country').val(),
                'password': pass.val(),
                'file': file,
            };
            // ajax запрос - валидация и сохранение измененных данных
            $.post('sign-up.php', param, function (data, status) {
                if (status === 'success' && data === 'ok') {
                    window.location.href = 'profile.php';
                } else {
                    window.location.href = 'profile.php?edit=error';
                }
            });
        }
    });
});
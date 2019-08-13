$(document).ready(function () {
    $('button.lang').click(function () {
        // ajax запрос - записывает в сессию метку языка
        $.get('language.php?lang=' + $(this).prop('name'), function (data, status) {
            if (status === 'success') {
                window.location.reload();
            }
        });
    });
});
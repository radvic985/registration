$(document).ready(function () {
    $('.nav-link').removeClass('active');
    $('.nav-link.register').addClass('active');

    $('[required], input[type="file"]').each(function () {
        $(this).on('change', function () {
            Validator.validate($(this), $(this).prop('type')); // валидирует значение поля при изменении
        });
    });

    $('button.register').click(function () {
        let confirmPass = $('#confirm_pass');
        if ($('#pass').val() !== confirmPass.val()) { // проверка идентичности пароля и пароля подтверджения
            confirmPass.addClass('error');
            confirmPass.next('.error-message').show();
            return false;
        }
        return $('input.error').length === 0; // если нет ошибок отправляем данные на сервер
    });
});

// объект-валидатор вводимых пользователем значений
let Validator = {
    types: { //объект типов полей с соответствующими регулярными выражениями для проверки
        email: function (email) {
            let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
            return emailRegex.test(email);
        },
        password: function (pass) {
            let passRegex = /[\w\.-]{8,}/i;
            return passRegex.test(pass);
        },
        text: function (name) {
            let nameRegex = /^\p{L}+$/u;
            return nameRegex.test(name);
        },
        file: function (file) {
            let fileExtension = file.lastIndexOf(".") > 0 ? file.substring(file.lastIndexOf(".") + 1, file.length) : '';
            return (fileExtension === "jpg" || fileExtension === "jpeg" || fileExtension === "png" || fileExtension === "gif");
        },
    },
    // общая функция валидации для всех полей - принимает объект поля и его тип
    // добавляет/убирает классы ошибок или успешной валидации с поля
    validate: function (typeObject, type) {
        if (this.types[type](typeObject.val())) {
            typeObject.removeClass('error').addClass('success');
            typeObject.next('.error-message').hide();
        } else {
            typeObject.removeClass('success').addClass('error');
            typeObject.next('.error-message').show();
        }
    }
};
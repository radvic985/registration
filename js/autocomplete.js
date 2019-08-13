$(document).ready(function () {
    $.get('countries.php?get=yes', function (data, status) { // ajax запрос для получения списка всех стран из БД
        if (status === 'success') {
            $("#country").autocomplete({ //автокомплит для поля страны
                source: JSON.parse(data),
            });
        }
    });
});
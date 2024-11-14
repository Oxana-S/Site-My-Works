// Обновление запроса к базе с чатом, каждую секунду
// Показ сообщений в блоке с выводом сообщений.
function show() {
    $.ajax({
        url: "../ajax/chat_show_add.php", // Путь к php скрипту который выводит сообщения
        cache: false,
        success: function (html) {
            $('.mess_out').html(html); // Блок куда будем выводиться информацию из скрипта
        }
    });
}

$(document).ready(function () {
    show();
    setInterval(show, 1000); // Интервал обновления в миллисекундах 
});
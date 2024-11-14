/*
* Скрипт обработки добавления в чат нового сообщения
* js/chat_mess_add.js
*/


// Добавление сообщения в чат
$('#chat_send').click(function () {
    let chat_input = $('#chat_input').val();
    console.log("chat start  - " + chat_input);


    $.ajax({
        url: '../ajax/chat_send.php',
        type: 'POST',
        cache: false,
        data: {
            'chat_input': chat_input,
        },
        dataType: 'html',
        success: function (data) {
            
            if (data === "Done") {

                console.log(data+'Успешно');

                $('#chat_send').text("Yes");
                $('#chat_send').css({
                    'background': 'green',
                    'font-size': '18px'
                });

                $('#error-block_chat').hide();

                $('.mess_out').append(`
                
                         <p> ${chat_input} </p>
                
                `);
                $('#chat_input').val("");
                // Сет интервал
                function chang_sign() {
                    $('#chat_send').css({
                        'background': '#e9a723',
                        'font-size': '16px'
                    });
                    $('#chat_send').text(">")
                }
                setInterval(chang_sign, 1000);


                // document.location.reload(true);
            } else {
                $('#error-block_chat').show();
                $('#error-block_chat').text(data);

                console.log('Ошибка! Чат. Сообщение не добавлено')
            }
        }
    });
})

<!-- 
    blocks/chat.php
 -->
<div class="chat">
    <hr>
    <h2>Чат:</h2>
    <!-- Здесь показываем сообщения отправленные и полученные -->
    <div id="chat_show" name="chat_show">
        <div class="mess_out">
            <!-- Вывод содержимого чата на экран в блоке с чатом -->
            <p> <?php require 'ajax/chat_show.php'; ?></p>
        </div>
    </div>
    <!-- Форма для ввода сообщение в чат -->
    <form>
        <label for="chat_input">Введите сообщение:</label>
        <div class="chat_wrap">

            <div id="error-block_chat" class="error-mess"></div>

            <input id="chat_input" type="text" name="chat_input">
            <button id="chat_send" type="button" title="Отправить"> > </button>
        </div>
    </form>
</div>


<!-- 
    Скрипт обработки Добавления сообщения  в чат "js/chat.js" подключен в блоке с футером 
-->
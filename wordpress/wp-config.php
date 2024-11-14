<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'u532371647_wp_template' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'u532371647_admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'db_Admin1065' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?R*hcP8f9G51!J!xc^?%IU]>(FH5v3X;?X=ln~A=G#7IkJ-#!-{P4~1N%V!9H6t[' );
define( 'SECURE_AUTH_KEY',  'WK6g6Ovd,}IO95Bx$*~s+=$S&B~{Q_R2m*MY`8)GbI7=$a.-U-w5`g;(y]9>1ayU' );
define( 'LOGGED_IN_KEY',    'i]}mI?GsSV&6,?!yo^ZDrI6m{C|(7_Y rHSN][P><:3Vi|;^&1X`~Y&IPOyiB3[N' );
define( 'NONCE_KEY',        'IFL/Yq_EP(u#gTp?rB7GZnp?dcBkR>2$Cj|nq%0=7FO]8j^.aETJWKf7;mn`TU@a' );
define( 'AUTH_SALT',        '^LhfPfF`i6N^%szdn<NZy-^v[b2%}gbUScn*t]qo_4c;pY]d*vGi}fD4C]k=g~)2' );
define( 'SECURE_AUTH_SALT', '<o>cyK])v<?%4vOOGru9)m)n(m&aQzNoxQs@hF+^O,&:4t=1wa<L<1afCVrG:vg4' );
define( 'LOGGED_IN_SALT',   '|_ZPZCi h9ikHNq>qf~Cj@zn?PNGqoOfkVEO+_?`<jVa!oi8O/4#m@`vPh1.XlJb' );
define( 'NONCE_SALT',       '?WrYRof(VJp$Y%zOY:2=WFL]X7Lc[<hekmCu1tn+>Y}^:ZV6Y$>G40hsOnQYJG`V' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

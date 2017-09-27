<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'lider');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',>MZ-HP#!_j?c*F|2B!4_jDUbjA<S*}f:k<PNHK1q RU){H }++Kt1#EyB|d9[e8');
define('SECURE_AUTH_KEY',  'k)uZ]3$^YG2n ]ylxh^w|95Jw)Oh-4:!l^ (Za5h]Pe^wN)W;@kUk<qNzUr4u8|s');
define('LOGGED_IN_KEY',    '+!h4qwgY2(I0Ftl:IN>p26TGqL/q@z!=8/ 1kQHTx=QK!q]+AR?DX$ahe;!`s&SX');
define('NONCE_KEY',        '1r*)shg<;%N4*sT3Vf?5{o=(=#NTw X|.iIUl=^^XO/khN&qvSs3/q2`+VDBGGGY');
define('AUTH_SALT',        '1u6d]A_9|gbynv}b*TbLIZ_&?[M m!mb(hIRk0&DW[4y1PrKW6|n}~fd#07gn<Ys');
define('SECURE_AUTH_SALT', '<K=q@9[bpCvXNN:|LqEj%,_oIe2gVKFHuBXm;>lD%?y<Rxz2d9}y9q2>?M/uvHTj');
define('LOGGED_IN_SALT',   'jI!nINK%gJ(kg}lm|`fsrHXx)ftGQbioP]2})rXH|zmY9-|!QV9@yp6[IwfN9G[8');
define('NONCE_SALT',       'sXzLw/]t3a0|yQbe7|?V(|mtZ90X>F vfz_Dc*W`%Ji<:i )1>$/T>oSfN @53V]');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

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
define('DB_NAME', 'testwordpress_db');

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
define('AUTH_KEY',         '=;<9_g~~A6Ab+Y8KC-;y]Pcn@~q|hfw%^B6e7{W>ARQq.cKYeyJ5<k?*w[`K?FV3');
define('SECURE_AUTH_KEY',  'r,yFY`^0bgS1hQpD^_p@~/E&ffLbjGR8W:Pu>YU{g.X/j]RDZKhl,`~WmD8U1``1');
define('LOGGED_IN_KEY',    '0E:ZZ5&`<DwFB_LzggSW*C`zF^ _* 8oYuaY!&5n6{iXBmuH4=0[O7_bS2yS+-HX');
define('NONCE_KEY',        'ge6Q`><[[TXPME83n,qAIA% S,e^@olZ?:/K5cQzVS_}2>)gWr6# Ab?.I)<oyaJ');
define('AUTH_SALT',        'w--~SC;&cBkSZ3+$PGJ^?kAKF+KGfW%9Z^s}9+&FY#Qz|~P~K&dH$(b?Gf~c@i6s');
define('SECURE_AUTH_SALT', 'gO;a_4J,o#PBZicMdt%1LUm7p4Qj{qQmo2NYH4H#(-dqDk0I{savyE7VTK{ux_bY');
define('LOGGED_IN_SALT',   '1C*L9A+QLH^gJNW-s!,,T~$&;W]^YPg`Iqn#+_HW>$!sT;]M$@R_Btn=:N%M..9^');
define('NONCE_SALT',       '2IIwV}P,+hJB|@l>)>|%C:HlWh^W N[LQD0d-&6*%v.E_=CmUahy9#.b7z$YEBU]');

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

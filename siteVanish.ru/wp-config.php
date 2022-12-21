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
define( 'DB_NAME', 'siteVanish' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{8_.&P9},0zJs@VWV!u^?FPRz$*2QA5;}C`@Oj^`@(3-c`wkE=5Uo&0wS!Pxrw,R' );
define( 'SECURE_AUTH_KEY',  'wszpe_p-SpK3DIz7qI*Sv kh`  =CaAq49$<o)e{UKovkWRC&To(3-G;%OSd*a2@' );
define( 'LOGGED_IN_KEY',    'c.IJE!/dM&036<,@[Vm{]86Vv~Q ]4_UP5Z:acwgn}U9+uZSJmk3I@a;pBxzrpWO' );
define( 'NONCE_KEY',        'Qillk;7%dz<.0K?9)bCI0?>7RZZq<$fS&c_uDIKovI~WZBNfBGO}YAtM/)UesXOf' );
define( 'AUTH_SALT',        '1zb/WIWYm+<+DIFnPhzm]zrV8B&,NOL-qNU:6bM`$n,D&W.^b`lA%D?EnDQ6h;x1' );
define( 'SECURE_AUTH_SALT', 'dA{OoK GgG=fqXYT$bF]mB3hr9oTwr%CdvjTM/k%.]@m3>FiUi-1xzJL^8#fRd$t' );
define( 'LOGGED_IN_SALT',   's#;p#7d~ 3VlP@MhhQ<frX*~N}<C>4x9yy{t]zl92=m3MEPtZJ5a+W:4GHPGupJJ' );
define( 'NONCE_SALT',       '@q?GiWGEHZ<+$7}k5fAP7NJ|R;5,4$_,~K(leh)i#_r{h+|!Dz)&:nlch@qp$@$Y' );

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

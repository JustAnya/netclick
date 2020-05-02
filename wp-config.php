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
define( 'DB_NAME', 'wp_netclick' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$IdpBX5kx.SwQcn(nfs1Q3U2lD>EV%S6;lhwW=Hd0J$GNm(UQ,qW>RM34MpC}|z0' );
define( 'SECURE_AUTH_KEY',  'Y5u01pBS2&qM1c&iExa(#wzPO:4dM%C{Nn:dk#6DBT=% 6aXv9?`nmAQ~ahj2`hg' );
define( 'LOGGED_IN_KEY',    'Eg7y5_bm8yX6qRbq~PK~[Pu)3rg*qfOh#WA|IFa0Ac ?@o9Q!=5l(:m1#J9vL:D_' );
define( 'NONCE_KEY',        'HvlE` q$&e|C)>{Lc{@M~538s%]FMWW34(kCFY~wZt^c,Ynn{JP+[wA_{_@D7zi#' );
define( 'AUTH_SALT',        ':{deIpX#d[/w?,4z`lZ<M@$M2ib x}+I~*uD@NpTh]0qc0(8q2T}={-qd(gXmo4*' );
define( 'SECURE_AUTH_SALT', '1&~%1lTS7NMIfs,g}y!q(F~.r*MxSb&-1J{>Dc`j[cAF5j5#oa^pNwal,P=Vs~Jt' );
define( 'LOGGED_IN_SALT',   '8t1C+|/ez@u4 kd^<Z*2jjFR$QsW|m?{WHw$SQiL9y/71IzA]n:V!K<z%o:]z.rm' );
define( 'NONCE_SALT',       'czMbBSzAa^uJbxsi[Ku:o8aeqD?>5xIsrQkN.r0:n-(tT$-7qkvgEv(iz_f_&Prm' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );

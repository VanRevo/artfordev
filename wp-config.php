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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '^EnER~Bmu2z qM?I6obo;+!_V1C<<)oKR@^S?I2Z+i`E%jP/xT*e$$?mP?Fv)52|' );
define( 'SECURE_AUTH_KEY',  'x2(R+)O^~Eukb!nGQD[;aJsJ:dJv[q47r#%l_J$*QP%2J;C[D*z)[Kt:_I#sS+<5' );
define( 'LOGGED_IN_KEY',    'MV0?X!j@d{[(MnTpbl &Z7]P.Uky[iz/Dq&Srjgkdc:UW(W I,.bMX,+1^[fpJ7n' );
define( 'NONCE_KEY',        'u}V)Vs4PMl!Sb59d>#G=oRA]ssp=ei6NM|t%*1xtwU|oAvUl?*XbK!V,GQ<&-xc^' );
define( 'AUTH_SALT',        'HBR@Z1=w vuEcfnvyq?is8ml{{=HMV$Ax`NH$ e7po+wf99/u8)_:se[k%UKkB8{' );
define( 'SECURE_AUTH_SALT', ';QzK}. 615.(PQ}48ha&.h>)`2]*Sv,aam-N.Vq~i`(bNA([50Y&hy@{i+@^QK7h' );
define( 'LOGGED_IN_SALT',   'ijR0sRR/-$P3@mKdh;se@k}($IZU4 SI48`w0;wQv2fy7<2MA[E&l>d>s5#:=aE)' );
define( 'NONCE_SALT',       '$9xHjO}Q{catw5-BFRxUJNz)W56e53 RaCL+ eOcI`g:Ta@.9zRA^NCS&W9,Cu9`' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

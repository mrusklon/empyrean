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
define('DB_NAME', 'empyre1c_wp');

/** Имя пользователя MySQL */
define('DB_USER', 'empyre1c_wp');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'df6h87ytj');

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
define('AUTH_KEY',         'bI}7<hCEq[]mY66wpI~K4~2bu(eVn}BLJPb +eL6-.WFMJEC6n2*3P@MgDurJhn@');
define('SECURE_AUTH_KEY',  '4bI{Ex[Mji2e^[}1tk>b2R><(+EsdJ01tuXA$4Ajtirt,+9441$iuaGvcbKG-5M4');
define('LOGGED_IN_KEY',    'nS[2}>Q?7U?PirFbBi-f%8tytotUv8B-yZnnz<Bw@)A0#.;-*mfM[sv-pp@S^*#l');
define('NONCE_KEY',        '4D*AJFQHSv%.O@}^RQ$hMU|w4yNWD-0iMM}?^j^FOQiH:PD#4Y|(7BYkUQldw8wd');
define('AUTH_SALT',        'geQBXSgh.AiTFEl:.q)U-v%/`%ayCl0J(~nXL6K3^Ibr!hF7bk#(U,V&a(%Lv-Z~');
define('SECURE_AUTH_SALT', 'Q&A8=i(84V;0p8I/*9`MtS{!`vm@!2oLxxtI:waAVzCRx>rCVn!lru,b{-&Sm(i ');
define('LOGGED_IN_SALT',   '9P3nC(d]C^i,bOwmPOM7a[}Wa%LwH>x2^g- s-R1aTWr/{-L}.GY5MwzIq,1aA.a');
define('NONCE_SALT',       '# ||b. weyAJ2N8DTLY#;#u;HE%&*r~.pLLzBPCH%,Be Gj*YD9[cFubWLGSem]x');

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

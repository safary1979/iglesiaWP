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
define('DB_NAME', 'iglesia');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'utjp_QN>j=N>,Cbl(y7Ex;{;; =7[yfb{#u/[hLY)0Mce??,Ax$sLeiaHd75c`AR');
define('SECURE_AUTH_KEY',  'r[(+NW>73+kG7%Y@231m|&*ZiG{q$E2Sw)xW!oJ8B7j$yut5d]_phetqWt.<3Z6P');
define('LOGGED_IN_KEY',    'yMT[oT3%I]^G@az.F[)4H+hb`kceRuY/XIY@A|0f{iTeF4xKw,fHAm*`/JtXAJ^v');
define('NONCE_KEY',        'PMs}EQ{q@!9,jXByiffW]]BmQ=M%X+=vGt.Lu[GVZ0bte9fGEy}4:R*%)-@~aak0');
define('AUTH_SALT',        'a~p@yutP|%F,aalgm}oJ$`xd6oRvB<t; T@|xv74?k3<m7!|nRq4d3#|*!V&}-KZ');
define('SECURE_AUTH_SALT', '^cLLJ`CPSZT%sY:!Uz^gJD8C&(ski:9L%uZ 5vC5Z-q_y/Q;fVkyFd6Km/n6uFPZ');
define('LOGGED_IN_SALT',   '7oeD%K3=f&e:E5Vc9#0j]K^P@wmp6E%Ta_Drd!)l4{au?o }c,RaT$%1$C;Gs0 k');
define('NONCE_SALT',       'QTi^DY+7X1,>6>[rM8SM>;8fyXx2Hon., nY0U1f$O-~pB/BPqDKR#OY2Da8{$Qw');

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

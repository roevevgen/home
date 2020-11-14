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
define( 'DB_NAME', 'home' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'home' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'home' );

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
define( 'AUTH_KEY',         '#vkI{7+.MW]x[%SIgkBF?q%45ZrDvNN$s:=D5@I=YgMrvEb({!=,5&)tpY^OQnAQ' );
define( 'SECURE_AUTH_KEY',  '8=f4~n=~yUKzaY8G*s<[^+5XGr,ZauJhTf3D4)MvIq*n%|~cx&5XMdxi0dX5WpLS' );
define( 'LOGGED_IN_KEY',    ' nz$?0fj]*HymASBL@d=WgQb3vEN(0a1ZBceyR`d%4XDUKotC[VK2N)Z95v2(f$Z' );
define( 'NONCE_KEY',        '[ig{H6^M7c8tcV85||@Lc+>e$a;TXLO%EWqJF$j_GYhE{gz&Eq_m9@  {{4k;`L2' );
define( 'AUTH_SALT',        'v6fp7`oJJTz(iio1$FBY24g.bjs=[v-&<=2a:N&Q^ 7Xta-uN]8d_/M{}W41@WaR' );
define( 'SECURE_AUTH_SALT', 'V,YbEKGc@CW7rj/Mp}Y8<@x)4eD+#1K$Ng<*2>S^gha8JP$0BR5NFc_zB3f`uq15' );
define( 'LOGGED_IN_SALT',   'n?=S$J5VjpU$Nl1/1^2wV/8|,>Q_Wm4w&hR2o?Agf/O-&ptskWEP)eV)VF%XZ1hc' );
define( 'NONCE_SALT',       'z#<JqVok{o~TZ8PU5aI -:Ha=@w],T%d*zAKzU{2Umr&kZNP}VSH3m>/;_m{&bqs' );

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

<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wordpress' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', '' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'NbTb=P4Wd%S}3`,z?<B?rzIIiMEW>W>!#g$NlsX^z5#ukW]9^U3S5nR1d0C)>S^3' );
define( 'SECURE_AUTH_KEY',  ';PbKuhO6:%L[,[U]IMU[Y+o!K}>074XA`4+M(L<Yl+{U)AM#H<XT[fDJ[A9|iI=2' );
define( 'LOGGED_IN_KEY',    '}a(iE ERu)j_OyH#&/w-1JM{UwY/EZ>j/@|]xRk;8Z!>oJ$}.YchAqWtQto8e,EN' );
define( 'NONCE_KEY',        'qsH]j<0-*)&Ygn+r+-BU=m@^i9<y&o%j+V.&9gmp^P;%<qf?FE:$vfJs6sHK#A0M' );
define( 'AUTH_SALT',        'i7D!LnP#LPP9Q:H*nw8r.NqZRupm]j&/JEK|KlNQoLL|M*U2moZCs?.WZ-o_hYO)' );
define( 'SECURE_AUTH_SALT', '<0FY_;HV|NuK#f}i{7$uXl}Ya^9ll?f{;kEG}|?Q%b+Mj6Cu=m,>)|st{E}1g||C' );
define( 'LOGGED_IN_SALT',   '.N|AnR,WP9z>6PE]6`Y&!NxhJFY3xlotO8IN`5=J|!xgP]sh*B^B?o`a;w#UN+ii' );
define( 'NONCE_SALT',       '3Ckz2=K5h]LRd?EMWC@ylP{]?Ma|8|t4=(*AyxxmH*-e?V6Z/4)j,b]C;xD3S /,' );
define('JWT_AUTH_SECRET_KEY', '<%sRT%p[2tWv-*b7V6=$37$-74xaFa8)kXDuS8@k.c<E8h%x8Z|vpvfeG=/Z[+c8');
define('JWT_AUTH_CORS_ENABLE', true);
/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');

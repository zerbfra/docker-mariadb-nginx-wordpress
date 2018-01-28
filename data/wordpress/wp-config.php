<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ADS

define('SKIN_ENABLED', false);
define('ADS_ENABLED', false);

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //

/** Il nome del database di WordPress */
define('DB_NAME', 'wordpress');

/** Nome utente del database MySQL */
define('DB_USER', 'wp_user');

/** Password del database MySQL */
define('DB_PASSWORD', 'password_for_wp_user');

/** Hostname MySQL  */
define('DB_HOST', 'mariadb');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '-T(gIfxU,?952-fx&:dKxli;yws7LRi:5v0+m[+0ZtF?ZY{v*kmF:|)B%0]~$m11');
define('SECURE_AUTH_KEY',  '|a4#6kRTCFG+5]i?[iY^E{+|nQxA!E6||V>EqjIE%-Bk2`j_5~a)X7]( X(9`ssc');
define('LOGGED_IN_KEY',    'xg^igo|-%AYm>_02$L=7QUl-fOr^<X9#o`(U-vMEX8|oVE8!P.~!_C-nPz_@/),1');
define('NONCE_KEY',        'sQyA<-^yx`_DZOii5-2{R^WlR+V`.XFP0|LG`][!~uMRm29oy?AvA)v$r~$]J}JV');
define('AUTH_SALT',        ']L~cDZNP<dEC#Wc6uscEVDSCPH^Aj&.jk-N)24Qy:a,A_z+*EJF!*!:Fv*L|QGKu');
define('SECURE_AUTH_SALT', '].d|(+y}=:*SV3.Qw`tu Dn3(>3ZN#t#B-ET<}0`B>4Ac8G%YM|`Pq*3=**/%z]/');
define('LOGGED_IN_SALT',   'GSN6h(fI{d2f.XM+c_:Dxf}<_M`2-~V}KO-]Y$GwBqzE:J${{$R]]a^#o6hzqOJ}');
define('NONCE_SALT',       'e)Swo+i}++r,7|@43-!LtOD3$H;8~&LVrr?4aJW#[5ZUM/Vy D~@c6Ap?|mTR^O+');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);


/** Disabilita revisioni (max 3) **/
define('AUTOSAVE_INTERVAL', 300 ); // seconds
define('WP_POST_REVISIONS', 3 );

/** disabilita modifica file **/
define('DISALLOW_FILE_EDIT', true);

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

// if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') $_SERVER['HTTPS']='on';


/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');

/** Upload file e plugin diretto senza passare per FTP **/
define('FS_METHOD', 'direct');
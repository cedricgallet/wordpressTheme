<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'futureImperfect' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'futureImperfect_user' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'QSMqgcWqCUz3yKCY' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'FS@Rzl;)Vc]+ ,U)|<R^1E&pu-g`%p0qfBo*aEOYh]eEaQ`H,Of3j7?u?M)=u&v/' );
define( 'SECURE_AUTH_KEY',  'BigHo8t1IzS  :eP.X;{!Q:?z>-gyBk+?p#(bXk9LVwx?_9%bUw*,*5hByFZdy+0' );
define( 'LOGGED_IN_KEY',    'l|QCakB8|xDRev+B;}icrb]<t>c4nmmLWyA!}@Zd,FSvYqlDfWDi9?Atxbo <%tK' );
define( 'NONCE_KEY',        '0oUV=TZ$LNB+{VK^Hx{Hd,kKI>f:{x3XhEO4NS7|eA@?dIRj=ejXCQ~K;c)`o&gu' );
define( 'AUTH_SALT',        '1$&Rx[W,j=rN]z>4Dv{lNZ~w|y%Y ):z7,n%1p164%q(xwr.<1jr+*3AmBeCpA7u' );
define( 'SECURE_AUTH_SALT', '[6J^={,3$MrDlazSN1@=ntNRjAXI2JZ&E84pZWIM)w+`h1,a*Epz/,*.T9Je/x;s' );
define( 'LOGGED_IN_SALT',   '-H:4Frd*:,%;)U,_<*k]tXtV?OZ?/x7Zr(6p}^8FtYu;ItHX1E?al0vpsidXxGX0' );
define( 'NONCE_SALT',       'ii#xK0Vzr])9Lg[fkx#fk@hG98WQzpn9,fm]{|D`Q(lE^8XSHP![N%Y.jj28rKN~' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wpKEL_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

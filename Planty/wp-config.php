<?php

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1f}iVDDjZOJ?CE>%9_H?|Z%.fa9J.h_bOih)~rnA6%OVYng]LwOB:.]FWG77SVO.' );
define( 'SECURE_AUTH_KEY',  'Cbb!2w8j#GG^a>{Bg W3K/q!I,dMj{7w]zb%Y>.EM`|sECX0?F#pdD3,`<K9as^)' );
define( 'LOGGED_IN_KEY',    '+_pzbRtVzb3%Q(iu5CPp)]~&I-IMH:os~LoN$[e8VeMjhWp: V$^,,lkkh)j`.; ' );
define( 'NONCE_KEY',        'e@`p7/VE58slP^%Ik0=jOSm=p!4Y,TUzx2}s)oi7OzbIuT+%6RpG2Ok@B=1!T~q3' );
define( 'AUTH_SALT',        'x`}{e1M>bB}31VY.l~B`5n?+]>e#cyX-t{P5VCJMWR<.s|W(h_T3w/39sVs)v1nG' );
define( 'SECURE_AUTH_SALT', 'v3_QSQJBF0/ NNfb%YmXSi+YV4i Zx7:vP%ntk_nJ>p3*A0pwJG.TC}z)F#WBf/q' );
define( 'LOGGED_IN_SALT',   'utB*4F=X{C`.Y&e-4;OL~*!CamvI:W~~}3XeF~0rF[klI(T9zKV$jzvIg2`cRIa`' );
define( 'NONCE_SALT',       'TnsU4XG]Fyx^_y,s_b:pkFtrbCj=BI)g>O}pr|oMIYh^wQo:|9y&9K^p_=M|dLe%' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

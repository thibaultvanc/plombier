<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */ 

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */


define('DB_NAME', 'plombier');//getenv('db_database')? '':'plombier'

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'homestead'); //getenv('db_username')? '':'':forge

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'secret');//getenv('db_password')? '':'secret' ikIRnfeOaGjFGGZQOgea

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'aRDWD^0/o.__}U.CYDy+e[vn|)8n)MOQB5,j}lyvq$0#U>w`U~@~5!!5_W,%X4+8');
define('SECURE_AUTH_KEY',  '1S!oaMk+/j%&58PdM~=A`ceo::u98,6Xx-ffA Qo5T0:oZZ@=Q29Gr#~#A~XvNel');
define('LOGGED_IN_KEY',    'HiMzbevas$@lhvfU}q`oiyohpq *lJMq0t~a>8MMWB;pZq2GJM%MENRMM9,C-7q|');
define('NONCE_KEY',        'G*hrTHSEE2M}zSre.I,~.(@jE.b+cCP-OR:2^@^|(9{qk;rSCT- V@Av+o YD}{O');
define('AUTH_SALT',        '|Q?=,3T2$$><xw*-u?$b;Teqhjv~dq;2331Cq UFLRWE2c5L3v0Acmgv.g]kg1`-');
define('SECURE_AUTH_SALT', '{nmDR;x[=E!0|?Nf4I,!:+(=][A<B%Y}, $>Pc4BZ@;7}XT.j?~qIe*s9%p*fz$I');
define('LOGGED_IN_SALT',   'Ibs/,M`gO+ztk}2`-Oh4%u08g+Zz$Jz/xLi@|gJ(Cu2m7t#.{L,7G&,id%ObQbgd');
define('NONCE_SALT',       'I1DDHO,b-~0}1yo|-c3Lw]|JZM^a]x+Jn;haW2amkZGho~9Z+H11~U<2Smi0M,G`');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
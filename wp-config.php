<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
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
define('DB_NAME', 'portfolio-wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Q<mv?|Q}/tsRVb#`([_c}4duWi>/jvp^<jf+/GWZ42R82mKPP(3kI%|qKbvv~.T0');
define('SECURE_AUTH_KEY',  'w/hfCISR.qu<V#YY6jvJ@1&AX+YEMN;4)[%LxXX1h}0rTgquua~Mk!}nx2_i_BwU');
define('LOGGED_IN_KEY',    'V$d@GRz0~pMtBT=w%_1w4G[sxi#8Uit[8l]v$zu6ODvpdHkD$;@Bk1#-HDrwhyqQ');
define('NONCE_KEY',        '^W)3:9=,R^ve7S8Z$r3CnfOMWi(cP`x;aJ,Edf:)#V4Ot}3aiZK)5P[4xbJ 5W0o');
define('AUTH_SALT',        'sLG8Z|?8--[cB`4.~;qqV|.ieM(S/!JZZ|VT<IDe<!M  Vh}Vg_`:]*QkL}j&yu1');
define('SECURE_AUTH_SALT', 'v)Mg%y+3Qg5%4U05]IHtDDmRP@geIAKY1k:>z%QcP<gZAkr-k_{0t-W+$(tL00?U');
define('LOGGED_IN_SALT',   's_Ue;IvW*z#7r.yDK<2[wYY$n7?}Jua;b*B,DAGuav2uSLSYjFVbXzbIC[I{K+oL');
define('NONCE_SALT',       'vn21-Q[gl7[l QeDg!()}U]$fSI>*fQ4<vI@/jt@1g3dl@gyybO*tJ4L_Wz?w>8v');
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
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
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
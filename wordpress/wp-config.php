<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */
define('FS_METHOD', 'direct');

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'monsite');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '4pEn7@&X}PFYC jQXFw`,]CkXJIX~kM)@q(6[S|^DSQuRO4uQ{|UTTR02<#{%V(m');
define('SECURE_AUTH_KEY',  'h6 L^Lba[MNW,c]l+6oqS:?^!!6N9C+mT{y/(rY @mwA}B:R-k>7+8Fy)HvN=%TS');
define('LOGGED_IN_KEY',    'o_scw0dJR,%-Qe?uY`:.tZ~,K-hg?Ob%ko`^%=u^_@erG}swWfOIlr!8_Mu1.I?F');
define('NONCE_KEY',        'hF8awv=63+ZS(doa?a?a-4_>H~6%M9X=,JZ2wNHDp5^5dR=/h*Uu<ta>v-JV>/|{');
define('AUTH_SALT',        '71r2+ WDb.{W9K&/FJaOc!zQV Vd7oIh?=7wc~N#9O{oH)_!>0?yWkyE@GiptgUm');
define('SECURE_AUTH_SALT', '{Zb[l(AP:y5o-|0P1<I^I*vUWu:IXng>5!YjF]E7Dr<tZN~cc=f!xTdKbW>TmY+T');
define('LOGGED_IN_SALT',   'b&ciaN3o-p,bi/dhELiN@R(~[V~-8gAM@f%dG8?j0GG@aTCuu*m{C_dzS(w1:H%B');
define('NONCE_SALT',       'Qm!>xSP7X(&~_%AWtoI~U{OQbWlt}e65ZZQyTv}IGSqhCG$^:X2hvWrDRx)L|VXO');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
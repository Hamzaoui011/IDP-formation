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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'IDP.conseiller' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_,qk_;+wyf=m]_dm2POc|$sGC[XDkE+&`19bZ))FZ<#;TJ*&Y@Ytqj5/>[?Qdn*X' );
define( 'SECURE_AUTH_KEY',  '(Uoe;M<t,`eZs-4$zs_}I=Wc8)V  ,k|A3kbN<0&pL*mF>P-B|p4XCR^~rZrS @]' );
define( 'LOGGED_IN_KEY',    ' [,~B|o-U`a+T!kk!!<Z([K07DGx]yhlgh-M]7/#F19[S]WDwZ< ZX*EDhLToea|' );
define( 'NONCE_KEY',        'swM~dioxY#(X%,GkJ|>]BhIW<uHOw>r>Y$<BIULVuw &S/3$3>}&o`6B!0n;,Y3*' );
define( 'AUTH_SALT',        '9$Z;BQl?(RLDJ|Ap*5T6OgTD#Qv3S4Qo;@*7,UV54?%g&~$;igD(/uv )Xitk~h}' );
define( 'SECURE_AUTH_SALT', 'O_Faaqn]cy/z6L)D<=/zjyDW5N?}]nXZd9XXQm^#!rh&SJ29ffWCKxtV7v6F0Hp{' );
define( 'LOGGED_IN_SALT',   'C4 3AY0ZfQA0iJqm#eqxW:y>`A$q9JTf^r@O0;s[YI(Bh@[&f3Y~7zXj7XmXmqPD' );
define( 'NONCE_SALT',       '.{d]$sTX_*A^rvz+!m<e$cTE4IGlLMFIrA=`S+rzeX-%!<I+T(kBR/7Cosdv.2Or' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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

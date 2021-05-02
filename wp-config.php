<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'db_redescolar' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Mg!zD#xp,oKzk~QdP!-qMa<#NDT#%*5HPQlHh@cFOYfE6+;r@h67L-qzvlb)ncv,' );
define( 'SECURE_AUTH_KEY',  'V[I &[c/i9+Uk9+BMk[f7w<-v!ejvK3!q6EdG~!*dYD}e~>D(wnd9<%v/&BX/RZ*' );
define( 'LOGGED_IN_KEY',    '@Igu.+kqkOXZk]]_*.v*;|ts!i1Pi+%BsIIM{&c7sP}F>5BpT7|h(!Vc  [VyG6i' );
define( 'NONCE_KEY',        'KvvP~zbS%Vm:C<cW`-mN^egG!r5!rinuf]m)t%WZh&+nlJXHkM93wpDL@fQivCk#' );
define( 'AUTH_SALT',        'H6-k382e4[Y`xC(/?Vr/gQrU^I}*R=bG^kjHo[_AGC.qbEi8rfdbp`A4&l9O[Op=' );
define( 'SECURE_AUTH_SALT', 'kNfT`8&x$,kyQ/^uz4l7?,iR,J!$-cJ XF^U5gM-JWb^tRuxid]YusS]ozJbq5!U' );
define( 'LOGGED_IN_SALT',   'GDGZ -(!{rEx`|5tC@Z,vyr|aLq`)b@3`|/PM@_P{v`]yx^-N[Vl0PwcX lvs ~T' );
define( 'NONCE_SALT',       'ON^:0/ +rt?Q(iw@7A/6T&?TO>vkF:U?D0+1%SeFI>%49oglods#rD/W_DeI6Voe' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

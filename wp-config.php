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
define( 'DB_NAME', 'wpdb_campeonato' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wpdb_camp' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'YS,,edoLhW(PY9rH+,itSl>#od+L:KSxmQlyH-!zsOWJuhsuJT6cgRQ{st#lPf*.' );
define( 'SECURE_AUTH_KEY',  'cxmC,Yc`L^pc}l^FflH[uKjo^5_-2=0uF]W;S!^nzw-0@P9va@NJ??Z$6t}0PnFg' );
define( 'LOGGED_IN_KEY',    '6..Cqhf_9l5>YU,7fec:85F]qMf!TVF|$:$_~eb(v J3W79qmlDJW)Lcg*koP>Tx' );
define( 'NONCE_KEY',        '3mPHz1b~>~n/b^%xYF(0($<I%xC_hv0Z{0fe Ag:rD<oXp$qmvs.<%|xTLn:nX~H' );
define( 'AUTH_SALT',        '0;@6yg_DPg4>~u$GS;,kG6WPD38K,9j?+12MwqiB}0L]f$Z}4SR3#YGo^qs:v|gE' );
define( 'SECURE_AUTH_SALT', '!9l+fuw*N2KA-s.)vTt)<U+fbp]^v AyMSsKcx/Hu:S(Zsi+MR9d/wCWzCUqlk1~' );
define( 'LOGGED_IN_SALT',   '/x(w VMnsCgs^E`W!]9eS?Ff&7KpRq[j#+j>23,Ue+5=GHrSO[<#l@$DH1^|}2~>' );
define( 'NONCE_SALT',       'j!L;d4.Z-7yU;!*DSbEP`c.CkfW{efZ3Zc7(g/K(U%IA7Q_]}fmJ6czE>iz@P1Lm' );

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

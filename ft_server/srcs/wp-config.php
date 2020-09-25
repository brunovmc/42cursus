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
* @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
*
* @package WordPress
*/

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'wordpress');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '1234');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'muxL1$(gm_`tV}*+(Kq6X5VUk4Z1wNgUVL#A3~8[6PrQZ]|6+A,@TuTjSciUC]+f');
define('SECURE_AUTH_KEY',  'r)f:*: e-A|D 4a(cFifIs^pfXp_{hgSb7$8Z95+Tr@a;-8WHw#as}0OXS/7- t@');
define('LOGGED_IN_KEY',    'AC{#H`7V3a/=&m{n-w~M]ym*jPe-)F7*561?}t0c}f/dGE@5YZmgLE>{{b?7&)%^');
define('NONCE_KEY',        '>XZO?6+2dmL.T9m%cy9<[O|=|WQs2Bf[q=YO5wxsex`uJvk`XA._^*]x#GiMbPUO');
define('AUTH_SALT',        'iiz8tUsC5RW7{)pbi,M_<T@G_A:$acFg$!@zq]tG|&|?ug*~FknZ(?vUmh F=i+X');
define('SECURE_AUTH_SALT', 'EciC:gxToNq||zT(@Cg/su(wk-^iVO=4O4sk,jQ7%+4O$0tbEC+0..baNG<rsju9');
define('LOGGED_IN_SALT',   '0!DbM^|%eBW]|?Gsq#UWh?|A+h!Z2ffP<g Rxfct_bK71aupkTV LvT-)-FvD_5^');
define('NONCE_SALT',       'b<jc>z=b@^e7KwE:LALd=bU^R,9KUU0omSn<|E+P0bFz[#{H;6T!DI:OwhNf<pF*');

/**#@-*/

/**
* Prefixo da tabela do banco de dados do WordPress.
*
* Você pode ter várias instalações em um único banco de dados se você der
* um prefixo único para cada um. Somente números, letras e sublinhados!
*/
$table_prefix  = 'wp_';

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
* @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
*/
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
   define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

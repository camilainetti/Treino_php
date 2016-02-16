<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'bd_teste1');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-E2m79+,k~d=-a`V|tFfBv%W~8!Gh1 Ba?|AY{9jF+G02_wkk)X&it7f120t(D!&');
define('SECURE_AUTH_KEY',  'fZ)E@#jR[7>apdqrp/c|9|:z1}bcA?)nQ*ytUtROYHW>8`-)St// .n)V]SU;}B2');
define('LOGGED_IN_KEY',    'f{lXqIi1~l]||9-J^Cgpu2!S~&~iTpbnqrVoEq|x<|iSpvruoz|.,/#o]_6K)B# ');
define('NONCE_KEY',        'y|~ ]yl%y9=be8~dmm.a><&cD.fp3Fsy4uQ+c`H=i%n3!o`P<4[sWR7G0S8Mq+4w');
define('AUTH_SALT',        'DwH`D:xC[+1Bkj*4U>i&>p)O;IHDxz>Ci-)YZ8N{g1_[[dFernV4o`OH3YRBv}wj');
define('SECURE_AUTH_SALT', 'z_YB!o<ND+hu;:FFik !.+Wv%H qth[kI>;3/sp}Ux(0R_4|NuxmT#Er:.}|NA%@');
define('LOGGED_IN_SALT',   'y+~R5R_;p+9ryIa7KV|ttJ,Q::At!3m1vH|~1@[}mLw8C?a&6_#|&[=B{<C$`vA5');
define('NONCE_SALT',       '#r`z*M+Jp|-L<]:rg&dt,LKO5QVFeZ_F`SsCT%g>m:0g2e,=r?!Hw}qmpg_tQcki');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');

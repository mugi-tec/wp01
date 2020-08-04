<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp01db' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[*`(8.Y#1QPiG#5Or)##-sggj9[b>pK.r[{05]AvW{K(,|0iN;_ENXnJlY<,k>XR' );
define( 'SECURE_AUTH_KEY',  't, giRg 2V|9;<Cs9#Vk.<p;ksY0N<YRM9Cm`KM0+g}G`[Xsl{Hhy4U^`ZnP&g6?' );
define( 'LOGGED_IN_KEY',    'BmWDl}+;*BCSpj/##8sDZWpCN#~9VY%ds|.J*HNXq*)L4Z4i-KO}Q@(=JN-R!T0g' );
define( 'NONCE_KEY',        'IbDr`;ZXRfL#J8KyadB}~7+T-gx `/t_K+[5[/bpa9r9&tTIgb>n%`s@NKK3b3N ' );
define( 'AUTH_SALT',        '8r3.!5:3pka1U .1I2,GC$&JU+*WuIuXwKlMC6T(q$9?a#8AS9^ GP(>TRtBkwBO' );
define( 'SECURE_AUTH_SALT', 'Zc.5CxYY.q<eWLiVo~nLp[p xl5i2v%MP%kB4tfDezM.FG[3(*}V+mqgbL7k=k!q' );
define( 'LOGGED_IN_SALT',   '[r=I:xL[iwB2gN&dC6KiZv8L:,5-*WQK^Xt(qNx3ms>nOFV(|AS+xsIr/$FPy_wH' );
define( 'NONCE_SALT',       'y wt0~~%Sb_`Vl.59^,X S7|9|: U>==[R`n4EZ<xovq+=>-7LT|+`+@HtpLqthM' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

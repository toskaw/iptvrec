<?php
include_once("config.php");
require 'vendor/autoload.php';
include_once(INSTALL_PATH."/Settings.class.php");
use Smarty\Smarty;

if ($_SERVER['REMOTE_USER'] == 'guest') {
	exit("permission denied");
}

$settings = Settings::factory();
$smarty = new Smarty();

$smarty->assign( "settings", $settings );
$smarty->assign( "record_mode", $RECORD_MODE );
$smarty->assign( "install_path", INSTALL_PATH );
$smarty->assign( "post_to", "postsettings.php" );
$smarty->assign( "sitetitle", "環境設定設定" );
$smarty->assign( "message", '<a href="index.php">設定せずに番組表に戻る</a>/<a href="systemSetting.php">システム設定へ</a>/<a href="logViewer.php">動作ログを見る</a>' );

$smarty->display("envSetting.html");
?>

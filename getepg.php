#!/usr/local/bin/php
<?php
$script_path = dirname( __FILE__ );
chdir( $script_path );
include_once( $script_path . '/config.php');
include_once( INSTALL_PATH . '/DBRecord.class.php' );
include_once( INSTALL_PATH . '/Reservation.class.php' );
include_once( INSTALL_PATH . '/Keyword.class.php' );
include_once( INSTALL_PATH . '/Settings.class.php' );
include_once( INSTALL_PATH . '/storeProgram.inc.php' );
include_once( INSTALL_PATH . '/recLog.inc.php' );
  
$settings = Settings::factory();

$playlist = file_get_contents($settings->m3u_url);

$re = '/#EXTINF:(.+?)[,]\s?(.+?)[\r\n]+?((?:https?|rtmp):\/\/(?:\S*?\.\S*?)(?:[\s)\[\]{};"\'<]|\.\s|$))/';
$attributes = '/([a-zA-Z0-9\-]+?)="([^"]*)"/';

preg_match_all($re, $playlist, $matches);

$i = 1;

$items = array();

foreach($matches[0] as $list) {
    preg_match($re, $list, $matchList);
    $mediaURL = preg_replace("/[\n\r]/","",$matchList[3]);
    $mediaURL = preg_replace('/\s+/', '', $mediaURL);

    $newdata =  array (
        'id' => $i++,
        'tvtitle' => $matchList[2],
        'tvmedia' => $mediaURL
    );
    
    preg_match_all($attributes, $list, $matches, PREG_SET_ORDER);
    
    foreach ($matches as $match) {
        $newdata[$match[1]] = $match[2];
    }
    $items[] = $newdata;
}

foreach( $items as $item) {
    // チャンネルデータを探す
    $num = DBRecord::countRecords( CHANNEL_TBL , "WHERE channel = '" . $item["tvmedia"] ."'" );
    if ($num) {
        // チャンネル情報更新
        $rec = new DBRecord(CHANNEL_TBL, "channel", $item["tvmedia"] );
    }
    else {
        // 新規追加
        $rec = new DBRecord( CHANNEL_TBL );
    }
    $rec->type = $item["group-title"];
    $rec->channel = $item["tvmedia"];
    $rec->channel_disc = $item["tvg-id"];
    $rec->name = $item["tvtitle"];
}
// epg xml 取得
if (preg_match('/url-tvg+?="([^"]*)"/', $playlist, $epgurl)) {
    storeProgram($epgurl[1]);
    // xml書き換え
    $playlist = preg_replace('/url-tvg+?="([^"]*)"/', 'url-tvg="./' . EPG_XML . '"', $playlist);
}

garbageClean();			//  不要プログラム削除
doKeywordReservation();	// キーワード予約
// playlist
file_put_contents(PLAYLIST_M3U, $playlist);
exit();
?>

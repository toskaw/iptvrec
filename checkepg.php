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
  
  $reserve_id = $argv[1];
  $rrec = new DBRecord( RESERVE_TBL, "id" , $reserve_id );
  $rec_type = $rrec->type;
  $rec_channel = $rrec->channel;
  $rec_channel_disc = $rrec->channel_disc;
  $rec_program_id = $rrec->program_id;
  $rec_autorec = $rrec->autorec;
  $rec_mode = $rrec->mode;
  $prec = new DBRecord( PROGRAM_TBL, "id", $rec_program_id );
  $event_id = $prec->event_id;

  // 一時的に予約削除
  Reservation::cancel( $rrec->id );

  $settings = Settings::factory();
  // 再予約
  $rec = new DBRecord( PROGRAM_TBL, "id", $rec_program_id );

  Reservation::simple($rec->id, $rec_autorec, $rec_mode);

  exit();
?>

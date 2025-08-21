<?php
/* Smarty version 5.5.1, created on 2025-08-19 23:04:40
  from 'file:recordedTable.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68a48478f1be31_92268282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbfc7c22a1e00fd3f842c1fc0eb43386e6989028' => 
    array (
      0 => 'recordedTable.html',
      1 => 1754800891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68a48478f1be31_92268282 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/old/home/tos/public_html/iptvrec/templates';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $_smarty_tpl->getValue('sitetitle');?>
</title>
<meta http-equiv="Content-Style-Type" content="text/css">


<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-1.3.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="start/jquery-ui-1.7.2.custom.css" type="text/css">
<?php echo '<script'; ?>
 type="text/javascript">
<!--
	var PRG = {
		
		dialog:function(id, title){
			$('#floatBox4Dialog').dialog({title:'削除',width:500});
			var str = '<div class="prg_title">' + title + 'を削除します</div>';
			str += '<form><div style="text-align:center;">録画ファイルも削除する<input type="checkbox" id="delete_file" name="delete_file" value="1" checked/></div></form>';
			str +='<div style="margin:2em 0 1em 0;text-align:center;"><a href="javascript:PRG.rec(' + id + ')" class="ui-state-default ui-corner-all ui-dialog-buttonpane button">この録画を本当に削除する</a></div>';
			$('#floatBox4Dialog').html(str);
			$('#floatBox4Dialog').dialog('open', 'center');
		},
		rec:function(id){
			var df = 0;

			if( $('#delete_file').attr('checked') ) {
				df = 1;
			}
			$('#floatBox4Dialog').dialog('close');
			
			$.get(INISet.prgCancelURL, { reserve_id: id, delete_file: df } ,function(data){
				
				if(data.match(/^error/i)){
					alert(data);
				}
				else {
					$('#resid_' + id ).hide();
				}
			});
		},
		editdialog:function(id) {
			$('#floatBox4Dialog').dialog({title:'変更',width:500});
			var str;
			str  = '<div class="prg_title">録画ID:' + id + '</div>';
			str += '<input type="hidden" name="reserve_id" id="id_reserve_id" value="' + id +  '" />';
			str += '<div><span class="labelLeft">タイトル</span><input name="title" id="id_title" size="30"  value="'+ $('#tid_' + id ).html() + '" /></div>';
			str += '<div><span class="labelLeft">概要</span><textarea name="description" id="id_description" cols="30" rows="5" >' + $('#did_' + id ).html() + '</textarea></div>';
			str += '<div style="margin:2em 0 1em 0;text-align:center;"><a href="javascript:PRG.edit()" class="ui-state-default ui-corner-all ui-dialog-buttonpane button">変更する</a></div>';
			
			$('#floatBox4Dialog').html(str);
			$('#floatBox4Dialog').dialog('open','center');
		},
		edit:function() {
			var id_reserve_id = $('#id_reserve_id').val();
			var id_title = $('#id_title').val();
			var id_description = $('#id_description').val();

			$.post('changeReservation.php', { reserve_id: id_reserve_id,
							  title: id_title,
							  description: id_description }, function( data ) {
				if(data.match(/^error/i)){
					alert(data);
					$('#floatBox4Dialog').dialog('close');

				}
				else {
					$('#tid_' + id_reserve_id ).html( id_title );
					$('#did_' + id_reserve_id ).html( id_description );
					$('#floatBox4Dialog').dialog('close');
				}
			});
		}
	}
	$(document).ready(function () {
		var DG = $('#floatBox4Dialog');
		DG.dialog({title:'変更',width:500});
		DG.dialog('close');
	});
-->
<?php echo '</script'; ?>
>
<style type="text/css">
<!--
body {padding:4px;margin:0;font-size:10pt;}
a {text-decoration:none;}

.bold {font-weight:bold;}
.small {font-size:75%;}

a img {border:none; }

table#reservation_table {
    width: 960px;
    border: 1px #BBB solid;
    border-collapse: collapse;
    border-spacing: 0;
}

table#reservation_table th {
    padding: 5px;
    border: #E3E3E3 solid;
    border-width: 0 0 1px 1px;
    background: #BBB;
    font-weight: bold;
    line-height: 120%;
    text-align: center;
}
table#reservation_table td {
    padding: 5px;
    border: 1px #BBB solid;
    border-width: 0 0 1px 1px;
    text-align: center;
}

table#reservation_table tr.ctg_news, #category_select a.ctg_news {background-color: #FFFFD8;}
table#reservation_table tr.ctg_etc, #category_select a.ctg_etc {background-color: #FFFFFF;}
table#reservation_table tr.ctg_information, #category_select a.ctg_information {background-color: #F2D8FF;}
table#reservation_table tr.ctg_sports, #category_select a.ctg_sports {background-color: #D8FFFF;}
table#reservation_table tr.ctg_cinema, #category_select a.ctg_cinema {background-color: #FFD8D8;}
table#reservation_table tr.ctg_music, #category_select a.ctg_music {background-color: #D8D8FF;}
table#reservation_table tr.ctg_drama, #category_select a.ctg_drama {background-color: #D8FFD8;}
table#reservation_table tr.ctg_anime, #category_select a.ctg_anime {background-color: #FFE4C8;}
table#reservation_table tr.ctg_variety, #category_select a.ctg_variety {background-color: #FFD2EB;}
table#reservation_table tr.ctg_10, #category_select a.ctg_10 {background-color: #E4F4F4;}


#floatBox4Dialog .prg_title{font-size:120%;font-weight:bold;padding:0.4em 0;text-align:center;}
#floatBox4Dialog .prg_rec_cfg{background:#EEE;padding:1em 2em;margin:0.4em 0;}
#floatBox4Dialog .labelLeft {width:8em;float:left;text-align:right;}
#floatBox4Dialog .button {padding:0.4em 1em;}


-->
</style>


</head>

<body>

<h2><?php echo $_smarty_tpl->getValue('sitetitle');?>
</h2>

<p><a href="index.php">番組表に戻る</a></p>

<div>
絞り込み：
<form method="post" action="recordedTable.php" >
<input type="hidden" name="do_search" value="1" />
検索語句<input type="text" size="20" name="search" value="<?php echo $_smarty_tpl->getValue('search');?>
" />
局<select name="station">
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('stations'), 'st');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('st')->value) {
$foreach0DoElse = false;
?>
    <option value="<?php echo $_smarty_tpl->getValue('st')['id'];?>
" <?php echo $_smarty_tpl->getValue('st')['selected'];?>
><?php echo $_smarty_tpl->getValue('st')['name'];?>
</option>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  </select>
カテゴリ<select name="category_id">
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cats'), 'cat');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach1DoElse = false;
?>
  <option value="<?php echo $_smarty_tpl->getValue('cat')['id'];?>
" <?php echo $_smarty_tpl->getValue('cat')['selected'];?>
><?php echo $_smarty_tpl->getValue('cat')['name'];?>
</option>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</select>
<input type="submit" value="絞り込む" />
</form>
</div>

タイトルや内容をクリックすると視聴できます（ブラウザの設定でASFとVLCを関連付けている必要があります）
<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('records'))) {?>
<table id="reservation_table">
 <tr>
  <th>録画日時</th>
  <th>ch</th>
  <th>モード</th>
  <?php if ($_smarty_tpl->getValue('use_thumbs') == 1) {?><th>サムネール</th><?php }?>
  <th>タイトル</th>
  <th>内容</th>
  <th>変更</th>
  <th>削除</th>
 </tr>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('records'), 'rec');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('rec')->value) {
$foreach2DoElse = false;
?>
 <tr id="resid_<?php echo $_smarty_tpl->getValue('rec')['id'];?>
" class="ctg_<?php echo $_smarty_tpl->getValue('rec')['cat'];?>
">
  <td><?php echo $_smarty_tpl->getValue('rec')['starttime'];?>
</td>
  <td><?php echo $_smarty_tpl->getValue('rec')['station_name'];?>
</td>
  <td><?php echo $_smarty_tpl->getValue('rec')['mode'];?>
</td>
  <?php if ($_smarty_tpl->getValue('use_thumbs') == 1) {?><td><a href="<?php echo $_smarty_tpl->getValue('rec')['asf'];?>
"><?php echo $_smarty_tpl->getValue('rec')['thumb'];?>
</a></td><?php }?>
  <td><a href="<?php echo $_smarty_tpl->getValue('rec')['asf'];?>
" id="tid_<?php echo $_smarty_tpl->getValue('rec')['id'];?>
"><?php echo $_smarty_tpl->getValue('rec')['title'];?>
</a></td>
  <td><a href="<?php echo $_smarty_tpl->getValue('rec')['asf'];?>
" id="did_<?php echo $_smarty_tpl->getValue('rec')['id'];?>
"><?php echo $_smarty_tpl->getValue('rec')['description'];?>
</a></td>
  <td><input type="button" value="変更" onClick="javascript:PRG.editdialog('<?php echo $_smarty_tpl->getValue('rec')['id'];?>
')" /></td>
  <td><input type="button" value="削除" onClick="javascript:PRG.dialog('<?php echo $_smarty_tpl->getValue('rec')['id'];?>
','<?php echo $_smarty_tpl->getValue('rec')['title'];?>
')" /></td>
 </tr>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</table>

<?php } else { ?>
  現在、録画済データはありません
<?php }?>

<div id="floatBox4Dialog">jQuery UI Dialog</div>


<?php echo '<script'; ?>
 type="text/javascript">
var INISet = {
	prgRecordURL : 'record.php',			// 簡易予約
	prgRecordPlusURL : 'recordp.php',		// 詳細予約
	prgCancelURL : 'cancelReservation.php'		// 予約キャンセル
}
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}

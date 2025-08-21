<?php
/* Smarty version 5.5.1, created on 2025-08-19 23:20:42
  from 'file:reservationTable.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68a4883ab22a98_52363057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9429e6d542b668a564171f4d109d08d9078e5cd7' => 
    array (
      0 => 'reservationTable.html',
      1 => 1754800891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68a4883ab22a98_52363057 (\Smarty\Template $_smarty_tpl) {
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
	var PRG = {
		rec:function(id){
			$.get(INISet.prgCancelURL, { reserve_id: id } ,function(data){
				
				if(data.match(/^error/i)){
					alert(data);
				}
				else {
					$('#resid_' + id ).hide();
				}
			});
		},
		editdialog:function(id) {
			var str;
			str  = '<div class="prg_title">予約ID:' + id + '</div>';
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
		DG.dialog({title:'予約編集',width:500});
		DG.dialog('close');
	});

<?php echo '</script'; ?>
>
<style type="text/css">
<!--
body {padding:4px;margin:0;font-size:10pt;}
a {text-decoration:none;}

table#reservation_table {
    width: 800px;
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

<div><a href="index.php">番組表に戻る</a></div>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('reservations'))) {?>
<table id="reservation_table">
 <tr>
  <th>id</th>
  <th>種別</th>
  <th>ch</th>
  <th>開始</th>
  <th>終了</th>
  <th>モード</th>
  <th>タイトル</th>
  <th>内容</th>
  <th><a href="keywordTable.php">自動ID</a></th>
  <th>削除</th>
 </tr>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('reservations'), 'reserve');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('reserve')->value) {
$foreach0DoElse = false;
?>
 <tr id="resid_<?php echo $_smarty_tpl->getValue('reserve')['id'];?>
" class="ctg_<?php echo $_smarty_tpl->getValue('reserve')['cat'];?>
">
  <td><?php echo $_smarty_tpl->getValue('reserve')['id'];?>
</td>
  <td><?php echo $_smarty_tpl->getValue('reserve')['type'];?>
</td>
  <td id="chid_<?php echo $_smarty_tpl->getValue('reserve')['id'];?>
"><?php echo $_smarty_tpl->getValue('reserve')['channel'];?>
</td>
  <td id="stid_<?php echo $_smarty_tpl->getValue('reserve')['id'];?>
"><?php echo $_smarty_tpl->getValue('reserve')['starttime'];?>
</td>
  <td><?php echo $_smarty_tpl->getValue('reserve')['endtime'];?>
</td>
  <td><?php echo $_smarty_tpl->getValue('reserve')['mode'];?>
</td>
  <td style="cursor: pointer" id="tid_<?php echo $_smarty_tpl->getValue('reserve')['id'];?>
" onClick="javascript:PRG.editdialog('<?php echo $_smarty_tpl->getValue('reserve')['id'];?>
')"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('reserve')['title'], ENT_QUOTES, 'UTF-8', true);?>
</td>
  <td style="cursor: pointer" id="did_<?php echo $_smarty_tpl->getValue('reserve')['id'];?>
" onClick="javascript:PRG.editdialog('<?php echo $_smarty_tpl->getValue('reserve')['id'];?>
')"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('reserve')['description'], ENT_QUOTES, 'UTF-8', true);?>
</td>
  <td><?php if ($_smarty_tpl->getValue('reserve')['autorec']) {
echo $_smarty_tpl->getValue('reserve')['autorec'];
}?></td>
  <td><input type="button" value="削除" onClick="javascript:PRG.rec('<?php echo $_smarty_tpl->getValue('reserve')['id'];?>
')" /></td>
 </tr>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</table>
<?php } else { ?>
  現在、予約はありません
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

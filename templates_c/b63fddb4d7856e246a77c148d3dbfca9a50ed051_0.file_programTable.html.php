<?php
/* Smarty version 5.5.1, created on 2025-08-19 23:22:20
  from 'file:programTable.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68a4889cb57de0_32380243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b63fddb4d7856e246a77c148d3dbfca9a50ed051' => 
    array (
      0 => 'programTable.html',
      1 => 1754800891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68a4889cb57de0_32380243 (\Smarty\Template $_smarty_tpl) {
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
 type="text/javascript" src="js/mdabasic.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var PRG = {
		rec:function(id){
			$.get(INISet.prgRecordURL, { program_id: id } ,function(data){
				if(data.match(/^error/i)){
					alert(data);
				}else{
					$('#resid_' + id).addClass('prg_rec');
				}
			});
		},
		customform:function(id) {
			$('#floatBox4Dialog').dialog('close');
			$.get('reservationform.php', { program_id: id }, function(data) {
				if(data.match(/^error/i)){
					alert(data);
				}
				else {
					var str = data;
					str += '<div style="margin:2em 0 1em 0;text-align:center;"><a href="javascript:PRG.customrec()" class="ui-state-default ui-corner-all ui-dialog-buttonpane button">予約する</a></div>';
					$('#floatBox4Dialog').html(str);
					$('#floatBox4Dialog').dialog('open', 'center');
				}
			});
		},
		customrec:function() {
			var id_syear = $('#id_syear').val();
			var id_smonth = $('#id_smonth').val();
			var id_sday = $('#id_sday').val();
			var id_shour = $('#id_shour').val();
			var id_smin = $('#id_smin').val();
			var id_eyear = $('#id_eyear').val();
			var id_emonth = $('#id_emonth').val();
			var id_eday = $('#id_eday').val();
			var id_ehour = $('#id_ehour').val();
			var id_emin = $('#id_emin').val();
			var id_channel_id = $('#id_channel_id').val();
			var id_record_mode = $('#id_record_mode').val();
			var id_title = $('#id_title').val();
			var id_description = $('#id_description').val();
			var id_category_id = $('#id_category_id ').val();
			var id_program_id = $('#id_program_id').val();
			var with_program_id = $('#id_program_id').attr('checked');
			
			if( ! with_program_id ) id_program_id = 0;
			
			$.post('customReservation.php', { syear: id_syear,
							  smonth: id_smonth,
							  sday: id_sday,
							  shour: id_shour,
							  smin: id_smin,
							  eyear: id_eyear,
							  emonth: id_emonth,
							  eday: id_eday,
							  ehour: id_ehour,
							  emin: id_emin,
							  channel_id: id_channel_id,
							  record_mode: id_record_mode,
							  title: id_title,
							  description: id_description,
							  category_id: id_category_id,
							  program_id: id_program_id }, function(data) {
				if(data.match(/^error/i)){
					$('#floatBox4Dialog').dialog('close');
					alert(data);
				}
				else {
					var id = parseInt(data);
					if( id ) {
						$('#resid_' + id).addClass('prg_rec');
					}
					$('#floatBox4Dialog').dialog('close');
				}
			});
		}
	}
	
	$(document).ready(function () {
		var DG = $('#floatBox4Dialog');
		DG.dialog({title:'録画予約',width:600});
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
table#reservation_table tr.prg_rec  {background-color: #F55;color:#FEE}

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



<div><a href="index.php">番組表に戻る</a>/<a href="keywordTable.php">自動録画キーワード管理へ</a></div>

<div>
絞り込み：
<form method="post" action="programTable.php">
<input type="hidden" name="do_search" value="1" />
検索語句<input type="text" size="20" name="search" value="<?php echo $_smarty_tpl->getValue('search');?>
" /><br />
正規表現使用<input type="checkbox" name="use_regexp" value="1" <?php if ($_smarty_tpl->getValue('use_regexp')) {?>checked<?php }?> />
種別<select name="type">
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('types'), 'type');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('type')->value) {
$foreach0DoElse = false;
?>
  <option value="<?php echo $_smarty_tpl->getValue('type')['value'];?>
" <?php echo $_smarty_tpl->getValue('type')['selected'];?>
><?php echo $_smarty_tpl->getValue('type')['name'];?>
</option>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</select>
局<select name="station">
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('stations'), 'st');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('st')->value) {
$foreach1DoElse = false;
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
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach2DoElse = false;
?>
  <option value="<?php echo $_smarty_tpl->getValue('cat')['id'];?>
" <?php echo $_smarty_tpl->getValue('cat')['selected'];?>
><?php echo $_smarty_tpl->getValue('cat')['name'];?>
</option>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  </select>
開始時<select name="prgtime">
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('prgtimes'), 'prgt');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('prgt')->value) {
$foreach3DoElse = false;
?>
  <option value="<?php echo $_smarty_tpl->getValue('prgt')['value'];?>
" <?php echo $_smarty_tpl->getValue('prgt')['selected'];?>
><?php echo $_smarty_tpl->getValue('prgt')['name'];?>
</option>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  </select>

曜日<select name='weekofday'>
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('weekofdays'), 'day');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('day')->value) {
$foreach4DoElse = false;
?>
  <option value="<?php echo $_smarty_tpl->getValue('day')['id'];?>
" <?php echo $_smarty_tpl->getValue('day')['selected'];?>
><?php echo $_smarty_tpl->getValue('day')['name'];?>
</option>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</select>
<input type="submit" value="絞り込む" />
</form>
</div>



<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('programs'))) {?>
<table id="reservation_table">
 <tr>
  <th>種別</th>
  <th>局名</th>
  <th>番組開始</th>
  <th>番組終了</th>
  <th>タイトル</th>
  <th>内容</th>
  <th>簡易録画</th>
  <th>詳細録画</th>
 </tr>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('programs'), 'program');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('program')->value) {
$foreach5DoElse = false;
?>
 <tr id="resid_<?php echo $_smarty_tpl->getValue('program')['id'];?>
" class="ctg_<?php echo $_smarty_tpl->getValue('program')['cat'];
if ($_smarty_tpl->getValue('program')['rec'] > 0) {?> prg_rec<?php }?>">
  <td><?php echo $_smarty_tpl->getValue('program')['type'];?>
</td>
  <td><?php echo $_smarty_tpl->getValue('program')['station_name'];?>
</td>
  <td><?php echo $_smarty_tpl->getValue('program')['starttime'];?>
</td>
  <td><?php echo $_smarty_tpl->getValue('program')['endtime'];?>
</td>
  <td><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('program')['title'], ENT_QUOTES, 'UTF-8', true);?>
</td>
  <td><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('program')['description'], ENT_QUOTES, 'UTF-8', true);?>
</td>
  <td><input type="button" value="録画" onClick="javascript:PRG.rec('<?php echo $_smarty_tpl->getValue('program')['id'];?>
')" /></td>
  <td><input type="button" value="詳細" onClick="javascript:PRG.customform('<?php echo $_smarty_tpl->getValue('program')['id'];?>
')" /></td>
 </tr>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</table>
<?php } else { ?>
  該当する番組はありません
<?php }?>
<div><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('programs'));?>
件ヒット</div>
<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('programs')) >= 300) {?><div>表示最大300件まで</div><?php }
if ($_smarty_tpl->getValue('do_keyword')) {
if (($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('programs')) < 300)) {?>
<div>
<form method="post" action="keywordTable.php">
  <b>語句:</b><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('search'), ENT_QUOTES, 'UTF-8', true);?>

  <b>正規表現:</b><?php if ($_smarty_tpl->getValue('use_regexp')) {?>使う<?php } else { ?>使わない<?php }?>
  <b>種別:</b><?php if ($_smarty_tpl->getValue('k_type') == "*") {?>すべて<?php } else {
echo $_smarty_tpl->getValue('k_type');
}?>
  <b>局:</b><?php if ($_smarty_tpl->getValue('k_station') == 0) {?>すべて<?php } else {
echo $_smarty_tpl->getValue('k_station_name');
}?>
  <b>カテゴリ:</b><?php if ($_smarty_tpl->getValue('k_category') == 0) {?>すべて<?php } else {
echo $_smarty_tpl->getValue('k_category_name');
}?>
  <b>曜日:</b><?php if ($_smarty_tpl->getValue('weekofday') == 7) {?>なし<?php } else {
echo $_smarty_tpl->getValue('k_weekofday');?>
曜<?php }?>
  <b>時間:</b><?php if ($_smarty_tpl->getValue('prgtime') == 24) {?>なし<?php } else {
echo $_smarty_tpl->getValue('prgtime');?>
時～<?php }?>
  <b>件数:</b><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('programs'));?>

  <input type="hidden" name="add_keyword" value="<?php echo $_smarty_tpl->getValue('do_keyword');?>
" />
  <input type="hidden" name="k_use_regexp" value="<?php echo $_smarty_tpl->getValue('use_regexp');?>
" />
  <input type="hidden" name="k_search" value="<?php echo $_smarty_tpl->getValue('search');?>
" />
  <input type="hidden" name="k_type" value="<?php echo $_smarty_tpl->getValue('k_type');?>
" />
  <input type="hidden" name="k_category" value="<?php echo $_smarty_tpl->getValue('k_category');?>
" />
  <input type="hidden" name="k_station" value="<?php echo $_smarty_tpl->getValue('k_station');?>
" />
  <input type="hidden" name="k_weekofday" value=<?php echo $_smarty_tpl->getValue('weekofday');?>
 />
  <input type="hidden" name="k_prgtime" value=<?php echo $_smarty_tpl->getValue('prgtime');?>
 />
  <b>録画モード:</b><select name="autorec_mode" >
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('autorec_modes'), 'mode', false, NULL, 'recmode', array (
  'index' => true,
));
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('mode')->value) {
$foreach6DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_recmode']->value['index']++;
?>
     <option value="<?php echo ($_smarty_tpl->getValue('__smarty_foreach_recmode')['index'] ?? null);?>
" <?php echo $_smarty_tpl->getValue('mode')['selected'];?>
 ><?php echo $_smarty_tpl->getValue('mode')['name'];?>
</option>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
   </select>
  <br><input type="submit" value="この絞り込みを自動録画キーワードに登録" />
  </form>
</div>
<?php }
}?>

<div id="floatBox4Dialog">jQuery UI Dialog</div>


<?php echo '<script'; ?>
 type="text/javascript">
var INISet = {
	prgRecordURL : 'simpleReservation.php',			// 簡易予約
	prgRecordPlusURL : 'recordp.php',		// 詳細予約
	prgCancelURL : 'cancelReservation.php'		// 予約キャンセル
}
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}

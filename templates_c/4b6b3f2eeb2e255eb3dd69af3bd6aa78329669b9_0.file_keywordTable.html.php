<?php
/* Smarty version 5.5.1, created on 2025-08-19 23:22:35
  from 'file:keywordTable.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68a488ab8ded36_44522549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b6b3f2eeb2e255eb3dd69af3bd6aa78329669b9' => 
    array (
      0 => 'keywordTable.html',
      1 => 1754800891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68a488ab8ded36_44522549 (\Smarty\Template $_smarty_tpl) {
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
 type="text/javascript">
	var PRG = {
		delkey:function(id){
			$.get(INISet.prgDelKeyURL, { keyword_id: id } ,function(data){
				if(data.match(/^error/i)){
					alert(data);
				}else{
					$('#keyid_' + id).hide();
				}
			});
		}
	}
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


-->
</style>


</head>

<body>

<h2><?php echo $_smarty_tpl->getValue('sitetitle');?>
</h2>


<div><a href="programTable.php">番組検索へ</a>/<a href="reservationTable.php">予約一覧へ</a></div>


<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('keywords'))) {?>
<table id="reservation_table">
 <tr>
  <th>id</th>
  <th>検索語句</th>
  <th>正規表現</th>
  <th>種別</th>
  <th>局</th>
  <th>カテゴリ</th>
  <th>曜日</th>
  <th>開始時</ht>
  <th>録画モード</th>
  <th>削除</th>
 </tr>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('keywords'), 'keyword');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('keyword')->value) {
$foreach0DoElse = false;
?>
 <tr id="keyid_<?php echo $_smarty_tpl->getValue('keyword')['id'];?>
">
  <td><a href="recordedTable.php?key=<?php echo $_smarty_tpl->getValue('keyword')['id'];?>
"><?php echo $_smarty_tpl->getValue('keyword')['id'];?>
</a></td>
  <td><a href="recordedTable.php?key=<?php echo $_smarty_tpl->getValue('keyword')['id'];?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('keyword')['keyword'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
  <td><?php if ($_smarty_tpl->getValue('keyword')['use_regexp']) {?>使う<?php } else { ?>使わない<?php }?></td>
  <td><?php echo $_smarty_tpl->getValue('keyword')['type'];?>
</td>
  <td><?php echo $_smarty_tpl->getValue('keyword')['channel'];?>
</td>
  <td><?php echo $_smarty_tpl->getValue('keyword')['category'];?>
</td>
  <td><?php echo $_smarty_tpl->getValue('keyword')['weekofday'];?>
</td>
  <td><?php echo $_smarty_tpl->getValue('keyword')['prgtime'];?>
</td>
  <td><?php echo $_smarty_tpl->getValue('keyword')['autorec_mode'];?>
</td>
  <td><input type="button" value="削除" onClick="javascript:PRG.delkey('<?php echo $_smarty_tpl->getValue('keyword')['id'];?>
')" /></td>
 </tr>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</table>
<?php } else { ?>
  キーワードはありません
<?php }?>



<?php echo '<script'; ?>
 type="text/javascript">
var INISet = {
	prgDelKeyURL : 'deleteKeyword.php'		// キーワード削除
}
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}

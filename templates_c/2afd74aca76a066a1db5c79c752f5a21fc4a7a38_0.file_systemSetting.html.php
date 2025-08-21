<?php
/* Smarty version 5.5.1, created on 2025-08-20 00:46:04
  from 'file:systemSetting.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68a49c3c8bda43_16068497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2afd74aca76a066a1db5c79c752f5a21fc4a7a38' => 
    array (
      0 => 'systemSetting.html',
      1 => 1755418059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68a49c3c8bda43_16068497 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/old/home/tos/public_html/iptvrec/templates';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<title><?php echo $_smarty_tpl->getValue('sitetitle');?>
</title>

<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-1.3.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/messages_ja.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
<!--


	var PRG = {
		thumbs:function() {
			if( $('#id_use_thumbs' ).val() == 0 ) {
				$('#id_ffmpeg').attr('disabled','disabled');
				$('#id_thumbs').attr('disabled','disabled');
			}
			else {
				$('#id_ffmpeg').attr('disabled',false);
				$('#id_thumbs').attr('disabled',false);
			}
		}
	}
	$(document).ready(function(){
		$("#system_setting").validate();
		PRG.thumbs();
	});



-->
<?php echo '</script'; ?>
>


<style type="text/css">
<!--


body {padding:4px;margin:0;font-size:10pt; width: 85%;}
a {text-decoration:none;}

.bold {font-weight:bold;}
.small {font-size:75%;}

div.setting { padding: 0px; margin-left: 20px; margin-bottom: 20px;}


-->
</style>
</head>
<body>

<div><?php echo $_smarty_tpl->getValue('message');?>
</div>

<h2>MySQLデータベース設定</h2>

<form id="system_setting" method="post" action="<?php echo $_smarty_tpl->getValue('post_to');?>
">


<h3>MySQLホスト名</h3>
<div class="setting">
<div class="caption">MySQLサーバーのホスト名を入力してください。</div>
<input type="text" name="db_host" value="<?php echo $_smarty_tpl->getValue('settings')->db_host;?>
" size="15" class="required" />
</div>

<h3>MySQL接続ユーザー名</h3>
<div class="setting">
<div class="caption">MySQLサーバーの接続に使用するユーザー名を入力してください。</div>
<input type="text" name="db_user" value="<?php echo $_smarty_tpl->getValue('settings')->db_user;?>
" size="15" class="required" />
</div>

<h3>MySQL接続パスワード</h3>
<div class="setting">
<div class="caption">MySQLサーバーの接続に使用するパスワードを入力してください。</div>
<input type="text" name="db_pass" value="<?php echo $_smarty_tpl->getValue('settings')->db_pass;?>
" size="15" class="required" />
</div>


<h3>使用データベース名</h3>
<div class="setting">
<div class="caption">使用するデータベース名を設定します。設定するデータベースは接続ユーザーがテーブルの作成等を行う権限を持っている必要があります。</div>
<input type="text" name="db_name" value="<?php echo $_smarty_tpl->getValue('settings')->db_name;?>
" size="15" class="required" />
</div>

<h3>テーブル接頭辞</h3>
<div class="setting">
<div class="caption">テーブル名の冒頭に追加する接頭辞です。epgrecの再インストールを旧テーブルを使用せずに行うようなケースを除き、デフォルトのままで構いません。</div>
<input type="text" name="tbl_prefix" value="<?php echo $_smarty_tpl->getValue('settings')->tbl_prefix;?>
" size="15" class="required" />
</div>


<h2>インストール関連設定</h2>

<h3>インストールURL</h3>
<div class="setting">
<div class="caption">epgrecをLAN内のクライアントから参照することができるURLを設定します。http://localhost…のままで利用することも可能ですが、その場合はビデオの視聴等がサーバー上でしかできないなどの制限が生じます。</div>
<input type="text" name="install_url" value="<?php echo $_smarty_tpl->getValue('settings')->install_url;?>
" size="40" class="required" />
</div>


<h3>録画保存ディレクトリ</h3>
<div class="setting">
<div class="caption">録画ファイルを保存するディレクトリを<?php echo $_smarty_tpl->getValue('install_path');?>
からの相対ディレクトリで設定します。先頭に/が必ず必要です。設定するディレクトリには十分な空き容量があり、書き込み権が必要です。また、URLで参照可能なディレクトリなディレクトリを設定しないとASFによる録画の視聴ができません。デフォルトは/video（つまり<?php echo $_smarty_tpl->getValue('install_path');?>
/video）で、とくに問題がなければデフォルトを推奨します。</div>
<input type="text" name="spool" value="<?php echo $_smarty_tpl->getValue('settings')->spool;?>
" size="15" class="required" />
</div>

<h3>サムネールの使用</h3>
<div class="setting">
<div class="caption">録画済み一覧にサムネールを入れるかどうかを設定します。サムネールを利用するにはffmpegが必要です。ffmpegをお持ちでない方は「使用しない」を設定してください。</div>
<select name="use_thumbs" id="id_use_thumbs" onChange="javascript:PRG.thumbs()" >
  <option value="0" <?php if ($_smarty_tpl->getValue('settings')->use_thumbs == 0) {?> selected <?php }?>>使用しない</option>
  <option value="1" <?php if ($_smarty_tpl->getValue('settings')->use_thumbs == 1) {?> selected <?php }?>>使用する</option>
</select>
</div>

<h3>ffmpegのパス</h3>
<div class="setting">
<div class="caption">サムネール作成に使うffmpegのパスを設定します。フルパスを設定してください。</div>
<input type="text" id="id_ffmpeg" name="ffmpeg" value="<?php echo $_smarty_tpl->getValue('settings')->ffmpeg;?>
" size="40" class="required" />
</div>


<h3>サムネール保存ディレクトリ</h3>
<div class="setting">
<div class="caption">サムネールを保存するディレクトリを<?php echo $_smarty_tpl->getValue('install_path');?>
からの相対パスで設定します。設定の方法、条件は録画保存ディレクトリと同様です。</div>
<input type="text" id="id_thumbs" name="thumbs" value="<?php echo $_smarty_tpl->getValue('settings')->thumbs;?>
" size="15" class="required" />
</div>

<h3>プレイリストの設定</h3>
<div class="setting">
<div class="caption">録画に使用するIPTVのプレイリストURLを設定してください。</div>

<div><b>m3uプレイリストURL：</b><input type="text" name="m3u_url" value="<?php echo $_smarty_tpl->getValue('settings')->m3u_url;?>
" size="30" class="required" /></div>
</div>

<h3>EPG取得用テンポラリファイルの設定</h3>
<div class="setting">
<div class="caption">EPG取得に用いる録画データとXMLデータのパスを設定します。通常、この設定を変える必要はありませんが、/tmpに十分な空き容量（500MB程度）がない環境では異なるパスを設定してください。パスはWebサーバーから書き込み可能になっている必要があります</div>

<div><b>録画データ：</b><input type="text" name="temp_data" value="<?php echo $_smarty_tpl->getValue('settings')->temp_data;?>
" size="30" class="required" /></div>
<div><b>XMLファイル：</b><input type="text" name="temp_xml" value="<?php echo $_smarty_tpl->getValue('settings')->temp_xml;?>
" size="30" class="required" /></div>
</div>

<h3>使用コマンドのパス設定</h3>
<div class="setting">
<div class="caption">epgrecが内部的に使用するコマンドのパスを設定します。ほとんどの場合、設定を変える必要はないはずです。</div>
<div><b>epgdump：</b><input type="text" name="epgdump" value="<?php echo $_smarty_tpl->getValue('settings')->epgdump;?>
" size="30" class="required" /></div>
<div><b>at：</b><input type="text" name="at" value="<?php echo $_smarty_tpl->getValue('settings')->at;?>
" size="30" class="required" /></div>
<div><b>atrm：</b><input type="text" name="atrm" value="<?php echo $_smarty_tpl->getValue('settings')->atrm;?>
" size="30" class="required" /></div>
<div><b>sleep：</b><input type="text" name="sleep" value="<?php echo $_smarty_tpl->getValue('settings')->sleep;?>
" size="30" class="required" /></div>
</div>


<input type="submit" value="設定を保存する" id="system_setting-submit" />
</form>
</body>
</html>
<?php }
}

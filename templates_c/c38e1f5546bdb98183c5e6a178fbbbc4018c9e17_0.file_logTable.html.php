<?php
/* Smarty version 5.5.1, created on 2025-08-19 23:20:56
  from 'file:logTable.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68a48848364957_12489221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c38e1f5546bdb98183c5e6a178fbbbc4018c9e17' => 
    array (
      0 => 'logTable.html',
      1 => 1754800891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68a48848364957_12489221 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/old/home/tos/public_html/iptvrec/templates';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $_smarty_tpl->getValue('sitetitle');?>
</title>
<meta http-equiv="Content-Style-Type" content="text/css">


<style type="text/css">
<!--
body {padding:4px;margin:0;font-size:10pt;}
a {text-decoration:none;}

table#log_table {
    width: 800px;
    border: 1px #BBB solid;
    border-collapse: collapse;
    border-spacing: 0;
}

table#log_table th {
    padding: 5px;
    border: #E3E3E3 solid;
    border-width: 0 0 1px 1px;
    background: #BBB;
    font-weight: bold;
    line-height: 120%;
    text-align: center;
}
table#log_table td {
    padding: 5px;
    border: 1px #BBB solid;
    border-width: 0 0 1px 1px;
    text-align: center;
}

table#log_table td.errorlevel0 {background-color: #FFFFFF;}
table#log_table td.errorlevel1 {background-color: red;}


-->
</style>


</head>

<body>

<h2><?php echo $_smarty_tpl->getValue('sitetitle');?>
</h2>

<div><a href="index.php">番組表に戻る</a></div>

<table id="log_table">
 <tr>
  <th>レベル</th>
  <th>日時</th>
  <th>内容</th>
 </tr>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('logs'), 'log');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('log')->value) {
$foreach0DoElse = false;
?>
 <tr>
  <td class="errorlevel<?php echo $_smarty_tpl->getValue('log')->level;?>
">
    <?php if ($_smarty_tpl->getValue('log')->level == 0) {?>情報
    <?php } elseif ($_smarty_tpl->getValue('log')->level == 1) {?>エラー
    <?php }?>
  </td>
  <td><?php echo $_smarty_tpl->getValue('log')->logtime;?>
</td>
  <td><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('log')->message, ENT_QUOTES, 'UTF-8', true);?>
</td>
 </tr>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</body>
</html>
<?php }
}

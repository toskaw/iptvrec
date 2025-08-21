<?php
/* Smarty version 5.5.1, created on 2025-08-20 08:49:24
  from 'file:reservationform.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68a50d84196774_08909408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f405b4ee033908b1e2d0d3211814ddcce994847' => 
    array (
      0 => 'reservationform.html',
      1 => 1754800891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68a50d84196774_08909408 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/old/home/tos/public_html/iptvrec/templates';
?><form method="post" action="customReservation.php">
<div>
<span class="labelLeft">開始日時</span>
        <input type="text" size="4" name="syear" id="id_syear" value="<?php echo $_smarty_tpl->getValue('syear');?>
" />年
        <input type="text" size="2" name="smonth" id="id_smonth" value="<?php echo $_smarty_tpl->getValue('smonth');?>
" />月
        <input type="text" size="2" name="sday" id="id_sday" value="<?php echo $_smarty_tpl->getValue('sday');?>
" />日
        <input type="text" size="2" name="shour" id="id_shour" value="<?php echo $_smarty_tpl->getValue('shour');?>
" />時
        <input type="text" size="2" name="smin" id="id_smin" value="<?php echo $_smarty_tpl->getValue('smin');?>
" />分～
    </div>
<div>
    <span class="labelLeft">終了日時</span>
        <input type="text" size="4" name="eyear" id="id_eyear" value="<?php echo $_smarty_tpl->getValue('eyear');?>
" />年
        <input type="text" size="2" name="emonth" id="id_emonth" value="<?php echo $_smarty_tpl->getValue('emonth');?>
" />月
        <input type="text" size="2" name="eday" id="id_eday" value="<?php echo $_smarty_tpl->getValue('eday');?>
" />日
        <input type="text" size="2" name="ehour" id="id_ehour" value="<?php echo $_smarty_tpl->getValue('ehour');?>
" />時
        <input type="text" size="2" name="emin" id="id_emin" value="<?php echo $_smarty_tpl->getValue('emin');?>
" />分
    </div>
<div>
<span class="labelLeft">種別/ch</span>
   <?php echo $_smarty_tpl->getValue('type');?>
:<?php echo $_smarty_tpl->getValue('channel');?>
ch
       <input type="hidden" name="channel_id" id="id_channel_id" value="<?php echo $_smarty_tpl->getValue('channel_id');?>
" />
   </div>
<div>
<span class="labelLeft">録画モード</span>
    <select name="record_mode" id="id_record_mode">
        <?php
$__section_mode_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('record_mode')) ? count($_loop) : max(0, (int) $_loop));
$__section_mode_0_total = $__section_mode_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_mode'] = new \Smarty\Variable(array());
if ($__section_mode_0_total !== 0) {
for ($__section_mode_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_mode']->value['index'] = 0; $__section_mode_0_iteration <= $__section_mode_0_total; $__section_mode_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_mode']->value['index']++){
?>
          <option value="<?php echo ($_smarty_tpl->getValue('__smarty_section_mode')['index'] ?? null);?>
"><?php echo $_smarty_tpl->getValue('record_mode')[($_smarty_tpl->getValue('__smarty_section_mode')['index'] ?? null)]['name'];?>
</option>
        <?php
}
}
?>
        </select>
     </div>
<div>
<span class="labelLeft">タイトル</span>
   <input type="text" size="40" name="title" id="id_title" value="<?php echo $_smarty_tpl->getValue('title');?>
" /></div>

<div>
<span class="labelLeft">概要</span>
    <textarea name="description" id="id_description" rows="4" cols="40" ><?php echo $_smarty_tpl->getValue('description');?>
</textarea></div>

<div>
<span class="labelLeft">カテゴリ</span>
      <select name="category_id" id="id_category_id">
      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cats'), 'cat');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach0DoElse = false;
?>
        <option value="<?php echo $_smarty_tpl->getValue('cat')['id'];?>
" <?php echo $_smarty_tpl->getValue('cat')['selected'];?>
><?php echo $_smarty_tpl->getValue('cat')['name'];?>
</option>
      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </select>
    </div>

<div>
<span class="labelLeft">番組ID保持</span>
  <input type="checkbox" name="program_id" id="id_program_id" value="<?php echo $_smarty_tpl->getValue('program_id');?>
" checked /></div>
</form>
<?php }
}

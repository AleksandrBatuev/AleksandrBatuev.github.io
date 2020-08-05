<?php
/* Smarty version 3.1.33, created on 2020-07-31 12:51:43
  from 'D:\os\OpenServer\domains\test.local\setup\templates\complete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f23e9af1aada6_27780257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7fcab2a84b9edd2622d78dead898e4ab511a288' => 
    array (
      0 => 'D:\\os\\OpenServer\\domains\\test.local\\setup\\templates\\complete.tpl',
      1 => 1582784564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f23e9af1aada6_27780257 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="install" action="?action=complete" method="post">
<div>
	<h2><?php echo $_smarty_tpl->tpl_vars['_lang']->value['thank_installing'];
echo $_smarty_tpl->tpl_vars['app_name']->value;?>
.</h2>

    <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
    <div class="note">
    <h3><?php echo $_smarty_tpl->tpl_vars['_lang']->value['cleanup_errors_title'];?>
</h3>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
            <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><hr />
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <br />
    <?php }?>
	<p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['please_select_login'];?>
</p>
</div>
<br />

<div class="setup_navbar">
    <label><input type="submit" id="modx-next" name="proceed" value="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['login'];?>
" autofocus="autofocus" /></label>
    <br /><br />
    <span class="cleanup">
        <label><input type="checkbox" value="1" id="cleanup" name="cleanup"<?php if ($_smarty_tpl->tpl_vars['cleanup']->value) {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['_lang']->value['delete_setup_dir'];?>
</label>
    </span>
</div>
</form><?php }
}

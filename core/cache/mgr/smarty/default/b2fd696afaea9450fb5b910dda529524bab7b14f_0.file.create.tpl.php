<?php
/* Smarty version 3.1.33, created on 2020-07-31 13:38:45
  from 'D:\os\OpenServer\domains\test.local\manager\templates\default\resource\staticresource\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f23f4b52a0b37_49499760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2fd696afaea9450fb5b910dda529524bab7b14f' => 
    array (
      0 => 'D:\\os\\OpenServer\\domains\\test.local\\manager\\templates\\default\\resource\\staticresource\\create.tpl',
      1 => 1582784564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f23f4b52a0b37_49499760 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modx-panel-static-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }
}
}

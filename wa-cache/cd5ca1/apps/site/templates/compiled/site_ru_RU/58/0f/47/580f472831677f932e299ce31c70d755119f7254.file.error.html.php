<?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 18:00:32
         compiled from "/var/www/web-magaz/wa-apps/site/themes/default/error.html" */ ?>
<?php /*%%SmartyHeaderCode:5281660469cd5d401483b8-68858685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '580f472831677f932e299ce31c70d755119f7254' => 
    array (
      0 => '/var/www/web-magaz/wa-apps/site/themes/default/error.html',
      1 => 1775065760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5281660469cd5d401483b8-68858685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_code' => 0,
    'error_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_69cd5d40152aa8_17617898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69cd5d40152aa8_17617898')) {function content_69cd5d40152aa8_17617898($_smarty_tpl) {?><h1>
	<?php if ($_smarty_tpl->tpl_vars['error_code']->value){?><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
. <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['error_message']->value){?><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
<?php }else{ ?>Ошибка<?php }?>
</h1>
Запрашиваемый ресурс недоступен.
<?php }} ?>
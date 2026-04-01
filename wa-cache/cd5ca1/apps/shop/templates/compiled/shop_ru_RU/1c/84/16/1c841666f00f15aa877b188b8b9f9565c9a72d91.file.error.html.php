<?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 18:07:07
         compiled from "/var/www/web-magaz/wa-data/public/site/themes/default/error.html" */ ?>
<?php /*%%SmartyHeaderCode:174553558569cd5ecb13dcc7-12920853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c841666f00f15aa877b188b8b9f9565c9a72d91' => 
    array (
      0 => '/var/www/web-magaz/wa-data/public/site/themes/default/error.html',
      1 => 1775066671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174553558569cd5ecb13dcc7-12920853',
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
  'unifunc' => 'content_69cd5ecb1483c5_03217141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69cd5ecb1483c5_03217141')) {function content_69cd5ecb1483c5_03217141($_smarty_tpl) {?><h1>
	<?php if ($_smarty_tpl->tpl_vars['error_code']->value){?><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
. <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['error_message']->value){?><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
<?php }else{ ?>Ошибка<?php }?>
</h1>
Запрашиваемый ресурс недоступен.
<?php }} ?>
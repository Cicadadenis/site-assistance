<?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 18:04:49
         compiled from "/var/www/web-magaz/wa-apps/site/templates/actions-legacy/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:78744859469cd5e419a6ba1-20458532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31de4b542722d9419d98fa8eae56b7058980ec88' => 
    array (
      0 => '/var/www/web-magaz/wa-apps/site/templates/actions-legacy/backend/BackendLoc.html',
      1 => 1775065754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78744859469cd5e419a6ba1-20458532',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_69cd5e419ac7b9_41496463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69cd5e419ac7b9_41496463')) {function content_69cd5e419ac7b9_41496463($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>
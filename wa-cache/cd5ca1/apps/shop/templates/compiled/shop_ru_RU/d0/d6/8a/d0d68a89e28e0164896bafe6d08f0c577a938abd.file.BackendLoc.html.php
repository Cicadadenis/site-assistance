<?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 17:57:54
         compiled from "/var/www/web-magaz/wa-apps/shop/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:196552941169cd5ca282c463-05241371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0d68a89e28e0164896bafe6d08f0c577a938abd' => 
    array (
      0 => '/var/www/web-magaz/wa-apps/shop/templates/actions/backend/BackendLoc.html',
      1 => 1775065798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196552941169cd5ca282c463-05241371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_69cd5ca2852f27_79992199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69cd5ca2852f27_79992199')) {function content_69cd5ca2852f27_79992199($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>
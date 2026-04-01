<?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 18:06:29
         compiled from "/var/www/web-magaz/wa-apps/photos/themes/default/my.nav.html" */ ?>
<?php /*%%SmartyHeaderCode:132668678269cd5ea5383b24-90691245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '719786bfeb644b61e2c0a6cc635c09c1a7508542' => 
    array (
      0 => '/var/www/web-magaz/wa-apps/photos/themes/default/my.nav.html',
      1 => 1775065731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132668678269cd5ea5383b24-90691245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_app' => 0,
    'wa' => 0,
    'my_nav_selected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_69cd5ea538a113_00498125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69cd5ea538a113_00498125')) {function content_69cd5ea538a113_00498125($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['my_app']->value==$_smarty_tpl->tpl_vars['wa']->value->app()){?>
    <li class="photos <?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=='profile'){?>selected<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/my');?>
">Мой профиль</a>
    </li>
<?php }?><?php }} ?>
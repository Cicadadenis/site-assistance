<?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 18:06:29
         compiled from "/var/www/web-magaz/wa-apps/blog/themes/default/my.nav.html" */ ?>
<?php /*%%SmartyHeaderCode:48839893169cd5ea53173c5-52425221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7db9bccf993594f9c343e45dbeb6af2a71da85ab' => 
    array (
      0 => '/var/www/web-magaz/wa-apps/blog/themes/default/my.nav.html',
      1 => 1775065741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48839893169cd5ea53173c5-52425221',
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
  'unifunc' => 'content_69cd5ea531d9c5_04136183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69cd5ea531d9c5_04136183')) {function content_69cd5ea531d9c5_04136183($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['my_app']->value==$_smarty_tpl->tpl_vars['wa']->value->app()){?>
    <li class="blog <?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=='profile'){?>selected<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/my');?>
">Мой профиль</a>
    </li>
<?php }?>
<?php }} ?>
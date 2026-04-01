<?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 18:06:29
         compiled from "/var/www/web-magaz/wa-data/public/site/themes/default/my.nav.html" */ ?>
<?php /*%%SmartyHeaderCode:498057069cd5ea53a5ac8-92278145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77fe3e80fec1d3fc625e584ec2fe87d2e0ae6aad' => 
    array (
      0 => '/var/www/web-magaz/wa-data/public/site/themes/default/my.nav.html',
      1 => 1775066671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '498057069cd5ea53a5ac8-92278145',
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
  'unifunc' => 'content_69cd5ea53ab901_20690652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69cd5ea53ab901_20690652')) {function content_69cd5ea53ab901_20690652($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['my_app']->value==$_smarty_tpl->tpl_vars['wa']->value->app()){?>
    <li class="site <?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=='profile'){?>selected<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/myProfile');?>
">Мой профиль</a>
    </li>
<?php }?><?php }} ?>
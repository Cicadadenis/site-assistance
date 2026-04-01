<?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 17:57:57
         compiled from "/var/www/web-magaz/wa-apps/shop/templates/actions/tutorial/TutorialPayment.ru_RU.html" */ ?>
<?php /*%%SmartyHeaderCode:95388815569cd5ca57529a3-10249770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4dbff372005a782132ffeab329a41d3bd45b85a' => 
    array (
      0 => '/var/www/web-magaz/wa-apps/shop/templates/actions/tutorial/TutorialPayment.ru_RU.html',
      1 => 1775065796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95388815569cd5ca57529a3-10249770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'stepArray' => 0,
    'step' => 0,
    'active' => 0,
    'key' => 0,
    'next_step_key' => 0,
    'wa_app_static_url' => 0,
    'prev_step' => 0,
    'next_step' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_69cd5ca57855d7_45770345',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69cd5ca57855d7_45770345')) {function content_69cd5ca57855d7_45770345($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['actions']->value)){?>
    <?php $_smarty_tpl->tpl_vars['stepArray'] = new Smarty_variable(array_keys($_smarty_tpl->tpl_vars['actions']->value), null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['step'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['step']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stepArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['step']->key => $_smarty_tpl->tpl_vars['step']->value){
$_smarty_tpl->tpl_vars['step']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['step']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['step']->value===$_smarty_tpl->tpl_vars['active']->value){?>
            <?php $_smarty_tpl->tpl_vars['next_step_key'] = new Smarty_variable($_smarty_tpl->tpl_vars['key']->value, null, 0);?>
        <?php }?>
    <?php } ?>
    <?php if (isset($_smarty_tpl->tpl_vars['stepArray']->value[$_smarty_tpl->tpl_vars['next_step_key']->value+1])){?>
        <?php $_smarty_tpl->tpl_vars['next_step'] = new Smarty_variable($_smarty_tpl->tpl_vars['stepArray']->value[$_smarty_tpl->tpl_vars['next_step_key']->value+1], null, 0);?>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['stepArray']->value[$_smarty_tpl->tpl_vars['next_step_key']->value-1])){?>
        <?php $_smarty_tpl->tpl_vars['prev_step'] = new Smarty_variable($_smarty_tpl->tpl_vars['stepArray']->value[$_smarty_tpl->tpl_vars['next_step_key']->value-1], null, 0);?>
    <?php }?>
<?php }?>

<div class="s-unboarding-wrapper">
    <h1>Настройте способы оплаты</h1>

    <p><img src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/backend/tutorial/ru/step-4-1.png" alt=""></p>

    <div class="s-actions-wrapper">
        <a href="<?php if (isset($_smarty_tpl->tpl_vars['prev_step']->value)&&$_smarty_tpl->tpl_vars['actions']->value[$_smarty_tpl->tpl_vars['prev_step']->value]){?><?php echo $_smarty_tpl->tpl_vars['actions']->value[$_smarty_tpl->tpl_vars['prev_step']->value]['href'];?>
<?php }else{ ?>javascript:void(0)<?php }?>" class="button yellow">&larr; Назад</a>
        <a href="<?php if (isset($_smarty_tpl->tpl_vars['next_step']->value)&&$_smarty_tpl->tpl_vars['actions']->value[$_smarty_tpl->tpl_vars['next_step']->value]){?><?php echo $_smarty_tpl->tpl_vars['actions']->value[$_smarty_tpl->tpl_vars['next_step']->value]['href'];?>
<?php }else{ ?>javascript:void(0)<?php }?>" class="button green">Следующий шаг &rarr;</a>
    </div>

    <script>
        (function ($) {
            new TutorialSidebar({
                $wrapper: $("#tutorial-actions"),
                active_step: <?php echo json_encode($_smarty_tpl->tpl_vars['active']->value);?>
,
                $actions: <?php echo json_encode($_smarty_tpl->tpl_vars['actions']->value);?>

            });
        })(jQuery);
    </script>
</div><?php }} ?>
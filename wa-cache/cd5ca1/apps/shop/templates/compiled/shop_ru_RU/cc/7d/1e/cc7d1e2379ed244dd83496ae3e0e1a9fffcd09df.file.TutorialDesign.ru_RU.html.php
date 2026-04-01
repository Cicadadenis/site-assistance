<?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 17:57:52
         compiled from "/var/www/web-magaz/wa-apps/shop/templates/actions/tutorial/TutorialDesign.ru_RU.html" */ ?>
<?php /*%%SmartyHeaderCode:51300926169cd5ca0a383c1-44879023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc7d1e2379ed244dd83496ae3e0e1a9fffcd09df' => 
    array (
      0 => '/var/www/web-magaz/wa-apps/shop/templates/actions/tutorial/TutorialDesign.ru_RU.html',
      1 => 1775065796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51300926169cd5ca0a383c1-44879023',
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
    'theme_names' => 0,
    '_themes' => 0,
    'letter' => 0,
    'wa_app_static_url' => 0,
    'prev_step' => 0,
    'next_step' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_69cd5ca0a762d7_79889379',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69cd5ca0a762d7_79889379')) {function content_69cd5ca0a762d7_79889379($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['actions']->value)){?>
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
<?php $_smarty_tpl->tpl_vars['_themes'] = new Smarty_variable(join('», «',$_smarty_tpl->tpl_vars['theme_names']->value), null, 0);?>
<?php if (count($_smarty_tpl->tpl_vars['theme_names']->value)==1){?><?php $_smarty_tpl->tpl_vars['letter'] = new Smarty_variable('а', null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['letter'] = new Smarty_variable('ы', null, 0);?><?php }?>

<div class="s-unboarding-wrapper">
    <h1>Выберите и настройте тему дизайна</h1>

    <div class="s-tutorial-block">
        <p>
            <?php if (!empty($_smarty_tpl->tpl_vars['_themes']->value)){?>
            В вашем магазине уже установлен<?php echo $_smarty_tpl->tpl_vars['letter']->value;?>
 тем<?php echo $_smarty_tpl->tpl_vars['letter']->value;?>
 дизайна <strong>«<?php echo $_smarty_tpl->tpl_vars['_themes']->value;?>
»</strong><br/>
            Настройте ее как вам нужно на вкладке «Оформление» в разделе «Магазин → Витрина».
            <?php }else{ ?>
            В вашем магазине еще не установлены темы дизайна.
            <?php }?>
        </p>

        <p><img src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/backend/tutorial/ru/step-3-1.png"></p>
    </div>

    <div class="s-tutorial-block">
        <p>Если вам нужен совсем другой дизайн, выберите и установите любую тему дизайна из магазина Webasyst на вкладке «Темы дизайна». Темы есть бесплатные и платные. Все они устанавливаются автоматически — одной кнопкой.</p>

        <p><img src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/backend/tutorial/ru/step-3-2.png"></p>

        <p>После установки новой темы дизайна выберите ее в разделе «Магазин → Витрина» на вкладке «Настройки».</p>

        <div class="video-links">
            Посмотрите видеоурок
            <ul class="menu-v compact">
                <li><a href="https://www.youtube.com/watch?v=cbZa8wykuYA&list=PL3TRPSqkoZRlZ7FcxdpmykLtVDKPUGpKz&index=8" target="_blank">Как настраивать дизайн витрины <i class="icon16 new-window"></i></a></li>
            </ul>
        </div>
    </div>

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
</div>
<?php }} ?>
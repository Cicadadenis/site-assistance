<?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 17:58:07
         compiled from "/var/www/web-magaz/wa-apps/shop/templates/actions/backend/BackendSettings.html" */ ?>
<?php /*%%SmartyHeaderCode:177778197269cd5caf80ac40-83843821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '974f00d01c09a66ea8bc27a4eefed119e8a51994' => 
    array (
      0 => '/var/www/web-magaz/wa-apps/shop/templates/actions/backend/BackendSettings.html',
      1 => 1775065798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177778197269cd5caf80ac40-83843821',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_marketplaces' => 0,
    'backend_settings' => 0,
    '_' => 0,
    'is_premium' => 0,
    'wa' => 0,
    'wa_app_url' => 0,
    'wa_app_static_url' => 0,
    '_loading' => 0,
    'wa_backend_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_69cd5caf850246_39420784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69cd5caf850246_39420784')) {function content_69cd5caf850246_39420784($_smarty_tpl) {?><div class="sidebar right15px">
    <div class="block s-nolevel2-sidebar"></div>
</div>

<div class="sidebar left200px">
    <div class="block s-nolevel2-sidebar s-inner-sidebar">
        <ul class="menu-v with-icons stack" id="s-settings-menu">
            <li>
                <a href="?action=settings#/general/">
                    <i class="icon16 ss settings-bw"></i>Общие настройки
                </a>
            </li>
            <li>
                <a href="?action=settings#/schedule/">
                    <i class="icon16 ss schedule-bw"></i>Режим работы
                </a>
            </li>
            <?php if (!empty($_smarty_tpl->tpl_vars['show_marketplaces']->value)){?>
                <li>
                    <a href="?action=settings#/marketplaces/">
                        <i class="icon16 ss marketplaces"></i>Маркетплейсы
                    </a>
                </li>
            <?php }?>

            <!-- plugin hook: 'backend_settings.sidebar_top_li' -->
            
            <?php if (!empty($_smarty_tpl->tpl_vars['backend_settings']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['sidebar_top_li']);?>
<?php } ?><?php }?>


            <li class="top-padded">
                <a href="?action=settings#/typefeat/">
                    <i class="icon16 ss features-bw"></i>Типы и характеристики товаров
                </a>
            </li>
            <?php if (!empty($_smarty_tpl->tpl_vars['is_premium']->value)){?>
                <li>
                    <a href="?action=settings#/unit/">
                        <i class="icon16 ss units"></i>Единицы измерения количества товаров и условия добавления в корзину
                    </a>
                </li>
                <li>
                    <a href="?action=settings#/compatibility/">
                        <i class="icon16 ss compatibility"></i>Совместимость с лицензией «ПРЕМИУМ»
                    </a>
                </li>
            <?php }?>
            <li>
                <a href="?action=settings#/images/">
                    <i class="icon16 ss camera-bw"></i>Изображения
                </a>
            </li>
            <li>
                <a href="?action=settings#/stock/">
                    <i class="icon16 ss cube-bw"></i>Склады
                </a>
            </li>
            <li>
                <a href="?action=settings#/search/">
                    <i class="icon16 ss search-bw"></i>Поиск товаров
                </a>
            </li>
            <!-- plugin hook: 'backend_settings.sidebar_middle_li' -->
            
            <?php if (!empty($_smarty_tpl->tpl_vars['backend_settings']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['sidebar_middle_li']);?>
<?php } ?><?php }?>
            <li>
                <a href="?action=settings#/orderStates/">
                    <i class="icon16 ss flag-bw"></i>Статусы заказов
                </a>
            </li>
            <li>
                <a href="?action=settings#/orderEditor/">
                    <i class="icon16 ss fields-bw"></i>Редактирование заказов
                </a>
            </li>
            <li>
                <a href="?action=settings#/shipping/">
                    <i class="icon16 ss shipping-bw"></i>Доставка
                </a>
            </li>
            <li>
                <a href="?action=settings#/couriers/">
                    <i class="icon16 ss couriers-bw"></i>Курьеры
                </a>
            </li>
            <li>
                <a href="?action=settings#/payment/">
                    <i class="icon16 ss payment-bw"></i>Оплата
                </a>
            </li>
            <li>
                <a href="?action=settings#/checkout/">
                    <i class="icon16 ss cart-bw"></i>Оформление заказа
                </a>
            </li>
            <li>
                <a href="?action=settings#/currencies/">
                    <i class="icon16 ss currency-bw"></i>Валюты
                </a>
            </li>
            <li>
                <a href="?action=settings#/taxes/">
                    <i class="icon16 ss percent-bw"></i>Налоги
                </a>
            </li>
            <li>
                <a href="?action=settings#/printform/">
                    <i class="icon16 ss print-forms-bw"></i>Печатные формы
                </a>
            </li>
            <li>
                <a href="?action=settings#/notifications/">
                    <i class="icon16 ss notification-bw"></i>Уведомления
                </a>
            </li>
            <li>
                <a href="?action=settings#/analytics/">
                    <i class="icon16 ss dashboard-bw"></i>Аналитика
                </a>
            </li>

            <li>
                <a href="?action=settings#/premium/">
                    <i class="icon16 ss compatibility"></i>Возможности лицензии «ПРЕМИУМ»
                </a>
            </li>

            <?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->isAdmin()){?>
                <li class="top-padded">
                    <a href="?action=settings#/reset/">
                        <i class="icon16 ss reset-bw"></i>Сброс
                    </a>
                </li>
            <?php }?>
            <!-- plugin hook: 'backend_settings.sidebar_bottom_li' -->
            
            <?php if (!empty($_smarty_tpl->tpl_vars['backend_settings']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['sidebar_bottom_li']);?>
<?php } ?><?php }?>

        </ul>

        <div class="align-center hr" style="padding: 20px 0;">
            <p class="hint"><?php echo sprintf('Для настройки <em>скидок</em>, <em>триггерных рассылок</em>, <em>рекомендаций</em> и <em>партнерской программы</em> перейдите в раздел «%s».',"<a href='".((string)$_smarty_tpl->tpl_vars['wa_app_url']->value)."marketing/'>Маркетинг</a>");?>
</p>
        </div>
    </div>
</div>

<div class="content left200px right15px s-nolevel2-box" id="s-settings-content">
    <div class="block double-padded s-settings-form">
        Загрузка...
        <i class="icon16 loading"></i>
    </div>

    <div class="clear"></div>
    <!-- settings placeholder -->
</div>

<div class="clear"></div>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', "_loading", null); ob_start(); ?><?php echo _w('Loading...');?>
 <i class="icon16 loading"></i><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/settings.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script>
    $.settings.init({
        debug: true,
        loading: <?php echo json_encode($_smarty_tpl->tpl_vars['_loading']->value);?>
,
        backend_url: <?php echo json_encode($_smarty_tpl->tpl_vars['wa_backend_url']->value);?>
,
        shop_marketing_url: <?php echo json_encode(((string)$_smarty_tpl->tpl_vars['wa_app_url']->value)."marketing/");?>

    });
</script>
<?php }} ?>
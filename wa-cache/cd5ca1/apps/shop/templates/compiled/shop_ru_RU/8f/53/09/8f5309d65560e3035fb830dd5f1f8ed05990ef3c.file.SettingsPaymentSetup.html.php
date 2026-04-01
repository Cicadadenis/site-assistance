<?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 18:00:16
         compiled from "/var/www/web-magaz/wa-apps/shop/templates/actions/settings/SettingsPaymentSetup.html" */ ?>
<?php /*%%SmartyHeaderCode:174922819769cd5d30116014-34733045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f5309d65560e3035fb830dd5f1f8ed05990ef3c' => 
    array (
      0 => '/var/www/web-magaz/wa-apps/shop/templates/actions/settings/SettingsPaymentSetup.html',
      1 => 1775065795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174922819769cd5d30116014-34733045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'plugin' => 0,
    'plugin_id' => 0,
    'payment_types' => 0,
    'payment_type' => 0,
    'type_name' => 0,
    'shipping_types' => 0,
    'shipping_type' => 0,
    'shipping' => 0,
    'p' => 0,
    'settings_html' => 0,
    'guide_html' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_69cd5d30146985_46185192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69cd5d30146985_46185192')) {function content_69cd5d30146985_46185192($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['error']->value)){?>
    <h1 class="js-bread-crumbs"><a href="#/payment/" class="back">&larr; Оплата</a>&nbsp;Ошибка</h1>
    <span class="errormsg"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
<?php }else{ ?>
<form>
    <!-- GENERAL PAYMENT OPTION PARAMS -->
    <div class="field-group">

        <div class="block half-padded float-right">
            <ul class="menu-h with-icons">
            <?php if (isset($_smarty_tpl->tpl_vars['plugin']->value['status'])&&!empty($_smarty_tpl->tpl_vars['plugin']->value['id'])){?>
                <li><a href="#/payment/plugin/delete/<?php echo $_smarty_tpl->tpl_vars['plugin']->value['id'];?>
/" class="js-action js-confirm" data-confirm-text="Этот способ оплаты будет полностью удален. Продолжить?" style="position: relative; z-index: 99;"><i class="icon16 delete"></i>Удалить этот способ оплаты</a></li>
            <?php }?>
            </ul>
        </div>

        <h1 class="js-bread-crumbs">
            <a href="#/payment/" class="back">&larr; Оплата</a>&nbsp;<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['plugin']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

            <span class="hint float-right s-payment-plugin-id">id:<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['plugin']->value['plugin'], ENT_QUOTES, 'UTF-8', true);?>
</span>
        </h1>

        <div class="field">
            <div class="name">
            <label for="s-payment-plugin-status">Включено</label>
            </div>
            <div class="value">
                <input name="payment[id]" type="hidden" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['plugin_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                <input name="payment[plugin]" type="hidden" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['plugin']->value['plugin'], ENT_QUOTES, 'UTF-8', true);?>
">
                <input name="payment[status]" type="checkbox"<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['status'])){?> checked="checked"<?php }?> id="s-payment-plugin-status" value="1">
            </div>
        </div>
        <div class="field">
            <div class="name">
                <label for="s-payment-plugin-name">Название способа оплаты</label>
            </div>
            <div class="value">
                <input name="payment[name]" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['plugin']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="bold" id="s-payment-plugin-name">
            </div>
        </div>
        <div class="field">
            <div class="name">
                <label for="s-payment-plugin-logo">URL логотипа</label>
            </div>
            <div class="value">
                <input name="payment[logo]" type="text" class="long" value="<?php echo htmlspecialchars((string)(($tmp = @$_smarty_tpl->tpl_vars['plugin']->value['logo'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" id="s-payment-plugin-logo">
                <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['logo'])){?><img src="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['logo'];?>
"  class="s-payment-shipping-logo float-right"><?php }?>
                <p class="hint"><?php echo sprintf('Бесплатная коллекция иконок способов оплаты доступна по адресу <a href="%s" target="_blank">%s</a> <i class="icon10 new-window"></i>','https://support.webasyst.ru/shop-script/728/payment-shipping-icons/','https://support.webasyst.ru/shop-script/728/payment-shipping-icons/');?>
</p>
            </div>
        </div>
        <div class="field">
            <div class="name">
                Описание
            </div>
            <div class="value">
                <textarea name="payment[description]"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['plugin']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                <p class="hint">Описание способа оплаты, отображаемое на витрине при оформлении заказа (HTML).</p>
            </div>
        </div>
        
    </div>

    <!-- CONDITIONS OF APPLICABILITY OF PAYMENT METHODS -->
    <div class="field-group">
        <div class="field">
            <div class="name">Предлагать оплату типам покупателей</div>
            <div class="value">
                <label><input type="radio"
                              class="js-settings-payment-customer-type"
                              name="payment[options][customer_type]"
                              value="" <?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['options']['customer_type'])){?> checked<?php }?>> Все</label>
            </div>
            <div class="value">
                <label><input type="radio"
                              class="js-settings-payment-customer-type"
                              name="payment[options][customer_type]"
                              value="person" <?php if ((!empty($_smarty_tpl->tpl_vars['plugin']->value['options']['customer_type'])&&($_smarty_tpl->tpl_vars['plugin']->value['options']['customer_type']=='person'))){?> checked<?php }?>> Персоны</label>
            </div>
            <div class="value">
                <label><input type="radio"
                              class="js-settings-payment-customer-type"
                              name="payment[options][customer_type]"
                              value="company" <?php if ((!empty($_smarty_tpl->tpl_vars['plugin']->value['options']['customer_type'])&&($_smarty_tpl->tpl_vars['plugin']->value['options']['customer_type']=='company'))){?> checked<?php }?>> Компании</label>
            </div>
            <div class="value hint"><?php echo sprintf('В режиме «%s» оплата предлагается только выбранным типам покупателей.<br>В режиме «%s» эта настройка игнорируется, и оплата всегда предлагается всем типам покупателей.','Оформление заказа в корзине','Пошаговое оформление заказа');?>
</div>
        </div>



        <div class="field"<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['info']['type'])&&($_smarty_tpl->tpl_vars['plugin']->value['info']['type']!=waPayment::TYPE_MANUAL)){?> style="display: none;<?php }?>">
            <div class="name">Поддерживаемые типы оплаты</div>
            <div class="value">
                <?php  $_smarty_tpl->tpl_vars['type_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type_name']->_loop = false;
 $_smarty_tpl->tpl_vars['payment_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['payment_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['type_name']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['type_name']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['type_name']->key => $_smarty_tpl->tpl_vars['type_name']->value){
$_smarty_tpl->tpl_vars['type_name']->_loop = true;
 $_smarty_tpl->tpl_vars['payment_type']->value = $_smarty_tpl->tpl_vars['type_name']->key;
 $_smarty_tpl->tpl_vars['type_name']->iteration++;
 $_smarty_tpl->tpl_vars['type_name']->last = $_smarty_tpl->tpl_vars['type_name']->iteration === $_smarty_tpl->tpl_vars['type_name']->total;
?>
                    <label><input <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['options']['payment_type'][$_smarty_tpl->tpl_vars['payment_type']->value])){?> checked <?php }?>
                            class="js-payment-type-variant" data-payment-type="<?php echo $_smarty_tpl->tpl_vars['payment_type']->value;?>
" name="payment[options][payment_type][<?php echo $_smarty_tpl->tpl_vars['payment_type']->value;?>
]"
                            type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['payment_type']->value;?>
"> <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['type_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</label>
                    <?php if (!$_smarty_tpl->tpl_vars['type_name']->last){?><br><?php }?>
                <?php } ?>
            </div>
            <div class="value">
                <p class="hint">В режиме «Оформление заказа в корзине» выбранные типы оплаты могут использоваться для фильтрации вариантов оплаты, если плагин доставки предоставил перечень требуемых типов оплаты. Выбранные типы оплаты также передаются в плагины доставки для дополнительного перерасчета стоимости доставки.
                    <br>В режиме «Пошаговое оформление заказа» эта настройка не используется.</p>
            </div>
        </div>

        <div class="field">
            <div class="name">Предлагать этот способ оплаты для выбранных типов доставки</div>
            <div class="value">
                <?php  $_smarty_tpl->tpl_vars['type_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type_name']->_loop = false;
 $_smarty_tpl->tpl_vars['shipping_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shipping_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['type_name']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['type_name']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['type_name']->key => $_smarty_tpl->tpl_vars['type_name']->value){
$_smarty_tpl->tpl_vars['type_name']->_loop = true;
 $_smarty_tpl->tpl_vars['shipping_type']->value = $_smarty_tpl->tpl_vars['type_name']->key;
 $_smarty_tpl->tpl_vars['type_name']->iteration++;
 $_smarty_tpl->tpl_vars['type_name']->last = $_smarty_tpl->tpl_vars['type_name']->iteration === $_smarty_tpl->tpl_vars['type_name']->total;
?>
                    <label><input type="checkbox" name="payment[options][shipping_type][<?php echo $_smarty_tpl->tpl_vars['shipping_type']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['shipping_type']->value;?>
" <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['options']['shipping_type'][$_smarty_tpl->tpl_vars['shipping_type']->value])){?> checked="checked"<?php }?>> <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['type_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</label>
                    <?php if (!$_smarty_tpl->tpl_vars['type_name']->last){?><br><?php }?>
                <?php } ?>
            </div>
            <div class="value hint"><?php echo sprintf('В режиме «%s» оплата предлагается только для выбранных типов доставки.<br>В режиме «%s» эта настройка игнорируется, и оплата всегда предлагается для всех типов доставки.','Оформление заказа в корзине','Пошаговое оформление заказа');?>
</div>
        </div>
        <div class="field">
            <div class="name">Предлагать этот способ оплаты для выбранных способов доставки</div>
            <div class="value">
                <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['p']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['p']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['p']->iteration++;
 $_smarty_tpl->tpl_vars['p']->last = $_smarty_tpl->tpl_vars['p']->iteration === $_smarty_tpl->tpl_vars['p']->total;
?>
                    <label><input type="checkbox"
                                  name="payment[shipping][<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
]"
                                  data-customer-type="<?php echo htmlspecialchars((string)(($tmp = @$_smarty_tpl->tpl_vars['p']->value['options']['customer_type'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"
                                  data-shipping-type="<?php echo htmlspecialchars((string)(($tmp = @$_smarty_tpl->tpl_vars['p']->value['info']['type'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"
                                  value="1"
                                <?php if ($_smarty_tpl->tpl_vars['p']->value['available']){?> checked="checked"<?php }?>
                        > <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
                    <span class="hint" style="display: none">Этот способ доставки может быть недоступен из-за ограничений по типу доставки и типу покупателя при оформлении заказа.</span>
                    <?php if (!$_smarty_tpl->tpl_vars['p']->last){?><br><?php }?>
                    <?php }
if (!$_smarty_tpl->tpl_vars['p']->_loop) {
?>
                    <span class="hint">Не определен ни один способ доставки.</span>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- CUSTOM PAYMENT MODULE PARAMS -->
    <div class="field-group">
        <?php echo $_smarty_tpl->tpl_vars['settings_html']->value;?>

    </div>

    <div class="field-group">
        <?php echo $_smarty_tpl->tpl_vars['guide_html']->value;?>

    </div>

    <div class="field-group js-footer-block">
        <div class="field">
            <div class="value submit">
                <input type="submit" class="button green" value="Сохранить"> или <a href="#/payment/" class="inline-link">отмена</a>
            </div>
        </div>
    </div>
</form>
<?php }?>
<?php }} ?>
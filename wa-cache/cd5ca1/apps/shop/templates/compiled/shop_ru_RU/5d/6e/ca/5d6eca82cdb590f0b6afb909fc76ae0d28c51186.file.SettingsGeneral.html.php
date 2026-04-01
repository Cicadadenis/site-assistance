<?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 17:58:08
         compiled from "/var/www/web-magaz/wa-apps/shop/templates/actions/settings/SettingsGeneral.html" */ ?>
<?php /*%%SmartyHeaderCode:56404171769cd5cb01fe129-75951744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d6eca82cdb590f0b6afb909fc76ae0d28c51186' => 
    array (
      0 => '/var/www/web-magaz/wa-apps/shop/templates/actions/settings/SettingsGeneral.html',
      1 => 1775065795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56404171769cd5cb01fe129-75951744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'phone' => 0,
    'email' => 0,
    'country' => 0,
    'countries' => 0,
    'c' => 0,
    'routes' => 0,
    '_d_routes' => 0,
    '_r' => 0,
    '_d' => 0,
    '_r_id' => 0,
    'domains' => 0,
    'merge_carts' => 0,
    'order_format' => 0,
    'sort_order_items_variants' => 0,
    'sort_variant' => 0,
    'sort_order_items' => 0,
    'variant_data' => 0,
    'use_gravatar' => 0,
    'gravatar_default' => 0,
    'wa' => 0,
    'disable_backend_customer_form_validation' => 0,
    'checkout_antispam' => 0,
    'checkout_antispam_email' => 0,
    'checkout_antispam_captcha' => 0,
    'require_authorization' => 0,
    'wa_backend_url' => 0,
    'allow_image_upload' => 0,
    'moderation_reviews' => 0,
    'require_captcha' => 0,
    'review_service_agreement' => 0,
    'link_tag' => 0,
    'review_service_agreement_hint' => 0,
    'lazy_loading' => 0,
    'wa_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_69cd5cb026eb85_90916676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69cd5cb026eb85_90916676')) {function content_69cd5cb026eb85_90916676($_smarty_tpl) {?><div class="blank block double-padded s-settings-form">
    <h1>Общие настройки</h1>
    <form id="s-settings-general-form" action="?module=settings&action=general">
        <div class="fields form">
            <div class="field-group">
                <div class="field">
                    <div class="name">Название магазина</div>
                    <div class="value">
                        <input type="text" class="large bold" name="name" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                    </div>
                </div>
                <div class="field">
                    <div class="name">Телефон</div>
                    <div class="value">
                        <input type="text" name="phone" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="+7 (916) 123-55-00"><br />
                        <span class="hint">Телефонный номер публикуется на витрине и добавляется в текст email-уведомлений</span>
                    </div>
                </div>
                <div class="field">
                    <div class="name">Основной email-адрес</div>
                    <div class="value">
                        <input type="text" name="email" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
"><br />
                        <span class="hint">Используется в качестве адреса отправителя для автоматических уведомлений, отправляемых магазином. Также является адресом администратора для отправки ему уведомлений о заказах.</span>
                    </div>
                </div>
                <div class="field">
                    <div class="name">Страна</div>
                    <div class="value">
                        <select name="country">
                            <?php if (empty($_smarty_tpl->tpl_vars['country']->value)){?>
                                <option value=""></option>
                            <?php }?>
                            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                                <option value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['c']->value['iso3letter'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['country']->value==$_smarty_tpl->tpl_vars['c']->value['iso3letter']){?> selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['c']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php } ?>
                        </select><br />
                        <span class="hint">Страна, в которой располагается ваш интернет-магазин.</span>
                    </div>
                </div>
            </div>

            <div class="field-group">
                <div class="field">
                    <div class="name">Настройки витрины</div>
                    <?php  $_smarty_tpl->tpl_vars['_d_routes'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_d_routes']->_loop = false;
 $_smarty_tpl->tpl_vars['_d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['routes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_d_routes']->key => $_smarty_tpl->tpl_vars['_d_routes']->value){
$_smarty_tpl->tpl_vars['_d_routes']->_loop = true;
 $_smarty_tpl->tpl_vars['_d']->value = $_smarty_tpl->tpl_vars['_d_routes']->key;
?>
                        <?php  $_smarty_tpl->tpl_vars['_r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_r']->_loop = false;
 $_smarty_tpl->tpl_vars['_r_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_d_routes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_r']->key => $_smarty_tpl->tpl_vars['_r']->value){
$_smarty_tpl->tpl_vars['_r']->_loop = true;
 $_smarty_tpl->tpl_vars['_r_id']->value = $_smarty_tpl->tpl_vars['_r']->key;
?>
                            <div class="value no-shift s-settings-storefront-list">
                                <a href="?action=storefronts#/design/theme=<?php echo ifset($_smarty_tpl->tpl_vars['_r']->value['theme'],'default');?>
&domain=<?php echo urlencode($_smarty_tpl->tpl_vars['_d']->value);?>
&route=<?php echo $_smarty_tpl->tpl_vars['_r_id']->value;?>
&action=settings">
                                    <?php echo htmlspecialchars((string)(($tmp = @$_smarty_tpl->tpl_vars['domains']->value[$_smarty_tpl->tpl_vars['_d']->value])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_d']->value : $tmp), ENT_QUOTES, 'UTF-8', true);?>
/<?php echo $_smarty_tpl->tpl_vars['_r']->value['url'];?>

                                    <i class="icon10 settings"></i>
                                </a>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>

            <h5 class="heading">Заказы и покупатели</h5>
            <div class="field-group">
                <div class="field">
                    <div class="name">Содержимое корзины покупателя</div>
                    <div class="value no-shift"">
                        <label><input type="checkbox" name="merge_carts" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['merge_carts']->value)){?>checked="checked"<?php }?>>
                            Синхронизировать товары в корзине авторизованного покупателя на всех устройствах.</label>
                    </div>
                </div>
                <div class="field">
                    <div class="name">Формат номеров заказов</div>
                    <div class="value">
                        <input type="text" name="order_format" value="<?php echo $_smarty_tpl->tpl_vars['order_format']->value;?>
">
                        <p class="hint"><strong>&#123;$order.id&#125;</strong> будет заменен на фактический номер заказа. Не удаляйте фрагмент &#123;$order.id&#125; из этой строки.</p>
                    </div>
                </div>
                <div class="field">
                    <div class="name">Сортировка товаров в заказе</div>
                    <?php  $_smarty_tpl->tpl_vars['variant_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant_data']->_loop = false;
 $_smarty_tpl->tpl_vars['sort_variant'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sort_order_items_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant_data']->key => $_smarty_tpl->tpl_vars['variant_data']->value){
$_smarty_tpl->tpl_vars['variant_data']->_loop = true;
 $_smarty_tpl->tpl_vars['sort_variant']->value = $_smarty_tpl->tpl_vars['variant_data']->key;
?>
                        <div class="value no-shift">
                            <label>
                                <input type="radio" name="sort_order_items" value="<?php echo $_smarty_tpl->tpl_vars['sort_variant']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['sort_variant']->value==$_smarty_tpl->tpl_vars['sort_order_items']->value){?>checked<?php }?>> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['variant_data']->value['name'])===null||$tmp==='' ? '' : $tmp);?>

                            </label>
                        </div>
                    <?php } ?>
                </div>
                <div class="field">
                    <div class="name">Gravatar</div>
                    <div class="value no-shift">
                        <label>
                            <input type="checkbox" name="use_gravatar" value="1" <?php if ($_smarty_tpl->tpl_vars['use_gravatar']->value){?>checked="checked"<?php }?>>
                            Показывать юзерпики Gravatar
                            <p class="hint">Gravatar.com (Globally Recognized Avatars) — это веб-сервис, который возвращает юзерпик пользователя (фотографию, аватар) по его email-адресу. Если фотография не загружена для покупателя в его профиле в приложении «Контакты», будет показан его юзерпик из сервиса Gravatar.</p>
                        </label>
                    </div>
                    <div class="value no-shift">
                        <label>
                        Если у покупателя не загружен юзерпик в сервисе Gravatar:
                            <select name="gravatar_default">
                                <option value="custom" <?php if ($_smarty_tpl->tpl_vars['gravatar_default']->value=='custom'){?>selected="selected"<?php }?>>Использовать стандартное изображение из приложения «Контакты»</option>
                                <option value="mm" <?php if ($_smarty_tpl->tpl_vars['gravatar_default']->value=='mm'){?>selected="selected"<?php }?>>простая фигурка человека на сером фоне (одинаковая для всех покупателей)</option>
                                <option value="identicon" <?php if ($_smarty_tpl->tpl_vars['gravatar_default']->value=='identicon'){?>selected="selected"<?php }?>>геометрический рисунок, генерируемый на основе email-адреса</option>
                                <option value="monsterid" <?php if ($_smarty_tpl->tpl_vars['gravatar_default']->value=='monsterid'){?>selected="selected"<?php }?>>автоматически сгенерированная фигурка монстра</option>
                                <option value="wavatar" <?php if ($_smarty_tpl->tpl_vars['gravatar_default']->value=='wavatar'){?>selected="selected"<?php }?>>сгенерированные лица с разным фоном</option>
                                <option value="retro" <?php if ($_smarty_tpl->tpl_vars['gravatar_default']->value=='retro'){?>selected="selected"<?php }?>>изображение лица в стиле старых компьютерных игр</option>
                            </select>
                            <img id="s-settings-general-gravatar" class="userpic" src="<?php echo shopHelper::getGravatar($_smarty_tpl->tpl_vars['wa']->value->user('email','default'),50,$_smarty_tpl->tpl_vars['gravatar_default']->value);?>
" style="display: block; width: 50px; margin-top: 10px;">
                        </label>
                    </div>
                </div>

                
                <div class="field">
                    <div class="name">Проверка обязательных полей</div>
                    <div class="value s-ibutton-checkbox no-shift">
                        <ul class="menu-h">
                            <li><span <?php if (empty($_smarty_tpl->tpl_vars['disable_backend_customer_form_validation']->value)){?> class="gray"<?php }?> id="s-toggle-backend-validation-disabled-label">Выключено</span></li>
                            <li>
                                <input type="checkbox" id="s-toggle-backend-validation-status" name="disable_backend_customer_form_validation" value="1"<?php if (empty($_smarty_tpl->tpl_vars['disable_backend_customer_form_validation']->value)){?> checked<?php }?>>
                            </li>
                            <li><span id="s-toggle-backend-validation-enabled-label" <?php if (!empty($_smarty_tpl->tpl_vars['disable_backend_customer_form_validation']->value)){?> class="gray"<?php }?>>Включено</span></li>
                        </ul>
                    </div>
                    <div class="value description"<?php if (empty($_smarty_tpl->tpl_vars['disable_backend_customer_form_validation']->value)){?> style="display:none"<?php }?>>
                        <!-- enabled -->
                        <p class="small">При создании заказа вручную в бекенде заполнение контактных данных покупателя проверяться не будет. Поля, отмеченные как обязательные для заполнения при оформлении заказа с витрины, могут не заполняться при создании заказа в бекенде.</p>
                    </div>
                    <div class="value description"<?php if (!empty($_smarty_tpl->tpl_vars['disable_backend_customer_form_validation']->value)){?> style="display:none"<?php }?>>
                        <!-- disabled -->
                        <p class="small">При создании заказа администратором от имени покупателя заполнение контактных данных покупателя будет проверяться в соответствии с <a href="?action=settings#/checkout/">настройками оформления заказа для выбранной витрины</a>. Все обязательные поля при этом должны быть заполнены. Для режима «Добавлен вручную» будут использоваться настройки в разделе «<a href="?action=settings#/orderEditor/">Редактирование заказов</a>».</p>
                    </div>
                </div>

                
                <div class="field">
                    <div class="name">Антиспам-фильтр для заказов</div>
                    <div class="value s-ibutton-checkbox no-shift">
                        <ul class="menu-h">
                            <li><span <?php if (!empty($_smarty_tpl->tpl_vars['checkout_antispam']->value)){?> class="gray"<?php }?> id="s-toggle-checkout-antispam-disabled-label">Выключено</span></li>
                            <li>
                                <input type="checkbox" id="s-toggle-checkout-antispam-status" name="antispam[enabled]" value="1"<?php if (!empty($_smarty_tpl->tpl_vars['checkout_antispam']->value)){?> checked<?php }?>>
                            </li>
                            <li><span id="s-toggle-checkout-antispam-enabled-label" <?php if (!!empty($_smarty_tpl->tpl_vars['checkout_antispam']->value)){?> class="gray"<?php }?>>Включено</span></li>
                        </ul>
                    </div>
                    <div class="value description antispam-enabled"<?php if (empty($_smarty_tpl->tpl_vars['checkout_antispam']->value)){?> style="display:none"<?php }?>>
                        <!-- enabled -->
                        <p class="small">Антиспам-фильтр для заказов работает незаметно для реальных покупателей и автоматически отвергает все заказы, оформленные ботами.</p>

                        <div class="fields form width100px">
                            <div class="field">
                                <div class="name">Уведомления об отвергнутых попытках заказа</div>
                                <div class="value">
                                    <input name="antispam[email]" type="email" placeholder="your@email.here" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['checkout_antispam_email']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="long">
                                </div>
                                <div class="value">
                                    <span class="hint">Включите email-уведомления о попытках оформления заказов ботами, чтобы быть уверенным, что ни один реальный заказ не был отвергнут по ошибке.</span>
                                </div>
                            </div>
                            <div class="field">
                                <div class="name">Капча</div>
                                <div class="value no-shift">
                                    <label><input name="antispam[captcha]" value="1" type="checkbox"<?php if ($_smarty_tpl->tpl_vars['checkout_antispam_captcha']->value){?> checked<?php }?>> Включить капчу для оформления заказов (необязательно)</label>
                                </div>
                                <div class="value">
                                    <span class="hint">Капча (ввод кода на изображении) — дополнительная защита от заказов, оформляемых ботами. Включите капчу, если встроенная система защиты, незаметная для покупателя, недостаточно хорошо фильтрует заказы от спамеров.</span>
                                </div>
                            </div>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                    <div class="value description antispam-disabled"<?php if (!empty($_smarty_tpl->tpl_vars['checkout_antispam']->value)){?> style="display:none"<?php }?>>
                        <!-- disabled -->
                        <p class="hint">Если вы получаете поток заказов, и ни один из них не подтверждается, значит заказы оформляют не реальные покупатели, а роботы. Ваш магазин под атакой спамеров. Включите антиспам-фильтр, чтобы автоматически отфильтровать поток реальных заказов от спама.</p>
                    </div>
                </div>

            </div>

            <div class="field-group">
                <div class="field">
                    <div class="name">Отзывы</div>
                    <div id="setting-require-auth" class="value no-shift">
                        <label>
                            <input type="checkbox" name="require_authorization" <?php if ($_smarty_tpl->tpl_vars['require_authorization']->value=='1'){?>checked="checked"<?php }?> value="1">
                            Отзывы о товарах могут оставлять только зарегистрированные пользователи
                            <br>
                            <p class="hint">
                                Пользователь должен авторизоваться на сайте для того, чтобы оставить отзыв.<br>
                                <strong><?php echo sprintf('Убедитесь в том, что формы регистрации и входа для пользователей включены <a href="%s">в настройках приложения «Сайт»</a>.',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('site/#/settings/'));?>
</strong>
                            </p>
                        </label>
                    </div>
                    <div class="value no-shift">
                        <label>
                            <input type="checkbox" name="allow_image_upload" <?php if ($_smarty_tpl->tpl_vars['allow_image_upload']->value=='1'){?>checked="checked"<?php }?> value="1">
                            Разрешать покупателям загружать изображения к отзывам
                            <br>
                        </label>
                    </div>
                    <div class="value no-shift">
                        <label>
                            <input type="checkbox" name="moderation_reviews" <?php if ($_smarty_tpl->tpl_vars['moderation_reviews']->value=='1'){?>checked="checked"<?php }?> value="1">
                            Публиковать отзывы только после проверки
                            <br>
                            <p class="hint">
                                Рекомендуется включить вместе с настройкой «Разрешать покупателям загружать изображения к отзывам».<br>
                            </p>
                        </label>
                    </div>
                    <div id="setting-require-captcha">
                        <div class="value no-shift">
                            <label>
                                <input type="checkbox" name="require_captcha" <?php if ($_smarty_tpl->tpl_vars['require_captcha']->value=='1'){?>checked="checked"<?php }?> value="1">
                                Защитить форму добавления отзыва о товаре с помощью <em>капчи</em> (CAPTCHA)
                            </label>
                        </div>

                        <div id="service-agreement-settings-wrapper">
                            <div class="value no-shift">
                                <span class="hint">Обработка персональных данных</span>
                            </div>
                            <div class="value">
                                <label>
                                    <input type="radio" name="review_service_agreement" value=""<?php if (empty($_smarty_tpl->tpl_vars['review_service_agreement']->value)){?> checked<?php }?>>
                                    Не требовать согласия с политикой обработки персональных данных
                                </label>
                            </div>
                            <div class="value">
                                <?php $_smarty_tpl->tpl_vars['link_tag'] = new Smarty_variable(sprintf('<a href="%s" target="_blank">',_w('---INSERT A LINK HERE!---')), null, 0);?>
                                <label data-default-text="<?php echo htmlspecialchars((string)sprintf_wp('By submitting this form I agree to %spersonal data protection policy%s',$_smarty_tpl->tpl_vars['link_tag']->value,'</a>'), ENT_QUOTES, 'UTF-8', true);?>
">
                                    <input type="radio" name="review_service_agreement" value="notice"<?php if (ifset($_smarty_tpl->tpl_vars['review_service_agreement']->value)=='notice'){?> checked<?php }?>>
                                    Показывать только подсказку со ссылкой на политику
                                </label>
                            </div>
                            <div class="value">
                                <label data-default-text="<?php echo htmlspecialchars((string)sprintf_wp('I agree to %spersonal data protection policy%s',$_smarty_tpl->tpl_vars['link_tag']->value,'</a>'), ENT_QUOTES, 'UTF-8', true);?>
">
                                    <input type="radio" name="review_service_agreement" value="checkbox"<?php if (ifset($_smarty_tpl->tpl_vars['review_service_agreement']->value)=='checkbox'){?> checked<?php }?>>
                                    Предлагать включить обязательный флажок с подсказкой и ссылкой
                                </label>
                            </div>
                            <div class="hidden value text-editor">
                                <input type="checkbox" style="vertical-align:top;margin:0px 2px 90px 2px;float:left;" checked disabled>
                                <textarea name="review_service_agreement_hint"><?php echo htmlspecialchars((string)ifset($_smarty_tpl->tpl_vars['review_service_agreement_hint']->value), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                <br>
                                <span class="hint"><a href="javascript:void(0)" class="inline-link generalte-example-link"><b><i>Восстановить стандартный текст</i></b></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="field-group">
                <div class="field">
                    <div class="name">
                        Списки товаров
                    </div>
                    <div class="value no-shift">
                        <label>
                            <input type="checkbox" name="lazy_loading" <?php if (!empty($_smarty_tpl->tpl_vars['lazy_loading']->value)){?>checked<?php }?> value="1">
                            Использовать автоматическую подгрузку (lazy loading)
                        </label>
                        <p class="hint">Товары в разделе «Товары» будут подгружаться автоматически при прокручивании страницы. Если нужно использовать постраничную навигацию, выключите эту настройку.</p>
                    </div>
                </div>
            </div>

            <div class="field-group">
                <div class="field">
                    <div class="name">Системные настройки</div>
                    <div class="value">
                        <?php if (!empty($_smarty_tpl->tpl_vars['wa_settings']->value)){?>
                            <ul class="menu-v">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
webasyst/settings/captcha/">Капча</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
webasyst/settings/maps/">Карты</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
webasyst/settings/sms/">SMS</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
webasyst/settings/push/">Push-уведомления</a></li>
                            </ul>
                        <?php }else{ ?>
                            Чтобы изменять системные настройки, необходим доступ к приложению «Настройки».
                        <?php }?>
                    </div>
                </div>
            </div>

            <div class="field-group">
                <div class="field">
                    <div class="name">Версия Shop-Script</div>
                    <div class="value no-shift">
                        <?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>

                    </div>
                </div>
            </div>

            <div class="field-group">
                <div class="field">
                    <div class="value submit">
                        <input type="submit" class="button green" value="Сохранить">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="clear"></div>
</div>
<script type="text/javascript">

    $('.s-captcha input:radio').change(function () {
        if ($(this).is(":checked")) {
            $('.s-captcha label > div').hide().find('input').attr('disabled');
            $(this).parent().children('div').show().find('input').removeAttr('disabled');
            $(this).parent().find('div input:first').focus();
        }
    });
    $('.s-captcha input:radio:checked').change();

    $(':input[name="map"]').change(function(){
        var scope = $(this).parents('div.field');
        scope.find('div.js-map-adapter-settings').hide();
        if(this.checked) {
            scope.find('div.js-map-adapter-settings[data-adapter-id="' + this.value + '"]').show();
        }
    });
    $(':input[name="map"]:checked').change();


    $('#setting-require-auth input').change(function () {
       if ($(this).is(':checked')) {
           $('#setting-require-captcha').slideUp(200);
       } else {
           $('#setting-require-captcha').slideDown(200);
       }
    }).change();

    $('input[name="workhours_type"]').change(function () {
       if ($(this).val() == '1') {
           $('#workhours-div').show();
       } else {
           $('#workhours-div').hide();
       }
    });

    var form = $('#s-settings-general-form');
    document.title = '<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr(("Общие настройки").(" — ").($_tmp1), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
    form.submit(function() {
        var self = $(this);
        form.find(':submit').after('<span class="s-msg-after-button"><i class="icon16 loading"></i></span>');
        $.post(self.attr('action'), self.serialize(), function(r) {
            $('#s-settings-content').html(r);
        });
        return false;
    });

    <?php if ($_smarty_tpl->tpl_vars['wa']->value->post('name')){?>
        form.find(':submit').after(
            $('<span class="s-msg-after-button"><i class="icon16 yes"></i></span>').animate({ opacity: 0 }, 1500, function() {
                $(this).remove();
            })
        );
    <?php }?>


    form.find('[name="gravatar_default"]').change(function () {
        var gravatar_default = $(this).val();
        $.get('?module=settings&action=generalGetGravatar', {
            'email': '<?php echo $_smarty_tpl->tpl_vars['wa']->value->user('email','default');?>
',
            'default': gravatar_default
            },
            function(r) {
                $('#s-settings-general-gravatar').attr('src', r.data);
            }, 'json'
        );
    });

    $('#s-toggle-backend-validation-status').iButton( { labelOn : "", labelOff : "", className: 'mini' } ).change(function() {
        var self = $(this);
        self.closest('.value').siblings('.value.description').toggle();
        if (this.checked) {
            $('#s-toggle-backend-validation-disabled-label').addClass('gray');
            $('#s-toggle-backend-validation-enabled-label').removeClass('gray');
        } else {
            $('#s-toggle-backend-validation-disabled-label').removeClass('gray');
            $('#s-toggle-backend-validation-enabled-label').addClass('gray');
        }
    });

    $('#s-toggle-checkout-antispam-status').iButton( { labelOn : "", labelOff : "", className: 'mini' } ).change(function() {
        if (this.checked) {
            $('#s-toggle-checkout-antispam-disabled-label').addClass('gray');
            $('#s-toggle-checkout-antispam-enabled-label').removeClass('gray');
            $('.antispam-enabled').show();
            $('.antispam-disabled').hide();
        } else {
            $('#s-toggle-checkout-antispam-disabled-label').removeClass('gray');
            $('#s-toggle-checkout-antispam-enabled-label').addClass('gray');
            $('.antispam-enabled').hide();
            $('.antispam-disabled').show();
        }
    });

    $('#s-toggle-web-push-active').iButton( { labelOn : "", labelOff : "", className: 'mini' } ).change('change', function() {
        if (this.checked) {
            $('#s-toggle-web-push-disabled-label').addClass('gray');
            $('#s-toggle-web-push-enabled-label').removeClass('gray');
            $('#s-web-push-disabled-block').hide();
            $('#s-web-push-enabled-block').show();
        } else {
            $('#s-toggle-web-push-disabled-label').removeClass('gray');
            $('#s-toggle-web-push-enabled-label').addClass('gray');
            $('#s-web-push-enabled-block').hide();
            $('#s-web-push-disabled-block').show();
        }
    });

    //
    // Service agreement settings wrapper
    //
    (function() {
        var $wrapper = $('#service-agreement-settings-wrapper');
        var $checkbox = $wrapper.find(':checkbox');
        var $textarea = $wrapper.find('textarea');
        var previous_default_text = null;

        $wrapper.on('change', ':radio', function() {
            if (!$textarea.val() || previous_default_text == $textarea.val()) {
                setDefaultText();
            }

            switch(this.value) {
                case 'notice':
                    $checkbox.hide().closest('.value').show();
                    break;
                case 'checkbox':
                    $checkbox.show().closest('.value').show();
                    break;
                default:
                    $checkbox.closest('.value').hide();
                    break;
            }
        }).find(':radio:checked').change();

        $wrapper.on('mousedown', '.generalte-example-link', function(e) {
            setDefaultText();
            $textarea.focus();
            return false;
        });

        function setDefaultText() {
            previous_default_text = $wrapper.find(':radio:checked').closest('label').data('default-text') || '';
            $textarea.val(previous_default_text);
        }
    }());

</script>
<?php }} ?>
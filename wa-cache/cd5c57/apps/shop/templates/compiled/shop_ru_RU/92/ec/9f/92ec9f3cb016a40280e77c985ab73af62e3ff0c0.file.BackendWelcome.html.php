<?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 17:57:19
         compiled from "/var/www/web-magaz/wa-apps/shop/templates/actions/backend/BackendWelcome.html" */ ?>
<?php /*%%SmartyHeaderCode:66225952369cd5c7f639e05-98770132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92ec9f3cb016a40280e77c985ab73af62e3ff0c0' => 
    array (
      0 => '/var/www/web-magaz/wa-apps/shop/templates/actions/backend/BackendWelcome.html',
      1 => 1775065798,
      2 => 'file',
    ),
    'be22dca9795dfb0d60f80c8efacbc0e41eff383c' => 
    array (
      0 => '/var/www/web-magaz/wa-apps/shop/templates/actions/tutorial/include.TutorialSidebar.html',
      1 => 1775065796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66225952369cd5c7f639e05-98770132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'wa' => 0,
    '_locale_string' => 0,
    'wa_url' => 0,
    'wa_app_static_url' => 0,
    '_is_ru' => 0,
    'currencies' => 0,
    'currency' => 0,
    'countries' => 0,
    'country' => 0,
    'country_iso' => 0,
    'shop_demo_importer_can_work' => 0,
    '_can_work' => 0,
    '_reason' => 0,
    'shop_demo_data_source_list' => 0,
    '_source_id' => 0,
    '_source' => 0,
    '_sources_html' => 0,
    '_half_count' => 0,
    '_html' => 0,
    '_is_complete' => 0,
    '_loading_html' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_69cd5c7f6885d0_00915424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69cd5c7f6885d0_00915424')) {function content_69cd5c7f6885d0_00915424($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_is_complete'] = new Smarty_variable(false, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['actions']->value['welcome']['complete']==1){?><?php $_smarty_tpl->tpl_vars['_is_complete'] = new Smarty_variable(true, null, 0);?><?php }?>

<?php $_smarty_tpl->tpl_vars['_locale_string'] = new Smarty_variable(substr((($tmp = @$_smarty_tpl->tpl_vars['wa']->value->locale())===null||$tmp==='' ? "en" : $tmp),0,2), null, 0);?>
<?php $_smarty_tpl->tpl_vars['_is_ru'] = new Smarty_variable(false, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['_locale_string']->value==="ru"){?><?php $_smarty_tpl->tpl_vars['_is_ru'] = new Smarty_variable(true, null, 0);?><?php }?>

<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.core.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/backend/welcome.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/tutorial/tutorial.js"></script>

<?php /*  Call merged included template "templates/actions/tutorial/include.TutorialSidebar.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("templates/actions/tutorial/include.TutorialSidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '66225952369cd5c7f639e05-98770132');
content_69cd5c7f64b9e3_33855936($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "templates/actions/tutorial/include.TutorialSidebar.html" */?>

<div class="block double-padded welcome">
    <form method="post" action="?action=welcome" id="js-welcome-form">
        <div class="s-welcome-page">
            <h1>Добро пожаловать в Shop-Script!</h1>
            <p>Этот раздел поможет вам запустить новый интернет-магазин.</p>

            <div class="form fields" style="float: none;">
                <div class="s-content-with-indent">
                    
                    <div class="s-tutorial-block">
                        <div class="s-title">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/backend/tutorial/arrow.green.svg" class="s-arrow" alt=""/><span class="s-title">Выберите основную валюту</span>
                        </div>
                        <div class="s-sub-title">
                            <?php if ($_smarty_tpl->tpl_vars['_is_ru']->value){?>
                                Дополнительные валюты можно добавить позже в разделе «Настройки → Валюты».
                            <?php }else{ ?>
                                You can add more currencies later in “Settings → Currencies” section
                            <?php }?>
                        </div>
                        <div class="s-select-wrapper">
                            <select name="currency" class="s-currency" id="" <?php if ($_smarty_tpl->tpl_vars['actions']->value['welcome']['complete']!=1){?>required<?php }?>>
                                <option value="" disabled selected>Выберите валюту</option>
                                <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value){
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
"<?php if ($_smarty_tpl->tpl_vars['currency']->value['code']===null){?> disabled<?php }?>><?php echo _w($_smarty_tpl->tpl_vars['currency']->value['title']);?>
</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    
                    <div class="s-tutorial-block">
                        <div class="s-title">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/backend/tutorial/arrow.green.svg" class="s-arrow" alt=""/><span class="s-title-text">Выберите страну</span>
                        </div>
                        <div class="s-sub-title">
                            <?php if ($_smarty_tpl->tpl_vars['_is_ru']->value){?>
                                Для нее включатся соответствующие ставки налогов.
                            <?php }else{ ?>
                                This will automatically set up corresponding tax rates.
                            <?php }?>
                        </div>
                        <div class="s-select-wrapper">
                            <select name="country" class="s-country">
                                <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
                                    <option value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['country']->value['iso3letter'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['country']->value['iso3letter']==$_smarty_tpl->tpl_vars['country_iso']->value){?> selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['country']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php } ?>
                                <option value="">Другая (Никакие региональные данные добавлены не будут)</option>
                            </select>
                        </div>
                    </div>

                    
                    <div class="s-tutorial-block">
                        <div class="s-title">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/backend/tutorial/arrow.green.svg" class="s-arrow" alt=""/>
                            <span class="s-title-text">
                                <?php if ($_smarty_tpl->tpl_vars['_is_ru']->value){?>
                                    Выберите товарную нишу, для которой мы добавим примеры товаров в ваш магазин
                                <?php }else{ ?>
                                    Select a product range for which we will add a few examples to your store
                                <?php }?>
                            </span>
                        </div>
                        <div class="s-sub-title">
                            <?php if ($_smarty_tpl->tpl_vars['_is_ru']->value){?>
                                Для выбранной ниши будут настроены типы товаров со своими наборами характеристик. С помощью характеристик вы сможете подробно описать товары на витрине, настроить фильтры и автоматические рекомендации. Другие типы товаров и характеристики для них можно настроить позже.
                            <?php }else{ ?>
                                For the selected product range, corresponding product types with their default sets of product features will be added. Features are useful to describe products in the storefront, and to set up filters and automatic recommendations. You can add more product types and features later in settings.
                            <?php }?>
                        </div>
                        <div class="s-demo-sources-wrapper">
                            <?php $_smarty_tpl->tpl_vars['_sources_html'] = new Smarty_variable(array(), null, 0);?>

                            <?php $_smarty_tpl->tpl_vars['_can_work'] = new Smarty_variable($_smarty_tpl->tpl_vars['shop_demo_importer_can_work']->value['status'], null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['_reason'] = new Smarty_variable($_smarty_tpl->tpl_vars['shop_demo_importer_can_work']->value['reason'], null, 0);?>

                            <?php if (!$_smarty_tpl->tpl_vars['_can_work']->value){?>
                                <p class="errormsg"><i class="icon16 exclamation"></i> <?php echo $_smarty_tpl->tpl_vars['_reason']->value;?>
</p>
                            <?php }?>

                            <?php  $_smarty_tpl->tpl_vars['_source'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_source']->_loop = false;
 $_smarty_tpl->tpl_vars['_source_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shop_demo_data_source_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_source']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['_source']->key => $_smarty_tpl->tpl_vars['_source']->value){
$_smarty_tpl->tpl_vars['_source']->_loop = true;
 $_smarty_tpl->tpl_vars['_source_id']->value = $_smarty_tpl->tpl_vars['_source']->key;
 $_smarty_tpl->tpl_vars['_source']->index++;
 $_smarty_tpl->tpl_vars['_source']->first = $_smarty_tpl->tpl_vars['_source']->index === 0;
?>
                                <?php $_smarty_tpl->_capture_stack[0][] = array('default', null, "_sources_html"); ob_start(); ?>
                                    <div class="s-source-wrapper">
                                        <label>
                                            <input type="radio" name="demo_db" value="<?php echo $_smarty_tpl->tpl_vars['_source_id']->value;?>
" <?php if (!$_smarty_tpl->tpl_vars['_can_work']->value){?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['_source']->first){?>checked="checked"<?php }?>>
                                            <?php echo htmlspecialchars((string)(($tmp = @$_smarty_tpl->tpl_vars['_source']->value['name'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>

                                        </label>
                                    </div>
                                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                            <?php } ?>

                            <?php $_smarty_tpl->_capture_stack[0][] = array('default', null, "_sources_html"); ob_start(); ?>
                                <div class="s-source-wrapper">
                                    <label>
                                        <input type="radio" name="demo_db" value="">
                                        <span class="bold">
                                            <?php if ($_smarty_tpl->tpl_vars['_is_ru']->value){?>
                                                Не добавлять примеры товаров
                                            <?php }else{ ?>
                                                Do not add product examples
                                            <?php }?>
                                        </span>
                                    </label>
                                </div>
                            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                            <?php $_smarty_tpl->tpl_vars['_half_count'] = new Smarty_variable(ceil(count($_smarty_tpl->tpl_vars['_sources_html']->value)/2), null, 0);?>

                            <div class="s-table-box">
                                <div class="s-column">
                                    <?php  $_smarty_tpl->tpl_vars['_html'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_html']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_sources_html']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_html']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_html']->key => $_smarty_tpl->tpl_vars['_html']->value){
$_smarty_tpl->tpl_vars['_html']->_loop = true;
 $_smarty_tpl->tpl_vars['_html']->iteration++;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['_html']->iteration<=$_smarty_tpl->tpl_vars['_half_count']->value){?>
                                            <?php echo $_smarty_tpl->tpl_vars['_html']->value;?>

                                        <?php }?>
                                    <?php } ?>
                                </div>
                                <div class="s-column">
                                    <?php  $_smarty_tpl->tpl_vars['_html'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_html']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_sources_html']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_html']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_html']->key => $_smarty_tpl->tpl_vars['_html']->value){
$_smarty_tpl->tpl_vars['_html']->_loop = true;
 $_smarty_tpl->tpl_vars['_html']->iteration++;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['_html']->iteration>$_smarty_tpl->tpl_vars['_half_count']->value){?>
                                            <?php echo $_smarty_tpl->tpl_vars['_html']->value;?>

                                        <?php }?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="s-tutorial-block s-welcome-import">
                        <div class="s-title">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/backend/tutorial/arrow.red.svg" class="s-arrow" alt=""/>
                            <span class="s-title-text">
                                <?php if ($_smarty_tpl->tpl_vars['_is_ru']->value){?>
                                    Можно бесплатно импортировать данные из вашего старого <span class="nowrap">интернет-магазина</span> — <a href="https://www.webasyst.ru/my/requests/my/" class="js-apply-for-transfer-shop" target="_blank">обратитесь в нашу службу поддержки</a>
                                <?php }else{ ?>
                                    You may import products from your previous online store, please <a href="https://www.webasyst.com/my/requests/my/" class="js-apply-for-transfer-shop" target="_blank">contact our support team</a> for free help
                                <?php }?>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="s-actions-wrapper">
                    <?php if (empty($_smarty_tpl->tpl_vars['_is_complete']->value)){?>
                        <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                        <input type="hidden" name="passed_action" value="welcome">
                        <input type="submit" class="button green" value="Следующий шаг &rarr;">
                    <?php }else{ ?>
                        <div style="margin-top: 100px;">
                            <a class="button green" href="<?php echo $_smarty_tpl->tpl_vars['actions']->value['products']['href'];?>
">Следующий шаг &rarr;</a>
                        </div>
                    <?php }?>
                </div>
            </div>

            <?php if (!empty($_smarty_tpl->tpl_vars['_is_complete']->value)){?>
                <div class="s-tutorial-disabled"></div>
                <div class="s-tutorial-hint">
                    <p>
                        <?php if ($_smarty_tpl->tpl_vars['_is_ru']->value){?>
                            Выбранные здесь значения можно будет позже изменить в <a href="?action=settings" target="_blank">настройках</a>.
                        <?php }else{ ?>
                            Values selected here can be changed later in <a href="?action=settings" target="_blank">settings</a>.
                        <?php }?>
                    </p>
                </div>
            <?php }?>
        </div>
    </form>

    
    <div style="position: absolute; visibility: hidden; width: 0; height: 0; overflow: hidden;"><img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/backend/tutorial/loading.svg?v=1" alt=""></div>

    <?php $_smarty_tpl->_capture_stack[0][] = array('default', "_loading_html", null); ob_start(); ?>
        <div class="s-loading-wrapper">
            <div class="s-loading-body">
                <img class="s-loading-image" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/backend/tutorial/loading.svg?v=1" alt="">
                <div class="s-loading-text">
                    <?php if ($_smarty_tpl->tpl_vars['_is_ru']->value){?>
                        Подождите немного,<br>мы добавляем примеры товаров в ваш интернет-магазин.
                    <?php }else{ ?>
                        Please wait<br>while product examples are being added to your online store.
                    <?php }?>
                </div>
            </div>
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <script>
        ( function($) {
            $("#wa").addClass("s-no-level2");

            var $form = $("#js-welcome-form"),
                html = <?php echo json_encode(trim($_smarty_tpl->tpl_vars['_loading_html']->value));?>
,
                is_loading = false;

            $form.on("submit", function() {
                if (!is_loading) {
                    is_loading = true;
                    var $field = $("input[name=\"demo_db\"]:checked");
                    if ($field.length) {
                        var value = $field.val();
                        if (value) {
                            $("body").append(html);
                        }
                    }
                }
            });

        })(jQuery);
    </script>
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 17:57:19
         compiled from "/var/www/web-magaz/wa-apps/shop/templates/actions/tutorial/include.TutorialSidebar.html" */ ?>
<?php if ($_valid && !is_callable('content_69cd5c7f64b9e3_33855936')) {function content_69cd5c7f64b9e3_33855936($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_join')) include '/var/www/web-magaz/wa-system/vendors/smarty-plugins/modifier.join.php';
?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_complete_icon", null); ob_start(); ?>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="currentColor" d="M211.5,450.4l285.2-285.2c9.7-9.7,9.7-25.4,0-35.1L461.7,95c-9.7-9.7-25.4-9.7-35.1,0L194,327.6L85.4,219 c-9.7-9.7-25.4-9.7-35.1,0l-35.1,35.1c-9.7,9.7-9.7,25.4,0,35.1l161.2,161.2C186.1,460,201.9,460,211.5,450.4L211.5,450.4z"/>
    </svg>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/tutorial/tutorial_sidebar.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/backend/tutorial.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
">

<div class="sidebar left300px">
    <div class="block s-tutotial-steps s-inner-sidebar">

        <?php if (isset($_smarty_tpl->tpl_vars['tutorial_visible']->value)&&$_SERVER['REQUEST_URI']==((string)$_smarty_tpl->tpl_vars['wa_app_url']->value)."?action=welcome"){?>
            <div class="s-tutorial-quick-start is-active">
                <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?action=welcome">
                    <div class="s-tutorial-progressbar" id="s-tutorial-progressbar">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/rocket-fly.png" class="s-rocket"/>
                        <span class="s-tutorial-step-title">Быстрый старт</span>
                        <div class="s-tutorial-progressbar-outer">
                            <div class="s-tutorial-progressbar-inner"></div>
                             <span id="s-tutorial-progressbar-content"><?php echo $_smarty_tpl->tpl_vars['tutorial_progress']->value['complete'];?>
 из <?php echo $_smarty_tpl->tpl_vars['tutorial_progress']->value['total'];?>
</span>
                        </div>
                    </div>
                </a>
            </div>
        <?php }?>

        <div class="block">
            <ul class="menu-v s-tutorial-checklist" id="tutorial-actions"><?php  $_smarty_tpl->tpl_vars['_step'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_step']->_loop = false;
 $_smarty_tpl->tpl_vars['_step_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_step']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_step']->key => $_smarty_tpl->tpl_vars['_step']->value){
$_smarty_tpl->tpl_vars['_step']->_loop = true;
 $_smarty_tpl->tpl_vars['_step_id']->value = $_smarty_tpl->tpl_vars['_step']->key;
 $_smarty_tpl->tpl_vars['_step']->iteration++;
?><?php $_smarty_tpl->tpl_vars['_step_classes'] = new Smarty_variable(array(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['_step']->value['complete']){?><?php $_smarty_tpl->createLocalArrayVariable('_step_classes', null, 0);
$_smarty_tpl->tpl_vars['_step_classes']->value[] = "is-complete";?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['_step_id']->value=='welcome'){?><?php $_smarty_tpl->createLocalArrayVariable('_step_classes', null, 0);
$_smarty_tpl->tpl_vars['_step_classes']->value[] = "is-active";?><?php }else{ ?><?php $_smarty_tpl->createLocalArrayVariable('_step_classes', null, 0);
$_smarty_tpl->tpl_vars['_step_classes']->value[] = "is-disabled";?><?php }?><?php }?><li class="js-actions-link js-step-link <?php echo smarty_modifier_join($_smarty_tpl->tpl_vars['_step_classes']->value," ");?>
" data-step="<?php echo $_smarty_tpl->tpl_vars['_step_id']->value;?>
"><span class="s-activity-point"><?php echo $_smarty_tpl->tpl_vars['_step']->iteration;?>
</span><a href="<?php if ($_smarty_tpl->tpl_vars['actions']->value['welcome']['complete']){?><?php echo $_smarty_tpl->tpl_vars['_step']->value['href'];?>
<?php }else{ ?>javascript:void(0)<?php }?>"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_step']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a><span class="s-step-icon js-status" <?php if (!$_smarty_tpl->tpl_vars['_step']->value['complete']){?>style="display: none;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['_complete_icon']->value;?>
</span></li><?php } ?><li class="js-step-link is-disabled" data-step="profit"><a href="javascript:void(0)"><span class="s-activity-point"></span>Готово!</a></li></ul>

            <hr>

            <p class="align-center">
                <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?skipwelcome=1" class="button green js-finish-tutorial">Закрыть быстрый старт</a>
            </p>

            <!-- plugin hook: 'backend_tutorial.sidebar_block' -->
            
            <?php if (isset($_smarty_tpl->tpl_vars['backend_tutorial']->value)){?>
                <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = ifempty($_smarty_tpl->tpl_vars['backend_tutorial']->value,array()); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['sidebar_block']);?>
<?php } ?>
            <?php }?>

        </div>
    </div>

    <script>
        (function ($) {
            new TutorialSidebar({
                $wrapper: $("#tutorial-actions"),
                $actions: <?php echo json_encode($_smarty_tpl->tpl_vars['actions']->value);?>
,
                active_step: "welcome"
            });
        })(jQuery);
    </script>
</div><?php }} ?>
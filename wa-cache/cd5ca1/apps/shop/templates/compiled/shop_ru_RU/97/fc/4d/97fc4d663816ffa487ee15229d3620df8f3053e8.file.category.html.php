<?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 18:04:28
         compiled from "/var/www/web-magaz/wa-data/public/shop/themes/default/category.html" */ ?>
<?php /*%%SmartyHeaderCode:198036684669cd5e2cf13899-46916027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97fc4d663816ffa487ee15229d3620df8f3053e8' => 
    array (
      0 => '/var/www/web-magaz/wa-data/public/shop/themes/default/category.html',
      1 => 1775066663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198036684669cd5e2cf13899-46916027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'frontend_category' => 0,
    '_' => 0,
    'filters' => 0,
    'wa_static_url' => 0,
    'wa' => 0,
    'theme_settings' => 0,
    'wa_parent_theme_url' => 0,
    'fid' => 0,
    'filter' => 0,
    'c' => 0,
    '_v' => 0,
    'v_id' => 0,
    'v' => 0,
    'sc' => 0,
    'products' => 0,
    'page' => 0,
    '_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_69cd5e34390f62_05932112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69cd5e34390f62_05932112')) {function content_69cd5e34390f62_05932112($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_date')) include '/var/www/web-magaz/wa-system/vendors/smarty-plugins/modifier.wa_date.php';
?><h1 class="category-name">
    <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

</h1>

<!-- plugin hook: 'frontend_category' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>

<!-- filtering by product features -->
<?php if (!empty($_smarty_tpl->tpl_vars['filters']->value)){?>
<?php if (waRequest::isXMLHttpRequest()&&waRequest::get('page',1)==1){?>
<link href="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/css/jquery-ui/base/jquery.ui.slider.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.core.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.widget.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.mouse.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.slider.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<?php }?>
<div class="filters leadbox<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['ajax_filters'])){?> ajax<?php }?>">
    <div class="filters-toggle-wrapper">
        <a class="filters-toggle-link" id="filters-toggle-link" href="javascript:void(0);" data-show-text="Подбор по параметрам" data-hide-text="Скрыть подбор">Подбор по параметрам</a>
    </div>
    <form class="filters-form-wrapper" method="get" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->currentUrl(0,1);?>
" data-loading="<?php echo $_smarty_tpl->tpl_vars['wa_parent_theme_url']->value;?>
img/loading16.gif">
        <?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_smarty_tpl->tpl_vars['fid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value){
$_smarty_tpl->tpl_vars['filter']->_loop = true;
 $_smarty_tpl->tpl_vars['fid']->value = $_smarty_tpl->tpl_vars['filter']->key;
?>
            <div class="filter-param">
                <?php if ($_smarty_tpl->tpl_vars['fid']->value=='price'){?>
                    <?php $_smarty_tpl->tpl_vars['c'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->currency(true), null, 0);?>
                    <h5>Цена</h5>
                    <div class="slider">
                    от <input type="text" class="min" name="price_min" <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('price_min')){?>value="<?php echo (int)$_smarty_tpl->tpl_vars['wa']->value->get('price_min');?>
"<?php }?> placeholder="<?php echo floor($_smarty_tpl->tpl_vars['filter']->value['min']);?>
">
                    до <input type="text" class="max" name="price_max" <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('price_max')){?>value="<?php echo (int)$_smarty_tpl->tpl_vars['wa']->value->get('price_max');?>
"<?php }?> placeholder="<?php echo ceil($_smarty_tpl->tpl_vars['filter']->value['max']);?>
"> <?php echo $_smarty_tpl->tpl_vars['c']->value['sign'];?>

                    </div>
                <?php }else{ ?>
                    <h5><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['filter']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h5>
                    <?php if ($_smarty_tpl->tpl_vars['filter']->value['type']=='boolean'){?>
                        <label><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
"<?php if ($_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code'])){?> checked<?php }?> value="1"> Да</label>
                        <label><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
"<?php if ($_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code'])==='0'){?> checked<?php }?> value="0"> Нет</label>
                        <label><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
"<?php if ($_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code'],'')===''){?> checked<?php }?> value=""> Неважно</label>

                    <?php }elseif($_smarty_tpl->tpl_vars['filter']->value['type']=="range.date"){?>
                        <div class="s-filter-item s-range-date-item" id="js-filter-<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['filter']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" data-min="<?php echo $_smarty_tpl->tpl_vars['filter']->value['min'];?>
" data-max="<?php echo $_smarty_tpl->tpl_vars['filter']->value['max'];?>
">
                            <div class="s-datepicker-wrapper">
                                <span class="s-label">от</span>
                                <div class="s-fields">
                                    <input class="js-datepicker" type="text" value="<?php if (!empty($_smarty_tpl->tpl_vars['_v']->value['min'])){?><?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['_v']->value['min']);?>
<?php }?>" placeholder="<?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['filter']->value['min']);?>
">
                                    <input name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
[min]" type="hidden" value="<?php if (!empty($_smarty_tpl->tpl_vars['_v']->value['min'])){?><?php echo $_smarty_tpl->tpl_vars['_v']->value['min'];?>
<?php }?>">
                                </div>
                            </div>
                            <div class="s-datepicker-wrapper">
                                <span class="s-label">до</span>
                                <div class="s-fields">
                                    <input class="js-datepicker" type="text" value="<?php if (!empty($_smarty_tpl->tpl_vars['_v']->value['max'])){?><?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['_v']->value['max']);?>
<?php }?>" placeholder="<?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['filter']->value['max']);?>
">
                                    <input name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
[max]" type="hidden" value="<?php if (!empty($_smarty_tpl->tpl_vars['_v']->value['max'])){?><?php echo $_smarty_tpl->tpl_vars['_v']->value['max'];?>
<?php }?>">
                                </div>
                            </div>

                            <script>
                                ( function($) {
                                    var $filter = $("#js-filter-<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['filter']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
");
                                    $filter.find(".js-datepicker").each( function() { initDatepicker( $(this) ); });

                                    function initDatepicker($datepicker) {
                                        var $altField = $datepicker.parent().find("input[type='hidden']");
                                        $datepicker.datepicker({
                                            altField: $altField,
                                            altFormat: "yy-mm-dd",
                                            minDate: formatDate($filter.data("min")),
                                            maxDate: formatDate($filter.data("max")),
                                            changeMonth: true,
                                            changeYear: true
                                        });

                                        $datepicker.on("change", function() {
                                            var value = $datepicker.val();
                                            if (!value) {
                                                $altField.val("");
                                            }
                                        });

                                        function formatDate(date_string) {
                                            var date_array = date_string.split("-");
                                            var year = date_array[0],
                                                mount = date_array[1] - 1,
                                                day = date_array[2];
                                            return new Date(year, mount, day);
                                        }
                                    }
                                })(jQuery);
                            </script>
                        </div>
                    <?php }elseif(isset($_smarty_tpl->tpl_vars['filter']->value['min'])){?>
                    <?php $_smarty_tpl->tpl_vars['_v'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code']), null, 0);?>
                    <div class="slider">
                    от <input type="text" class="min" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
[min]" placeholder="<?php echo $_smarty_tpl->tpl_vars['filter']->value['min'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_v']->value['min'])){?>value="<?php echo $_smarty_tpl->tpl_vars['_v']->value['min'];?>
"<?php }?>>
                    до <input type="text" class="max" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
[max]" placeholder="<?php echo $_smarty_tpl->tpl_vars['filter']->value['max'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_v']->value['max'])){?>value="<?php echo $_smarty_tpl->tpl_vars['_v']->value['max'];?>
"<?php }?>>
                    <?php if (!empty($_smarty_tpl->tpl_vars['filter']->value['unit'])){?>
                        <?php echo $_smarty_tpl->tpl_vars['filter']->value['unit']['title'];?>

                        <?php if ($_smarty_tpl->tpl_vars['filter']->value['unit']['value']!=$_smarty_tpl->tpl_vars['filter']->value['base_unit']['value']){?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
[unit]" value="<?php echo $_smarty_tpl->tpl_vars['filter']->value['unit']['value'];?>
"><?php }?>
                    <?php }?>
                    </div>
                    <?php }else{ ?>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <label>
                            <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
[]" <?php if (in_array($_smarty_tpl->tpl_vars['v_id']->value,(array)$_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code'],array()))){?>checked<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>

                        </label>
                    <?php } ?>
                    <?php }?>
                <?php }?>
            </div>
        <?php } ?>
        <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('sort')){?><input type="hidden" name="sort" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['wa']->value->get('sort'), ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('order')){?><input type="hidden" name="order" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['wa']->value->get('order'), ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
        <input type="submit" class="gray" value="Показать">
    </form>
</div>
<?php }?>

<!-- description -->
<?php if ($_smarty_tpl->tpl_vars['category']->value['description']){?>
    <p><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</p>
<?php }?>

<!-- subcategories -->
<?php if ($_smarty_tpl->tpl_vars['category']->value['subcategories']){?>
    <ul class="sub-links">
        <?php  $_smarty_tpl->tpl_vars['sc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value['subcategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sc']->key => $_smarty_tpl->tpl_vars['sc']->value){
$_smarty_tpl->tpl_vars['sc']->_loop = true;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['sc']->value['url'];?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['sc']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
        <?php } ?>
    </ul>
<?php }?>

<div id="product-list">
<?php if (!$_smarty_tpl->tpl_vars['products']->value){?>
    <?php $_smarty_tpl->tpl_vars['page'] = new Smarty_variable(waRequest::get('page',1,'int'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['_message'] = new Smarty_variable(_w("This category does not contain any products."), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value>1){?>
        <?php $_smarty_tpl->tpl_vars['_message'] = new Smarty_variable(sprintf(_w('No products on this page. <a href="%s">Continue viewing products of this category</a>.'),$_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/category',array('category_url'=>$_smarty_tpl->tpl_vars['category']->value['full_url']))), null, 0);?>
    <?php }elseif(!empty($_smarty_tpl->tpl_vars['filters']->value)){?>
        <?php $_smarty_tpl->tpl_vars['_message'] = new Smarty_variable(_w("No products were found."), null, 0);?>
    <?php }?>

    <?php echo $_smarty_tpl->tpl_vars['_message']->value;?>

<?php }else{ ?>
    <?php echo $_smarty_tpl->getSubTemplate ('list-thumbs.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sorting'=>!empty($_smarty_tpl->tpl_vars['category']->value['params']['enable_sorting'])), 0);?>

    
<?php }?>
</div>

<div class="clear-both"></div><?php }} ?>
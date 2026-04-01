<?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 18:00:31
         compiled from "/var/www/web-magaz/wa-apps/shop/themes/default/list-thumbs.html" */ ?>
<?php /*%%SmartyHeaderCode:60625366769cd5d3f411a09-66326030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae116c484dd0771bb9a52798e3230ce7ce7d36c3' => 
    array (
      0 => '/var/www/web-magaz/wa-apps/shop/themes/default/list-thumbs.html',
      1 => 1775065769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60625366769cd5d3f411a09-66326030',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'sorting' => 0,
    'active_sort' => 0,
    'category' => 0,
    'sort_fields' => 0,
    'sort' => 0,
    'name' => 0,
    'theme_settings' => 0,
    'products' => 0,
    'p' => 0,
    'sku' => 0,
    'badge_html' => 0,
    'wa_theme_url' => 0,
    'f_code' => 0,
    'features' => 0,
    'f_value' => 0,
    'available' => 0,
    'add2cart_label' => 0,
    '_cart_url' => 0,
    'pages_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_69cd5d3f46db99_23506583',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69cd5d3f46db99_23506583')) {function content_69cd5d3f46db99_23506583($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/web-magaz/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_wa_pagination')) include '/var/www/web-magaz/wa-system/vendors/smarty-plugins/function.wa_pagination.php';
?><?php $_smarty_tpl->tpl_vars['_cart_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart'), null, 0);?>
<?php if (method_exists($_smarty_tpl->tpl_vars['wa']->value->shop,'checkout')){?>
    <?php $_smarty_tpl->tpl_vars['_cart_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->checkout()->cartUrl(), null, 0);?>
<?php }?>

<!-- products thumbnail list view -->

<?php if (!empty($_smarty_tpl->tpl_vars['sorting']->value)){?>
    <!-- sorting -->
    <?php $_smarty_tpl->tpl_vars['sort_fields'] = new Smarty_variable(array('name'=>_w('Name'),'price'=>_w('Price'),'total_sales'=>_w('Bestsellers'),'rating'=>_w('Customer rating'),'create_datetime'=>_w('Date added'),'stock'=>_w('In stock')), null, 0);?>

    <?php if (!isset($_smarty_tpl->tpl_vars['active_sort']->value)){?>
        <?php $_smarty_tpl->tpl_vars['active_sort'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->get('sort','create_datetime'), null, 0);?>
    <?php }?>
    <ul class="sorting">
        <li>Сортировать:</li>
        <?php if (!empty($_smarty_tpl->tpl_vars['category']->value)&&!$_smarty_tpl->tpl_vars['category']->value['sort_products']){?>
            <li <?php if (!$_smarty_tpl->tpl_vars['active_sort']->value){?>class="selected"<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->sortUrl("new","Новые и популярные",$_smarty_tpl->tpl_vars['active_sort']->value);?>

            </li>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sort_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
            <li<?php if ($_smarty_tpl->tpl_vars['active_sort']->value==$_smarty_tpl->tpl_vars['sort']->value){?> class="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->sortUrl($_smarty_tpl->tpl_vars['sort']->value,$_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl->tpl_vars['active_sort']->value);?>
</li>
            <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('sort')==$_smarty_tpl->tpl_vars['sort']->value){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->title((($_smarty_tpl->tpl_vars['wa']->value->title()).(' — ')).($_smarty_tpl->tpl_vars['name']->value));?>
<?php }?>
        <?php } ?>
    </ul>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->cart->total()>0){?><?php $_smarty_tpl->tpl_vars['add2cart_label'] = new Smarty_variable(_wd('shop','Add to cart'), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['add2cart_label'] = new Smarty_variable(_wd('shop','Buy'), null, 0);?><?php }?>

<ul class="thumbs product-list">
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['list_features'])){?>
    <?php $_smarty_tpl->tpl_vars['features'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->features($_smarty_tpl->tpl_vars['products']->value), null, 0);?>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars['available'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['p']->value['count']===null||$_smarty_tpl->tpl_vars['p']->value['count']>0, null, 0);?>

    <?php if (!empty($_smarty_tpl->tpl_vars['p']->value['skus'])&&!empty($_smarty_tpl->tpl_vars['p']->value['skus'][$_smarty_tpl->tpl_vars['p']->value['sku_id']])){?>
        <?php $_smarty_tpl->tpl_vars['sku'] = new Smarty_variable($_smarty_tpl->tpl_vars['p']->value['skus'][$_smarty_tpl->tpl_vars['p']->value['sku_id']], null, 0);?>
        <?php if (empty($_smarty_tpl->tpl_vars['sku']->value['available'])&&(count($_smarty_tpl->tpl_vars['p']->value['skus'])===1)){?><?php $_smarty_tpl->tpl_vars['available'] = new Smarty_variable(false, null, 0);?><?php }?>
    <?php }?>

    <li itemscope itemtype ="http://schema.org/Product">
        <a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
">
            <div class="image">
                <div class="badge-wrapper">
                    <?php $_smarty_tpl->tpl_vars['badge_html'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->badgeHtml($_smarty_tpl->tpl_vars['p']->value['badge']), null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['badge_html']->value){?>
                        <div class="corner top right"><?php echo $_smarty_tpl->tpl_vars['badge_html']->value;?>
</div>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['p']->value,'200',array('itemprop'=>'image','alt'=>$_smarty_tpl->tpl_vars['p']->value['name'],'default'=>((string)$_smarty_tpl->tpl_vars['wa_theme_url']->value)."img/dummy200.png"));?>

                </div>
            </div>
            <h5>
                <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</span>
            </h5>
            <?php if ($_smarty_tpl->tpl_vars['p']->value['summary']){?><span itemprop="description" class="summary"><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['p']->value['summary']),100);?>
</span><?php }?>
        </a>
        <?php if (!empty($_smarty_tpl->tpl_vars['p']->value['features'])){?>
        <table class="features">
            <?php  $_smarty_tpl->tpl_vars['f_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_value']->_loop = false;
 $_smarty_tpl->tpl_vars['f_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['p']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_value']->key => $_smarty_tpl->tpl_vars['f_value']->value){
$_smarty_tpl->tpl_vars['f_value']->_loop = true;
 $_smarty_tpl->tpl_vars['f_code']->value = $_smarty_tpl->tpl_vars['f_value']->key;
?>
            <tr<?php if ($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['type']=='divider'){?> class="divider"<?php }?>>
            <td class="name">
                <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['name'], ENT_QUOTES, 'UTF-8', true);?>

            </td>
            <td class="value" itemprop="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['f_code']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                <?php if (is_array($_smarty_tpl->tpl_vars['f_value']->value)){?>
                    <?php if ($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['type']=='color'){?>
                        <?php echo implode('<br /> ',$_smarty_tpl->tpl_vars['f_value']->value);?>

                    <?php }else{ ?>
                        <?php echo implode(', ',$_smarty_tpl->tpl_vars['f_value']->value);?>

                    <?php }?>
                <?php }else{ ?>
                    <?php echo $_smarty_tpl->tpl_vars['f_value']->value;?>

                <?php }?>
            </td>
            </tr>
            <?php } ?>
        </table>
        <?php }?>
        <div itemprop="offers" class="offers" itemscope itemtype="http://schema.org/Offer">
            <?php if ($_smarty_tpl->tpl_vars['available']->value){?>
                <form class="purchase addtocart" <?php if ($_smarty_tpl->tpl_vars['p']->value['sku_count']>1){?>data-url="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
<?php if (strpos($_smarty_tpl->tpl_vars['p']->value['frontend_url'],'?')){?>&<?php }else{ ?>?<?php }?>cart=1"<?php }?> method="post" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontendCart/add');?>
">
                    <div class="pricing">
                        <?php if ($_smarty_tpl->tpl_vars['p']->value['compare_price']>0){?><span class="compare-at-price nowrap"> <?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['compare_price']);?>
</span> <?php }?>
                        <span class="price nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['price']);?>
</span>
                        <meta itemprop="price" content="<?php echo shop_currency($_smarty_tpl->tpl_vars['p']->value['price'],null,null,0);?>
">
                        <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->currency();?>
">
                    </div>
                    <input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
">
                    <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['add2cart_label']->value;?>
">
                    <i class="adding2cart"></i>
                    <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['compare_products'])){?><a data-product="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" class="compare" href="#" title="Сравнить"><i class="icon16 compare compare-from-list<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->inComparison($_smarty_tpl->tpl_vars['p']->value['id'])){?> active<?php }?>"></i></a><?php }?>
                    <span class="added2cart" style="display: none;"><?php echo sprintf('%s теперь <a href="%s"><strong>в вашей корзине покупок</strong></a>',$_smarty_tpl->tpl_vars['p']->value['name'],$_smarty_tpl->tpl_vars['_cart_url']->value);?>
</span>
                </form>
                <link itemprop="availability" href="http://schema.org/InStock" />
            <?php }else{ ?>
                <span class="price nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['price']);?>
</span>
                <meta itemprop="price" content="<?php echo shop_currency($_smarty_tpl->tpl_vars['p']->value['price'],null,null,0);?>
">
                <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->currency();?>
">
                <div class="out-of-stock">
                    <strong>
                        <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')){?>
                            <?php echo _wd('shop','Pre-order only');?>

                        <?php }else{ ?>
                            <?php echo _wd('shop','Out of stock');?>

                        <?php }?>
                    </strong>
                </div>
                <link itemprop="availability" href="http://schema.org/OutOfStock" />
            <?php }?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['p']->value['rating']>0){?>
            <span class="rating nowrap"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->ratingHtml($_smarty_tpl->tpl_vars['p']->value['rating'],16);?>
</span>
        <?php }?>
    </li>
<?php } ?>
</ul>

<?php if (isset($_smarty_tpl->tpl_vars['pages_count']->value)&&$_smarty_tpl->tpl_vars['pages_count']->value>1){?>
<div class="block <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['pagination']=='lazyloading'){?>lazyloading-paging<?php }else{ ?>paging-nav<?php }?>"  data-times="2" data-link-text="Загрузить еще" data-loading-str="Загрузка...">
    <?php echo smarty_function_wa_pagination(array('total'=>$_smarty_tpl->tpl_vars['pages_count']->value,'attrs'=>array('class'=>"menu-h")),$_smarty_tpl);?>

</div>
<?php }?>
<?php }} ?>
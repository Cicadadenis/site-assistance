<?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 18:00:31
         compiled from "/var/www/web-magaz/wa-apps/shop/themes/default/list-thumbs-mini.html" */ ?>
<?php /*%%SmartyHeaderCode:6814334169cd5d3f500195-85249189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ade3e893614c0aece679d74987f98980beac88c9' => 
    array (
      0 => '/var/www/web-magaz/wa-apps/shop/themes/default/list-thumbs-mini.html',
      1 => 1775065769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6814334169cd5d3f500195-85249189',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'ulclass' => 0,
    'products' => 0,
    'p' => 0,
    'wa_theme_url' => 0,
    'available' => 0,
    'without_form' => 0,
    '_cart_url' => 0,
    'pages_count' => 0,
    'theme_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_69cd5d3f534073_53533516',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69cd5d3f534073_53533516')) {function content_69cd5d3f534073_53533516($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/web-magaz/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_wa_pagination')) include '/var/www/web-magaz/wa-system/vendors/smarty-plugins/function.wa_pagination.php';
?><?php $_smarty_tpl->tpl_vars['_cart_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart'), null, 0);?>
<?php if (method_exists($_smarty_tpl->tpl_vars['wa']->value->shop,'checkout')){?>
    <?php $_smarty_tpl->tpl_vars['_cart_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->checkout()->cartUrl(), null, 0);?>
<?php }?>

<!-- products mini thumbnail list view: related products, etc. -->
<ul class="thumbs product-list mini<?php if (!empty($_smarty_tpl->tpl_vars['ulclass']->value)){?> <?php echo $_smarty_tpl->tpl_vars['ulclass']->value;?>
<?php }?>">
<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars['available'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['p']->value['count']===null||$_smarty_tpl->tpl_vars['p']->value['count']>0, null, 0);?>
    <li itemscope itemtype ="http://schema.org/Product">
        <div class="image">
            <a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
">
                
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['p']->value,'96x96',array('itemprop'=>'image','alt'=>$_smarty_tpl->tpl_vars['p']->value['name'],'default'=>((string)$_smarty_tpl->tpl_vars['wa_theme_url']->value)."img/dummy96.png"));?>

                <h5>
                    <span itemprop="name"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['p']->value['name'],30);?>
</span>
                </h5>
                <?php if ($_smarty_tpl->tpl_vars['p']->value['summary']){?><meta itemprop="description" content="<?php echo strip_tags($_smarty_tpl->tpl_vars['p']->value['summary']);?>
"><?php }?>
            </a>
        </div>
        <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
            

            <?php if ($_smarty_tpl->tpl_vars['available']->value){?>
                <?php if (!empty($_smarty_tpl->tpl_vars['without_form']->value)){?>
                    <div class="purchase addtocart" <?php if ($_smarty_tpl->tpl_vars['p']->value['sku_count']>1){?>data-url="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
<?php if (strpos($_smarty_tpl->tpl_vars['p']->value['frontend_url'],'?')){?>&<?php }else{ ?>?<?php }?>cart=1"<?php }?>>
                        <span class="price nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['price']);?>
</span>
                        <meta itemprop="price" content="<?php echo shop_currency($_smarty_tpl->tpl_vars['p']->value['price'],null,null,0);?>
">
                        <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->currency();?>
">
                        <input type="button" data-product_id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontendCart/add');?>
" value="В корзину">
                        <i class="adding2cart"></i>
                        <span class="added2cart" style="display: none;"><?php echo sprintf('%s теперь <a href="%s"><strong>в вашей корзине покупок</strong></a>',$_smarty_tpl->tpl_vars['p']->value['name'],$_smarty_tpl->tpl_vars['_cart_url']->value);?>
</span>
                    </div>
                <?php }else{ ?>
                    <form class="purchase addtocart" <?php if ($_smarty_tpl->tpl_vars['p']->value['sku_count']>1){?>data-url="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
<?php if (strpos($_smarty_tpl->tpl_vars['p']->value['frontend_url'],'?')){?>&<?php }else{ ?>?<?php }?>cart=1"<?php }?> method="post" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontendCart/add');?>
">
                        <span class="price nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['price']);?>
</span>
                        <meta itemprop="price" content="<?php echo shop_currency($_smarty_tpl->tpl_vars['p']->value['price'],null,null,0);?>
">
                        <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->currency();?>
">
                        <input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
">
                        <input type="submit" value="В корзину">
                        <i class="adding2cart"></i>
                        <span class="added2cart" style="display: none;"><?php echo sprintf('%s теперь <a href="%s"><strong>в вашей корзине покупок</strong></a>',$_smarty_tpl->tpl_vars['p']->value['name'],$_smarty_tpl->tpl_vars['_cart_url']->value);?>
</span>
                    </form>
                <?php }?>
                <link itemprop="availability" href="http://schema.org/InStock" />
            <?php }else{ ?>
                <span class="price nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['price']);?>
</span>
                <meta itemprop="price" content="<?php echo shop_currency($_smarty_tpl->tpl_vars['p']->value['price'],null,null,0);?>
">
                <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->currency();?>
">
                <div class="out-of-stock"><strong><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')){?>Под заказ<?php }else{ ?>Нет в наличии<?php }?></strong></div>
                <link itemprop="availability" href="http://schema.org/OutOfStock" />
            <?php }?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['p']->value['rating']>0){?>
            <span class="rating nowrap"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->ratingHtml($_smarty_tpl->tpl_vars['p']->value['rating']);?>
</span>
        <?php }?>
    </li>
<?php } ?>
</ul>

<?php if (isset($_smarty_tpl->tpl_vars['pages_count']->value)&&$_smarty_tpl->tpl_vars['pages_count']->value>1){?>
<div class="block <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['pagination']=='lazyloading'){?>lazyloading-paging<?php }else{ ?>paging-nav<?php }?>" data-loading-str="Загрузка...">
    <?php echo smarty_function_wa_pagination(array('total'=>$_smarty_tpl->tpl_vars['pages_count']->value,'attrs'=>array('class'=>"menu-h")),$_smarty_tpl);?>

</div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 18:06:03
         compiled from "/var/www/web-magaz/wa-apps/shop/templates/includes/checkoutVersionRouteMoveSetting.html" */ ?>
<?php /*%%SmartyHeaderCode:107102494869cd5e8beefcc0-42095865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aab6a2cbdc056b236ced0a3bbf145974321b8bd' => 
    array (
      0 => '/var/www/web-magaz/wa-apps/shop/templates/includes/checkoutVersionRouteMoveSetting.html',
      1 => 1775065795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107102494869cd5e8beefcc0-42095865',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_69cd5e8bef3800_95614027',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69cd5e8bef3800_95614027')) {function content_69cd5e8bef3800_95614027($_smarty_tpl) {?>


<style>
    .checkout-2-background { background-color: #9cff9e; }
</style>
<script>
    (function ($) {
        var $version_field = $('input[name="params[checkout_version]"]').parents('.field'),
            $theme_field = $('select[name="params[theme_mobile]"]').parents('.field');

        $version_field.insertAfter($theme_field);
    })(jQuery);
</script><?php }} ?>
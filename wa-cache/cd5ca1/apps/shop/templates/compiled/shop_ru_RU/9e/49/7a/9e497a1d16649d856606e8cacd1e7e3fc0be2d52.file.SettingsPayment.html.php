<?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 17:59:55
         compiled from "/var/www/web-magaz/wa-apps/shop/templates/actions/settings/SettingsPayment.html" */ ?>
<?php /*%%SmartyHeaderCode:211722864369cd5d1b8fdbe5-28734571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e497a1d16649d856606e8cacd1e7e3fc0be2d52' => 
    array (
      0 => '/var/www/web-magaz/wa-apps/shop/templates/actions/settings/SettingsPayment.html',
      1 => 1775065795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211722864369cd5d1b8fdbe5-28734571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plugins' => 0,
    'id' => 0,
    'plugin' => 0,
    'installer' => 0,
    'instances' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_69cd5d1b987a15_54636446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69cd5d1b987a15_54636446')) {function content_69cd5d1b987a15_54636446($_smarty_tpl) {?>
<div class="blank s-settings-form">
    <div class="block double-padded">

        <div class="float-right">
            <ul class="menu-h with-icons dropdown" id="s-payment-menu">
                <li>
                    <a href="#/payment/" class="inline-link js-action"><i class="icon16 add"></i><b><i>Добавить способ оплаты</i></b><i class="icon16 darr"></i></a>
                    <ul class="menu-v with-icons">
                        <?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['plugin']->key;
?>
                        <li>
                            <a href="#/payment/plugin/add/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/">
                            <?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['icon'][16])){?>
                            <?php echo shopHelper::getIcon('ss payment-bw');?>

                            <?php }else{ ?>
                            <?php echo shopHelper::getIcon($_smarty_tpl->tpl_vars['plugin']->value['icon'][16]);?>

                            <?php }?>
                            <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['plugin']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                            </a>

                        </li>
                        <?php } ?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['installer']->value)){?>
                        <li class="bordered-top" style="padding-top: 10px; padding-bottom: 10px; margin-top: 7px; padding-left: 8px;">
                            <a href="#/payment/plugins/" style="text-align: center;">Поиск плагинов оплаты...</a>
                            <br>
                            <span class="hint align-center">Каждый способ оплаты можно установить несколько раз и задать каждому способу различные настройки.</span>
                        </li>
                        <?php }?>
                    </ul>
                </li>
            </ul>
        </div>

        <h1 class="js-bread-crumbs">Оплата</h1>

        <br>
        <table class="zebra" id="s-settings-payment">
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['instances']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['plugin']->key;
?>

            <tr data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                <td class="min-width"><i class="icon16 sort"></i></td>
                <td class="min-width">
                    <?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['installed'])){?>
                        <i class="icon16 exclamation"></i>
                    <?php }else{ ?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['logo'])){?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['logo'];?>
" class="s-payment-shipping-logo">
                        <?php }elseif(!empty($_smarty_tpl->tpl_vars['plugin']->value['img'])){?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['img'];?>
" class="s-payment-shipping-logo">
                        <?php }?>
                    <?php }?>
                </td>
                <td>
                    <h3 class="large<?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['status'])){?> gray<?php }?>  js-plugin-title">
                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['plugin']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                        <?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['status'])){?>(отключен)<?php }?>
                        <?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['installed'])){?>
                            <span class="red">удален</span>
                        <?php }?>
                    </h3>
                    <?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['installed'])){?>
                        <span><i class="icon16 info"></i>
                            <?php if ($_smarty_tpl->tpl_vars['installer']->value){?>
                                <?php echo sprintf('Можно удалить настройки или установить <a href="%s" class="inline">плагин</a>.',"#/payment/plugins/");?>

                            <?php }else{ ?>
                                Можно удалить настройки или установить плагин.
                            <?php }?>
                        </span>
                    <?php }?>
                    <p class="hint"><?php echo strip_tags($_smarty_tpl->tpl_vars['plugin']->value['description']);?>
</p>
                </td>
                <td>
                    <ul class="menu-h with-icons">
                        <li><a href="#/payment/plugin/setup/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" class="nowrap js-payment-plugin-setup"><i class="icon16 settings"></i>Конфигурация</a></li>
                        <li>
                            <a href="#" class="nowrap js-payment-plugin-clone">
                                <i class="icon16 split"></i>Создать копию
                            </a>
                        </li>
                        <li><a href="#/payment/plugin/delete/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" class="nowrap js-action js-confirm js-payment-plugin-delete"
                               data-confirm-text="Этот способ оплаты будет полностью удален. Продолжить?"><i class="icon16 delete"></i>Удалить</a></li>
                    </ul>
                </td>

            </tr>
            <?php }
if (!$_smarty_tpl->tpl_vars['plugin']->_loop) {
?>
            <tr>
                <td>
                    <em class="gray">Не определено ни одного способа оплаты.</em>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>

    <div id="s-settings-payment-setup" class="fields form"></div>

    </div>
    <div class="clear-both"></div>
</div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/payment.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>

<script type="text/javascript">
document.title = '<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr(("Оплата").(" — ").($_tmp1), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
if(typeof($)!='undefined') {
$.settings.paymentInit({
    locales: {
        disabled: <?php echo json_encode(_w('disabled'));?>

    }
});
}
</script>
<?php }} ?>
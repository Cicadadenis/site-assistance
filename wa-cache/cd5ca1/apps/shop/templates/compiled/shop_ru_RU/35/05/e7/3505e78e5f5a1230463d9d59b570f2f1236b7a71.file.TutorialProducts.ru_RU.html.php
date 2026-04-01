<?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 17:57:54
         compiled from "/var/www/web-magaz/wa-apps/shop/templates/actions/tutorial/TutorialProducts.ru_RU.html" */ ?>
<?php /*%%SmartyHeaderCode:185306819969cd5ca2b0e425-78114008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3505e78e5f5a1230463d9d59b570f2f1236b7a71' => 
    array (
      0 => '/var/www/web-magaz/wa-apps/shop/templates/actions/tutorial/TutorialProducts.ru_RU.html',
      1 => 1775065796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185306819969cd5ca2b0e425-78114008',
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
    'products_imported' => 0,
    'wa_url' => 0,
    'wa_app_static_url' => 0,
    'prev_step' => 0,
    'next_step' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_69cd5ca2b43446_61204210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69cd5ca2b43446_61204210')) {function content_69cd5ca2b43446_61204210($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['actions']->value)){?>
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

<div class="s-unboarding-wrapper">
    <h1>Добавьте товары</h1>
    <?php if (!empty($_smarty_tpl->tpl_vars['products_imported']->value)){?>
        <p>Примеры товаров добавлены в ваш интернет-магазин. Теперь вы можете самостоятельно добавить и свои товары, как описано здесь.</p>
    <?php }?>

    <div class="s-content-with-indent">
        <div class="s-tutorial-block">
            <div class="s-title">
                <img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/backend/tutorial/arrow.green.svg" class="s-arrow" alt=""/><span class="s-title-text">Вручную по одному</span>
            </div>
            <div class="video-links">
                Посмотрите видеоурок
                <ul class="menu-v compact">
                    <li><a href="https://www.youtube.com/watch?v=SgbGrZIi3XA&amp;list=PL3TRPSqkoZRlZ7FcxdpmykLtVDKPUGpKz&amp;index=2" target="_blank">Как добавить новый товар <i class="icon16 new-window"></i></a></li>
                </ul>
            </div>
            <p><img src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/backend/tutorial/ru/step-2-1.png" alt=""></p>
        </div>

        <div class="s-tutorial-block">
            <div class="s-title">
                <img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/img/backend/tutorial/arrow.green.svg" class="s-arrow" alt=""/><span class="s-title-text">Автоматически сразу много</span>
            </div>
            <p><img src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/backend/tutorial/ru/step-2-2.png" alt=""></p>
            <p>В разделе «Импорт/экспорт» доступны разные способы добавления или обновления товаров.</p>
            <ul>
                <li><a href="https://support.webasyst.ru/shop-script/186/bulk-product-image-uploading/" target="_blank">Массовая загрузка изображений</a><i class="icon16 new-window"></i>: перетащите фотографии из папки на своем компьютере прямо в Shop-Script и сразу создайте из них много товаров.</li>
                <li><a href="https://support.webasyst.ru/shop-script/26/import-products-from-csv-file/" target="_blank">Импорт товаров из CSV-файла</a><i class="icon16 new-window"></i>: сохраните файл-таблицу в формате CSV с помощью Microsoft Excel, OpenOffice или iWork и загрузите его в Shop-Script. Всего за несколько минут из файла в магазин будут добавлены все нужные товары.
                    <div class="video-links">Посмотрите видеоуроки
                        <ul class="menu-v compact">
                            <li><a href="https://www.youtube.com/watch?v=TPPtY8C5BBI&list=PL3TRPSqkoZRlZ7FcxdpmykLtVDKPUGpKz&index=6" target="_blank">Как подготовить CSV-файл для импорта товаров <i class="icon16 new-window"></i></a></li>
                            <li><a href="https://www.youtube.com/watch?v=j81olDNh4rM&list=PL3TRPSqkoZRlZ7FcxdpmykLtVDKPUGpKz&index=7" target="_blank">Импорт товаров из CSV-файла <i class="icon16 new-window"></i></a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="https://support.webasyst.ru/shop-script/migrate/" target="_blank">Переход на Shop-Script</a><i class="icon16 new-window"></i>: перенесите данные из других систем для создания интернет-магазинов в Shop-Script.</li>
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
        ( function($) {
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
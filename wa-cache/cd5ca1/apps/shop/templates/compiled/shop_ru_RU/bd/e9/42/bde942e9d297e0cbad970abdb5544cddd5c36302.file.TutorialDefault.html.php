<?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 17:57:54
         compiled from "/var/www/web-magaz/wa-apps/shop/templates/actions/tutorial/TutorialDefault.html" */ ?>
<?php /*%%SmartyHeaderCode:39573402869cd5ca22635b2-30056063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bde942e9d297e0cbad970abdb5544cddd5c36302' => 
    array (
      0 => '/var/www/web-magaz/wa-apps/shop/templates/actions/tutorial/TutorialDefault.html',
      1 => 1775065796,
      2 => 'file',
    ),
    'be22dca9795dfb0d60f80c8efacbc0e41eff383c' => 
    array (
      0 => '/var/www/web-magaz/wa-apps/shop/templates/actions/tutorial/include.TutorialSidebar.html',
      1 => 1775065796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39573402869cd5ca22635b2-30056063',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_69cd5ca22ad299_33080967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69cd5ca22ad299_33080967')) {function content_69cd5ca22ad299_33080967($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/tutorial/tutorial.js"></script>

<div class="s-tutorial">
    <div class="sidebar right15px">
        <div class="block s-nolevel2-sidebar"></div>
    </div>

    <?php /*  Call merged included template "templates/actions/tutorial/include.TutorialSidebar.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("templates/actions/tutorial/include.TutorialSidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '39573402869cd5ca22635b2-30056063');
content_69cd5ca2284659_48420898($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "templates/actions/tutorial/include.TutorialSidebar.html" */?>

    <div class="content left300px blank s-nolevel2-box right15px">
        <div id="s-content">
            Загрузка... <i class="icon16 loading"></i>
        </div>
        <div class="clear-both"></div>
    </div>

    <script>
        ( function($) {
            $( function() {
                $.tutorial.init({ });
            });
        })(jQuery);
    </script>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 17:57:54
         compiled from "/var/www/web-magaz/wa-apps/shop/templates/actions/tutorial/include.TutorialSidebar.html" */ ?>
<?php if ($_valid && !is_callable('content_69cd5ca2284659_48420898')) {function content_69cd5ca2284659_48420898($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_join')) include '/var/www/web-magaz/wa-system/vendors/smarty-plugins/modifier.join.php';
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
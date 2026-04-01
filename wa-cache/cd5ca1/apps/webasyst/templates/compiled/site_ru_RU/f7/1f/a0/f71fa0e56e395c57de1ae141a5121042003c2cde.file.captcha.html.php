<?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 18:06:29
         compiled from "/var/www/web-magaz/wa-system/captcha/phpcaptcha/templates/captcha.html" */ ?>
<?php /*%%SmartyHeaderCode:161042907469cd5ea56a8277-70303359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f71fa0e56e395c57de1ae141a5121042003c2cde' => 
    array (
      0 => '/var/www/web-magaz/wa-system/captcha/phpcaptcha/templates/captcha.html',
      1 => 1775065820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161042907469cd5ea56a8277-70303359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wrapper_class' => 0,
    'captcha_url' => 0,
    'refresh' => 0,
    'input_name' => 0,
    'error_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_69cd5ea56af242_33398971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69cd5ea56af242_33398971')) {function content_69cd5ea56af242_33398971($_smarty_tpl) {?><div class="<?php echo $_smarty_tpl->tpl_vars['wrapper_class']->value;?>
">
    <p>
        <img class="wa-captcha-img" src="<?php echo $_smarty_tpl->tpl_vars['captcha_url']->value;?>
" alt="CAPTCHA" title="<?php echo $_smarty_tpl->tpl_vars['refresh']->value;?>
">
        <strong>&rarr;</strong>
        <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" class="wa-captcha-input<?php echo $_smarty_tpl->tpl_vars['error_class']->value;?>
" autocomplete="off">
    </p>
    <p>
        <a href="#" class="wa-captcha-refresh"><?php echo $_smarty_tpl->tpl_vars['refresh']->value;?>
</a>
    </p>
    <script type="text/javascript">
        $(function () {
            $('div.<?php echo $_smarty_tpl->tpl_vars['wrapper_class']->value;?>
 .wa-captcha-img').on('load', function () {
                $(window).trigger('wa_captcha_loaded');
            });

            $('div.<?php echo $_smarty_tpl->tpl_vars['wrapper_class']->value;?>
 .wa-captcha-refresh, div.<?php echo $_smarty_tpl->tpl_vars['wrapper_class']->value;?>
 .wa-captcha-img').click(function () {
                var $wrapper = $(this).parents('div.<?php echo $_smarty_tpl->tpl_vars['wrapper_class']->value;?>
'),
                    $input = $wrapper.find('.wa-captcha-input'),
                    $img = $wrapper.find('.wa-captcha-img'),
                    src = $img.attr('src');

                if ($img.length) {
                    $img.attr('src', src.replace(/\?.*$/, '?rid=' + Math.random()));
                    $img.one('load', function () {
                        $(window).trigger('wa_captcha_loaded');
                        $input.val('').focus();
                    });
                }

                return false;
            });
        });
    </script>
</div><?php }} ?>
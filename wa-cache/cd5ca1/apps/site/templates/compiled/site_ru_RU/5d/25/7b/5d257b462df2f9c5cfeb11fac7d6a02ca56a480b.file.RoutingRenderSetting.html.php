<?php /* Smarty version Smarty-3.1.14, created on 2026-04-01 18:06:03
         compiled from "/var/www/web-magaz/wa-apps/site/templates/actions/routing/RoutingRenderSetting.html" */ ?>
<?php /*%%SmartyHeaderCode:87182320369cd5e8befe9d4-75369657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d257b462df2f9c5cfeb11fac7d6a02ca56a480b' => 
    array (
      0 => '/var/www/web-magaz/wa-apps/site/templates/actions/routing/RoutingRenderSetting.html',
      1 => 1775065753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87182320369cd5e8befe9d4-75369657',
  'function' => 
  array (
    'renderName' => 
    array (
      'parameter' => 
      array (
        'value' => '',
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'info' => 0,
    'value' => 0,
    '_v' => 0,
    '_k' => 0,
    'route_id' => 0,
    'id' => 0,
    '_k2' => 0,
    '_v2' => 0,
    '_disabled' => 0,
    '_counter' => 0,
    '_last' => 0,
    '_selected' => 0,
    '_checked' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_69cd5e8c023887_40863532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_69cd5e8c023887_40863532')) {function content_69cd5e8c023887_40863532($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_renderName')) {
    function smarty_template_function_renderName($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['renderName']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php if (!empty($_smarty_tpl->tpl_vars['info']->value['original_name'])){?>
        <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

    <?php }else{ ?>
        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>

    <?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

<?php if ($_smarty_tpl->tpl_vars['info']->value['type']=='hidden'){?>
    <input type="hidden" name="params[<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
">

<?php }elseif($_smarty_tpl->tpl_vars['info']->value['type']=='input'){?>
    <input type="text" name="params[<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
">
    <?php if (!empty($_smarty_tpl->tpl_vars['info']->value['description'])){?>
        <p class="hint"><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</p>
    <?php }?>

<?php }elseif($_smarty_tpl->tpl_vars['info']->value['type']=='textarea'){?>
    <textarea name="params[<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
]"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
    <?php if (!empty($_smarty_tpl->tpl_vars['info']->value['description'])){?>
        <p class="hint"><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</p>
    <?php }?>

<?php }elseif($_smarty_tpl->tpl_vars['info']->value['type']=='select'){?>
    <div class="wa-select">
        <select name="params[<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
]">
            <?php  $_smarty_tpl->tpl_vars['_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_v']->_loop = false;
 $_smarty_tpl->tpl_vars['_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_v']->key => $_smarty_tpl->tpl_vars['_v']->value){
$_smarty_tpl->tpl_vars['_v']->_loop = true;
 $_smarty_tpl->tpl_vars['_k']->value = $_smarty_tpl->tpl_vars['_v']->key;
?>
                <?php if (!is_array($_smarty_tpl->tpl_vars['_v']->value)){?>
                    <?php $_smarty_tpl->tpl_vars['_v'] = new Smarty_variable(array('name'=>$_smarty_tpl->tpl_vars['_v']->value), null, 0);?>
                <?php }?>
                <option<?php if ($_smarty_tpl->tpl_vars['_k']->value==$_smarty_tpl->tpl_vars['value']->value){?> selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_k']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['_v']->value['description'])){?> title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_v']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
                    <?php smarty_template_function_renderName($_smarty_tpl,array('value'=>$_smarty_tpl->tpl_vars['_v']->value['name']));?>

                </option>
            <?php } ?>
        </select>
    </div>
    <?php if (!empty($_smarty_tpl->tpl_vars['info']->value['description'])){?>
        <p class="hint"><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</p>
    <?php }?>

<?php }elseif($_smarty_tpl->tpl_vars['info']->value['type']=='radio'){?>
    <?php  $_smarty_tpl->tpl_vars['_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_v']->_loop = false;
 $_smarty_tpl->tpl_vars['_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_v']->key => $_smarty_tpl->tpl_vars['_v']->value){
$_smarty_tpl->tpl_vars['_v']->_loop = true;
 $_smarty_tpl->tpl_vars['_k']->value = $_smarty_tpl->tpl_vars['_v']->key;
?>
        <?php if (!is_array($_smarty_tpl->tpl_vars['_v']->value)){?>
            <?php $_smarty_tpl->tpl_vars['_v'] = new Smarty_variable(array('name'=>$_smarty_tpl->tpl_vars['_v']->value), null, 0);?>
        <?php }?>
        <label class="s-label-with-check">
            <span class="wa-radio">
                <input type="radio" name="params[<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['_k']->value;?>
" />
                <span></span>
            </span>
            <?php smarty_template_function_renderName($_smarty_tpl,array('value'=>$_smarty_tpl->tpl_vars['_v']->value['name']));?>

            <?php if (!empty($_smarty_tpl->tpl_vars['info']->value['description'])){?>
                <span class="hint"><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</span>
            <?php }?>
        </label>
    <?php } ?>

<?php }elseif($_smarty_tpl->tpl_vars['info']->value['type']=='checkbox'){?>
    <?php if (isset($_smarty_tpl->tpl_vars['info']->value['items'])){?>
        <?php  $_smarty_tpl->tpl_vars['_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_v']->_loop = false;
 $_smarty_tpl->tpl_vars['_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_v']->key => $_smarty_tpl->tpl_vars['_v']->value){
$_smarty_tpl->tpl_vars['_v']->_loop = true;
 $_smarty_tpl->tpl_vars['_k']->value = $_smarty_tpl->tpl_vars['_v']->key;
?>
            <?php if (!is_array($_smarty_tpl->tpl_vars['_v']->value)){?>
                <?php $_smarty_tpl->tpl_vars['_v'] = new Smarty_variable(array('name'=>$_smarty_tpl->tpl_vars['_v']->value), null, 0);?>
            <?php }?>
            <label class="s-label-with-check">
                <span class="wa-checkbox">
                    <input type="checkbox" name="params[<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
][]" value="<?php echo $_smarty_tpl->tpl_vars['_k']->value;?>
"<?php if (is_array($_smarty_tpl->tpl_vars['value']->value)&&in_array($_smarty_tpl->tpl_vars['_k']->value,$_smarty_tpl->tpl_vars['value']->value)){?> checked<?php }?> />
                    <span>
                        <span class="icon">
                            <i class="fas fa-check"></i>
                        </span>
                    </span>
                </span>
                <?php smarty_template_function_renderName($_smarty_tpl,array('value'=>$_smarty_tpl->tpl_vars['_v']->value['name']));?>

                <?php if (!empty($_smarty_tpl->tpl_vars['_v']->value['description'])){?>
                    <span class="hint"><?php echo $_smarty_tpl->tpl_vars['_v']->value['description'];?>
</span>
                <?php }?>
            </label>
        <?php } ?>
    <?php }else{ ?>
        <label class="s-label-with-check">
            <span class="wa-checkbox">
                <input type="checkbox" name="params[<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
]"<?php if ($_smarty_tpl->tpl_vars['value']->value){?> checked<?php }?> value="1" />
                <span>
                    <span class="icon">
                        <i class="fas fa-check"></i>
                    </span>
                </span>
            </span>
        </label>
    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['info']->value['description'])){?>
        <span class="hint"><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</span>
    <?php }?>

<?php }elseif($_smarty_tpl->tpl_vars['info']->value['type']=='radio_select'){?>
    <div id="s-radio-select-<?php echo $_smarty_tpl->tpl_vars['route_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <?php  $_smarty_tpl->tpl_vars['_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_v']->_loop = false;
 $_smarty_tpl->tpl_vars['_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_v']->key => $_smarty_tpl->tpl_vars['_v']->value){
$_smarty_tpl->tpl_vars['_v']->_loop = true;
 $_smarty_tpl->tpl_vars['_k']->value = $_smarty_tpl->tpl_vars['_v']->key;
?>
            <?php if (!is_array($_smarty_tpl->tpl_vars['_v']->value)){?>
                <?php $_smarty_tpl->tpl_vars['_v'] = new Smarty_variable(array('name'=>$_smarty_tpl->tpl_vars['_v']->value), null, 0);?>
            <?php }?>
            <label class="s-label-with-check">
                <span class="wa-radio">
                    <input type="radio"<?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['_k']->value||isset($_smarty_tpl->tpl_vars['_v']->value['items'][$_smarty_tpl->tpl_vars['value']->value])){?> checked="checked"<?php }?> name="params[<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['_k']->value;?>
" />
                    <span></span>
                </span>
                <?php smarty_template_function_renderName($_smarty_tpl,array('value'=>$_smarty_tpl->tpl_vars['_v']->value['name']));?>

                <?php if (!empty($_smarty_tpl->tpl_vars['_v']->value['description'])){?>
                    <span class="hint"><?php echo $_smarty_tpl->tpl_vars['_v']->value['description'];?>
</span>
                <?php }?>
            </label>
            <?php if (isset($_smarty_tpl->tpl_vars['_v']->value['items'])){?>
                <div class="wa-select">
                    <select<?php if ($_smarty_tpl->tpl_vars['value']->value!=$_smarty_tpl->tpl_vars['_k']->value||!isset($_smarty_tpl->tpl_vars['_v']->value['items'][$_smarty_tpl->tpl_vars['value']->value])){?> disabled="disabled"<?php }?> name="params[<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
]">
                        <?php  $_smarty_tpl->tpl_vars['_v2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_v2']->_loop = false;
 $_smarty_tpl->tpl_vars['_k2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_v']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_v2']->key => $_smarty_tpl->tpl_vars['_v2']->value){
$_smarty_tpl->tpl_vars['_v2']->_loop = true;
 $_smarty_tpl->tpl_vars['_k2']->value = $_smarty_tpl->tpl_vars['_v2']->key;
?>
                            <option<?php if ($_smarty_tpl->tpl_vars['_k2']->value==$_smarty_tpl->tpl_vars['value']->value){?> selected="selected"<?php }?> value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_k2']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_v2']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                        <?php } ?>
                    </select>
                </div>
            <?php }?>
        <?php } ?>
    </div>
    <script type="text/javascript">
        // Must be in own scope
        $(function() {
            // current "radio_select" control block
            var $control_block = $("#s-radio-select-<?php echo $_smarty_tpl->tpl_vars['route_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
");

            // helper that enables selector of current radio input
            var enableSelector = function($radio_input) {
                // disable all selectors
                $control_block.find("select").prop('disabled', true);
                // enable current selector
                $radio_input.closest('label').next(".wa-select").find('select').prop('disabled', false);
            };

            // all radio inputs of current control
            var $radio_inputs = $control_block.find("input[type=radio]");

            // initial state - enable selector of current checked radio
            enableSelector($radio_inputs.filter(":checked"));

            // change handler
            $radio_inputs.on('change', function () {
                var $radio_input = $(this);
                if ($radio_input.is(":checked")) {
                    enableSelector($radio_input);
                }
            });
        });
    </script>

<?php }elseif($_smarty_tpl->tpl_vars['info']->value['type']=='radio_checkbox'){?>
    <div id="s-radio-checkbox-<?php echo $_smarty_tpl->tpl_vars['route_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <?php  $_smarty_tpl->tpl_vars['_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_v']->_loop = false;
 $_smarty_tpl->tpl_vars['_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_v']->key => $_smarty_tpl->tpl_vars['_v']->value){
$_smarty_tpl->tpl_vars['_v']->_loop = true;
 $_smarty_tpl->tpl_vars['_k']->value = $_smarty_tpl->tpl_vars['_v']->key;
?>
            <?php if (!is_array($_smarty_tpl->tpl_vars['_v']->value)){?>
                <?php $_smarty_tpl->tpl_vars['_v'] = new Smarty_variable(array('name'=>$_smarty_tpl->tpl_vars['_v']->value), null, 0);?>
            <?php }?>
            <label class="s-label-with-check">
                <span class="wa-radio">
                    <input type="radio"<?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['_k']->value||(is_array($_smarty_tpl->tpl_vars['value']->value)&&isset($_smarty_tpl->tpl_vars['_v']->value['items']))){?> checked="checked"<?php }?> name="params[<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
]" value="<?php if (!isset($_smarty_tpl->tpl_vars['_v']->value['items'])){?><?php echo $_smarty_tpl->tpl_vars['_k']->value;?>
<?php }?>" />
                    <span></span>
                </span>
                <?php smarty_template_function_renderName($_smarty_tpl,array('value'=>$_smarty_tpl->tpl_vars['_v']->value['name']));?>

                <?php if (!empty($_smarty_tpl->tpl_vars['_v']->value['description'])){?>
                    <span class="hint"><?php echo $_smarty_tpl->tpl_vars['_v']->value['description'];?>
</span>
                <?php }?>
            </label>
            <?php if (isset($_smarty_tpl->tpl_vars['_v']->value['items'])){?>
                <?php $_smarty_tpl->tpl_vars['_disabled'] = new Smarty_variable(!is_array($_smarty_tpl->tpl_vars['value']->value), null, 0);?>
                <div class="block">
                    <ul class="menu-v compact small">
                        <?php  $_smarty_tpl->tpl_vars['_v2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_v2']->_loop = false;
 $_smarty_tpl->tpl_vars['_k2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_v']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_v2']->key => $_smarty_tpl->tpl_vars['_v2']->value){
$_smarty_tpl->tpl_vars['_v2']->_loop = true;
 $_smarty_tpl->tpl_vars['_k2']->value = $_smarty_tpl->tpl_vars['_v2']->key;
?>
                            <?php if (!is_array($_smarty_tpl->tpl_vars['_v2']->value)){?>
                                <?php $_smarty_tpl->tpl_vars['_v2'] = new Smarty_variable(array('name'=>$_smarty_tpl->tpl_vars['_v2']->value), null, 0);?>
                            <?php }?>
                            <li>
                                <label class="s-label-with-check">
                                    <span class="wa-checkbox">
                                        <input <?php if (!$_smarty_tpl->tpl_vars['_disabled']->value&&in_array($_smarty_tpl->tpl_vars['_k2']->value,$_smarty_tpl->tpl_vars['value']->value)){?> checked<?php }?><?php if ($_smarty_tpl->tpl_vars['_disabled']->value){?> disabled="disabled"<?php }?> type="checkbox" name="params[<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
][]" value="<?php echo $_smarty_tpl->tpl_vars['_k2']->value;?>
" />
                                        <span>
                                            <span class="icon">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </span>
                                    </span>
                                    <?php smarty_template_function_renderName($_smarty_tpl,array('value'=>$_smarty_tpl->tpl_vars['_v2']->value['name']));?>

                                    <?php if (!empty($_smarty_tpl->tpl_vars['_v2']->value['description'])){?>
                                        <span class="hint"><?php echo $_smarty_tpl->tpl_vars['_v2']->value['description'];?>
</span>
                                    <?php }?>
                                </label>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            <?php }?>
        <?php } ?>
    </div>
    <script type="text/javascript">
        $("#s-radio-checkbox-<?php echo $_smarty_tpl->tpl_vars['route_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 input[type=radio]").on('change', function () {
            if ($(this).is(":checked")) {
                $("#s-radio-checkbox-<?php echo $_smarty_tpl->tpl_vars['route_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 input:checkbox").prop('disabled', true).prop('checked', false);
                $(this).closest('label').next("div").find("input").prop('disabled', false);
            }
        });
    </script>

<?php }elseif($_smarty_tpl->tpl_vars['info']->value['type']=='radio_text'){?>
    <?php $_smarty_tpl->tpl_vars['_counter'] = new Smarty_variable(0, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['_selected'] = new Smarty_variable(false, null, 0);?>
    <div id="s-radio-select-<?php echo $_smarty_tpl->tpl_vars['route_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <?php  $_smarty_tpl->tpl_vars['_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_v']->_loop = false;
 $_smarty_tpl->tpl_vars['_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_v']->key => $_smarty_tpl->tpl_vars['_v']->value){
$_smarty_tpl->tpl_vars['_v']->_loop = true;
 $_smarty_tpl->tpl_vars['_k']->value = $_smarty_tpl->tpl_vars['_v']->key;
?>
            <?php $_smarty_tpl->tpl_vars['_counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['_counter']->value+1, null, 0);?>
            <?php if (!is_array($_smarty_tpl->tpl_vars['_v']->value)){?>
                <?php $_smarty_tpl->tpl_vars['_v'] = new Smarty_variable(array('name'=>$_smarty_tpl->tpl_vars['_v']->value), null, 0);?>
            <?php }?>
            <?php $_smarty_tpl->tpl_vars['_checked'] = new Smarty_variable((sprintf('%s',$_smarty_tpl->tpl_vars['_k']->value)===$_smarty_tpl->tpl_vars['value']->value), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['_last'] = new Smarty_variable(($_smarty_tpl->tpl_vars['_counter']->value==count($_smarty_tpl->tpl_vars['info']->value['items'])), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['_last']->value){?>
                <?php $_smarty_tpl->tpl_vars['_checked'] = new Smarty_variable(!$_smarty_tpl->tpl_vars['_selected']->value, null, 0);?>
            <?php }elseif(($_smarty_tpl->tpl_vars['_checked']->value)){?>
                <?php $_smarty_tpl->tpl_vars['_selected'] = new Smarty_variable(true, null, 0);?>
            <?php }?>
            <label class="s-label-with-check">
                <span class="wa-radio">
                    <input type="radio"<?php if ($_smarty_tpl->tpl_vars['_checked']->value){?> checked<?php }?> name="params[<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['_k']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['_last']->value){?> class="last"<?php }?> />
                    <span></span>
                </span>
                <?php smarty_template_function_renderName($_smarty_tpl,array('value'=>$_smarty_tpl->tpl_vars['_v']->value['name']));?>

                <?php if (!empty($_smarty_tpl->tpl_vars['_v']->value['description'])){?>
                    <span class="hint"><?php echo $_smarty_tpl->tpl_vars['_v']->value['description'];?>
</span>
                <?php }?>
            </label>
            <?php if ($_smarty_tpl->tpl_vars['_last']->value){?>
                <input type="text"<?php if (!$_smarty_tpl->tpl_vars['_checked']->value){?> disabled="disabled"<?php }?> name="params[<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
]"<?php if ($_smarty_tpl->tpl_vars['_checked']->value&&($_smarty_tpl->tpl_vars['value']->value!=$_smarty_tpl->tpl_vars['_k']->value)){?> value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> />
            <?php }?>
        <?php } ?>
    </div>
    <script type="text/javascript">
        $("#s-radio-select-<?php echo $_smarty_tpl->tpl_vars['route_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 input[type=radio]").change(function () {
            if ($(this).hasClass("last")) {
                $("#s-radio-select-<?php echo $_smarty_tpl->tpl_vars['route_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 input:text").prop('disabled', false).focus();
            } else {
                $("#s-radio-select-<?php echo $_smarty_tpl->tpl_vars['route_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 input:text").prop('disabled', true);
            }
        });
    </script>
<?php }elseif($_smarty_tpl->tpl_vars['info']->value['type']=='help'){?>
    <?php if (isset($_smarty_tpl->tpl_vars['info']->value['description'])){?>
        <?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>

    <?php }?>
<?php }?>
<?php }} ?>
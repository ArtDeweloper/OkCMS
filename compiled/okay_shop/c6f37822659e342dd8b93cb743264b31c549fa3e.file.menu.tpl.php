<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-01-22 02:48:06
         compiled from "C:\Users\Krash\Desktop\OSPanel\domains\CMS\design\okay_shop\html\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13021097395c465a361b07d8-06651174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6f37822659e342dd8b93cb743264b31c549fa3e' => 
    array (
      0 => 'C:\\Users\\Krash\\Desktop\\OSPanel\\domains\\CMS\\design\\okay_shop\\html\\menu.tpl',
      1 => 1548113236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13021097395c465a361b07d8-06651174',
  'function' => 
  array (
    'menu_items_tree' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'menu_items' => 0,
    'menu' => 0,
    'level' => 0,
    'item' => 0,
    'lang_link' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5c465a36991226_27765353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c465a36991226_27765353')) {function content_5c465a36991226_27765353($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['menu_items']->value) {?>
    <div class="menu_group menu_group_<?php echo $_smarty_tpl->tpl_vars['menu']->value->group_id;?>
">
        <?php if (!function_exists('smarty_template_function_menu_items_tree')) {
    function smarty_template_function_menu_items_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['menu_items_tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
            <?php if ($_smarty_tpl->tpl_vars['menu_items']->value) {?>
                <ul class="fn_menu_list menu_list menu_list_<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
">
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->visible==1) {?>
                            <li class="menu_item menu_item_<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['item']->value->submenus&&$_smarty_tpl->tpl_vars['item']->value->count_children_visible>0) {?>menu_eventer<?php }?>">
                                <a class="menu_link"<?php if ($_smarty_tpl->tpl_vars['item']->value->url) {?> href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['item']->value->url;?>
<?php $_tmp1=ob_get_clean();?><?php if (!preg_match('~^https?://~',$_tmp1)) {?><?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['item']->value->url;?>
"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['item']->value->submenus&&$_smarty_tpl->tpl_vars['item']->value->is_target_blank) {?>target="_blank"<?php }?>>
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                 </a>
                                <?php smarty_template_function_menu_items_tree($_smarty_tpl,array('menu_items'=>$_smarty_tpl->tpl_vars['item']->value->submenus,'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

                            </li>
                        <?php }?>
                    <?php } ?>
                </ul>
            <?php }?>
        <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

        <?php smarty_template_function_menu_items_tree($_smarty_tpl,array('menu_items'=>$_smarty_tpl->tpl_vars['menu_items']->value,'level'=>1));?>

    </div>
<?php }?>
<?php }} ?>

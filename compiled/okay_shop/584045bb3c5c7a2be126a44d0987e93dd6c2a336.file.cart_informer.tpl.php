<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-01-22 02:48:08
         compiled from "C:\Users\Krash\Desktop\OSPanel\domains\CMS\design\okay_shop\html\cart_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7257028235c465a38a84ad9-69676456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '584045bb3c5c7a2be126a44d0987e93dd6c2a336' => 
    array (
      0 => 'C:\\Users\\Krash\\Desktop\\OSPanel\\domains\\CMS\\design\\okay_shop\\html\\cart_informer.tpl',
      1 => 1548113236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7257028235c465a38a84ad9-69676456',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'lang_link' => 0,
    'lang' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5c465a38aa94e2_49340398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c465a38aa94e2_49340398')) {function content_5c465a38aa94e2_49340398($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['cart']->value->total_products>0) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
cart" class="cart_info">
        <span class="cart_counter"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span>
        <span class="cart_title" data-language="index_cart"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_cart;?>
</span>
         <span class="cart_total"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['cart']->value->total_price));?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
    </a>
<?php } else { ?>
    <div class="cart_info">
        <span class="cart_counter"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span>
        <span class="cart_title" data-language="index_cart"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_cart;?>
</span>
        <span class="cart_total"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['cart']->value->total_price));?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
    </div>
<?php }?>
<?php }} ?>

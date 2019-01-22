<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-01-22 03:09:38
         compiled from "C:\Users\Krash\Desktop\OSPanel\domains\CMS\design\okay_shop\html\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7434001535c465f429111c7-12706641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e168ea337567603c892cec02887a5cb4c920f9b0' => 
    array (
      0 => 'C:\\Users\\Krash\\Desktop\\OSPanel\\domains\\CMS\\design\\okay_shop\\html\\page.tpl',
      1 => 1548113236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7434001535c465f429111c7-12706641',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5c465f434a3c38_60932832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c465f434a3c38_60932832')) {function content_5c465f434a3c38_60932832($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/".((string)$_smarty_tpl->tpl_vars['page']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<?php if ($_smarty_tpl->tpl_vars['page']->value->url=='404') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('page_404.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>

    
    <h1 class="h1">
        <span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php if (htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span>
    </h1>
    
    
    <div class="block padding">
        <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

    </div>
    
<?php }?>
<?php }} ?>

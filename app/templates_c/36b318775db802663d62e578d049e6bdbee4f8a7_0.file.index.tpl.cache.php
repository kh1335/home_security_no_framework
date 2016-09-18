<?php
/* Smarty version 3.1.30, created on 2016-09-18 20:20:13
  from "/Applications/XAMPP/xamppfiles/htdocs/repositories/home_security_no_framework/app/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57dedaddba25d4_16090558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36b318775db802663d62e578d049e6bdbee4f8a7' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/repositories/home_security_no_framework/app/templates/index.tpl',
      1 => 1474222808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_57dedaddba25d4_16090558 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '126511447157dedaddb15e34_32476591';
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('Name'=>"Sensors"), 0, false);
?>


<h1 class="text-center">Sensor State</h1>

<table name="sensors_table" class="table table-bordered">
    <tr class="active text-center">
        <th>Name</th>
        <th>Type</th>
        <th>State</th>
        <th>Alarm</th>
    </tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sensors']->value, 'sensor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sensor']->value) {
?>
    <tr class="<?php if ($_smarty_tpl->tpl_vars['sensor']->value->alarm()) {?> Danger <?php } else { ?> Success <?php }?>">
        <td><?php echo $_smarty_tpl->tpl_vars['sensor']->value->name;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['sensor']->value->type;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['sensor']->value->state;
if (isset($_smarty_tpl->tpl_vars['sensor']->value->units)) {
echo $_smarty_tpl->tpl_vars['sensor']->value->units;
}?></td>
        <td><?php if ($_smarty_tpl->tpl_vars['sensor']->value->alarm()) {?> Alarm <?php }?></td>
    </tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<div class="text-right">
    <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=update" id="refreshSensors" class="btn btn-primary">Refresh Sensors</a>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

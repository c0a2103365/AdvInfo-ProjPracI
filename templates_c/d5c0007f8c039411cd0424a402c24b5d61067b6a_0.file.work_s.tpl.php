<?php
/* Smarty version 3.1.39, created on 2023-07-07 09:43:43
  from 'C:\xampp\htdocs\pnw\2023g01\templates\work_s.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64a7c22facde53_18388829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5c0007f8c039411cd0424a402c24b5d61067b6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\2023g01\\templates\\work_s.tpl',
      1 => 1688715821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a7c22facde53_18388829 (Smarty_Internal_Template $_smarty_tpl) {
?><html> 
<body>
<h1>仕事したい人にお勧め</h1>
<form action="../select/mobile_s.php" method="get"><?php if ($_smarty_tpl->tpl_vars['result']->value) {?>
    <table border="1">
        <tr>
            <th>PC_id</th>
            <th>name</th>
            <th>inch</th>
            <th>office_app</th>
            <th>weight</th>
            <th>battery</th>
            <th>memory</th>
            <th>storage</th>
            <th>price</th>
            <th>cpu</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'loop');
$_smarty_tpl->tpl_vars['loop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['loop']->value) {
$_smarty_tpl->tpl_vars['loop']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['loop']->value["office_app"] != "なし") {?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["PC_id"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["name"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["inch"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["office_app"];?>
</td>
                <td><?php echo number_format($_smarty_tpl->tpl_vars['loop']->value["battery"],1);?>
<i>h</i></td>
                <td><?php echo number_format($_smarty_tpl->tpl_vars['loop']->value["price"]);?>
<i>円</i></td>
                <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["memory"];?>
</td>
                <td><?php echo number_format($_smarty_tpl->tpl_vars['loop']->value["weight"],2);?>
<i>kg</i></td> 
                <td><?php echo number_format($_smarty_tpl->tpl_vars['loop']->value["storage"]);?>
<i>GB</i></td>
                <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["cpu"];?>
</td>
            </tr>
        <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
<?php } else { ?>
    "sippai"
<?php }?>



</form>

</body>
</html><?php }
}

<?php
/* Smarty version 3.1.39, created on 2023-07-07 08:47:12
  from 'C:\xampp\htdocs\pnw\2023g01\templates\battery_r.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64a7b4f01129d7_54127841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33f80e723b619b7d785e21a147dee987ba8e7a26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\2023g01\\templates\\battery_r.tpl',
      1 => 1688712420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a7b4f01129d7_54127841 (Smarty_Internal_Template $_smarty_tpl) {
?><html> 
<body>
<h1>稼働時間ランキング</h1>
<form action="../ranking/battery_r.php" method="get">
<?php if ($_smarty_tpl->tpl_vars['result']->value) {?>
    <table border="1">
        <tr>
            <th>PC_id</th>
            <th>name</th>
            <th>battery</th>
            <th>weight</th>
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
        <tr>
            
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["PC_id"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["name"];?>
</td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['loop']->value["battery"],1);?>
<i>h</i></td>
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["memory"];?>
</td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['loop']->value["weight"],2);?>
<i>kg</i></td>            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["memory"];?>
</td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['loop']->value["storage"]);?>
<i>GB</i></td>
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["price"];?>
<i>円 </i></td></td>
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["cpu"];?>
</td>

        </tr>
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

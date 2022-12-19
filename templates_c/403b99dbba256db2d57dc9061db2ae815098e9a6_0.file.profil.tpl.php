<?php
/* Smarty version 4.3.0, created on 2022-12-19 22:14:52
  from 'C:\wamp64\www\ex_layout\templates\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a0e25c927d16_67109587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '403b99dbba256db2d57dc9061db2ae815098e9a6' => 
    array (
      0 => 'C:\\wamp64\\www\\ex_layout\\templates\\profil.tpl',
      1 => 1671487107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a0e25c927d16_67109587 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140647963463a0e25c925c20_56334051', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146410907263a0e25c927082_29514172', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_140647963463a0e25c925c20_56334051 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_140647963463a0e25c925c20_56334051',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_146410907263a0e25c927082_29514172 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_146410907263a0e25c927082_29514172',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<h1>Mon profil</h1>
<p>Contenu du template profil</p>
</div>
<?php
}
}
/* {/block 'body'} */
}

<?php
/* Smarty version 4.3.0, created on 2022-12-19 22:14:50
  from 'C:\wamp64\www\ex_layout\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a0e25a925731_29995013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40c1e58e0c1dd135ca2bc40f1bc62269901e0042' => 
    array (
      0 => 'C:\\wamp64\\www\\ex_layout\\templates\\login.tpl',
      1 => 1671487107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a0e25a925731_29995013 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54489374963a0e25a923702_74785093', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204155973263a0e25a924b54_10424317', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_54489374963a0e25a923702_74785093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_54489374963a0e25a923702_74785093',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_204155973263a0e25a924b54_10424317 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_204155973263a0e25a924b54_10424317',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<h1>Login</h1>
<p>
Contenu du Template login.tpl
</p>
</div>
<?php
}
}
/* {/block 'body'} */
}

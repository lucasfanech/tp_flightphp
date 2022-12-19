<?php
/* Smarty version 4.3.0, created on 2022-12-19 22:38:01
  from 'C:\wamp64\www\ex_layout\templates\success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a0e7c965a4a1_82618586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd39545eff9098987b046f2206cf67fe2e626a0af' => 
    array (
      0 => 'C:\\wamp64\\www\\ex_layout\\templates\\success.tpl',
      1 => 1671487107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a0e7c965a4a1_82618586 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29786244763a0e7c9657ff5_72370565', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35524593563a0e7c96597a3_53195526', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_29786244763a0e7c9657ff5_72370565 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_29786244763a0e7c9657ff5_72370565',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Succès!<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_35524593563a0e7c96597a3_53195526 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_35524593563a0e7c96597a3_53195526',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
Bien enregistré, vous pouvez vous rendre sur la page de <a href='login'>connexion</a>
</div>
<?php
}
}
/* {/block 'body'} */
}

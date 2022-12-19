<?php
/* Smarty version 4.3.0, created on 2022-12-19 22:14:42
  from 'C:\wamp64\www\ex_layout\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a0e2521396a8_05404840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '395690b6554bafccd0d4fa5fd3ac3b1e0464a43f' => 
    array (
      0 => 'C:\\wamp64\\www\\ex_layout\\templates\\index.tpl',
      1 => 1671487107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a0e2521396a8_05404840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199165324663a0e252134fa5_42167358', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66363069063a0e252137de6_82778783', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_199165324663a0e252134fa5_42167358 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_199165324663a0e252134fa5_42167358',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_66363069063a0e252137de6_82778783 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_66363069063a0e252137de6_82778783',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<h1>Home</h1>
Contenu du site, défini dans le template index.tpl
</div>
<?php
}
}
/* {/block 'body'} */
}

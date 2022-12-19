<?php
/* Smarty version 4.3.0, created on 2022-12-19 22:19:46
  from 'C:\wamp64\www\ex_layout\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a0e382d0fba4_93702106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c51a4c8c8560f72db7b26419337e2704b051bd4' => 
    array (
      0 => 'C:\\wamp64\\www\\ex_layout\\templates\\register.tpl',
      1 => 1671488383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a0e382d0fba4_93702106 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7386916063a0e382d0daa2_91087871', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14011445463a0e382d0eec0_92506341', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_7386916063a0e382d0daa2_91087871 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7386916063a0e382d0daa2_91087871',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Register<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_14011445463a0e382d0eec0_92506341 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14011445463a0e382d0eec0_92506341',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>Register</h1>
<div id='main'>
<p>Contenu du template register.tpl</p>

    <form action="" method="post" >
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="" />
        <label for"email">Email</label>
        <input type="text" name="email" id="email" value="" />
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="" />
        <button type="submit" name="register">Register</button>

    </form>
</div>
<?php
}
}
/* {/block 'body'} */
}

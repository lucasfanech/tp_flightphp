<?php
/* Smarty version 4.3.0, created on 2022-12-19 22:14:42
  from 'C:\wamp64\www\ex_layout\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a0e2521be0f2_77907420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d02c7abb2daf6a90b8d8ff1b880f0e34d24be9c' => 
    array (
      0 => 'C:\\wamp64\\www\\ex_layout\\templates\\layout.tpl',
      1 => 1671487107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a0e2521be0f2_77907420 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165763485463a0e2521b9a11_36990000', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161930094963a0e2521bad11_84277162', 'head');
?>

</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103743167263a0e2521bc176_62800589', 'menu');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3935909263a0e2521bd2e2_55802750', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_165763485463a0e2521b9a11_36990000 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_165763485463a0e2521b9a11_36990000',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_161930094963a0e2521bad11_84277162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_161930094963a0e2521bad11_84277162',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
    <style>
    #main,footer{ padding:1em }
    </style>
    <link rel="stylesheet" href="templates/style.css">
    <?php
}
}
/* {/block 'head'} */
/* {block 'menu'} */
class Block_103743167263a0e2521bc176_62800589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_103743167263a0e2521bc176_62800589',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<p>Menu de navigation  défini dans layout.tpl</p>
<a href='./'>index</a>
<a href='register'>inscription</a> 
<a href='login'>connexion</a> 
<a href='profil'>profil</a> 
<a href='https://www.u-picardie.fr'>lien upicardie externe</a> 
<?php
}
}
/* {/block 'menu'} */
/* {block 'body'} */
class Block_3935909263a0e2521bd2e2_55802750 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3935909263a0e2521bd2e2_55802750',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Contenu générique<?php
}
}
/* {/block 'body'} */
}

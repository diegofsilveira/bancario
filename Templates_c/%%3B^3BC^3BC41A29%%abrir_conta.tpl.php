<?php /* Smarty version 2.6.26, created on 2013-02-25 13:19:51
         compiled from abrir_conta.tpl */ ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['header']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3>Bancário / Abrindo conta comum</h3>
<hr />

<b>ID <?php echo $this->_tpl_vars['id']; ?>
</b>
<p />
Usuário <?php echo $this->_tpl_vars['nome']; ?>

<p />
<hr />

<a href="/">Voltar</a>

<form name="input" action="abrir_conta.php?id=<?php echo $this->_tpl_vars['id']; ?>
" method="POST">
    <label>Senha</label>      <input type="password" name="senha" required>
    <br />
    <br />
    <label>Saldo</label>   <input type="text" name="saldo" value="0">
    <br />
    <input type="submit" value="Abri conta agora">
</form>
<font size="2" color="red"><?php echo $this->_tpl_vars['erro']; ?>
</font>
<font size="2" color="green"><?php echo $this->_tpl_vars['sucesso']; ?>
</font>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['footer']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
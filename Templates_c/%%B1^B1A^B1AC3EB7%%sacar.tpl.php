<?php /* Smarty version 2.6.26, created on 2013-02-25 13:26:08
         compiled from sacar.tpl */ ?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['header']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        
        <h2>Bancário</h2>
        <hr />
        
        <b>ID <?php echo $this->_tpl_vars['id']; ?>
</b>
        <p />
        Usuário <?php echo $this->_tpl_vars['nome']; ?>

        <p />
        
        <hr />
        <h4>Realizar Saque</h4>
        <a href="http://bancario.com.br/consultar_conta.php?id=<?php echo $this->_tpl_vars['id']; ?>
"> Voltar </a>
        <br />
        <br />
        <form name="input" action="sacar.php?NumeroConta=<?php echo $this->_tpl_vars['numeroconta']; ?>
&usuarioID=<?php echo $this->_tpl_vars['id']; ?>
" method="POST">
            <label>Valor</label>   <input type="text" name="valor" value="0">
            <br />
            <br />
            <input type="submit" value="Saque">
        </form>
        <font size="2" color="red"><?php echo $this->_tpl_vars['erro']; ?>
</font>
        
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['footer']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
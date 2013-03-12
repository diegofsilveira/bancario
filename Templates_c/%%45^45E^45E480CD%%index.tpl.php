<?php /* Smarty version 2.6.26, created on 2013-03-12 17:01:51
         compiled from index.tpl */ ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['header']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <h3>Bancário</h3>
        <hr />
        
        <h4>Opções</h4>
        <a href="abrir_conta.php?id=<?php echo $this->_tpl_vars['id']; ?>
">Abrir Conta Comum</a> |
        <a href="consultar_conta.php?id=<?php echo $this->_tpl_vars['id']; ?>
">Consultar Conta Comum</a> |
        
        <hr />
        
        Abrir Conta Especial / Abrir conta Poupança
        
        <br />
        <br />
        <br />
        
        <h3>Informações gerais no usuário</h3>
        <b>ID <?php echo $this->_tpl_vars['id']; ?>
</b>
        <p />
        Usuário <?php echo $this->_tpl_vars['nome']; ?>

        <p />
        Endereço <?php echo $this->_tpl_vars['endereco']; ?>

        <p />
        Cep <?php echo $this->_tpl_vars['cep']; ?>

        <p />
        Telefone <?php echo $this->_tpl_vars['telefone']; ?>

        <p />
        Renda <?php echo $this->_tpl_vars['renda']; ?>

        <hr />
        
        Limite::: <?php echo $this->_tpl_vars['limite']; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['footer']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
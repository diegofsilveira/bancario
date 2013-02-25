<?php /* Smarty version 2.6.26, created on 2013-02-25 12:52:49
         compiled from extrato.tpl */ ?>
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
        <h4>Extrato: Número da conta <?php echo $this->_tpl_vars['numeroconta']; ?>
</h4>
        <hr />
        <a href="http://bancario.com.br/consultar_conta.php?id=<?php echo $this->_tpl_vars['id']; ?>
"> Voltar </a>
        
        <br />
        <br />
        
        
        <?php echo $this->_tpl_vars['links']; ?>

        <br />
        <br />

        <table border="0" cellpadding="10" cellspacing="0" >
        <tr bgcolor=#333 >
            <td>
                <font color="#fff">Dia</font>
            </td>
            <td>
                <font color="#fff">Valor</font>
            </td>
        </tr>
        <?php $_from = $this->_tpl_vars['movimento']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dado']):
?>
            
            <tr>
                <td>
                    <?php echo $this->_tpl_vars['dado']['data']; ?>
 
                </td>
                <td>
                    R$ <?php echo $this->_tpl_vars['dado']['valor']; ?>

                </td>
            </tr>
        <?php endforeach; else: ?>
            <font size="4" color="red">No items were found in the search</font>
        <?php endif; unset($_from); ?>
        </table>
        
        <br />
        <br />
        <br />
        <br />
        <br />
        
        
        <div id="resultadoAjax">Por enquanto nenhuma requisição ajax foi solicitada</div>
        
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['footer']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
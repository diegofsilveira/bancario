<?php /* Smarty version 2.6.26, created on 2013-02-25 13:27:59
         compiled from consultar_conta.tpl */ ?>
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


<a href="/">Home</a>
<hr />


<p />
    Usuário <?php echo $this->_tpl_vars['nome']; ?>
 <b> / ID <?php echo $this->_tpl_vars['id']; ?>
</b>
<p />


<h4>Suas contas bancárias</h4>
<hr />

<table border="0" cellpadding="20" cellspacing="0">
    <tr bgcolor=#333>
        <td>
            <font color="#fff">Numero da conta</font>
        </td>
        <td>
            <font color="#fff">Saldo</font>
        </td>
        <td>
            <font color="#fff">Data Abertura</font>
        </td>
        <td width="300px">
            <font color="#fff">Opções</font>
        </td>
    </tr>

<?php $_from = $this->_tpl_vars['grid']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dado']):
?>
    
    <tr>
        <td>
            <?php echo $this->_tpl_vars['dado']['numero']; ?>
 

        </td>
        <td>
            R$ <?php echo $this->_tpl_vars['dado']['saldo']; ?>

        </td>
        <td>
            <?php echo $this->_tpl_vars['dado']['abertura']; ?>

        </td>
        <td>

            <a href="contacomum/extrato.php?NumeroConta=<?php echo $this->_tpl_vars['dado']['numero']; ?>
&usuarioID=<?php echo $this->_tpl_vars['id']; ?>
">Extrato</a>/             <a href="contacomum/depositar.php?NumeroConta=<?php echo $this->_tpl_vars['dado']['numero']; ?>
&usuarioID=<?php echo $this->_tpl_vars['id']; ?>
">Depositar</a>/
            <a href="contacomum/sacar.php?NumeroConta=<?php echo $this->_tpl_vars['dado']['numero']; ?>
&usuarioID=<?php echo $this->_tpl_vars['id']; ?>
">Sacar</a>/
            <a href="#" class="encerrarconta" >Encerrar</a>
        </td>
    </tr>
<?php endforeach; endif; unset($_from); ?>






</table>
<div id="resultadoAjax">Por enquanto nenhuma requisição ajax foi solicitada</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['footer']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
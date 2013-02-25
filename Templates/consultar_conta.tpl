<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
{include file="$header"}


<h2>Bancário</h2> 


<a href="/">Home</a>
<hr />


<p />
    Usuário {$nome} <b> / ID {$id}</b>
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

{foreach from=$grid item=dado}
    
    <tr>
        <td>
            {$dado.numero} 

        </td>
        <td>
            R$ {$dado.saldo}
        </td>
        <td>
            {$dado.abertura}
        </td>
        <td>

            <a href="contacomum/extrato.php?NumeroConta={$dado.numero}&usuarioID={$id}">Extrato</a>/ {* Fazer a vizualização via HouverCard *}
            <a href="contacomum/depositar.php?NumeroConta={$dado.numero}&usuarioID={$id}">Depositar</a>/
            <a href="contacomum/sacar.php?NumeroConta={$dado.numero}&usuarioID={$id}">Sacar</a>/
            <a href="#" class="encerrarconta" >Encerrar</a>
        </td>
    </tr>
{/foreach}






</table>
<div id="resultadoAjax">Por enquanto nenhuma requisição ajax foi solicitada</div>

{include file="$footer"}

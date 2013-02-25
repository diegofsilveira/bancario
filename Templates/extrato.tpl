<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
{include file="$header"}
        
        <h2>Bancário</h2>
        <hr />
        
        <b>ID {$id}</b>
        <p />
        Usuário {$nome}
        <p />
        
        <hr />
        <h4>Extrato: Número da conta {$numeroconta}</h4>
        <hr />
        <a href="http://bancario.com.br/consultar_conta.php?id={$id}"> Voltar </a>
        
        <br />
        <br />
        
        
        {$links}
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
        {foreach from=$movimento item=dado}
            
            <tr>
                <td>
                    {$dado.data} 
                </td>
                <td>
                    R$ {$dado.valor}
                </td>
            </tr>
        {foreachelse}
            <font size="4" color="red">No items were found in the search</font>
        {/foreach}
        </table>
        
        <br />
        <br />
        <br />
        <br />
        <br />
        
        
        <div id="resultadoAjax">Por enquanto nenhuma requisição ajax foi solicitada</div>
        
{include file="$footer"}

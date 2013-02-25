<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
{include file="$header"}
        
    <h2>Bancário</h2>
    <hr />

    <b>ID {$id}</b>
    <p />
    Usuário {$nome}
    <p />
    <hr />
    <h4>Depostiar</h4>
    <a href="http://bancario.com.br/consultar_conta.php?id={$id}"> Voltar </a>
    <br />
    <br />
    
    
    <form name="input" action="depositar.php?NumeroConta={$numeroconta}&usuarioID={$id}" method="POST">
        <label>Valor</label>   <input type="text" name="valor" value="0">
        <br />
        <br />
        <input type="submit" value="Depositar">
    </form>
        
        
    <font size="2" color="red">{$erro}</font>
        
{include file="$footer"}

{include file="$header"}

<h3>Bancário / Abrindo conta comum</h3>
<hr />

<b>ID {$id}</b>
<p />
Usuário {$nome}
<p />
<hr />

<a href="/">Voltar</a>

<form name="input" action="abrir_conta.php?id={$id}" method="POST">
    <label>Senha</label>      <input type="password" name="senha" required>
    <br />
    <br />
    <label>Saldo</label>   <input type="text" name="saldo" value="0">
    <br />
    <input type="submit" value="Abri conta agora">
</form>
<font size="2" color="red">{$erro}</font>
<font size="2" color="green">{$sucesso}</font>

{include file="$footer"}
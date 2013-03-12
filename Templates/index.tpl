
{include file="$header"}

        <h3>Bancário</h3>
        <hr />
        
        <h4>Opções</h4>
        <a href="abrir_conta.php?id={$id}">Abrir Conta Comum</a> |
        <a href="consultar_conta.php?id={$id}">Consultar Conta Comum</a> |
        
        <hr />
        
        Abrir Conta Especial / Abrir conta Poupança
        
        <br />
        <br />
        <br />
        
        <h3>Informações gerais no usuário</h3>
        <b>ID {$id}</b>
        <p />
        Usuário {$nome}
        <p />
        Endereço {$endereco}
        <p />
        Cep {$cep}
        <p />
        Telefone {$telefone}
        <p />
        Renda {$renda}
        <hr />
        
{include file="$footer"}

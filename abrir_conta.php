<?php


require_once 'Smarty/Smarty.class.php';
require_once 'Classes/Pessoa.class.php';
require_once 'Classes/PessoaFisica.class.php';
require_once 'Classes/Conta_comum.class.php';

$template = new Smarty();
$template->template_dir = 'Templates';
$template->compile_dir = 'Templates_c';
$template->assign("header", "header.tpl");
$template->assign("footer", "footer.tpl");

//Pega a id do usuário
$usuarioID = $_GET['id'];

//Instancia a classe pessoa
$pessoa = new Pessoa();

//Seleciona as informações do usuário no banco de dados
$pesquisa = $pessoa->selecionar($usuarioID);
while ($linha = $pesquisa->fetch(PDO::FETCH_ASSOC)) {
    //Setando os valores do objeto pessoa
    $pessoa->setNome($linha['nome']);
    $pessoa->setEndereco($linha['endereco']);
    $pessoa->setCep($linha['cep']);
    $pessoa->setTelefone($linha['telefone']);
    $pessoa->setRenda($linha['renda']);
    $pessoa->setSituacao($linha['situacao']);
}

//seta variáveis para o template
$template->assign('id', $usuarioID);
$template->assign('nome', $pessoa->getNome());
$template->assign('endereco', $pessoa->getEndereco());
$template->assign('cep', $pessoa->getCep());
$template->assign('telefone', $pessoa->getTelefone());
$template->assign('renda', $pessoa->getRenda());

//Se houver POST -  Início
if($_POST){
    
    //Se a senha não for numérica
    if(!is_numeric($_POST['senha'])){
        $template->assign('erro', 'Senha inválida! A senha deve conter apenas números.');
    }else{
        //Ok os dados do post são válidos.
        //Hora de cadastrar uma conta comum para o usuário
        
        $cc = new conta_comum();
        
        $data = array(
            'id'    =>  $usuarioID,
            'senha' =>  $_POST['senha'],
            'saldo' =>  $_POST['saldo']
        );
        
        //Se a abertura da conta form realizada com sucesso
        $eAi = $cc->abrir_conta($data);
        
        if($eAi){
            $template->assign('sucesso', 'A conta foi criada com sucesso!!!');
        }else{
            $template->assign('erro', 'Erro... A conta NÃO foi criada! =(');
        }
    }
    
} //Fim processamento do POST



//exibe template
$template->display('abrir_conta.tpl');


?>

<?php
define( 'BASEPATH', getcwd() . DIRECTORY_SEPARATOR );


require_once '../Smarty/Smarty.class.php';
require_once '../Classes/Pessoa.class.php';
require_once '../Classes/PessoaFisica.class.php';
require_once '../Classes/Conta_comum.class.php';
require_once '../Classes/movimento.class.php';


$template = new Smarty();
$template->template_dir = '../Templates';
$template->compile_dir = '../Templates_c';
$template->assign("header", "header.tpl");
$template->assign("footer", "footer.tpl");
$numeroConta = $_GET['NumeroConta'];
$usuarioID = (int)$_GET['usuarioID'];

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

//var_dump($numeroConta);
//var_dump($usuarioID);

$template->assign('numeroconta', $numeroConta);

if($_POST){
    $_POST['valor'];
    
    $cc = new conta_comum();
    
    $data = array(
        'conta' => $numeroConta,
        'valor'      => (-1) * (double)$_POST['valor'] //A única diferença do depositar pro saque está na troca do sinal para negativo
    );
    
    
    $linkVoltar = '<a href="/contacomum/sacar.php?NumeroConta='.$numeroConta.'&usuarioID='.$usuarioID.'" = >Voltar</a>';
    $template->assign('voltar', $linkVoltar);
    if($cc->sacar($data)){
        
        //Instância da classe movimento
        $movimento = new movimento();
        //Registrar movimento
        $movimento->registrar($data);
        
        
        
        //MSG SUCESSO
        $mensagem = '<font size="5" color="green">O saque foi realizado!</font>';
        $template->assign('mensagem', $mensagem);

    }else{
        //MSG ERRO
        $mensagem = '<font size="5" color="red">O saque falhou!</font>';
        $template->assign('mensagem', $mensagem);
    }
    
    
    //Carrega o template da mensagem
    $template->display('mensagem.tpl');
    
    //Morre a aplicação aqui, senão ele executa o template de baixo, ai a página fica desconfigurada
    die();
}

$template->display('sacar.tpl');

?>



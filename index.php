<?php
require_once 'Smarty/Smarty.class.php';
require_once 'Classes/Pessoa.class.php';
require_once 'Classes/PessoaFisica.class.php';

$template = new Smarty();
$template->template_dir = 'Templates';
$template->compile_dir = 'Templates_c';
$template->assign("header", "header.tpl");
$template->assign("footer", "footer.tpl");
$mensagem = 'data atual ' . date('d/m');
//$template->assign('mensagem', $mensagem);

$usuario = array(
    'cod' => 200,
    'nome' => 'João',
    'nasc' => date('d/m/Y',  mktime(0,0,0,5,30,1950))
);
$template->assign('user',$usuario);

$pessoaFisica = new PessoaFisica();
$pessoa = new Pessoa();

$usuarioID = 3;
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

$template->assign('id', $usuarioID);
$template->assign('nome', $pessoa->getNome());
$template->assign('endereco', $pessoa->getEndereco());
$template->assign('cep', $pessoa->getCep());
$template->assign('telefone', $pessoa->getTelefone());
$template->assign('renda', $pessoa->getRenda());





$template->display('index.tpl');

?>


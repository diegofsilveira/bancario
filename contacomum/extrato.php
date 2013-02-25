<?php
define( 'BASEPATH', getcwd() . DIRECTORY_SEPARATOR );


require_once '../Smarty/Smarty.class.php';
require_once '../Classes/Pessoa.class.php';
require_once '../Classes/PessoaFisica.class.php';
require_once '../Classes/Conta_comum.class.php';
require_once '../Classes/movimento.class.php';
require_once ('Pager/Pager.php');


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



require_once ('Pager/Pager.php');



$cc = new conta_comum();

$totalRegistrosExtrato = $cc->totalMovimento($numeroConta);
$totalItems = $totalRegistrosExtrato['total'];
$pager_options = array(
    'mode'       => 'Sliding',
    'perPage'    => 6,
    'delta'      => 4,
    'nextImg'    => '<img src="/img/next2.png"  />',
    'prevImg'    => '<img src="/img/prev2.png"  />',
    'totalItems' => $totalItems,
);
$pager = Pager::factory($pager_options);
//echo $pager->links;

list($from, $to) = $pager->getOffsetByPageId();

list($from, $to) = $pager->getOffsetByPageId();

$from = $from - 1;


$perPage = $pager_options['perPage'];
$extrato = $cc->extrato($numeroConta, $from, $perPage);


$template->assign('links', $pager->links);
$template->assign('movimento', $extrato);



$template->display('extrato.tpl');

?>



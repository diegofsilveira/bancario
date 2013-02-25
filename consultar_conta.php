<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 
 * 
 * Script para consultar a conta comum
 */

require_once 'Smarty/Smarty.class.php';
require_once 'Classes/Pessoa.class.php';
require_once 'Classes/PessoaFisica.class.php';
require_once 'Classes/Conta_comum.class.php';


$template = new Smarty();
$template->template_dir = 'Templates';
$template->compile_dir = 'Templates_c';

$template->assign("header", "header.tpl");
$template->assign("footer", "footer.tpl");

$template->assign('baseurl', $_SERVER['HTTP_HOST'] . '/');



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


$cc = new conta_comum();
$pesquisaContas = $cc->listar($usuarioID);
$template->assign('grid', $pesquisaContas->fetchAll(PDO::FETCH_ASSOC));


$template->display('consultar_conta.tpl');

?>

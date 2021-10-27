<?php
	require_once("pessoa.class.php"); //importando a classe

	class Teste{
		private $pessoa;


		public function __construct(){ //método construtor
			$pessoa = new Pessoa(); //objeto da classe pessoa

			$pessoa->setNome($_POST['nome']);
			echo "Nome: " . $pessoa->getNome() . "<br>";

			$pessoa->setEndereco($_POST['endereco']);
			echo "Endereço: " . $pessoa->getEndereco() . "<br>";

			$pessoa->setBairro($_POST['bairro']);
			echo "Bairro: " . $pessoa->getBairro() . "<br>";

			$pessoa->setCep($_POST['cep']);
			echo "CEP: " . $pessoa->getCep() . "<br>";

			$pessoa->setCidade($_POST['cidade']);
			echo "Cidade: " . $pessoa->getCidade() . "<br>";

			$pessoa->setEstado($_POST['estado']);
			echo "Estado: " . $pessoa->getEstado() . "<br>";
		}

	}
	new Teste(); //executa a própria classe
?>
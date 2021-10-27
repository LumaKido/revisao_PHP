<?php
	class Pessoa{
		//metodo construtor=
		private $nome; //$= não defini um tipo, apenas que é uma variável
		private $endereco;
		private $bairro;
		private $cep;
		private $cidade;
		private $estado;

		//metodo de acesso = get | metodo de alteração = set

		public function getNome(){
			return $this->nome; //this = indicar a variavel em específico
		}
		public function setNome($nome){
			$this->nome = $nome; //this nome recebe a variável $nome (o que foi escrito lá)
		}

		public function getEndereco(){
			return $this->endereco;
		}
		public function setEndereco($endereco){
			$this->endereco = $endereco;
		}

		public function getBairro(){
			return $this->bairro;
		}
		public function setBairro($bairro){
			$this->bairro = $bairro;
		}

		public function getCep(){
			return $this->cep;
		}
		public function setCep($cep){
			$this->cep = $cep;
		}

		public function getCidade(){
			return $this->cidade;
		}
		public function setCidade($cidade){
			$this->cidade = $cidade;
		}

		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
		}
	}
?>


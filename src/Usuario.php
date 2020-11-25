<?php 

	namespace App;
	
	use DateTime;
	use Exception;
	use App\Permisao;

	date_default_timezone_set('America/Bahia');

	class Usuario extends Permisao
	{
		private $telefone;  
		private $data_cadastro;
		private $nome;

		public function __construct()
		{

		}
		public function cadastrar()
		{	
			try {
				
				if(empty($this->telefone) || !is_string($this->telefone))
					throw new Exception("Error: Telefone Invalido");
				
				if(empty($this->nome) || !is_string($this->telefone)) :
					throw new Exception("Error: Nome Invalido");


				else:

					$this->data_cadastro = date("Y-m-d H:i:s", time());
					
					return Usuario::preencherDados($this->getNome(),$this->getTelefone(),$this->getNivel());
				endif;	

			} catch (Exception $e) {

				echo $e->getMessage();				
			}
		}

		public function getTelefone()
		{
			return $this->telefone;
		}

		public function preencherDados($nome, $telefone, $nivel)
		{
			try {

				$this->nome = $nome;
				$this->telefone = $telefone;


				Permisao::setNivel($nivel);
	
			} catch (Exception $e) {
				
				echo $e->getmessage();	
			}
			
		}

		public function getDataCadastro()
		{
			return $this->data_cadastro;
		}

		public function getNome()
		{
			return $this->nome;
		}
	}

 ?>
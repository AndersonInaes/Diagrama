<?php 
	require_once __DIR__ . "/vendor/autoload.php";

	use App\Usuario;

	try {

		$user = new Usuario;
		
		$user->preencherDados("Anderson", "2222-2222","1");
		$user->cadastrar();

			if(!empty($user->getDataCadastro())){

				echo "Nome: " 			. $user->getNome() 	 		. "<br>" .
	 			 	 "Telefone: " 		. $user->getTelefone()		. "<br>" .
	 			 	 "Nivel: "			. $user->getNivel()			. "<br>" .
	 			 	 "Data Cadastro: "	. $user->getDataCadastro();
			}

	} catch (Exception $e) {
		echo $e->getMessage();
	}


	
 ?>
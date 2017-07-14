<?php 
	function statusForView($status){
		if($status == 0){
			return "Rascunho";
		}
		return "Postado";
	}

	function dateForView($data){
		if($data == "" || $data == "0000-00-00"){
			return "";
		}
		$dados = explode("-",$data);
		if(count($dados) != 3){
			return $data;
		}
		$data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";
		return $data_exibir;
	}

?>
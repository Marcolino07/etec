<form method="post" enctype="multipart/form-data">

	
	Nome: 
	<input type="text" name="nome">
	<br>
	Inserir foto de perfil: 
	<input type="file" name="arq">
	<br>
	pfp
	<input type="png" name="pfp">
	<br>
	<button>Enviar</button>
	</form>
		$arquivo =$_FILES['arq'];
		$destino = 'docs/'.$arquivo['name'];
		if(move_uploaded_file($_FILES['arq']['tmp_name'], $destino)){
			echo "Nome: ".$arquivo['name'];
			echo "<br>Tipo: ".$arquivo['type'];
			echo "<br>Tamanho: ".($arquivo['size']/1024).'kb';
			echo "<br>Salvo em: ".$destino;
			$icone = 'sla.jpg';
			switch($arquivo['type']){
				case 'text/plain':
					$icone = 'sla.jpg';
					break;
				case 'image/png':
					$icone = 'sla.jpg';
					break;			
			}
			echo '<br><img src="img/'.$icone.'" width="50px">';
			
		}
		else{
			echo "Deu ruim";
		}	
	}

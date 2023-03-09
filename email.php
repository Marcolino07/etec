<meta charset="utf-8">
<form method="post">
	<label for="nome">Nome</label>
	<input type="text" name="nome">
	<br><label for="email">Email</label>
	<input type="text" name="email">
	<br>
	Assunto:<br>
	<select name="assunto">
		<option>Dúvidas</option>
		<option>Críticas</option>
		<option>Sugestões</option>
	</select>
	<br>
	Mensagem:<br>
	<textarea name="msg"></textarea>
	<br>
	<button>Enviar</button>
</form>
<?php
if($_POST)
{
	$nome = $_POST['nome'];
	$email =$_POST['email'];
	$assunto =$_POST['assunto'];
	$msg =$_POST['msg'];
	$texto ="Nome: $nome.";
	$texto .="Email: $email.";
	$texto .="Assunto: $assunto.";
	$texto .="Mensagem: $msg.";
	$para =$email;

	if(mail($para,$assunto,$texto)){
		echo "Mensagem enviada.";
	}else{
		echo "Erro ao enviar Mensagem.";
	}
}
?>
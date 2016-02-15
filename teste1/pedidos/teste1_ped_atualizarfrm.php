<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Camila Lainetti - Teste 1 - Altran</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  </head>
  
  <body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../teste1.php">Controle de Estoque</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="../produtos/teste1_prod_index.php">Produto</a></li>
            <li><a href="../clientes/teste1_cli_index.php">Cliente</a></li>
            <li><a href="../pedidos/teste1_ped_index.php">Pedido</a></li>
			<li><a href="../teste1_sobre.php">Sobre</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
	<div class='container' style='margin-top: 80px'>
	<p>
        <button type="button" class="btn btn-lg btn-primary"><a href="teste1_ped_criarfrm.php" style="color: #FFF">Criar</a></button>
        <button type="button" class="btn btn-lg btn-success"><a href="teste1_ped_lerfrm.php" style="color: #FFF">Ler</a></button>
        <button type="button" class="btn btn-lg btn-warning"><a href="teste1_ped_atualizarfrm.php" style="color: #FFF">Atualizar</a></button>
        <button type="button" class="btn btn-lg btn-danger"><a href="teste1_ped_apagarfrm.php" style="color: #FFF">Apagar</a></button>
      </p>
	</div>
	
	<div class='container' style='margin-top: 20px'>
		<form action="?go=atualizar" method="post">
		<h3>
		<span class="label label-default">ID Pedido</span>
		<input type="int" name="id" id="id" maxlength="11"/>
		</br>
		<span class="label label-default">ID Produto</span>
		<input type="int" name="id_prod" id="id_prod" maxlength="11"/>
		</br>
		<span class="label label-default">ID Cliente</span>
		<input type="int" name="id_cli" id="id_cli" maxlength="11"/>
		</h3>
		</br></br>
		<h4>
		<input type="submit" value="Enviar" id="enviarButton">
		</h4>
		</form>
	</div>
	
	<?php
		if(@$_GET['go']=='atualizar'){
			$banco =  'bd_teste1';
			$conexao = mysqli_connect('localhost', 'root', '', 'bd_teste1');
					
			if(!$conexao){       
					die("erro ao conectar!");
			}
			mysqli_query($conexao, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
			
			$id = $_POST['id'];
			$id_prod = $_POST['id_prod'];
			$id_cli = $_POST['id_cli'];
			
			$query = "UPDATE pedido SET id_prod_ped='$id_prod', id_cliente_ped='$id_cli' ";
			$query .= "WHERE id_pedido='$id';";
			
			$ok = mysqli_query($conexao, $query);
			
			if($ok){
				echo "<script>alert('Pedido atualizado com sucesso!');</script>";
			}
			else{
				echo "<script>alert('Pedido não atualizado!');</script>";
			}
			mysqli_close($conexao);
		}
	?>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>
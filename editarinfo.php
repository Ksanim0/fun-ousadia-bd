<?php 
	include 'conexaoBD.php';
    

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = mysqli_query($conectar, "SELECT * FROM fun_ousadia_tb WHERE id=$id");

        $count = (is_array($sql)) ? count($sql) :1 ;
		if ($count) {
			$n = mysqli_fetch_array($sql);
			$nome = $n["nome"];
			$email = $n['email'];
            $senha = $n['senha'];
            $telefone = $n['telefone'];
            $cpf = $n['cpf'];
            $cep = $n['cep'];
            $cidade = $n['cidade'];
            $cartao = $n['cartao'];
            $seccartao = $n['seccartao'];
		}
	}


	if(isset($_POST['editar'])){
		$id = $_GET["id"];
		$nome = $_POST["nome"];
		$email = $_POST["email"];
        $senha = $_POST["senha"];
        $telefone = $_POST["telefone"];
        $cpf = $_POST["cpf"];
        $cep = $_POST["cep"];
        $cidade = $_POST["cidade"];
        $cartao = $_POST["cartao"];
        $seccartao = $_POST["seccartao"];
		$query = "UPDATE fun_ousadia_tb SET nome = '$nome', email= '$email', senha='$senha', telefone='$telefone', cpf='$cpf', cep='$cep', cidade='$cidade', cartao='$cartao', seccartao='$seccartao' WHERE id = $id ";
	    
	    $consulta = mysqli_query($conectar, $query);

	    header('location: table.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
    <script src="mask.js"></script>
</head>
<body>
	<div class="container col-md-6 offset-md-3">
        <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4"><h1>Editar Conta</h1></div>
		</div>

        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-7"><label> Tenha certeza de preencher os dados corretamente</label></div>
        
        </div>

        
		<form method="POST">
			<div class="row">
				<div class="col">
                    <label for="">Nome</label>
					<input type="text" class="form-control" name="nome" value= "<?php echo $nome ; ?>" required>
				</div>
				<div class="col">
                    <label for="">E-mail</label>
					<input type="text" class="form-control" name="email" value="<?php echo $email ; ?>" required>
				</div>
			</div>
            
            <div class="row">
                <div class="col">
                    <label for="">Senha</label>
                    <input type="text" class="form-control" name="senha" value="<?php echo $senha ; ?>" required>
                </div>
                <div class="col">
                    <label for="">Telefone</label>
                    <input type="text" class="form-control" name="telefone" maxlength="11" oninput="mascaraTel('telefone')" id="tefelone" value="<?php echo $telefone ; ?>" required>
                </div>
            </div>

            <div class="row">
                <div class="col">
                        <label for="">CPF</label>
                        <input type="text" class="form-control" name="cpf" maxlength="11" oninput="mascaraCpf('cpf')" id="cfp" value="<?php echo $cpf ; ?>" required>
                    </div>
                    <div class="col">
                        <label for="">CEP</label>
                        <input type="text" class="form-control" name="cep" maxlength="8" oninput="mascaraCep('cep')" id="cpe" value="<?php echo $cep ; ?>" required>
                </div>
            </div>

            <div class="row">
                <div class="col">
                        <label for="">Cartão</label>
                        <input type="text" class="form-control" name="cartao" maxlength="16" value="<?php echo $cartao ; ?>" required>
                    </div>
                    <div class="col">
                        <label for="">Número de Segurança do Cartão</label>
                        <input type="text" class="form-control" name="seccartao" maxlength="3" value="<?php echo $seccartao ; ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Cidade</label>
                    <input type="text" class="form-control" name="cidade" value="<?php echo $cidade ; ?>" required>
                </div>
            </div>
			<br>
			<div>
				<button name="editar" type="submit" class="btn btn-primary">Editar</button>
			</div>
		</form>
	
	</div>

</body>
</html>


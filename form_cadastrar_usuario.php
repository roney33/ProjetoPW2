<?php
	if(isset($_GET['cadastrar']))
	{
			$nome = $_GET['nome'];
			$login = $_GET['login'];
			$senha = md5($_GET['senha']);
			$tipo = $_GET['tipo'];
			try{
				$con = new PDO('mysql:host=localhost:3307;dbname=banco_apm', 'root','usbw');
				$comando_sql = "INSERT INTO tabela_usuarios(nome,login,senha,tipo)VALUES(?,?,?,?)";
				$stmt = $con->prepare($comando_sql);
				$stmt->bindParam(1,$nome);
				$stmt->bindParam(2,$login);
				$stmt->bindParam(3,$senha);
				$stmt->bindParam(4,$tipo);
				$rs = $stmt->execute();
				if($rs){
					echo "<script>alert('Usuário cadastrado com sucesso!');</script>";	
				}else{
					echo "<script>alert('Erro ao tentar cadastrar usuário.');</script>";	
				}			
				
			}catch(PDOException $erro){
				
				echo "Erro:" . $erro->getMessage();
			}
			
	}?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastrar Usuário</title>
</head>
<body>
	<form action="#" method="get">
    	<p><label>Nome do usuário:</label></p>
        <p><input type="text" name="nome" size="50" maxlength="50" required></p>
        
        <p><label>Login:</label></p>
        <p><input type="text" name="login" size="50" maxlength="50" required></p>
        
        <p><label>Senha:</label></p>
        <p><input type="password" name="senha" size="50" maxlength="50" required></p>
        
        <p>Tipo de usuário:</p>
        
        <p>
        	<select name="tipo">
            	<option value="">--</option>
                <option value="p">PADRÃO</option>
                <option value="s">SUPER</option>
                <option value="m">MASTER</option>            
            </select>
        
        </p>
        <input type="submit" name="cadastrar" value="Cadastrar">       
    
    </form>
</body>
</html>
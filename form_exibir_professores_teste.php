<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Relatório de Professores</title>
</head>

<body>
    <table border="1" align="center">
    <tr><th colspan="7">Relatório de Professores</th></tr>
    <tr>
    	<th>Matrícula</th>
        <th>Professor</th>
    
    </tr>
    <?php
	try{
		$conexao = new PDO('mysql:host=localhost:3307;dbname=banco_apm','root','usbw');
		$comando_mysql = "SELECT * FROM tabela_professores;";
		$consulta = $conexao->query($comando_mysql);
		while($resultado = $consulta->fetch(PDO::FETCH_ASSOC)){
			echo "<tr>";
			echo "<td>{$resultado['matricula']}</td>";
			echo "<td>{$resultado['nome']}</td>";
			echo "</tr>";
			
		}
	}catch(PDOException $e){
		echo "ERRO:" . $e->getMessage();
		}
	
	
	?>
    </table>
</body>
</html>
﻿<?php
	$matricula = $_GET['matricula'];
	$conexao = new PDO('mysql:host=localhost:3307;
						dbname=banco_apm','root','usbw');
  $sql = "SELECT * FROM tabela_professores WHERE matricula=?";
  $busca = $conexao->prepare($sql);
  $busca->bindParam(1,$matricula);
  $busca->execute();
  $registro = $busca->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar  Professor</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<link href="css/estilo_do_menu.css" rel="stylesheet" type="text/css">
</head>
<body>
	<header>
    	<h1>EDITAR PROFESSOR</h1>
    </header>
    <nav>
    	<ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#news">News</a></li>
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Dropdown</a>
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </li>
        </ul>
       </nav>
	<main>
   <section>
   <fieldset>
    <legend>Editar Professor:</legend>
	<form action="#" method="post" enctype="multipart/form-data">
     <p><label>Matrícula:</label></p>
     <p><input type="number" name="matricula" value="<?php echo $registro['matricula'];?>" size="5" required></p>   
                             
     <p><label>Nome do Professor(a):</label></p>
     <p><input type="text" name="nome"  value="<?php echo $registro['nome'];?>" size="50"	required></p>
     
     <p><img src='fotos/{registro['fotos']}'></p>
     <p><label>Secione um foto:</label></p>
     <p><input type="file" name="arquivo"></p>
            
     <p><label>E-mail:</label></p>
     <p><input type="text" name="email" size="50" value="<?php echo $registro['email'];?>"	required></p> 
            
     <p><label>Telefone:</label></p>
     <p><input type="tel" name="telefone" size="15" value="<?php echo $registro['telefone'];?>"	required></p>
            
     <p><label>Celular:</label></p>
     <p><input type="tel" name="celular" size="15" value="<?php echo $registro['celular'];?>"	required></p>
            
     <p><label>Data de contribuição:</label></p>
     <p><input type="date" name="data" value="<?php echo $registro['data'];?>" required></p>
            
            <p><label>Valor da contribuição:</label></p>
            <p><input type="text" name="valor" size="10" value="<?php echo $registro['valor'];?>"	required></p>
            
                               
            <p><input type="submit" value="Atualizar" 
            name="atualizar"></p>    
        </form>
       </fieldset>
    </section>
    </main>
    <footer>
    	<p></p>
    </footer>
</body>
</html>
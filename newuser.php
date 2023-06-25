<?php

include('conexao.php');


?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Criar Usuario</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="index-primeiraTelastyles.css" />
</head>
<body>
  
  <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <div class="content">      
      <!--Novo Usuario-->
      <div id="Criar Usuario">
        <form action="" method="post"> 
        <br>
        <br>
        <br>
        <br>
        <h1>Criar Usuario</h1> 
          <p> 
            <label for="matricula">Matrícula</label>
            <input id="matricula" name="matricula" required="required" type="text" placeholder="ex. 1"/>
          </p>
           
          <p> 
            <label for="bairro">Seu Bairro</label>
            <input id="bairro" name="bairro" required="required" type="text" placeholder="ex. centro" /> 
          </p>

          <p> 
            <label for="newpassword1">Crie uma Senha</label>
            <input id="newpassword1" name="newpassword1" required="required" type="password" placeholder="ex. 123" /> 
          </p>

          <p> 
            <input type="submit" value="Cadastrar" /> 
          </p>
           
          </p>
        </form>
      </div>
    </div>
  </div>  
</body>
</html>
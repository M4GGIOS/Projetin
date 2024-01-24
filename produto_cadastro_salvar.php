<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css_bootstrap/bootstrap.min.css" rel="stylesheet" />

        <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
        <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"/></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


        <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
        <script src="js_bootstrap/bootstrap.min.js"></script>
</head>
<body>
    <?php 
      include 'header_admin.php';
      include 'conexao_bd.php';
      
    //1° - Capturar as entradas de dados
    $descricao = $_POST["txtDescricao"];

    //2° - Codificar o SQÇ para INSERIR

    $sql = "INSERT INTO produto(descricao) values ('$descricao')";

    //3° - EXECUTAR O COMANDO SQL

    if (executarComando($sql)){
        echo "<h2>O produto foi inserido na base de dados!!</h2>";
    }
    else{
        echo "<h2>ERRO durante a inserção</h2>";
    }


    ?>
<a href="produto_cadastro.php"/>
<input type="button"value ="voltar" class="botao"/>
</a>

</body>
</html>
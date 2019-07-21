
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>ADS Academy</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/script.js"></script>  
    </head>
<body>
    <div id="interface">
        <header id="cabecalho">
            <div id="logo">
                <img src="image/logo.png">
            </div>
        </header>
    <section id="escolha">
        <h1>Lista de Alunos</h1>
<?php

    include('conexao.php');

    $lista="SELECT * FROM cadastro";
    $queryLista=mysqli_query($conecta, $lista);

    $registros=mysqli_num_rows($queryLista);

    echo "<table cellspacing='0px'>";
    echo"<tr id='line'>";
    echo"<td>MATRÍCULA</td>";
    echo"<td>NOME</td>";
    echo"<td>TELEFONE</td>";
    echo"</tr>";

    while($mostraCadastros=mysqli_fetch_array($queryLista)){

        $matricula=$mostraCadastros['id_cadastro'];
        $nome=$mostraCadastros['nome'];
        $telefone=$mostraCadastros['telefone'];

        echo "<tr>";
        echo"<td>".$matricula."</td>";
        echo"<td>".$nome."</td>";
        echo"<td>".$telefone."</td>";
        echo"</tr>";
   }
echo"</table>";
   


       
?>

</section>



    </div>





</body>


</html>
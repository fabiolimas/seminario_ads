<?php

    include('conexao.php');

    $ref='SELECT * FROM cadastro order by id_cadastro  desc limit 1 ';
    $queryRef=mysqli_query($conecta, $ref);
while ($lista= mysqli_fetch_array($queryRef)){

    $id_aluno=$lista['id_cadastro']+1;

    if($id_aluno==0 || $id_aluno==""){

        $id_aluno="";
    }
}

?>

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
            <h1>Cadastro de Aluno</h1>
        
        <form method="post" id="cadastra" action="processaCadastro.php">
            Matrícula: <input type="text" name="matricula" size="10" placeholder="<?php echo $id_aluno;?>" required>
            Nome: <input type="text" name="nome" size="65" placeholder="Nome completo" required><br>
             RG: <input type="text" name="rg" size="30">
            CPF: <input type="text" name="cpf" minlength="11" maxlength="11" size="30" id="cpf">
            Telefone: <input type="text" name="fone" size="30" id="fone" maxlength="12"><br><br>
            Endereço: <input type="text" name="endereco" size="50">
            Bairro: <input type="text" name="bairro">
            Cidade: <input Type="text" name="cidade"><br><br>
            Turno: <select name="turno">
                <option>Matutino</option>
                <option>Vespertino</option>
                <option>Noturno</option>
            </select>
            Status: <select name="status">
                <option>Ativo</option>
                <option>Inativo</option>
            </select><br><br>
            <button id="send">Salvar</button> <a href="index.html" id="cancel">Cancelar</a>
            
        </form>
        

    </section>
    </div>
</body>


</html>
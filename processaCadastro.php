
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
<?php

    include('conexao.php');


    $id=$_POST['matricula'];
    $nome=mb_strtoupper($_POST['nome']);
    $rg=$_POST['rg'];
    $cpf=$_POST['cpf'];
    $telefone=$_POST['fone'];
    $endereco=mb_strtoupper($_POST['endereco']);
    $bairro=mb_strtoupper($_POST['bairro']);
    $cidade=mb_strtoupper($_POST['cidade']);
    $turno=mb_strtoupper($_POST['turno']);
    $status=mb_strtoupper($_POST['status']);

    $validacpf="SELECT * FROM cadastro WHERE cpf='$cpf'";
    $queryValidaCpf=mysqli_query($conecta, $validacpf);

    $registros=mysqli_num_rows($queryValidaCpf);

   
    if($cpf==null || $cpf==""){
        echo "O CPF do aluno não foi informado.";
        echo "<script>volta()</script>";
    }
    
    elseif($registros >1){
        echo "O CPF informado <b>".$cpf."</b> já se encontra cadastrado em nossa base de dados";
        echo "<script>volta()</script>";
        
    }
    else{

        $insere="INSERT INTO cadastro VALUES($id,'$nome','$rg','$cpf','$telefone','$endereco','$bairro','$cidade','$turno','$status')";
        $queryInsere=mysqli_query($conecta, $insere);

        if($queryInsere){

            echo "Aluno <b>".$nome."</b> cadastrado com sucsso<br>";
             echo "<script>redirect()</script>";
        }else{

            echo mysqli_error($conecta);
        }
   

    }

   



       
?>

</section>



    </div>





</body>


</html>
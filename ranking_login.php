<?php
    if(isset($_POST["btnLogar"])){
        $username = $_POST["entradaUser"];
        $senha = $_POST["senha"];

        include('conexao_bd.php');
        $db = new Database();
        $conn = $db->connect();

        if ($conn) {
            try {
                $query = "SELECT * FROM `alunos` WHERE `aluno_ra` = ".$username." AND `aluno_senha` = '".$senha."'";
                $stmt = $conn->prepare($query); //transforma o texto de cima em um comando sql
                $stmt->execute(); //executar o comando sql
               // echo $query;
                $retorno_do_banco = $stmt->fetch(); //capturando o retorno do banco  e convertendo para um array
                if ($retorno_do_banco) {
                    echo "ID: " . $retorno_do_banco['aluno_nome'] . " - Nome: " . $retorno_do_banco['aluno_ra'] . "<br>";
                    session_start(); //criar sessão
                    $_SESSION["username"] = $retorno_do_banco['aluno_ra']; //sessão username 
                    $_SESSION["nome"] = $retorno_do_banco['aluno_nome']; // sessão nome do aluno
                    header("Location:index.php"); //redireciona para a index, agora já logado (sessões criadas)
                } else {
                    echo "Aluno não encontrado. Tente novamente";
                }

            } catch (PDOException $e) {
                echo "Erro na consulta: " . $e->getMessage();
            }
        } else {
            echo "Falha na conexão.";
        }
        
   
        //echo "Olá ".$username;
        //session_start();
       // $_SESSION["username"] = $username;
        //$_SESSION["nome"] = "Visitante";
        //header("Location:index.php");
    }
 
?>
<html>
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>

<nav>
    <div class="nav-wrapper blue accent-3">
      <ul id="nav-mobile" class="left   ">
            <li><img class="responsive-img"  style="max-width:100px;" src="https://www.fai.com.br/vestibular/img/unifai2023.png"> <br/></li>
            <li class='col s2 center-align '><a style='color:black;' href='ranking_geral.php'>Ranking geral</a></li>
            <li class='col s2 center-align '><a style='color:black;' href='ranking_cadastro_envio.php'>Cadastrar envio</a></li>
        </ul>
    </div>
  </nav>

 
<div class='container'>
    <div class='row'>
        <div class='col s4'> </div>
        <div class='col s4'> 
            <form action="" method="post">
                <label for="entradaUser">Nome de usuário</label>
                <input type="number" name="entradaUser" id="entradaUser">

                <label for="senha">Nome de usuário</label>
                <input type="password" name="senha" id="senha">

                <input type="submit" name="btnLogar" value="Logar">
            </form>
        </div>
        <div class='col s4'> </div>

    </div>

</div>
</body>

</html> 
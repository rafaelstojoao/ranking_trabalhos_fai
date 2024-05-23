<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>Ranking</title>
 
</head>
<body class=" blue darken-1">
<nav>
    <div class="nav-wrapper blue accent-3">
      <ul id="nav-mobile" class="left   ">

            <li><img class="responsive-img"  style="max-width:100px;" src="https://www.fai.com.br/vestibular/img/unifai2023.png"> <br/></li>
            <li class='col s2 center-align '><a style='color:black;' href='index.php'>Início</a></li>
            <li class='col s2 center-align '><a style='color:black;' href='ranking_geral.php'>Ranking geral</a></li>
            <li class='col s2 center-align '><a style='color:black;' href='ranking_cadastro_envio.php'>Cadastrar envio</a></li>
            <?php
                    session_start();
                    if(!isset($_SESSION["username"])){
                        header("Location:ranking_login.php");
                    }
                    else{
                        echo "  <li class='col s2 center-align' >Seja bem vindo(a) ".$_SESSION["nome"]."</li>
                                <li class='col s2 center-align' ><a href='ranking_sair.php'> Sair </a></li>";

                    }

                    
                    ?>
             

      </ul>
    </div>
  </nav>



    <div class="container  blue darken-1 ">

    
        <div>
            <h1 style="text-align: center; margin-top: 6rem">
                Ranking
            </h1>
        </div>
        <div style="display: flex; align-items: center; margin-top: 15vh;">
            <table class="striped responsive-table z-depth-5">
                <thead class="card-panel black white-text">
                    <tr>
                        <th>Atividade</th>
                        <th>Aluno</th>
                        <th>Nota geral</th>
                        <th>Data entrega</th>
                        <th>Observações</th>
                    </tr>
                </thead>

                <tbody class="centered">

                
<?php
include('conexao_bd.php');
$db = new Database();
$conn = $db->connect();

        if ($conn) {
            try {
                $query = "SELECT * FROM `entrega_atividade`";
                $stmt = $conn->prepare($query); //transforma o texto de cima em um comando sql
                $stmt->execute(); //executar o comando sql
                $results = $stmt->fetchAll(); //capturando o retorno do banco  e convertendo para um array
                if ($results) {
                    foreach ($results as $linha) {
                        echo "<tr><td>" . $linha['atividade_nome'] . "</td>
                        <td>" . $linha['atividade_aluno'] . "</td>
                        <td>" . $linha['atividade_nota'] . "</td>
                        <td>" . $linha['atividade_data_entrega'] . "</td>
                        <td>" . $linha['atividade_observacoes'] . "</td>
                        </tr>" ;
                    }

                } else {
                    echo "Nenhuma entrega de atividade cadastrada";
                }

            } catch (PDOException $e) {
                echo "Erro na consulta: " . $e->getMessage();
            }
        } else {
            echo "Falha na conexão.";
        }
?>
                   
                </tbody>
            </table>
        </div>
    </div>
</body>
<div><label for=""><br/></label></div>
</html>


<?php
 

?>
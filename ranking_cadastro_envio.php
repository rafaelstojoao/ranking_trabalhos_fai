<?php
    if(isset($_POST["btn_cadastrar"])){
        $ra = $_POST["ra_aluno"];
        $atv = $_POST["nome_atividade"];
        $nota = $_POST["nota_atividade"];
        $obs = $_POST["obs_atividade"];

        include('conexao_bd.php');
        $db = new Database();
        $conn = $db->connect();

        if ($conn) {
            try {
                $query = "INSERT INTO `entrega_atividade`(`atividade_nome`, `atividade_aluno`, `atividade_nota`, `atividade_observacoes`) 
                VALUES ('".$atv."',".$ra.",'".$nota."','".$obs."');";
                //echo $query;
                $stmt = $conn->prepare($query); //transforma o texto de cima em um comando sql
                $stmt->execute(); //executar o comando sql
                echo "Entrega cadastrada com sucesso!!!"; 

            } catch (PDOException $e) {
                echo "Erro na escrita: " . $e->getMessage();
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>

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

 
<div class='container'>
    <div class='row'>
        <div class='col s4'> </div>
        <div class='col s4'> 

        <!--Atividade	Aluno	Nota geral	Data entrega	Observações -->

        
  <div class="row">
    <form class="col s12" action="" method="post">
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_ra" type="number" class="validate" name="ra_aluno">
                <label for="icon_ra">R.A. Aluno</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">work</i>
                <input id="icon_nome" type="text" class="validate" name="nome_atividade">
                <label for="icon_nome">Nome Atividade</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">equalizer</i>
                <input id="icon_nota" type="number" min="0" max="10" step="0.5" class="validate" name="nota_atividade">
                <label for="icon_nota">Nota</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">message</i>
                <input id="icon_obs" type="text" class="validate" name="obs_atividade">
                <label for="icon_obs">Observações gerais</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                 
                <input id="btn_submit" type="submit" class="validate" name="btn_cadastrar" value="Cadastrar">
            </div>
        </div>
      </div>
    </form>
  </div>
 
        </div>
        <div class='col s4'> </div>

    </div>

</div>
</body>

</html> 
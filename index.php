

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

 


</body>

</html> 
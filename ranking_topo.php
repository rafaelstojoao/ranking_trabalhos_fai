<html>
<head>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>
<div class=".">
        
        <ul class="row blue darken-2 ">
            <li>    <img class="responsive-img"  style="max-width:100px;" src="https://www.fai.com.br/vestibular/img/unifai2023.png"></li>
    <?php
        $files1 = scandir("./");


        foreach ($files1 as $arq){
            if($arq != "." &&  $arq !="..")
            echo "<li class='col s2 center-align '><a style='color:black;' href='".$arq."'>".$arq."</a></li>";
        }

    ?>


    </ul>

</div>

<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/display.css">
    <link rel="stylesheet" href="../styles/global-presets.css">
    <title>Cadastro | Resultado</title>
</head>
<body>
    <div class="container">
        <?php
            $name=$_GET["name"];
            $rg=$_GET["RG"];
            $cpf=$_GET["CPF"];
            $adress=$_GET["adress"];
            $genero=$_GET["gender"];
            $birthday=$_GET["birthday"];
            $maritalStatus=$_GET["check"];
        ?>
        <div class="items">
                <img class="logo" src="../images/jordan-logo.png" alt="">
                <h1>Registro</h1>
            <?php
                echo "<div>";
                    echo "<h3>Nome:</h3>";
                    echo "<p>".$name."</p>";
                echo "</div>";
                echo "<div>";
                    echo "<h3>Registro Geral:</h3>";
                    echo "<p>".$rg."</p>";
                echo "</div>";
                echo "<div>";
                    echo "<h3>Cadastro de Pessoas Física:</h3>";
                    echo "<p>".$cpf."</p>";
                echo "</div>";
                echo "<div>";
                    echo "<h3>Endereço:</h3>";
                    echo "<p>".$adress."</p>";
                echo "</div>";
                echo "<div>";
                    echo "<h3>Gênero:</h3>";
                    echo "<p>".$genero."</p>";
                echo "</div>";
                echo "<div>";
                    echo "<h3>Data de nascimento:</h3>";
                    echo "<p>".$birthday."</p>";
                echo "</div>";
                echo "<div>";
                    echo "<h3>Situação civil:</h3>";
                    echo "<p>".$maritalStatus."</p>";
                echo "</div>";
            ?>
            <div class="backtoindex" onclick="voltar()" id="voltar">VOLTAR</div>
        </div>

    </div>

    <script>

        function voltar() {
            window.location.href = "../../index.html"
        }

    </script>
</body>
</html>
=======
<?php

    $name=$_GET["name"];
    $rg=$_GET["RG"];
    $cpf=$_GET["CPF"];
    $adress=$_GET["adress"];
    $genere=$_GET["genere"];
    $birthday=$_GET["birthday"];
    $maritalStatus=$_GET["check"];

    echo $name;
    echo "<br/>";
    echo $rg;
    echo $cpf;
    echo $adress;
    echo $genere;
    echo $birthday;
    echo $maritalStatus;
?>
>>>>>>> 6fea23db9353af15956510dfee15927d93e7105b

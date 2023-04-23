<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blogpessoal</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<!--corpo da página-->

<body>
    <!--cabeçalho da página-->
    <header class="w3-container w3-pink w3-center">
        <h1><b> Página de Agendamentos</b></h1>
    </header>
    <div class="w3-container w3-center">
        <img src="img/logo.png" width="250px">
    </div>
    <div class="w3-container w3-pink w3-center">
<h1>Preencha as informações</h1>
        <form class="w3-container w3-center w3-margin" action="index.php">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome"><br>
            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email">
            <p>Escolha os Serviços:</p>

            <input type="radio" name="depilação" value="depilação"> Depilação R$50,00 <br>
            <input type="radio" name="escova" value="escova"> Escova R$80,00<br>
            <input type="radio" name="sobrancelha" value="sobrancelha"> Sobrancelha R$20,00<br>
            <input type="radio" name="perna" value="perna"> Perna R$30,00<br>
            <p>Escolha o dia e horário</p>
            <input type="datetime-local">
            <br><br>
            <input class="w3-button w3-white w3-hover-black w3-round-xxlarge" type="submit" name="enviar"
                value="AGENDAR"><br><br>


        </form>

    </div>


</body>

</html>
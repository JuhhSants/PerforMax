<?php
    if(isset($_POST['submit']))

    {

        include_once("cnx.php");
        
        $nome = $_POST ['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nasc'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco)
        VALUES('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Cadastre-se</title>
</head>
<body class="cadastro">

    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend> <b>Cadastre-se</b> </legend>
                <br>

                <div class="inputs">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="name" class="form">Nome completo</label>
                </div> 
                <br><br>

                <div class="inputs">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="form">Email</label>
                </div> 
                <br><br>

                <div class="inputs">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="form">Telefone</label>
                </div> <!-- Fim inputs -->
                <br>

                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label> <br>

                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label><br>

                <input type="radio" id="outros" name="genero" value="outros" required>
                <label for="outros">Outros</label> <!-- Fim sexo -->
                <br><br>

                <!--Data -->
                    <label for="data_nasc"><b>Data de nascimrnto:</b></label>
                    <input type="date" name="data_nasc" id="data_nasc"  required>
                <!-- Fim data_$data_nasc -->
                <br><br>

                <div class="inputs">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="form">Cidade</label>
                </div>
                <br><br>

                <div class="inputs">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="form">Estado</label>
                </div>
                <br><br>

                <div class="inputs">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="form">Endereço</label>
                </div> <!-- Fim do "CEP" -->
                <br><br>

                <input type="submit" name="submit" id="submit">

            </fieldset>
        </form>
    </div> <!-- Fim box -->
   
</body>
</html>
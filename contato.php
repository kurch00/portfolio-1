<?php

    if(isset($_POST['submit'])) {
        //print_r('Nome: ' . $_POST['nome']);
        //print_r('<br>');
        //print_r('E-mail: ' . $_POST['email']);
        //print_r('<br>');
        //print_r('Telefone: ' . $_POST['telefone']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone) VALUES ('$nome','$email','$telefone')");
    }

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Miguel Gutierrez</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Jost&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Inria+Sans&family=Jost&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Grandstander:wght@500&family=Inria+Sans&family=Jost&display=swap');

    * {
        margin: 0;
        padding: 0;
        transition: all .3s ease-in-out;
    }

    body {
        background-color: #F8F0C2;
    }
    

    header {
        background-color: #68B8DB;
        width: 100%;
        height: 86px;
        position: fixed;
    }

    .menu-content {
        display: flex;
        list-style: none;
        padding-left: 50px;
        font-size: 25px;
        font-family: 'Inria Sans', sans-serif;
    }   

    

    .menu-content #voltar {
        text-decoration: none;
        color: #000;
        transform: 2ms ease-in;
        position: relative;
}

    .menu-content #voltar:before {
        content: ' ';
        position: absolute;
        bottom: 0px;
        left: 0px;
        width: 0px;
        height: 1px;
        background-color: black;
        transition: all 0.5s ease;
    }

    .menu-content #voltar:hover::before {
        width: 100%;
    }

    .voltar {
        top: 27px;
        text-decoration: none;
    }


    /* Main */

    .box{
            color: white;
            position: absolute;
            top: 40%;
            left: 35%;
            border-radius: 15px;
            background: #3F525A;
            padding: 15px;
            border-radius: 15px;
            width: 591px;
            height: 305px;
            flex-shrink: 0;
            font-family: Jost;
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }
        fieldset{
            border-radius: 5px;
            border: 2px solid #000;
            width: 585px;
            height: 300px;
            flex-shrink: 0;
        }
    
        .inputBox{
            position: relative;
            padding-left: 10px;
            padding-top: 10px;
        }

        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 97%;
            letter-spacing: 2px;
        }

        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
            padding-left: 10px;
            padding-top: 10px;
        }

        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        .submit-classe {
            padding-left: 230px;
        }

        #submit{
            border-radius: 10px;
            background: #68B8DB;
            width: 140px;
            height: 50px;
            border: none;
            padding: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }

        .txt {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .h1 {
            display: flex;
            align-items: center;
            flex-shrink: 0;
            color: #000;
            font-family: 'Grandstander', cursive;
            font-size: 90px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            text-align: center;
            padding-top: 150px;
        }

        .h2 {
            color: #000;
            font-family: Jost;
            font-size: 30px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

    </style>
    
</head>
<body>

    <header id="header" class="max">
        
        <div class="menu-content">
            <nav class="header-menu">
                <a id="voltar" class="voltar" href="index.html">Voltar</a>
            </nav>
        </div>
    </header>

    <main>

        <div class="txt">
            <h1 class="h1">Contact</h1>
            <h1 class="h2">Entrarei em Contato</h1>
        </div>
        
        <div class="box">
            <form action="contato.php" method="post">
                <fieldset>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelInput">Nome completo</label>
                    </div>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput">E-mail</label>
                    </div>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="telefone" id="telefone" class="inputUser" required>
                        <label for="telefone" class="labelInput">Telefone</label>
                    </div>
                    <br>
                    <div class="submit-classe">
                        <input type="submit" name="submit" id="submit">
                    </div>
                    
                    
                </fieldset>
            </form>
        </div>
    </main>

</body>
</html>
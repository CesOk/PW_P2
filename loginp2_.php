<!DOCTYPE html>
<html>
    <head>
    <title>Projeto P1/P2 - Programação Web</title>
        <!--Bootstrap-->
        <link rel="stylesheet" href="vitrine_css.css" />
        <!---->
        <!--Javascript-->
        <script lang="javascript" src="LoginP2_.js"></script>
        <!---->
        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <!---->
    </head>
<body>
<div class="container-fluid" 
            id="header1"
            align="center">
            <div class="row">
                <div class="col" id="logo">
                    <br/>
                    <img src="https://uploaddeimagens.com.br/images/004/041/416/thumb/Fatec_burguer.png?1664423097" 
                    height="180" 
                    width="200">
                </div>
                <div class="col" id="busca_bar">
                    <form name="frm1" method="post">
                        <input type="text" id="busca" name="busca" placeholder="Digite aqui o produto que deseja buscar" size="50"/>
                        <button name="btn_busca" type="submit" id="busca_btn">BUSCAR</button>
                    </form>
                </div>
                <div class="col">
                    <button type="button" id="perfil_btn">
                        <img src="https://uploaddeimagens.com.br/images/004/164/147/original/icone.png?1668556847" 
                        height="100" 
                        width="100">
                        <br/>PERFIL
                        <?php
                            if(isset($_POST["b1"])) perfil();
                        ?>
                    </button>
                </div>
            </div>
        </div>
        <!---->
        <!-- MENU -->
        <div class="container-fluid" 
            id="header2"
            align="center">
            <div class="row p-13">
                <div class ="col">
                    <button type="button" id="menu_btn"><p id="letra_maior">LANCHES</p></button>
                </div>
                <div class ="col">
                    <button type="button" id="menu_btn"><p id="letra_maior">BEBIDAS</p></button>
                </div>
                <div class ="col">
                    <button type="button" id="menu_btn"><p id="letra_maior">ACOMPANHAMENTOS</p></button>
                </div>
                <div class ="col">
                    <button type="button" id="menu_btn"><p id="letra_maior">SOBREMESAS</p></button>
                </div>
            </div>
        </div>

        <table id="cadastro"style="max-width:700px;margin:2rem auto;">
            <tr>
                <th>
                    <form id="frm1" class="login1" method="post" action="loginp2_.php">
                        <p>Ja tenho cadastro</p>
                        Email: <input name="email" type="email" id="email" class="barra_login" placeholder="Email"/><br/><br/>
                        Senha: <input name="senha" type="password" id="senha" class="barra_login" placeholder="Senha"/>
                        <p><a href="esquecisenhap2_.php" id="esqueci_link">Esqueci minha senha</a></p>
                        <p><button type="submit" id="botao_login" name="b1" value="Entrar" onclick="validar();" class="btn btn-primary" style="margin-top:1.5rem"/>
                            Login
                        </button></p>
                    </form>
                    <?php
                    if(isset($_POST["b1"])) pesquisarLogin();
                    ?> 
                </th>
                <th>
                    <form class="login2">
                        Ainda nao tenho cadastro
                        <p><button id="botao_login" type="button" onclick="cadastrar();" class="btn btn-primary" style="margin-top:1.5rem"/>
                            Cadastrar
                        </button></p>
                    </form>
                </th>
            </tr>
            <ul id="erros" class="erro"></ul>
        </table>
        <!---->
        <!-- RODAPE -->
        <div class="container-fluid px-0"
            id="footer1"
            align="center"
            style="position:fixed;left:0;right:0;bottom:0;">
            <div class="row">
                <div>
                    Site produzido por: Breno M, Raphael R, César K
                </div>    
            </div>
        </div>
        <!---->
    </body>
</html>
<?php
    function pesquisarLogin(){
        $conexao = new mysqli("localhost", "root", "", "pwebp2");
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "select codigo, nome from cliente where email like '%$email%' or senha like '%$senha%'";
        $ret = mysqli_query($conexao, $sql);
        if($reg = mysqli_fetch_array($ret)){
            echo "Bem-Vindo!<br/>";
        } else {
            echo "<h4>Registro não existe!</h4>";
        }
        mysqli_close($conexao);
    }

    function perfil(){
        $conexao = new mysqli("localhost", "root", "", "pwebp2");
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "select codigo, nome from cliente where email like '%$email%' or senha like '%$senha%'";
        $ret = mysqli_query($conexao, $sql);
        if($reg = mysqli_fetch_array($ret)){
            echo "</br>codigo: ". $reg["codigo"];
            echo "</br>nome: ". $reg["nome"];
        } else {
            echo "<h4>Registro não existe!</h4>";
        }
        mysqli_close($conexao);
    }
?>
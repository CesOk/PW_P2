<!DOCTYPE html>
<html>
    <head>
        <title>Projeto P1/P2 - Programação Web</title>
        <!--Bootstrap-->
        <link rel="stylesheet" href="vitrine_css.css" />
        <!---->
        <!--Javascript-->
        <script lang="javascript" src="cadastro_.js"></script>
        <!---->
        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <!---->
    </head>
    <body>
        <!-- LOGO, BUSCA, LOGIN -->
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
                        <br/>LOGIN
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
        <!---->
        <!-- CADASTR0-->
        
        
        <br>
        <form method="post" action="cadastro_.php">
            <div class="container-fluid" 
                id="result_busca"
                align="center"
                style="padding:4rem">
                <ul id="erros" class="erro"
                align="center"></ul>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nome:</span>
                    <input name="nome" id="nome" type="name" class="form-control" placeholder="Digite seu nome" aria-label="nome" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">E-mail:</span>
                    <input name="email" id="email" type="email" class="form-control" placeholder="Digite seu e-mail" aria-label="e-mail" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Senha:</span>
                    <input name="senha" id="senha" type="password" class="form-control" placeholder="Digite uma senha completa" aria-label="senha" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Confirmação de senha:</span>
                    <input name="confirma" id="confirma" type="password" class="form-control" placeholder="Digite a mesma senha do campo anterior" aria-label="senha_confirma" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">CPF:</span>
                    <input name="cpf" id="cpf" type="text" class="form-control" placeholder="Digite seu CPF no formato XXX.XXX.XXX-XX" aria-label="cpf" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Telefone:</span>
                    <input name="telefone" id="telefone" type="text" class="form-control" placeholder="Digite um telefone válido no formato XXXXX-XXXX ou XXXX-XXXX" aria-label="telefone" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">CEP:</span>
                    <input type="text" class="form-control" placeholder="Digite um CEP no formato XXXXX-XXX" aria-label="cep" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Rua e número:</span>
                    <input type="text" class="form-control" placeholder="Digite o nome da sua rua e número da sua residência" aria-label="rua" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Bairro:</span>
                    <input type="text" class="form-control" placeholder="Digite o nome do seu bairro" aria-label="bairro" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Cidade:</span>
                    <input type="text" class="form-control" placeholder="Digite o nome da sua cidade" aria-label="cidade" aria-describedby="basic-addon1">
                </div>
                <p><button type="button" name="b1" id="botao_cadastro" onclick="validar();" class="btn btn-primary" style="margin-top:1.5rem"/>
                    Verificar
                </button>
                <button type="submit" name="b2" id="botao_cadastro" class="btn btn-primary" style="margin-top:1.5rem"/>
                    Cadastrar
                </button>
                <button type="submit" name="b3" id="botao_cadastro" class="btn btn-primary" style="margin-top:1.5rem"/>
                    Alterar
                </button></p>
                <?php
                    if(isset($_POST["b2"])) inserir();
                    if(isset($_POST["b3"])) alterar();
                ?>    
            <br>
            </div>
        </form>
        
        
        <!---->
        <!-- RODAPE -->
        <div class="container-fluid px-0"
            id="footer1"
            align="center">
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
    function alterar(){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $cpf = $_POST["cpf"];
        $telefone = $_POST["telefone"];
        $conexao = new mysqli("localhost","root","", "pwebp2");
        $sql = "select * from cliente where email like '%$email%' or senha like '%$senha%'";
        $res = mysqli_query($conexao, $sql);
        if($reg = mysqli_fetch_array($res)){
            $codigo = $reg["codigo"];
            $sql = "update cliente set nome = '$nome', email = '$email', senha='$senha', cpf='$cpf', telefone = '$telefone' where codigo = '$codigo'";
            echo "Cadastro alterado com sucesso!";
        } else {
            echo "Cadastro não encontrado!";
        }
        mysqli_query($conexao, $sql);
        mysqli_close($conexao);
    }

    function inserir(){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $cpf = $_POST["cpf"];
        $telefone = $_POST["telefone"];
        $conexao = new mysqli("localhost","root","", "pwebp2");
        $sql = "insert into cliente(nome, email, senha, cpf, telefone) values('$nome', '$email', '$senha', '$cpf', '$telefone')";
        mysqli_query($conexao, $sql);
        mysqli_close($conexao);
        echo "Cadastro realizado com sucesso!";
    }
?>
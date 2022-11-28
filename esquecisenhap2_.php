<!DOCTYPE html>
<html>
    <head>
        <title>Projeto P1/P2 - Programação Web</title>
        <!--Bootstrap-->
        <link rel="stylesheet" href="vitrine_css.css" />
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
                    <input type="text" placeholder="Digite aqui o produto que deseja buscar" size="50"/>
                    <button type="button" id="busca_btn">BUSCAR</button>
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
        </div>
        <form name="frm1" class="esqueci_senha" method="post" action="esquecisenhap2_.php" style="max-width:700px;margin:2rem auto;">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <!-- <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div> -->
            <button name="b1" id="botao_login" type="submit" class="btn btn-primary" onclick="validar()" style="margin-top:1.5rem">Submit</button>
            </br>
            <?php
            if(isset($_POST["b1"])) enviar();   
            ?>
        </form>
        
        <ul id="erros" class="erro"></ul>
</div>
        <!---->
        <!-- RODAPE -->
        <div class="container-fluid px-0"
            id="footer1"
            align="center" style="position:fixed;left:0;right:0;bottom:0;">
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
    function enviar(){
        $conexao = new mysqli("localhost", "root", "", "pwebp2");
        $email = $_POST["email"];

        $sql = "select email from cliente where email like '%$email%'";
        $ret = mysqli_query($conexao, $sql);
        if($reg = mysqli_fetch_array($ret)){
            echo "</br>";
            echo "<h4>Senha enviada para o email: ". $reg["email"]."</h4>";
        } else {
            echo "</br>";
            echo "</br><h4>Registro não existe!</h4>";
        }
        mysqli_close($conexao);
    }
?>
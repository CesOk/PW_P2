<!DOCTYPE html>
<html>
    <head>
        <title>Projeto P1/P2 - Programação Web</title>
        <!--Bootstrap-->
        <link rel="stylesheet" href="vitrine_css.css" />
        <!---->
        <!--Javascript-->
        <script lang="javascript" src="descricao_.js"></script>
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
        <!-- DESCRICAO -->
        <br>
        <div class="container-fluid"
            align="center">
            <div class="row">
                <div class="col">
                    <div class="card-body">
                        <?php pesquisarDescricao(); ?> 
                    </div> 
                </div>
            </div>
        </div>    
        <br>
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
    function pesquisarDescricao(){
        $conexao = new mysqli("localhost", "root", "", "pwebp2");
        $codigo = $_GET["codigo"];

        $sql = "select nome_produto, descricao_produto, preco_produto, link_imagem from produtos where cod_produto='$codigo'";
        $ret = mysqli_query($conexao, $sql);
        if($reg = mysqli_fetch_array($ret)){
            echo "<div class='card bg-info' style='width:400px'>";
            echo "    <img class='card-img-top' src=". $reg["link_imagem"] ."alt='Card image'>";
            echo "    <h4 class='card-title'>". $reg["nome_produto"] ."</h4>";
            echo "    <p class='card-text'>". $reg["descricao_produto"] ."</p>";
            echo "    <p class='card-text'>". $reg["preco_produto"] ."</p>";
            echo "    <a class='btn btn-primary' id='btn_comprar' onclick='cesta($codigo)'>ADICIONAR AO CARRINHO</a>";
            echo "</div>";
        } else {
            echo "<h4>Registro não existe!</h4>";
        }
        mysqli_close($conexao);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Projeto P1/P2 - Programação Web</title>
        <!--Bootstrap-->
        <link rel="stylesheet" href="vitrine_css.css" />
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
                    <input type="text" id="busca" name="busca" placeholder="Digite aqui o produto que deseja buscar" size="50"/>
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
        <!-- RESULTADO DA BUSCA -->
        <div class="container-fluid" 
            id="cesta"
            align="center">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="col">Produto</th>
                        <th scope="col">Qtd.</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Valor Total</th>
                    </tr>
                    <?php
                        cesta();
                    ?>
                </tbody>
            </table>
        </div>
        <!---->
        <!-- RODAPE -->
        <div class="container-fluid px-0"
            id="footer1"
            align="center">
            <div class="row">
                <div>
                    Site produzido por: Breno M, Raphael R, César K.
                </div>    
            </div>
        </div>
        <!---->
    </body>
</html>
<?php
function cesta(){
    $conexao = new mysqli("localhost", "root", "", "pwebp2");
    $codigo = $_GET["codigo"];
    $sql = "select t2.nome_produto, t2.preco_produto from cesta t1 inner join produtos t2 on t1.cod_produto=t2.cod_produto where t1.session_id=2;";
    $resultado = mysqli_query($conexao, $sql);
    $total = 0;
    while($reg = mysqli_fetch_array($resultado)){
        $nome_produto = $reg["nome_produto"];
        $preco_produto = $reg["preco_produto"];
        $quantidade = 2;
        $total_por_produto = $quantidade * $preco_produto;
        $total = $total + $total_por_produto;
        echo "<tr>
            <td>$nome_produto</td>
            <td><input name='qtd' type='number' value='$quantidade'></td>
            <td>$preco_produto</td>
            <td>$total_por_produto<td>
            </tr>
            <tr>
            </tr>";              
    }
    echo
    "<tr>
    <td>Preço total é:</td>
    <td></td>
    <td></td>
    <td>$total</td>
    </tr>";
}
?>
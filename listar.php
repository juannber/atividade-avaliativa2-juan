<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos Cadastrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="container-fluid">
    
    <h1>Produtos Cadastrados</h1>

    <?php 
        require_once 'menu.php';
        require_once 'conexao.php';

        $conn = conectar_banco();

        $query = "SELECT * FROM produtos";

        $resultado = mysqli_query($conn, $query);

        if (!mysqli_num_rows($resultado) > 0) {
            exit ('<h3>Não há produtos cadastrados</h3>');
        }

        echo "<h3>Lista de Produtos Cadastrados</h3>";

        echo '<table class="table table-light table-bordered table-hover">';
        echo '<tr class="table-secondary">';
        echo "<th>ID #</th>";
        echo "<th>Nome</th>";
        echo "<th>Preço</th>";
        echo "<th>Quantidade</th>";
        echo "</tr>";
        
        while ($linha = mysqli_fetch_assoc($resultado)) {

            echo "<tr>";
            echo "<td> " . $linha['id']      . "</td>";
            echo "<td> " . $linha['nome']    . "</td>"; 
            echo "<td> " . $linha['preco']    . "</td>";
            echo "<td> " . $linha['quantidade']   . "</td>";
            echo "</tr>";

        }

        echo "</table>";

        mysqli_close($conn);

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
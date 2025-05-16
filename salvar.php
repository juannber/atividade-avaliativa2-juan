<?php require_once 'validacoes.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="container-fluid">
    
    <h1>Salvar</h1>

    <?php 
        require_once 'menu.php';

        form_nao_enviado("Por favor, retorne à home e preencha o cadastro");

        ha_campos_em_branco($_POST, "Por favor, preencha todos os campos de cadastro");

        require_once 'conexao.php';
        $nome  = $_POST['nome'];
        $preco  = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
    
        $conn = conectar_banco();

        $sql ="INSERT INTO produtos (nome, preco, quantidade)
               VALUES (?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);

        stmt_erros($stmt);

        $bind = mysqli_stmt_bind_param($stmt, "sdi", $nome, $preco, $quantidade);

        verificar_bind_stmt($bind);

        $exe = mysqli_stmt_execute($stmt);

        verificar_erro_execucao($exe, $stmt);

        echo '<h3>Produto cadastrado com sucesso!</h3>';

        mysqli_close($conn);
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</html>
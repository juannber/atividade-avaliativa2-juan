<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h1 class="text-center fw-bold">Cadastro de Produtos</h1>

        <?php require_once 'menu.php' ?>

        <div class="card shadow mt-4">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Insira os Dados do Produto</h2>

                <form action="salvar.php" method="post">
                    
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" name="nome" id="nome" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="preco" class="form-label">Preço:</label>
                        <input type="number" name="preco" id="preco" class="form-control" step="0.01" min="0">
                    </div>

                    <div class="mb-3">
                        <label for="quantidade" class="form-label">Quantidade em estoque:</label>
                        <input type="number" name="quantidade" id="quantidade" class="form-control" step="1" min="0">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary px-5">Cadastrar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>

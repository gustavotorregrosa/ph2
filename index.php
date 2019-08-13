<?php require_once('database.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="url" content="<?= $_SERVER['HTTP_HOST'] ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PH2 - CRUD</title>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">PH2</a>
        </nav>
    </header>

    <main style="margin-top: 3em;" class="container">

        <h4>Lista de produtos</h4>
        <button id="am-adiciona-produto" class="btn btn-success float-right">Adicionar</button>
        <br><br><br>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Produto</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $resultado = mysqli_query($plink, "select * from produto");
                $produtos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
                foreach ($produtos as $produto) {
                    ?>

                <tr data-id="<?= $produto['id'] ?>" data-nome="<?= $produto['nome'] ?>">
                    <td><?= $produto['nome'] ?></td>
                    <td>R$ <?= number_format($produto['preco'], 2, ',', ' ') ?></td>
                    <td>
                        <button type="button" class="btn btn-primary am-edita-produto">Editar</button>
                        &nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn btn-danger am-deleta-produto">Deletar</button>
                    </td>
                </tr>

                <?php } ?>
            </tbody>
        </table>




        <?php require('form_deleta_produto.php') ?>
        <?php require('form_atualiza_produto.php') ?>
        <?php require('form_cria_produto.php') ?>




    </main>



    <script src="assets/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/jquery.inputmask.js"></script>
    <script src="assets/notify.js"></script>
    <script src="assets/main.js"></script>
</body>

</html>
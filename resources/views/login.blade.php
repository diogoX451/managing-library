<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Gerenciamento de Biblioteca</h1>

        <nav class="nav justify-content-center mb-4">
            <a class="nav-link" href="/usuarios">Usuários</a>
            <a class="nav-link" href="/livros">Livros</a>
            <a class="nav-link" href="/emprestimos">Empréstimos</a>
        </nav>

        <div class="row">
            <div class="col-md-6">
                <h2>Cadastro de Usuários</h2>
                <form action="/usuarios" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Número de Cadastro</label>
                        <input type="text" class="form-control" name="cadastro" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>

            <div class="col-md-6">
                <h2>Cadastro de Livros</h2>
                <form action="/livros" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Autor</label>
                        <input type="text" class="form-control" name="autor" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Número de Registro</label>
                        <input type="text" class="form-control" name="registro" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gênero</label>
                        <select class="form-control" name="genero">
                            <option>Ficção</option>
                            <option>Romance</option>
                            <option>Fantasia</option>
                            <option>Aventura</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

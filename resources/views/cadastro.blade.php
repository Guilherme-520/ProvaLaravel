<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar pessoas</title>
</head>

<body>

    <center>
        <h1>Cadastro de pessoas</h1>

        {{ session() -> get('xyz')}}
        <form action="/inserir-pessoas" method="post">
            @csrf
            <label for="txtNome">Nome:</label>
            <input type="text" name="nome" id="txtnome">
            <br><br>
            <label for="txtidade">Idade: </label>
            <input type="text" name="idade" id="txtIdade">
            <br><br>
            <button type="submit">Confirmar</button>
        </form>

        <br><br>
        <a href="/">Voltar</a>
    </center>
</body>

</html>
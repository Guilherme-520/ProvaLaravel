<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pessoa</title>
</head>

<body>
    <center>
        <h1>Pessoas:</h1>
        <p>ID pesquisado: <input type="text" name="id" value="{{$pessoa->id}}" disabled> </p>
        <hr>


        <form action="/editar-pessoa/{{$pessoa->id}}" method="post">
            @csrf
            <label for="lblNome">Nome: </label>
            <input type="text" name="nome" value="{{$pessoa->nome}}" >

            <br><br>

            <label for="lblIdade">Idade: </label>
            <input type="text" name="idade" value="{{$pessoa->idade}}" >

            <br><br>

            <button>Atualizar</button>
        </form>

        <br><br>
        
        <a href="/">Voltar ao início</a>
    </center>
</body>

</html>
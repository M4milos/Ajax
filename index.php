<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Ajax</title>
</head>
<body>
    <form id="form1">
        <label for="nome">Nome: </label><input type="text" name="nome" id="nome"><br>
        <label for="Estado">Estado: </label><input type="text" name="estado" id="estado"><br>
        <label for="Cidade">Cidade: </label><input type="text" name="cidade" id="cidade"><br>
        <input type="submit" form="form1" class="btn-sub" value="Enviar"/>
    </form>
    <table border="1px" id="resultado">
    </table>
	<script src="assets/js/jQuery/jquery-3.5.1.min.js"></script>
	<script src="assets/js/index.js"></script>
</body>
</html>
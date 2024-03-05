<?php
/*
    Data: 04/03/2024
    Nome: Daniele de Almeida Silva

8. Construa um sistema simples de login que solicite um nome de usuário e senha e
exiba uma mensagem de boas-vindas se as credenciais estiverem corretas.


*/
$usuario_correto = 'usuario';
$senha_correta = 'senha123';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario === $usuario_correto && $senha === $senha_correta) {
        echo "Bem-vindo, $usuario!";
    } else {
        echo "Nome de usuário ou senha incorretos!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="usuario">Usuário:</label><br>
        <input type="text" id="usuario" name="usuario" required><br><br>
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    echo "Obrigado, $nome! Sua mensagem foi enviada com sucesso.";
    header("refresh:5;url=index.php");
    exit;
} else {
    echo "Método de envio inválido.";
}
?>
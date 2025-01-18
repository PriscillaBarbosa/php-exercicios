<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    file_put_contents('tasks.txt', '');
    header('Location: index.php');
    exit();
} else {
    echo "Erro ao limpar a lista de tarefas. Tente novamente.";
}
?>
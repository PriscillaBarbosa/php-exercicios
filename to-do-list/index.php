<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Lista de Tarefas</h1>
    <form action="add_task.php" method="post">
        <input type="text" name="task" placeholder="Nova tarefa" required>
        <input type="submit" value="Adicionar">
    </form>
    <form action="clear_tasks.php" method="post" style="margin-top: 10px;">
    <input type="submit" value="Limpar Lista">
    </form>
    <ol>
    <?php
$tasks = file('tasks.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
if ($tasks === false) {
    echo "<li>Erro ao ler o arquivo de tarefas.</li>";
} else {
    foreach ($tasks as $task) {
        list($taskText, $completed) = explode('|', $task);
        $checked = $completed === '1' ? 'checked' : '';
        echo "<li><input type='checkbox' onchange='markCompleted(this)' $checked> " . htmlspecialchars($taskText) . "</li>"; 
    }
} 
?>
    </ol>
    <script> function markCompleted(checkbox) { 
        const taskText = checkbox.parentElement.textContent.trim(); 
        const completed = checkbox.checked ? '1' : '0'; 
        const xhr = new XMLHttpRequest(); 
        xhr.open('POST', 'update_task.php', true); 
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); 
        xhr.send('task=' + encodeURIComponent(taskText) + '&completed=' + completed); 
    } 
</body>
</html>

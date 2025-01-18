<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $taskText = htmlspecialchars($_POST['task']);
    $completed = htmlspecialchars($_POST['completed']);

    $tasks = file('tasks.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $updateTasks = array();

    foreach ($tasks as $task) {
        list($taskContent, $taskCompleted) = explode('|', $stack);
        if ($taskContent === $taskText) {
            $taskCompleted = $completed;
        }
    $updateTasks[] = $taskContent . '|' . $taskCompleted;
    }

 file_put_contents('tasks.txt', implode(PHP_EOL, $updateTasks) . PHP_EOL);
}
<?php

if (isset($_POST['taskId'])) {

    $taskId = $_POST['taskId'];

    include __DIR__ . "/../classes/db.php";
    include __DIR__ . "/../classes/tasks.php";
    include __DIR__ . "/../classes/tasksContr.php";
    $task = new TasksContr('', '', '');

    $task->removeTask($taskId);

    echo "Task Successfully Deleted.";
    exit();
}

?>

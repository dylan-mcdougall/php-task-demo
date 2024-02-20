<?php

if (isset($_POST["new-task-submit"])) {

    // Grab data
    $taskName = $_POST["new-task-name"];
    $description = $_POST["new-task-description"];
    $dateCreated = date('Y-m-d H:i:s');

    // Instantiate tasksContr
    include __DIR__ . "/../classes/db.php";
    include __DIR__ . "/../classes/tasks.php";
    include __DIR__ . "/../classes/tasksContr.php";
    $task = new TasksContr($taskName, $description, $dateCreated);

    // Error handling
    $task->createTask();

    echo 'Task Successfully Deleted.';
    exit();
}

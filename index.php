<?php
   spl_autoload_register('AutoLoader');

   function AutoLoader($className) {
    $path = "classes/";
    $ext = ".php";
    $fullPath = $path . $className . $ext;

    include_once $fullPath;
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Task Manager</title>
</head>
<body>
    <div class='page-wrapper'>
        <div class='page-flex'>
            <div class='header-wrapper'>
                <h1>AWSome PHProject</h1>
            </div>
            <div class='all-tasks-wrapper'>

            </div>
            <div class='task-form-wrapper'>
                <form action="">
                    <label for="new-task-name">
                        <input type="text" name="task-name" id="new-task-name">
                    </label>
                    <label for="new-task-description">
                        <input type="text" name="description" id="new-task-description">
                    </label>
                </form>
            </div>
        </div>
    </div>

    <?php
    $object = new TasksView();
    $object->showAllTasks();
    ?>
</body>
</html>

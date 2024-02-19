<?php
    include_once "classes/db.php"
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
            <div class='interface'>
                <button class='add-task'>Add Task</button>
            </div>
            <div class='primary-body'>

            </div>
        </div>
    </div>

    <?php
    $object = new TasksView();
    $object->showTask();
    ?>
</body>
</html>

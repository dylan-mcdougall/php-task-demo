<?php
   spl_autoload_register('AutoLoader');

   function AutoLoader($className) {
    $path = "classes/";
    $ext = ".php";
    $fullPath = $path . $className . $ext;

    if (file_exists($fullPath)) {
        include_once $fullPath;
    }
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

            <!--- Core wrapper --->

            <div class='primary'>
            <?php
            $object = new TasksView();
            $tasks = $object->showAllTasks();
            ?>

            <!--- Logic for empty tasks --->

            <?php
            if (empty($tasks)) { ?>
                <div class='task-item'>
                    <div class='no-content'>
                        <p>Please add Tasks to begin</p>
                    </div>
                </div>
            <?php } ?>

            <!--- Show all tasks --->

            <div class='all-tasks-wrapper'>
                <?php foreach ($tasks as $task) { ?>
                    <div class='task-item'>
                        <div class='content'>
                            <div class='content-top'>
                                <h5><?php echo $task['taskName']; ?></h5>
                                <p><?php echo $task['dateCreated'] ?></p>

                                <!--- Delete a Task--->

                                <button type='submit' name='remove-task' onclick="handleDelete(<?php echo $task['id']; ?>)" id=<?php echo $task['id'] ?> > x </button>

                            </div>
                            <div class='content-description'>
                                <p><?php echo $task['description'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <!--- Add a task --->

            <div class='task-form-wrapper'>
                <form action="scripts/addTask.php" method='POST'>
                    <label for="new-task-name">
                        <input type="text" name="new-task-name" id="new-task-name">
                    </label>
                    <label for="new-task-description">
                        <input type="text" name="new-task-description" id="new-task-description">
                    </label>
                    <button type='submit' name='new-task-submit'>Submit</button>
                </form>
            </div>

            </div>
        </div>
    </div>

    <script>
        function handleDelete(taskId) {
            if (confirm("Are you sure you want to delete this task?")) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        window.location.reload(true)
                    }
                };

                xhr.open("POST", "scripts/deleteTask.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.send("taskId=" + taskId);
            }
        }
    </script>

</body>
</html>

<?php

    class TasksView extends Tasks {
        public function showAllTasks() {
            $tasks = $this->getAllTasks();

            foreach ($tasks as $task) {
                $taskName = $task['taskName'] ?? '';
                $dateCreated = $task['dateCreated'] ?? '';
                $description = $task['description'] ?? '';
                echo "{$taskName} {$dateCreated} <br> {$description}<br>";
            }
        }

        public function showTask($taskName) {
            $res = $this->getTask($taskName);
            echo "{$res['taskName']}";
        }
    }

?>

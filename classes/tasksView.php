<?php

    class TasksView extends Tasks {
        public function showAllTasks() {
            $tasks = $this->getAllTasks();
            return $tasks;
        }

        public function showTask($taskName) {
            $res = $this->getTask($taskName);
            echo "{$res['taskName']}";
        }
    }

?>

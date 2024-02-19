<?php

    class TasksView extends Tasks {
        public function showTasks($taskName) {
            $res = $this->getTask($taskName);
            echo "{$res['tasks_taskName]}"
        }
    }

?>

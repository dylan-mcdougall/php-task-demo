<?php

    class TasksContr extends Tasks {
        public function createTask($taskName, $description, $dateCreated) {
            $this->setTask($taskName, $description, $dateCreated);
        }

        public function removeTask($id) {
            $this->deleteTask($id);
        }
    }

?>

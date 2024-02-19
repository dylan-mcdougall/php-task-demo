<?php

    class TasksContr extends Tasks {
        private $taskName;
        private $description;
        private $dateCreated;

        public function __construct($taskName, $description, $dateCreated) {
            $this->taskName = $taskName;
            $this->description = $description;
            $this->dateCreated = $dateCreated;
        }

        private function emptyInput() {
            $res;
            if (empty($this->taskName) || empty($this->description)) {
                $res = false;
            } else {
                $res = true;
            }
            return $res;
        }

        public function createTask() {
            if ($this->emptyInput() == true) {
                $this->setTask($this->taskName, $this->description, $this->dateCreated);
            } else {
                header("location: ../index.php?error=emptyinput");
                exit();
            }
        }

        public function removeTask($id) {
            $this->deleteTask($id);
        }
    }

?>

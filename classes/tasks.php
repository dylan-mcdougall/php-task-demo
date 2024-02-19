<?php

    class Tasks extends Db {
        protected function getTask($taskName) {
            $sql = "SELECT * FROM tasks WHERE tasks_taskName = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$taskName]);

            $res = $stmt->fetchAll();

            return $res;
        }

        protected function setTask($taskName, $description, $dateCreated) {
            $sql = "INSERT INTO tasks(tasks_taskName, tasks_description, tasks_dateCreated) VALUES (?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$taskName, $description, $dateCreated]);
        }

        // protected function updateTask($id, $taskName, $description, $dateCreated) {
        //     $sql = "UPDATE"
        // }

        protected function deleteTask($id) {
            $sql = "DELETE FROM tasks WHERE tasks_id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
        }
    }

?>

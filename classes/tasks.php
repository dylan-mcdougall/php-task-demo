<?php

    class Tasks extends Db {
        protected function getAllTasks() {
            $sql = "SELECT * FROM tasks";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();

            $res = $stmt->fetchAll();

            return $res;
        }

        protected function getTask($taskName) {
            $sql = "SELECT * FROM tasks WHERE taskName = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$taskName]);

            $res = $stmt->fetchAll();

            return $res;
        }

        protected function setTask($taskName, $description, $dateCreated) {
            $sql = "INSERT INTO tasks(taskName, description, dateCreated) VALUES (?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);

            if (!$stmt->execute([$taskName, $description, $dateCreated])) {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            // create truthy condition to enable checking
        }

        // protected function updateTask($id, $taskName, $description, $dateCreated) {
        //     $sql = "UPDATE"
        // }

        protected function deleteTask($id) {
            $sql = "DELETE FROM tasks WHERE id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
        }
    }

?>

<?php
    require "../config/conn.php";

    if(isset($_POST['submit_form'])) {
        try {
            $new_task = $_POST['task_name'];
            $insert_task = $conn->prepare("INSERT INTO tasks (title) VALUES (:name)");
            $insert_task->execute([
                ':name' => $new_task
            ]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    $conn = null;
    header("Location: ../../public/index.php");
?>
<?php
    require "../config/conn.php";

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $delete_task = $conn->prepare("DELETE FROM tasks WHERE id = :id");
        $delete_task->execute([
            ':id' => $id
        ]);
    }
    $conn = null;
    header("Location: ../../public/index.php");
?>
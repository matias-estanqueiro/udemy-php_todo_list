<?php
    require "../config/conn.php";
    
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        try {
            $data = $conn->prepare("SELECT * FROM tasks WHERE id = :id");
            $data->execute([
                ':id' => $id
            ]);
            $row = $data->fetch();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    if(isset($_POST['submit_form'])) {
        try {
            $task_title = $_POST['task_name'];
            $update_task = $conn->prepare("UPDATE tasks SET title = :name WHERE id = :id");
            $update_task->execute([
                ':name' => $task_title,
                ':id' => $id
            ]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $conn = null;
        header("Location: ../../public/index.php");
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List - Update Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/style.css">
</head>
<body>
    <h1 class="text-center my-3">ToDo List</h1>
    <div class="container-sm">
        <form action="update.php?id=<?php echo $row['id']; ?>" method="post">
            <div class="form-floating mb-3 text-center">
                <input type="text" class="form-control" name="task_name" id="task_name" value="<?php echo $row['title']; ?>">
                <label for="floatingInput">Task Name</label>
                <button class="btn btn-success mt-3 col-12 col-sm-6 col-lg-4" type="submit" name="submit_form" id="submit_form">Update Task</button>
            </div>
        </form>
    </div>
</body>
</html>

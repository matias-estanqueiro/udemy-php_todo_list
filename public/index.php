<?php
    require "../src/config/conn.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List - Add Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="text-center my-3">ToDo List</h1>
    <div class="container-sm">
        <form action="../src/controllers/insert.php" method="post">
            <div class="form-floating mb-3 text-center">
                <input type="text" class="form-control" name="task_name" id="task_name" placeholder="">
                <label for="floatingInput">Task Name</label>
                <button class="btn btn-primary mt-3 col-12 col-sm-6 col-lg-4" type="submit" name="submit_form" id="submit_form">Add Task</button>
            </div>
        </form>
        <hr>
        <div class="container-sm">
            <div class="row">
                <div class="col-2">
                    <span>#</span>
                </div>
                <div class="col">
                    <span>Task Name</span>
                </div>
            </div>
       
        <?php 
            $data = $conn->query("SELECT * FROM tasks");
            while($row = $data->fetch()) {
                echo "<hr><div class='row'>
                <div class='col-2'>
                    <span>{$row['id']}</span>
                </div>
                <div class='col'>
                    <span>{$row['title']}</span>
                </div>
                <div class='container-sm mt-2 text-center'>
                    <a href='../src/controllers/delete.php?id={$row['id']}' class='btn btn-danger col-5 col-sm-3 col-lg-4'>Delete</a>
                    <a href='../src/controllers/update.php?id={$row['id']}' class='btn btn-success col-5 col-sm-3 col-lg-4'>Update</a>
                </div>
                </div>";
            };
        ?>
        </div>
        <hr>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
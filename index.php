<?php
include("db.php"); //requiere la conexión 
?>

<?php include("includes/header.php") ?>


<div class="contariner p-4">

    <div class="row">

        <div class="col-md-4">

            <?php if (isset($_SESSION['message'])) { ?>

                <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            <?php session_unset();
            }
            ?>

            <div class="card card-body">
                <h3 class="text-center mb-3">Add Task</h3>
                <form action="save_task.php" method="POST">
                    <div class="form-group mb-2">
                        <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
                    </div>
                    <div class="form-group mb-3">
                        <textarea name="description" rows="2" class="form-control" placeholder="Task description"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success w-100" name="save_task" value="Save Task">
                </form>
            </div>


        </div>



        <div class="col-md-8">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tittle</th>
                        <th>Description</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $query = "SELECT * FROM task";
                    $resul_tasks = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($resul_tasks)) { ?>

                        <tr>
                            <td> <?php echo $row['title'] ?></td>
                            <td> <?php echo $row['description'] ?></td>
                            <td> <?php echo $row['created_at'] ?></td>
                            <td>
                                
                                <a href="edit.php?id=<?php echo $row['id'] //le pasa una consulta con un id ?>">
                                    <i class="fa-solid fa-pen-to-square fa-lg" style="color: #2d6cbe;"></i>
                                </a>

                                &nbsp;

                                <a href="delete_task.php?id=<?php echo $row['id'] //le pasa una consulta con un id ?>">
                                    <i class="fa-solid fa-trash fa-lg " style="color: #2d6cbe;"></i>
                                </a>

                                </a>
                            </td>
                        </tr>




                    <?php
                    }

                    ?>



                </tbody>
            </table>


        </div>

    </div>
</div>
<?php include("includes/footer.php") ?>
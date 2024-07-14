<?php
include("db.php"); //requiere la conexión 
?>

<?php include("includes/header.php") ?>


<div class="contariner p-4">

    <div class="row">

        <div class="col-md-4">


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

        </div>

    </div>
</div>
<?php include("includes/footer.php") ?>
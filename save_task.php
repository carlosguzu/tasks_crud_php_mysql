<?php 

include("db.php"); //me traigo la variable conn 

if(isset($_POST['save_task'])){
    $title = $_POST['title'];  // se reciben a través del método POST con ese nombre, lo que recibe a través del método POST, a través de title, es el title
    $description = $_POST['description'];

    //verificar que no estén vacios:
    if(empty($title) || empty($description || !$result)){
        $_SESSION['message'] = 'Empty fields';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php"); //se redirige a index.php
    }
    else{
        $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')"; //se inserta en la tabla task, los valores de title y description    
        $result = mysqli_query($conn, $query);//se ejecuta la consulta
        
        $_SESSION['message'] = 'Task saved successfully';
        $_SESSION['message_type'] = 'success';
        header("Location: index.php"); //se redirige a index.php
    }

    }



?>
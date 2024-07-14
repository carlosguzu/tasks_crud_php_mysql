<?php 

include("db.php"); //me traigo la variable conn 

if(isset($_POST['save_task'])){
    $title = $_POST['title'];  // se reciben a través del método POST con ese nombre, lo que recibe a través del método POST, a través de title, es el title
    $description = $_POST['description'];

    $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')"; //se inserta en la tabla task, los valores de title y description    
    $result = mysqli_query($conn, $query);//se ejecuta la consulta
    }

    if(!$result){
        die("Query Failed");
    }
    else{
        echo "Saved";
    }
?>
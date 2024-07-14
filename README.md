# Nombre del Proyecto

CRUD usando PHP y MySQL: Cree tareas, léelas, guárdelas, edítelas y bórrelas  

## Una vez dentro

Una vez que haya clonado el repositorio y esté dentro del directorio del proyecto, el siguiente paso es configurar la base de datos. Para ello, siga estos pasos:

1. Encuentre el archivo `db.example.php` en el directorio del proyecto. Este archivo contiene la configuración necesaria para conectar tu aplicación PHP con la base de datos MySQL.

2. Abra el archivo de configuración con tu editor de texto o IDE favorito.

3. Renombre el archivo a db.php y modifique las siguientes líneas con sus credenciales de MySQL:

   ```php
   $host = "host"; // Por lo general es localhost
   $user = "usuario_de_mysql";
   $password = "contraseña";
   $db = "base_de_datos";

4. guarde los cambios.
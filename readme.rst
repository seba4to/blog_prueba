blog_prueba

Este es un blog creado para eclass por Alvaro Maurelia, el domingo 26/7/2017 (tiempo: aprox 4-5 horas) Está creado con el framework CodeIgniter El controlador principal se llama publicaciones Sus funciones principales son:

ver_publicaciones(argumento) ( si lo has instalado en localhost/prueba su ubicación es http://localhost/blog_prueba/index.php/publicaciones/ver_publicaciones ) Esta función muestra una lista de las publicaciones existentes en orden inverso a su última actualización, si hay más de 5 publicaciones las pagina en la parte inferior, al hacer click en "leer más" muestra más texto Su argumento es la paginación (por defecto 1)

ver_publicacion(argumento) Permite leer la publicación de su argumento

login Se ingresa haciendo click en el botón ingresar, si las credenciales son correctas se crean las variables de session correspondientes El menú cambia si existen variables de session El usuario por defecto es admin password admin

logout Se ingresa haciendo click en el botón salir (cuando se está logeado) Esta función destruye las variables de session

crear_publicacion ( http://localhost/blog_prueba/index.php/publicaciones/crear_publicacion ) Solo se puede ingresar en esta función si te encuentras logeado, caso contrario te redirigirá a ver_publicaciones Esta función te muestra una vista con un formulario simple, el cual te permitirá crear una publicación nueva

El proyecto ha sido creado dentro del poco tiempo libre que tiene el autor, por lo cual es posible que tenga algunos problemas, estos son fáciles de solucionar si se cuenta con un poco más de tiempo

Para cargar los datos de prueba en la base de datos se adjunta un archivo .sql Por defecto se ha utilizado una base de datos simples con user:root y sin password Si se desea cambiar las credenciales de la BD es necesario ingresar a aplication/config/database.php y editar los campos de $db['default'] con los de tu base de datos custom

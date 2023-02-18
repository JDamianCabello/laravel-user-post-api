# Laravel User Post API
#### Parte 1:
La prueba consiste en recuperar los datos desde la siguiente API para obtener la lista de post, pero sólo de los 50 primeros resultados. https://jsonplaceholder.typicode.com/posts
El repositorio incluye las migraciones para los post y base de datos SQLite. Insertaremos estos post junto con la valoración de cada uno, en función del número de palabras que contenga cada post:

• Cada palabra encontrada en el título cuenta dos.

• Cada palabra encontrada en el cuerpo cuenta uno.

Respetaremos tanto el ID del post como el ID del usuario que vienen desde la API. En caso de que haya un post duplicado en la base de datos (o lo volvemos a lanzar), entonces actualizaremos tan sólo el campo ‘body’ de la base de datos.
Posteriormente, daremos de alta en la base de datos a los usuarios que hayan escrito un post en estos primeros 50 post (excluyendo el resto), recuperando sus datos a través de esta API:
https://jsonplaceholder.typicode.com/users

Los campos que queremos guardar de los usuarios son: id, nombre, email y ciudad.
En caso de ya existir un usuario en la base de datos, no haremos ninguna actualización sobre dicho usuario.
#### Parte 2:
Una vez tenemos los datos almacenados, crearemos una API a partir de los datos de la base de datos, devolviendo un JSON en cada una de las siguientes rutas API:

• users: devolverá el id, nombre, email y ciudad del usuario junto a cada uno de sus post con su información (id, user_id, body, title), ordenando los usuarios por la media de valoración de posts de cada usuario.

• posts/top: devolverá el mejor post de cada usuario de la base de datos en función de la puntuación que hemos almacenado anteriormente (id, body, title, rating) junto con el nombre e id del usuario

• posts/{id}: devolverá la información del post que le pasemos por parámetro (id, body, title) junto con el nombre de usuario, o un 404 si no existe

**NOTA:** Si la api no devuelve datos usar el comando: **php artisan database:seed**
## Qué es Laravel

Laravel es un framework de código abierto para desarrollar aplicaciones y servicios web con PHP 5, PHP 7 y PHP 8. Su filosofía es desarrollar código PHP de forma elegante y simple, evitando el "código espagueti". Fue creado en 2011 y tiene una gran influencia de frameworks como Ruby on Rails, Sinatra y ASP .NET MVC.​

## Instalar el proyecto
Para instalar el proyecto es necesario clonar el repositorio si tienes git instalado (esto es opcional, puedes descargarlo [aquí](https://git-scm.com/downloads)) en el pc o puedes descargar el .zip desde [aquí](https://github.com/JDamianCabello/laravel-user-post-api/archive/refs/heads/master.zip).

El comando para clonar el repositorio (en caso de no descargar el .zip) desde la consola es:

    git clone https://github.com/JDamianCabello/laravel-user-post-api.git

De una forma u otra tendrás una carpeta llamada **laravel-user-post-api**

Para ejecutar los comandos de PHP, necesitas tener PHP instalado, según tu plataforma puedes seguir un tutorial u otro:


|[Windows](https://code.tutsplus.com/es/tutorials/how-to-install-php-on-windows--cms-35435)|[Linux](https://www.scriptcase.net/docs/es_es/v9/manual/02-scriptcase-installation/06-linux_php/)|[Mac](https://www.neoguias.com/instalar-php-macos/)|
|--|--|--|

Una vez instalado PHP, necesitamos instalar composer, esto se puede hacer [desde su web](https://getcomposer.org/doc/00-intro.md). Donde también encontraremos información de uso e instalación.

Con todo listo entramos dentro de la carpeta, abrimos un terminal/cmd y usamos el comando de composer para instalar las dependencias:

    composer install

Se instalaran todas las dependencias necesarias para ejecutar la api. Una vez acabada la instalación usaremos el comando de laravel para ejecutar el servidor local:

    php artisan serve

Con esto tendremos el servidor en local para probar la galería en la url [127.0.0.1:8000](http://127.0.0.1:8000)

## FAQ

- Para setear los datos en la base de datos deberemos usar el comando **php artisan database:seed**

- Si tienes problemas con la base de datos, dentro del proyecto vamos a la carpeta `storage/database`, dentro de la misma encontraremos un fichero llamado `database.sqlite`.

  Eliminamos el fichero y creamos un nuevo fichero llamado igual **database.sqlite** y ejecutamos en el terminal/cmd el comando que nos crea la estructura de tablas en la base de datos el cual es: **`php artisan migrate`**.

